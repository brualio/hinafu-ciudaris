<?php get_header(); ?>

<?php 
$options = get_fields('options');
$title_error_g = $options['title_error_g'];
$subtitle_error_g = $options['subtitle_error_g'];
$text_error_g = $options['text_error_g'];
$button_error_g = $options['button_error_g'];
$image_error_g = $options['image_error_g'];
?>
<section class="page-message page-message--404">
	<div class="page-message-container main-wrapper-container --default">
		<div class="page-message-content">
			<div class="page-message-info">
				<?php if($title_error_g || $subtitle_error_g) :?>
				<hgroup class="page-message-title-subtitle">
					<div class="page-message-title">
						<h1 class="page-message-title-text"><?php echo $title_error_g ?></h1>
					</div>
					<div class="page-message-subtitle">
						<h2 class="page-message-subtitle-text"><?php echo $subtitle_error_g?></h2>
					</div>
				</hgroup>
				<?php endif;?>
				<?php if($text_error_g) :?>
				<div class="page-message-text">
				<?php echo $text_error_g ?>
				</div>
				<?php endif;?>
				<?php if($button_error_g) :?>
				<?php $label = $button_error_g['label'] ?>
				<?php $url = $button_error_g['url'] ?>
				<div class="page-message-button">
					<a class="general-button --type1 --border-blue" href="<?php echo $url ?>">
						<span class="general-button-text"><?php echo $label ?></span>
					</a>
				</div>
				<?php endif;?>
			</div>
			<?php if($image_error_g) :?>
			<figure class="page-message-image">
				<img class="page-message-img" width="899" height="501" loading="lazy" src="<?php echo $image_error_g ?>" alt="Ciudaris">
			</figure>
			<?php endif;?>
		</div>
	</div>
</section>

<?php get_footer(); ?>