<?php
get_header(); ?>

<?php
$category = get_queried_object();
$category_id = $category->term_id;
$category_name = $category->name;

$page_id = 146;
$options = get_fields($page_id);
$background_banner_blog = $options['background_banner_blog'];
$title_banner_blog = $options['title_banner_blog'];
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
						<div class="banner-news-title">
							<h1 class="banner-news-title-text"><?php echo $category_name ?></h1>
						</div>
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
				$category_args = array(
				'cat' => $category_id,
				'posts_per_page' => -1,
				);
				$category_query = new WP_Query($category_args);
				?>
				<?php if ($category_query->have_posts()) : ?>
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
