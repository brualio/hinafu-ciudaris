<?php 
	$permalink = get_permalink();
	$thumbnail_url = get_the_post_thumbnail_url();
	$title = get_the_title();
	$content = get_the_content();
	$author = get_the_author();
?>
<article class="item-news">
	<div class="item-news-image-categories">
		<?php if($thumbnail_url) :?>
		<a class="item-news-image" href="<?php echo $permalink ?>">
			<img class="item-news-img" src="<?php echo $thumbnail_url ?>" loading="lazy" width="480" height="229" alt="<?php echo $title ?>">
		</a>
		<?php endif; ?>
		<div class="item-news-categories --list-none">
			<?php the_category(); ?>
		</div>
	</div>
	<div class="item-news-info">
		<a class="item-news-title" href="<?php echo $permalink ?>">
			<h3 class="item-news-title-text"><?php echo $title ?></h3>
		</a>
		<a class="item-news-content" href="<?php echo $permalink ?>">
			<?php echo get_extract($content,14) ?>
		</a>
		<div class="item-news-author-date">
			<div class="item-news-author"><?php echo $author ?></div>
			<div class="item-news-date">
				<?php echo the_date_custom_post_day_month_year() ?>
			</div>
		</div>
		
	</div>
</article>