<?php

/* Template Name: Template - Blog*/

get_header(); ?>


<?php
$page_id = get_the_ID();
$options = get_fields($page_id);
$background_banner_blog = $options['background_banner_blog'];
$title_banner_blog = $options['title_banner_blog'];
$text_banner_blog = $options['text_banner_blog'];
$image_publicity1_blog = $options['image_publicity1_blog'];
?>
<section class="page-news">
	<div class="page-news-container">
		<!-- Banner -->
		<div class="banner-news --page-news">
			<div class="banner-news-container">
				<figure class="banner-news-image background--change" data-bg="<?php echo $background_banner_blog ?>;<?php echo $background_banner_blog ?>;<?php echo $background_banner_blog ?>"></figure>
				<div class="banner-news-content">
					<div class="banner-news-content-container main-wrapper-container --default">
						<?php if($title_banner_blog) :?>
						<div class="banner-news-title">
							<h1 class="banner-news-title-text"><?php echo $title_banner_blog ?></h1>
						</div>
						<?php endif; ?>
						<?php if($text_banner_blog) :?>
						<div class="banner-news-text">
							<?php echo $text_banner_blog ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- -->

		<!-- Loop Aside -->
		<div class="page-news-loop-aside">
			<div class="page-news-loop-aside-container main-wrapper-container --default">
				<!-- Loop -->
				<?php
				query_posts( array_merge( $wp_query->query, array( 'posts_per_page' => 10 ) ) );
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array( 
				'post_type' => 'post', 
				'post_status' => 'publish',
				'posts_per_page' => 8,
				'page' => 1,
				'paged' => $paged,
				);
				$wp_query = new WP_Query($args); ?>
				<?php if($wp_query->have_posts()) : ?>
				<div class="page-news-loop">
					<div class="page-news-loop-items">
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="page-news-loop-item">
							<?php get_template_part( 'templates/blog/item/content', 'blog'); ?>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
					<div class="page-news-pagination">
						<?php get_template_part( 'templates/blog/pagination/content', 'pagination'); ?>
					</div>
				</div>
				<?php endif ?>
				<!-- -->
				<div class="page-news-aside">
					<?php get_template_part( 'templates/blog/aside/content', 'aside'); ?>
					<?php if($image_publicity1_blog) :?>
					<?php $image = $image_publicity1_blog['image'] ?>
					<?php $url = $image_publicity1_blog['url'] ?>
					<?php if($url) :?>
					<a class="page-news-publicity" href="<?php echo $url ?>" target="_blank">
						<img class="page-news-publicity-img"src="<?php echo $image ?>" alt="Ciudaris" loading="lazy" width="348" height="440">
					</a>
					<?php else :?>
					<figure class="page-news-publicity">
						<img class="page-news-publicity-img"src="<?php echo $image ?>" alt="Ciudaris" loading="lazy" width="348" height="440">
					</figure>
					<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- -->
	</div>
</section>





<?php get_footer(); ?>

