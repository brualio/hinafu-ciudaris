<!-- ********* POST TYPE ******* -->

<!-- while basico -->
<?php 
if(have_posts()) : while(have_posts()) : the_post(); ?>

<?php the_content(); ?>
<?php the_post_thumbnail(); ?>
<?php the_title(); ?>

<?php 
endwhile; 
wp_reset_query();
endif;
?>

<!-- while args -->
<?php

	$args = array( 
	'post_type' => 'servicio', 
	'post_status' => 'publish',
	'posts_per_page' => -1,
	);

	$wp_query = new WP_Query($args); ?>
	<?php if($wp_query->have_posts()) : ?>
		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	<?php endif; ?>

<!-- imagenes post thumbnail image -->
<?php the_post_thumbnail(); ?>

<!-- imagenes post thumbnail background -->
<?php get_the_post_thumbnail_url(); ?>

<!-- get post thumbnail into var -->
<?php $featured_img_items = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<div class="image__background" style="background-image: url(' <?php echo  $featured_img_items ?>');"></div>



<!-- ********* TAXONOMY ******* -->

<!-- list categories -->
<?php  
$taxonomy     = 'categoria-producto';
$orderby      = 'ASC'; 
$show_count   = false;
$pad_counts   = false;
$hierarchical = true;
$title        = '';

$args = array(
    'taxonomy'     => $taxonomy,
    'orderby'      => $orderby,
    'show_count'   => $show_count,
    'pad_counts'   => $pad_counts,
    'hierarchical' => $hierarchical,
    'title_li'     => $title
);
?>

<ul>
    <?php wp_list_categories( $args ); ?>
</ul>

<?php $term = get_queried_object(); ?>
<?php the_sub_field('texto_listainfo_familia_producto', $term) ?>


<?php
echo '<option value="">' . sprintf( __( 'Elije el área a postular','concyssa' ), 1 ) .'</option>';
?>

<!-- list Taxonomy  -->
<?php
	$terms = get_terms("categoria-producto");
		$count = count($terms);
		if ( $count > 0 ){
		$i = 1;
		foreach ( $terms as $term ) { ?>
		<?php  $term_link = get_term_link( $term ); ?>
		<a href="<?php echo $term_link; ?>">
			<h2><?php echo $term->name; ?></h2>
			<h2><?php echo $term->slug; ?></h2>
			<p><?php echo $term->description ?></p>
			<!-- toolset term field -->
			<?php $image_cat = get_term_meta( $term->term_id, 'wpcf-imagen-categoria-producto', true ); ?> 
				<img src="<?php echo  $image_cat; ?>" alt="">
			<!-- acf field -->
			<img src="<?php the_field('image_field', $term) ?>" alt="">
		</a>
	<?php
		}
	}
?>
<!-- add current styles taxonomy list  -->
<script>
	let taxonomiesUrl = Array.from(document.querySelectorAll('.courses-nav a'))
	if(taxonomiesUrl){
		let taxfilter = taxonomiesUrl.filter(tax => {
			return tax.href == window.location.href
		})
		taxfilter.map(tax => tax.classList.add('current-cat'))
	}
</script>

<!-- toolset term field -->
<?php echo types_render_termmeta("imagen-categoria-producto", array("term_id" => $term->term_id, "output" => "raw") ); ?>

<!-- acf field -->
<?php
	$term__taxonomy2 = get_the_terms( $post->ID , 'categoria-propiedad' );
	$term__id__taxonomy = $term__taxonomy2[0]->term_id;
	$termID2 = $term__id__taxonomy
?>
<?php the_field('imagen_categoria_propiedad', $taxonomy . '_' . $termID2); ?>

<!-- show category selected -->
<!-- mode 1 -->
<?php $terms2 = wp_get_post_terms( $post->ID, 'categoria-producto',array('fields' => 'all') ); ?>
<span><?php echo $terms2[0]->name;  ?></span>

<!-- mode 2 -->
<?php $terms_sector = get_the_term_list( $post->ID, 'remate', '', ', ', '' ) ;?>
<?php if ($terms_sector): ?>
	<?php echo strip_tags($terms_sector); ?>
<?php endif ?>



<!-- ********* BASIC ******* -->

<!-- use template into pages -->
<?php get_template_part( 'templates/content', 'filter'); ?>

<!-- get url -->
<?php echo esc_url( home_url( '' ) ); ?>

<!-- get url 2-->
<?php echo get_template_directory_uri(); ?>

