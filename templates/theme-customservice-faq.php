<?php
/* Template Name: Template - Custom Service FAQ */
get_header(); ?>

<?php 
$page_id = get_the_ID();
$options = get_fields($page_id);

$list_service_faq = $options['list_service_faq'];
?>
<section class="service-page">
  <!-- Banner -->
  <div class="service-page-banner">
    <div class="service-page-banner-container main-wrapper-container --default2">
      <?php get_template_part( 'templates/service/content', 'banner'); ?> 
    </div>
  </div>
  <!-- -->
  <!-- Content -->
  <div class="service-page-menu-content">
    <div class="service-page-menu-content-container main-wrapper-container --default2">
      <div class="service-page-menu-content-block">
        <div class="service-page-menu">
          <?php get_template_part( 'templates/service/content', 'menu'); ?> 
        </div>
        <div class="service-page-content">
          <?php if($list_service_faq) :?>
          <div class="service-page-faqs-items">
            <?php foreach($list_service_faq as $faq) :?>
            <?php $faq_title = $faq['title'] ?>
            <?php $faq_text = $faq['text'] ?>
            <article class="service-page-faqs-item">
              <?php if($faq_title) :?>
              <div class="service-page-faqs-item-title accordion--pitcher service-page-faqs-item--pitcher">
                <h3 class="service-page-faqs-item-title-text"><?php echo $faq_title ?></h3>
                <div class="service-page-faqs-item-icon">
                  <svg class="--down" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                    <circle cx="22.5" cy="22.5" r="22.5" fill="#DFF5FA"/>
                    <path d="M16.3633 22.4999H28.6367" stroke="#00B2E3" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                  </svg>
                  <svg class="--up" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                    <circle cx="22.5" cy="22.5" r="22.5" fill="#DFF5FA"/>
                    <path d="M22.4985 16.2549V28.7452" stroke="#00B2E3" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                    <path d="M16.3633 22.5H28.6367" stroke="#00B2E3" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
              <?php endif; ?>
              <?php if($faq_text) :?>
              <div class="service-page-faqs-item-content accordion--content service-page-faqs-item--content">
                <div class="service-page-faqs-item-content-in">
                  <div class="service-page-faqs-item-text">
                    <?php echo $faq_text ?>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </article>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- -->
</section>

<?php get_footer(); ?>