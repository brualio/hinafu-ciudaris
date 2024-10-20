<?php
/* Template Name: Template - Message Sent */
get_header(); ?>

<?php 
$page_id = get_the_ID();
$options = get_fields($page_id);
$title_thanks_g = $options['title_thanks_g'];
$subtitle_thanks_g = $options['subtitle_thanks_g'];
$text_thanks_g = $options['text_thanks_g'];
$button_thanks_g = $options['button_thanks_g'];
$image_thanks_g = $options['image_thanks_g'];
?>
<section class="page-message page-message--sent">
	<div class="page-message-container main-wrapper-container --default">
		<div class="page-message-content">
			<div class="page-message-info">
				<?php if($title_thanks_g || $subtitle_thanks_g) :?>
				<hgroup class="page-message-title-subtitle">
					<div class="page-message-title">
						<h1 class="page-message-title-text"><?php echo $title_thanks_g ?></h1>
					</div>
					<div class="page-message-subtitle">
						<h2 class="page-message-subtitle-text"><?php echo $subtitle_thanks_g?></h2>
					</div>
				</hgroup>
				<?php endif;?>
				<?php if($text_thanks_g) :?>
				<div class="page-message-text">
				<?php echo $text_thanks_g ?>
				</div>
				<?php endif;?>
				<?php if($button_thanks_g) :?>
				<?php $label = $button_thanks_g['label'] ?>
				<?php $url = $button_thanks_g['url'] ?>
				<div class="page-message-button">
					<a class="general-button --type1 --border-blue" href="<?php echo $url ?>">
						<span class="general-button-text"><?php echo $label ?></span>
					</a>
				</div>
				<?php endif;?>
			</div>
			<?php if($image_thanks_g) :?>
			<figure class="page-message-image">
				<img class="page-message-img" width="611" height="671" loading="lazy" src="<?php echo $image_thanks_g ?>" alt="Ciudaris">
			</figure>
			<?php endif;?>
		</div>
	</div>
</section>

<?php get_footer(); ?>