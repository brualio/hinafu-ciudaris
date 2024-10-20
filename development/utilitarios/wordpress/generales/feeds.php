<?php
// Feed Youtube
function get_last_youtube_videos(){
$API_key    = get_field('token_youtube_g', 'options');
$channelID  = get_field('pagina_id_youtube_g', 'options');
$maxResults = 3;
$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
	foreach($videoList->items as $item){
		//Embed video
		if(isset($item->id->videoId)){
			echo '<a href="https://www.youtube.com/watch?v='.$item->id->videoId.'" style="background-image: url('. $item->snippet->thumbnails->default->url .')" class="home-social__youtubeItem">';
			echo '<img src="'. get_stylesheet_directory_uri() .'/public/assets/images/youtube.png" alt="'. $item->snippet->title .'">';
			echo '</a>';
		}
	}
}

// Feed Facebook
function get_last_post_from_fb() {
$page_ID =  get_field('pagina_id_facebook_g', 'options');
$access_token =  get_field('token_facebook_g', 'options');
$urlFacebook = 'https://graph.facebook.com/'. $page_ID .'/posts?fields=id,shares.summary(total_count),likes.summary(total_count),comments.summary(total_count),full_picture&limit=1&access_token='.$access_token;
$urlFacebookJson = json_decode(file_get_contents($urlFacebook));
if ( !( $urlFacebookJson && property_exists($urlFacebookJson,'data')) ){
	return;
}
	foreach($urlFacebookJson->data as $item){
		$id = $item->id;
		$likes = $item->likes->summary->total_count;
		$shares = $item->shares->count;
		$comments = $item->comments->summary->total_count;
		$imagethumb = $item->full_picture;
		echo '<a class="social__facebook__item list--none" href="https://www.facebook.com/'. $id .'" target="_blank">';
		echo '<div class="social__facebook__itemFigure" style="background-image: url('. $imagethumb .');"></div>';
		echo '<ul class="social__facebook__itemDetails">';
		echo '<li class="social__facebook__itemDetailLikes"><i class="icon-like"></i><span>'. $likes .'</span></li>';
		echo '<li class="social__facebook__itemDetailShare"><i class="icon-shares"></i><span>' . $shares . '</span></li>';
		echo '<li class="social__facebook__itemDetailComments"><i class="icon-comment"></i><span>'. $comments . '</span></li>';
		echo '</ul>';
		echo '</a>';
	}
}

?>