<!-- get date year-->
<?php echo date("Y"); ?>
<?php $newDate = date("m/d/Y", strtotime(get_field('fecha_ejemplo','options'))); ?>
<?php echo $newDate ?>

<!-- menu list -->
<?php wp_nav_menu( array(
'theme_location' => 'footer',
'menu_class' => 'footer__list',
'container' => '',
'container_class' => '',
));
?>

<!-- show shortcode -->
<?php echo do_shortcode('[social_media_list]'); ?>


<!-- ********* FORMULARIO ******* -->

<!-- echo shortcode -->
<?php echo do_shortcode('[contact-form-7 id="236" title="Contacto" html_class="use-floating-validation-tip"]'); ?>

<!-- post objet elige formulario-->
<?php $form_form_work = get_field('form_form_work'); ?>
<?php if( $form_form_work ): 
setup_postdata( $form_form_work ); 
$form_form_work_ID = $form_form_work->ID;
echo do_shortcode( '[contact-form-7 id="'.$form_form_work_ID.'" ]' ); 
wp_reset_postdata();
endif; ?>

<!-- use taxonomy into select cf7 -->
<?php 
function add_list_propiedad_ubicacion ( $tag, $unused ) {
    if ( $tag['name'] != 'tax_ubicacion' ){
        return $tag;
    }

$taxonomy = 'ubicacion';
$args = get_terms( $taxonomy );

foreach ( $args as & $arg ) {
    $tag['raw_values'][] = $arg->name;
    $tag['values'][] = $arg->name;
}
return $tag;
}
add_filter( 'wpcf7_form_tag', 'add_list_propiedad_ubicacion', 10, 2);
 ?>

<!-- use post type into select cf7 -->
<?php
function list__cpt__to__CF7 ( $tag, $unused ) {
	if ( $tag['name'] != 'list__cpt' ){
		return $tag;
	}
	$list__cpt__ = get_posts(array(
		'post_type' => 'proyecto',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC',
	));

	foreach ( $list__cpt__ as &$l__cpt ) {
		
		$tag['raw_values'][] = $l__cpt->post_title;
		$tag['values'][] = $l__cpt->post_title;
		$tag['labels'][] = $l__cpt->post_title;
	}
	return $tag;
}
add_filter( 'wpcf7_form_tag', 'list__cpt__to__CF7', 10, 2);

function sd__wpcf7__form__elements($html) { 
    $text = "Seleccionar"; 
    $html = str_replace('---', '' . $text . '', $html); return $html; 
} 
add_filter('wpcf7_form_elements', 'sd__wpcf7__form__elements');

?>

<!-- Redirection cf7  -->
<?php 
function add_this_script_footer(){ ?>
    <?php
    $currentlang = pll_current_language();
    if($currentlang=="en"): ?>
    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = '<?php  echo esc_url( home_url( '' ) ); ?>/message-sent';
        }, false );
    </script> 

    <?php 
    elseif($currentlang=="es"): ?>
    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = '<?php  echo esc_url( home_url( '' ) ); ?>/mensaje-enviado';
        }, false );
    </script> 
    
    <?php 
    endif; ?>

	
<?php 
}  
add_action('wp_footer', 'add_this_script_footer'); 
?>


<!-- ********* IDIOMAS ******* -->

<!-- constante -->
<?php _e('texto a traducir','staffdigital'); ?>



<!-- ********* Widget ******* -->

<!-- Create widget (example language)  -->
<?php

function tutsplus_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Footer Seccion #1', 'agesp' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'Primer Widget', 'agesp' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Seccion #2', 'agesp' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'Segundo Widget', 'agesp' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}

add_action( 'widgets_init', 'tutsplus_widgets_init' );

?>

<!-- <div class="main-header__language">
	<?php if ( is_active_sidebar( 'language' ) ) : ?>
		<?php dynamic_sidebar( 'language' ); ?>
	<?php endif; ?>
</div>
 -->

<!-- ********* CONFIGURACIONES ******* -->

<!-- Change image wp-login  -->
<?php 
function custom_login_logo() { ?>
	<style type="text/css">
		body.login #login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/admin/logo.png);
			margin-bottom: 20px;
			background-size: auto !important;
			width: auto !important;
			height: 84px;
			outline: none;
		}
		.login #login_error, .login .message{
				border-left: 4px solid #b0c41e !important;
		}
	</style>
<?php }

add_action( 'login_enqueue_scripts', 'custom_login_logo' );

?>



