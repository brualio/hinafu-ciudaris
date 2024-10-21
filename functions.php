<?php

// ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'    => 'Configuración General',
		'menu_title'    => 'Configuraciones',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false,
		'position'      => '2.1',
		'icon_url'      => 'dashicons-admin-settings',
	));
}
//

// LANGUAGES TEXT DOMAIN
// Theme
load_theme_textdomain('ciudaris', get_template_directory() . '/languages');
// Theme Child
// load_child_theme_textdomain( 'ciudaris' , get_stylesheet_directory() . '/languages' );
// 

// SUPPORT THEME
// Support Post Thumbnail
add_theme_support( 'post-thumbnails' );
// Support Tiles
add_theme_support( 'title-tag' );
// 

// REMOVE ACTION
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
// 

// DISABLE EMOJIS
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}
	return $urls;
}
// 

// DISABLE EMBEDS
function disable_embeds_code_init() {
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	add_filter( 'embed_oembed_discover', '__return_false' );
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );
	add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
	remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}
add_action( 'init', 'disable_embeds_code_init', 9999 );

function disable_embeds_tiny_mce_plugin($plugins) {
	return array_diff($plugins, array('wpembed'));
}

function disable_embeds_rewrites($rules) {
	foreach($rules as $rule => $rewrite) {
	if(false !== strpos($rewrite, 'embed=true')) {
		unset($rules[$rule]);
	}
	}
	return $rules;
}
//

// IMAGE SIZES
add_image_size( 'thumbnail-size', '1024', '450', array( "1", "") );
// 

// SUPPORT SVG IMAGE
// Permitir subida de SVG
function support_svg($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'support_svg');

// 
function sanitize_svg($file, $filename, $mimes) {
	if (isset($file['type']) && $file['type'] === 'image/svg+xml') {
			// Permitir sólo si es un archivo SVG válido
			$file_content = file_get_contents($file['tmp_name']);
			if (stripos($file_content, '<svg') === false) {
					// No es un SVG válido
					$file['error'] = 'El archivo subido no parece ser un archivo SVG válido.';
			}
	}
	return $file;
}
add_filter('wp_check_filetype_and_ext', 'sanitize_svg', 10, 3);


// DECLARE SCRIPTS
add_action( 'wp_enqueue_scripts', 'sd__custom__style__script' );
function sd__custom__style__script(){

	// Enqueue Flatpickr styles
	wp_enqueue_style('flatpickr-styles', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css', array(), null);

	// Enqueue Flatpickr script asynchronously
	wp_enqueue_script('flatpickr-script', 'https://cdn.jsdelivr.net/npm/flatpickr', array(), null, true);

	wp_enqueue_script('mi_script', 'https://code.jquery.com/jquery-3.6.0.min.js', array('jquery'), '3.6.0', true);

	// main js
	wp_register_script( 'main-js', get_stylesheet_directory_uri() . '/public/assets/js/main.min.js');
	wp_enqueue_script('main-js');
}

// 


//ADD BODY CLASS PAGE SLUG
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
// 


// REGISTER MENUS
register_nav_menus(array(
	'header'           => __('Menu Header', ''),
	'header-sidebar-top'   => __('Menu Sidebar Top', ''),
	'header-sidebar'   => __('Menu Sidebar', ''),
	'footer-1'           => __('Menu Footer 1', ''),
	'footer-2'           => __('Menu Footer 2', ''),
	'footer-3'           => __('Menu Footer 3', ''),
	'footer-4'           => __('Menu Footer 4', ''),
	'service-menu'           => __('Menu Service', ''),
));
// 


// DISABLE GUTEMBERG
add_filter('use_block_editor_for_post', '__return_false', 10);
//

// CHANGE QUOTATION DEFAULT
add_filter( 'run_wptexturize', '__return_false' );

// REMOVE MENUS ADMIN PANEL
// function remove_menus(){
// 	remove_menu_page( 'edit-comments.php' );
// }
// add_action( 'admin_menu', 'remove_menus' );
//


function hide_editor_by_template() {
	global $pagenow;
	if ($pagenow != 'post.php') {
			return;
	}
	$post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : false);
	
	if (!$post_id) {
			return;
	}
	$template = get_post_meta($post_id, '_wp_page_template', true);

	if ($template == 'templates/theme-legal-information.php' || $template == 'templates/theme-messagesent.php' || $template == 'templates/theme-complaints-book.php' || $template == 'templates/theme-blog.php' || $template == 'templates/theme-referrals.php'|| $template == 'templates/theme-contact.php' || $template == 'templates/theme-work-withus.php' || $template == 'templates/theme-events.php' || $template == 'templates/theme-aboutus.php' || $template == 'templates/theme-customerservice-consult.php' || $template == 'templates/theme-customservice-faq.php' || $template == 'templates/theme-customservice-userguide.php' || $template == 'templates/theme-home.php' || $template == 'templates/theme-projects-forsale.php' || $template == 'templates/theme-quote.php') {
			remove_post_type_support('page', 'editor');
			remove_post_type_support('page', 'thumbnail');
	}
}

