<?php

// FUNTION GET DATE
function the_date_custom_post() {
	$dateDay    = ''.get_the_date('j').'';
	$dateMonth  = ''.get_the_date('m').'';
	$dateYear   = ''.get_the_date('Y').'';
	return $dateDay .'.'. $dateMonth .'.' . $dateYear;
}

function the_date_custom_post_day_month() {
	$dateDay    = ''.get_the_date('j').'';
	$dateMonth  = ''.get_the_date('F').'';
	$dateYear   = ''.get_the_date('Y').'';
	return $dateDay .' de '. $dateMonth;
}

function the_date_custom_post_month_year() {
	$dateDay    = ''.get_the_date('j').'';
	$dateMonth  = ''.get_the_date('F').'';
	$dateYear   = ''.get_the_date('Y').'';
	return $dateMonth . ' ' . $dateYear;
}

function the_date_custom_post_day_month_year() {
	$dateDay    = ''.get_the_date('j').'';
	$dateMonth  = ''.get_the_date('F').'';
	$dateYear   = ''.get_the_date('Y').'';
	return $dateDay .' '. $dateMonth . ' ' . $dateYear;
}
//

// GET CONTENT EXCERPT
function get_extract($texto, $limit = 20) {
	$texto = trim(strip_tags($texto));
	$excerpt = explode(' ', $texto, $limit);
	if(count($excerpt) >= $limit){
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	}else{
		$excerpt = implode(" ",$excerpt).'';
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}
//

// CLEAR TELEPHONE
function clear_telephone($numero){
	$numero = str_replace('(', '', $numero);
	$numero = str_replace(')', '', $numero);
	$numero = str_replace('+', '', $numero);
	$numero = str_replace('-', '', $numero);
	$numero = str_replace(' ', '', $numero);
	return $numero;
}
//

// GET ID YOUTUBE
function get_youtubeid($url) {
	$parts = parse_url($url);
	if(isset($parts['query'])){
		parse_str($parts['query'], $qs);
		if(isset($qs['v'])){
			return $qs['v'];
		}else if(isset($qs['vi'])){
			return $qs['vi'];
		}
	}
	if(isset($parts['path'])){
		$path = explode('/', trim($parts['path'], '/'));
		return $path[count($path)-1];
	}
	return false;
}
// 

?>