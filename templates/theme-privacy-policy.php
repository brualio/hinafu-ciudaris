<?php
/* Template Name: Template - Privacy policy */
get_header(); ?>

<?php 
$page_id = get_the_ID();
$title_terms = get_the_title();
?>
<section class="terms-page">
  <div class="terms-page-container main-wrapper-container --default">
    <?php if($title_terms) :?>
    <div class="terms-page-title general-title --version1">
      <div class="general-title-titles">
        <div class="general-title-title">
          <h1 class="general-title-title-text"><?php echo $title_terms ?></h1>
        </div> 
      </div>
    </div>
    <?php endif; ?>
    <div class="terms-page-content">
      <div class="terms-page-editor">
        <?php the_content() ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>