add_action('admin_init', 'hide_editor_by_template');


// HIDE ADMIN BAR ONLY ADMIN ROLE
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
	show_admin_bar(false);
}
}
 
// FUNCTIONS
require_once(get_stylesheet_directory() .'/functions/functions.php');
// 


// SHORTCODES
require_once(get_stylesheet_directory() .'/functions/shortcodes.php');
//

// CPT
require_once(get_stylesheet_directory() .'/includes/cpt/project.php');
require_once(get_stylesheet_directory() .'/includes/cpt/legal.php');
require_once(get_stylesheet_directory() .'/includes/cpt/employment.php');
require_once(get_stylesheet_directory() .'/includes/cpt/asesor.php');
//

// AJAX
require_once(get_stylesheet_directory() .'/functions/ajax/ajax.php');
//

//CF7
add_filter('wpcf7_autop_or_not', '__return_false');

function project_cf7 ( $tag, $unused ) {
	if ( $tag['name'] != 'project_select' ){
		return $tag;
	}
	$project_select__ = get_posts(array(
		'post_type' => 'proyecto',
		'post_status' => 'publish',
		'posts_per_page' => -1
	));

	foreach ( $project_select__ as $project_cpt ) {
		
		$tag['raw_values'][] = $project_cpt->post_title;
		$tag['values'][] = $project_cpt->post_title;
		$tag['labels'][] = $project_cpt->post_title;
	}
	return $tag;
}
add_filter( 'wpcf7_form_tag', 'project_cf7', 10, 2);

function employe_cf7 ( $tag, $unused ) {
	if ( $tag['name'] != 'employe_select' ){
		return $tag;
	}
	$employe_select__ = get_posts(array(
		'post_type' => 'employment',
		'post_status' => 'publish',
		'posts_per_page' => -1
	));

	foreach ( $employe_select__ as $employe_cpt ) {
		
		$tag['raw_values'][] = $employe_cpt->post_title;
		$tag['values'][] = $employe_cpt->post_title;
		$tag['labels'][] = $employe_cpt->post_title;
	}
	return $tag;
}
add_filter( 'wpcf7_form_tag', 'employe_cf7', 10, 2);

function add_custom_cf7_script() { ?>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				let currentDate = new Date();
				var day = String(currentDate.getDate()).padStart(2, '0');
				var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
				var month = monthNames[currentDate.getMonth()]; 
				var year = currentDate.getFullYear();
				var formatDate = day + ' de ' + month + ', ' + year;
				let currentDateValue = document.getElementById('fecha_actual')
				if(currentDateValue){currentDateValue.value = formatDate;}
				
				var hours = String(currentDate.getHours()).padStart(2, '0');
        var minutes = String(currentDate.getMinutes()).padStart(2, '0');
        var formattedDate2 = 'día ' + day + '-' + String(currentDate.getMonth() + 1).padStart(2, '0') + '-' + year + ' a las ' + hours + ':' + minutes + ' hs';
				let currentDateHoursValue = document.getElementById('fecha_actual2')
				if(currentDateHoursValue){currentDateHoursValue.value = formattedDate2;}
        
			});
		</script>

			<?php }
add_action('wp_footer', 'add_custom_cf7_script');

function add_privacy_url($form) {
	$url_privacidad = get_site_url() . '/politica-privacidad';
	$form = str_replace('%%url_politica%%', esc_url($url_privacidad), $form);

	return $form;
}
add_filter('wpcf7_form_elements', 'add_privacy_url');


function obtener_codigo_reclamo() {
	$codigo_actual = get_option('cf7_codigo_reclamo', 1);
	$codigo_formateado = str_pad($codigo_actual, 7, '0', STR_PAD_LEFT);
	return $codigo_formateado;
}

function agregar_codigo_al_formulario($form_tag) {
	if ($form_tag['name'] === 'codigo_reclamo') {
			$codigo = obtener_codigo_reclamo();
			$form_tag['values'] = (array)$codigo;
	}
	return $form_tag;
}
add_filter('wpcf7_form_tag', 'agregar_codigo_al_formulario');
function add_codigo_script() { ?>
	<script>
			document.addEventListener('DOMContentLoaded', function() {
					var codigoGenerado = document.querySelector('input[name="codigo_reclamo"]').value;

					var codigoHtmlElement = document.getElementById('codigo_reclamo_html');
					if (codigoHtmlElement) {
							codigoHtmlElement.textContent = codigoGenerado;
					}
			});
	</script>
<?php }
add_action('wp_footer', 'add_codigo_script');

//post
function set_post_views($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
	}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
	}
}

function get_post_views($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0 View";
	}
	return $count.' Views';
}

function track_post_views($post_id) {
	if ( !is_single() ) return;
	if ( empty ( $post_id) ) {
			global $post;
			$post_id = $post->ID;
	}
	set_post_views($post_id);
}
add_action( 'wp_head', 'track_post_views');

require_once ( 'inc/functions.php' );
?>