<!-- Google analytics -->
<?php if (get_field('google_analytics_id','options')): ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php the_field('google_analytics_id','options') ?>"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php the_field('google_analytics_id','options') ?>');
	</script>
<?php endif ?>


<!-- search -->
<?php $wp_query; 
$total_results = $wp_query->found_posts;
?>
<?php if ( have_posts() ) : ?>
	<div class="result__search__title">
		<h1><?php _e('Se encontraron','templaterandol'); ?> (<?php echo $total_results; ?>) <?php _e('resultados para','templaterandol'); ?>  '<?php echo get_search_query(); ?>'</h1>
	</div>
	<div class="block__news__items">
		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<?php get_template_part( 'templates/blog/content', 'post'); ?>
		<?php endwhile;
		wp_reset_query(); ?>
	</div>
	<div class="pagination__block--wp">
		<?php wp_pagenavi(); ?>
	</div>
<?php else: ?>
	<div class="result__search__title">
		<h1><?php _e('No se encontraron','templaterandol'); ?> (<?php echo $total_results; ?>) <?php _e('resultados para','templaterandol'); ?>  '<?php echo get_search_query(); ?>'</h1>
	</div>
<?php endif; ?>	



<!-- query args -->
<?php echo add_query_arg( 'vista', 'vista3' , the_permalink() ); ?>

<!-- get -->
<?php $varGetVista = $_GET['vista']; ?>
<?php if($varGetVista==='vista2' )  {?>
<?php } elseif ($varGetVista==='vista3') { ?>
<?php } ?>

<!-- Menu custom -->
<?php
	$menuName = 'terminos';
	$locations = get_nav_menu_locations();
	?>
	<?php if(isset($locations[$menuName])) :?>
	<?php
	$menuID = $locations[$menuName];
	$primaryNav = wp_get_nav_menu_items($menuID);
	?>
	<?php endif; ?>
	<?php if(isset($primaryNav)) :?>
	<ul class="swiper-wrapper">
		<?php foreach($primaryNav as $item) :?>
		<?php
		$link = $item->url;
		$title = $item->title;
		?>
		<li class="swiper-slide">
			<div class="general-link-all">
				<a class="general-link-all-text element--location" href="<?php echo $link; ?>">
					<?php echo $title; ?>
				</a>
			</div>
		</li>
		<?php endforeach; ?>
	<?php endif; ?>
	</ul>

<!-- show categorie parent 0 or 1 -->
	<?php $categories = get_the_terms(get_the_ID(), 'categoria-comercio') ?>
	<?php
	$term_name_parent_0 = '';
	$term_name_parent_1 = '';
	if ($categories && !is_wp_error($categories)) :
			foreach ($categories as $category) :
					if ($category->parent === 0) :
							$term_name_parent_0 = $category->name;
					elseif ($category->parent > 0) :
							$term_name_parent_1 = $category->name;
					endif;
			endforeach;
	endif;
	?>
	<?php if (!empty($term_name_parent_1)) : ?>
			<div class="item-commercial-categorie --uppercase"><?php echo esc_html($term_name_parent_1); ?></div>
	<?php elseif (!empty($term_name_parent_0)) : ?>
			<div class="item-commercial-categorie --uppercase"><?php echo esc_html($term_name_parent_0); ?></div>
	<?php endif; ?>
	

<!-- 
		const selectFieldSedes = document.querySelector('select[name="sedes"]')
    if (selectFieldSedes) {
		fetch(cf7ajax.ajax_url + '?action=get_sedes_options')
			.then(response => response.json())
			.then(options => {
					options.forEach(option => {
							const optionElement = document.createElement('option')
							optionElement.textContent = option
							selectFieldSedes.appendChild(optionElement)
					})
			})
    }

		function get_sedes_options() {
	$options = array();
	$query = new WP_Query(array(
			'post_type' => 'sedes',
			'posts_per_page' => -1,
	));

	if ($query->have_posts()) {
			while ($query->have_posts()) {
					$query->the_post();
						$options[] = get_the_title();
			}
	}
	wp_reset_postdata();

	echo json_encode($options);
	wp_die();
}
add_action('wp_ajax_get_sedes_options', 'get_sedes_options');
add_action('wp_ajax_nopriv_get_sedes_options', 'get_sedes_options');

function enqueue_ajax_script() {
	wp_enqueue_script('custom-ajax', get_template_directory_uri() . '/js/custom-ajax.js', array('jquery'), null, true);
	wp_localize_script('custom-ajax', 'cf7ajax', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_script');


-->