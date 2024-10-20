<?php get_search_form(); ?>

<br>
<div class="search-g">
	<form id="search-g--prueba" action="<?php echo get_permalink() ?>" method="GET" >
		<div class="input-g input-g--iconRight input-g--button">
			<label class="input-g__title colorBlack">Input con boton right</label>
			<div class="input-g__inside">
				<button type="submit" class="input-g__ico input-g__icoRight icon-facebook"></button>
				<input class="input-g__input" name="s" type="text" placeholder="ingrese codigo"/>
			</div>
		</div>
		<input type="hidden" name="post_type" value="post">
	</form>
</div>


<div class="search-g">
	<form id="search-g--prueba" action="<?php echo get_permalink() ?>" method="GET" >
		<div class="input-g input-g--iconRight input-g--button">
			<label class="input-g__title colorBlack">Input con boton right</label>
			<div class="input-g__inside">
				<button type="submit" class="input-g__ico input-g__icoRight icon-facebook"></button>
				<input class="input-g__input" name="codigo" type="text" placeholder="ingrese codigo"/>
			</div>
		</div>
	</form>
</div>



<?php   
$codigo_val ='';
$status_cod = false;
if( isset( $_GET['codigo'] ) && $_GET['codigo'] ) {
	$codigo_val = $_GET['codigo'];
	$status_cod = true;
}

$args = array( 
	'post_type' => 'prueba',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'meta_key' => 'id_prueba',
	'meta_value' => $codigo_val,
);
$wp_query = new WP_Query($args);
$total_results = $wp_query->found_posts; ?>
<?php if ( have_posts() ) : ?>
	<?php if($status_cod) :?>
        <h1><?php _e('Se encontraron','randol'); ?> (<?php echo $total_results; ?>) <?php _e('resultados para','randol'); ?>  '<?php echo $codigo_val ?>'</h1>
	<?php endif; ?>
	<div class="search-g__result">
		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<?php the_title() ?>
		<?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
	</div>
<?php else : ?>
	<div class="search-g__result">
	<h1><?php _e('Se encontraron','randol'); ?> (<?php echo $total_results; ?>) <?php _e('resultados para','randol'); ?>  '<?php echo $codigo_val ?>'</h1>
	</div>
<?php endif; ?>

<br><br>

<div class="search-g">
	<form id="search-g--prueba" action="<?php echo get_permalink() ?>" method="GET" >
		<div class="input-g input-g--iconRight input-g--button">
			<label class="input-g__title colorBlack">Input con boton right</label>
			<div class="input-g__inside">
				<button type="submit" class="input-g__ico input-g__icoRight icon-facebook"></button>
				<input class="input-g__input" name="title" type="text" placeholder="ingrese title"/>
			</div>
		</div>
	</form>
</div>

<?php   
$val_title ='';
$status_title = false;
if( isset( $_GET['title'] ) && $_GET['title'] ) {
	$val_title = $_GET['title'];
}

$args = array( 
	'post_type' => 'prueba',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'title' => $val_title,
);
$wp_query = new WP_Query($args); 
$total_results = $wp_query->found_posts;
?>
<?php if ( have_posts() ) : ?>
	<?php if($status_title) :?>
        <h1><?php _e('Se encontraron','randol'); ?> (<?php echo $total_results; ?>) <?php _e('resultados para','randol'); ?>  '<?php echo $val_title; ?>'</h1>	
	<?php endif; ?>
	<div class="search-g__result">
		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<?php the_title() ?>
		<?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
	</div>
<?php else : ?>
	<div class="search-g__result">
		<h1><?php _e('Se encontraron','randol'); ?> (<?php echo $total_results; ?>) <?php _e('resultados para','randol'); ?>  '<?php echo $val_title; ?>'</h1>
	</div>
<?php endif; ?>
