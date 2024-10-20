<?php

// Faqs Ajax
add_action('wp_ajax_nopriv_ajax_faqs', 'ajax_faqs');
add_action('wp_ajax_ajax_faqs', 'ajax_faqs');
function ajax_faqs(){
	$current = $_POST['paged'];
	$per_page = 2;
	$arg = array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'order'          => 'DESC',
		'posts_per_page' => $per_page,
		'paged'          => $current,
	);
	if(isset($_POST['term'])):
		$arg['tax_query'] = array(
			array(
				'taxonomy' => 'catefory',
				'field' => 'term_id',
				'terms' => array($_POST['term'])
			)
		);
	endif;

	$query = new WP_Query( $arg );
	$return =  array();
	if ( $query->have_posts() ):        
		while ( $query->have_posts() ):
			$query->the_post();
			$html = '';
			$html .= '<article class="faqs-g__item">';
			$html .= '<span>'.get_the_title().'</span>';
			$html .= '</article>';
			array_push($return,$html);
		endwhile;
	endif;
	wp_reset_postdata(); 

	$status = true;
	$countNumber = (($current - 1) * $per_page ) + $query->post_count;
	if(isset($_POST['term'])):
		$count =  $countNumber .' de '. get_term( $_POST['term'], 'catefory' )->count;
		if( $countNumber >= get_term( $_POST['term'], 'catefory' )->count):
			$status = false;
		endif;
	else:
		$count =  $countNumber .' de '. wp_count_posts('post')->publish;
		if( $countNumber >= wp_count_posts('post')->publish):
			$status = false;
		endif;
	endif;

	wp_send_json(array('preguntas'=> $return ,'count' => $count, 'status' => $status));
	wp_die();
}

?>