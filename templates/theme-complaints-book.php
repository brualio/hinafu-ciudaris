<?php
/* Template Name: Template - Complaints book */
get_header(); ?>

<?php 
$page_id = get_the_ID();
$options = get_fields($page_id);
$title_complaints = get_the_title();
$text_complaints = $options['text_complaints'];
$form_complaints = $options['form_complaints'];
?>
<section class="complaints-book">
  <div class="complaints-book-container main-wrapper-container --default">
    <div class="complaints-book-content">
      <?php if($title_complaints || $text_complaints) :?>
      <div class="complaints-book-title general-title --version1 ">
        <div class="general-title-titles">
          <div class="general-title-title">
            <h1 class="general-title-title-text"><?php echo $title_complaints ?></h1>
          </div>
        </div>
        <div class="general-title-text">
          <?php echo $text_complaints ?>
        </div>
      </div>
      <?php endif; ?>
      <div class="complaints-book-details">
        <div class="complaints-book-detail-item">
          <h4 class="complaints-book-detail-item-title"><?php _e('Fecha','ciudaris') ?></h4>
          <span class="complaints-book-detail-item-text" id="show-date"></span>
        </div>
        <div class="complaints-book-detail-item --column">
          <h4 class="complaints-book-detail-item-title">N° <span id="codigo_reclamo_html"></span></h4>
          <span class="complaints-book-detail-item-text"><?php _e('Este número se actualizará cuando termine de registrarse','ciudaris') ?></span>
        </div>
      </div>
      <?php if( $form_complaints ): ?>
        <div class="complaints-book-form">
          <?php
          setup_postdata( $form_complaints ); 
          $form_complaints_ID = $form_complaints->ID;
          echo do_shortcode( '[contact-form-7 id="'.$form_complaints_ID.'" ]' ); 
          wp_reset_postdata(); ?>
        </div>
       <?php endif; ?>       
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>