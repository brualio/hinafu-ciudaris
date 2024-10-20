<?php get_header(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<?php
//Banner
$page_id = get_the_ID();
$options = get_fields($page_id);
$title = get_the_title();
$background_post = $options['background_post'];

//Author
$author_id = get_the_author_meta('ID');
$author_avatar = get_avatar($author_id, 96);
$author_name = get_the_author();
$author_first_name = get_the_author_meta('first_name');
$author_last_name = get_the_author_meta('last_name');
$author_description = get_the_author_meta('description');
$rol_extend_user = get_field('rol_extend_user', 'user_' . $author_id);
$social_network_user = get_field('social_network_user', 'user_' . $author_id);

//publicidad
$image_publicity11_blog = get_field('image_publicity11_blog', 146);
?>
<section class="detail-news">
	<div class="detail-news-container">
		<!-- Banner -->
		<div class="banner-news banner-news--detail">
			<div class="banner-news-container">
				<figure class="banner-news-image background--change" data-bg="<?php echo $background_post ?>;<?php echo $background_post ?>;<?php echo $background_post ?>"></figure>
				<div class="banner-news-content">
					<div class="banner-news-content-container main-wrapper-container --default">
						<div class="banner-news-categories">
							<div class="banner-news-categories-list --list-none">
								<?php the_category(' ') ?>
							</div>
						</div>
						<div class="banner-news-title">
							<h1 class="banner-news-title-text"><?php echo $title ?></h1>
						</div>
						<div class="banner-news-date">
							<?php echo the_date_custom_post_day_month_year() ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- -->
		<!-- Content Aside -->
		<div class="detail-news-content-aside">
			<div class="detail-news-content-aside-container main-wrapper-container --default">
				<div class="detail-news-content-share-aside">
					<div class="detail-news-content-share">
						<div class="details-news-toc-mobile">
						<?php echo do_shortcode('[ez-toc post_types="post"]'); ?>
						</div>
						<!-- Content -->
							<div class="detail-news-content --styles-editor">
								<?php the_content() ?>
							</div>
						<!-- -->
						<!-- Author -->
						<div class="detail-news-author">
							<figure class="detail-news-author-image">
								<?php echo $author_avatar ?>
							</figure>
							<div class="detail-news-author-info">
								<div class="detail-news-author-name-rol-social">
									<div class="detail-news-author-name-rol">
										<div class="detail-news-author-name"><?php echo $author_first_name ?><?php echo $author_last_name ?></div>
										<div class="detail-news-author-rol"><?php echo $rol_extend_user ?></div>
									</div>
									<?php if($social_network_user) :?>
									<div class="detail-news-author-social --list-none">
										<ul>
											<?php foreach($social_network_user as $social) :?>
											<?php $type = $social['type']; ?>
											<?php $url = $social['url']; ?>
											<li class="--<?php echo $type ?>">
												<a class="icon-<?php echo $type ?>" href="<?php echo $url ?>" target="_blank"></a>
											</li>
											<?php endforeach ?>
										</ul>
									</div>
									<?php endif; ?>
								</div>
								<div class="detail-news-author-description"><?php echo $author_description ?></div>
							</div>
						</div>
						<!-- -->
						<!-- Social Share-->
						<div class="detail-news-share">
							<div class="detail-news-share-label"><?php _e('Compartir:','Ciudaris') ?></div>
							<div class="detail-news-share-list --list-none">
								<ul>
									<li>
										<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="icon-facebook" target="_blank">
										</a>
									</li>
									<li>
										<a href="https://twitter.com/intent/tweet?text=&url<?php the_permalink(); ?>" class="icon-twitter" target="_blank">
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- -->
						<!-- Publicidad -->
						<?php if($image_publicity11_blog) :?>
						<?php $image = $image_publicity11_blog['image_11'] ?>
						<?php $url = $image_publicity11_blog['url_11'] ?>
						<?php if($url) :?>
						<a class="detail-news-publicity" href="<?php echo $url ?>" target="_blank">
							<img class="detail-news-publicity-img" src="<?php echo $image ?>" alt="Ciudaris" loading="lazy" width="970" height="250">
						</a>
						<?php else :?>
							<figure class="detail-news-publicity">
							<img class="detail-news-publicity-img" src="<?php echo $image ?>" alt="Ciudaris" loading="lazy" width="970" height="250">
						</figure>
						<?php endif; ?>
						<?php endif; ?>
						<!-- -->
					</div>
					<!-- Aside -->
					<div class="detail-news-aside">
						<?php echo do_shortcode('[ez-toc post_types="post"]'); ?>
						<?php get_template_part( 'templates/blog/aside/content', 'aside'); ?>
					</div>
					<!-- -->
				</div>
			</div>
		</div>
		<!-- -->
		
		<!-- News rel -->
		<?php 
		$category = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
		$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'order' => 'DESC',
    'orderby' => 'date',
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $category
			)
		),
		'post__not_in' => array ($post->ID),
		);
		$wp_query = new WP_Query( $args ); ?>
		<?php if ($wp_query->have_posts()) : ?>
		<section class="detail-news-rel">
			<div class="detail-news-rel-container main-wrapper-container --default">
				<div class="detail-news-rel-title general-title --version1 ">
					<div class="general-title-titles">
						<div class="general-title-title">
							<h3 class="general-title-title-text"><?php _e('Publicaciones relacionadas','Ciudaris') ?></h3>
						</div>
					</div>
				</div>
				<div class="detail-news-rel-items">
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<div class="detail-news-rel-item">
						<?php get_template_part( 'templates/blog/item/content', 'blog'); ?>
					</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</section>
		<?php endif; ?>
		<!--  -->

	</div>
</section>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php endif; ?>

<?php get_footer(); ?>
