<?php
/* Template Name: Template - Contact */
get_header(); ?>

<?php 
$page_id = get_the_ID();
$options = get_fields($page_id);
$options_g = get_fields('options');

//Banner
$title_banner_contact = $options['title_banner_contact'];
$subtitle_banner_contact = $options['subtitle_banner_contact'];

//Form
$text_form_contact = $options['text_form_contact'];
$form_form_contact = $options['form_form_contact'];

//Details
$text_details_contact = $options['text_details_contact'];
$waze_details_contact = $options['waze_details_contact'];
$gmaps_details_contact = $options['gmaps_details_contact'];
$image_details_contact = $options['image_details_contact'];

$schedule_g = $options_g['schedule_g'];
$address_g = $options_g['address_g'];
$telephone_g = $options_g['telephone_g'];
$address_g = $options_g['address_g'];
?>

<section class="contact-page">
  <!--Banner -->
  <div class="contact-page-banner main-banner --type2">
    <div class="contact-page-banner-container main-wrapper-container --default2">
      <div class="main-banner-info">
        <div class="main-banner-info-content">
          <?php if($title_banner_contact || $subtitle_banner_contact) :?>
          <div class="contact-page-banner-title general-title --version3">
            <hgroup class="general-title-titles">
              <div class="general-title-title">
                <h1 class="general-title-title-text --uppercase"><?php echo $title_banner_contact ?></h1>
              </div>
              <div class="general-title-subtitle">
                <h2 class="general-title-subtitle-text"><?php echo $subtitle_banner_contact  ?></h2>
              </div> 
            </hgroup>
          </div>
          <?php endif; ?>
        </div>
        <div class="main-banner-figure">
          <?php echo do_shortcode('[figure_one type="color"]') ?>
        </div>
      </div>
    </div>
  </div>
  <!-- -->
  <!--Details -->
  <div class="contact-page-form-details">
    <div class="contact-page-form-details-container main-wrapper-container --default2">
      <div class="contact-page-form-details-block">
        <?php if($text_form_contact || $form_form_contact) :?>
        <div class="contact-page-form">
          <div class="contact-page-form-title"> 
            <h2 class="contact-page-form-title-text">
              <?php echo $text_form_contact ?>
            </h2>
          </div>
          <div class="contact-page-form-form">
            <?php
            setup_postdata( $form_form_contact ); 
            $form_form_contact_ID = $form_form_contact->ID;
            echo do_shortcode( '[contact-form-7 id="'.$form_form_contact_ID.'" ]' ); 
            wp_reset_postdata(); ?>
          </div>
        </div>
        <?php endif; ?> 
        <div class="contact-page-details">
          <?php if($text_details_contact) :?>
          <div class="contact-page-details-text"><?php echo $text_details_contact ?></div>
          <?php endif; ?>
          <div class="contact-page-details-items">
            <?php if($telephone_g) :?>
            <div class="contact-page-details-item --telephone">
              <div class="contact-page-details-item-icon icon-phone_icon_b"></div>
              <div class="contact-page-details-item-info">
                <div class="contact-page-details-item-title">
                  <h3 class="contact-page-details-item-title-text"><?php _e('Llámanos','ciudaris') ?></h3>
                </div>
                <a class="contact-page-details-item-link" href="tel:<?php echo $telephone_g ?>"><?php echo $telephone_g ?></a>
              </div>
            </div>
            <?php endif; ?>
            <?php if($schedule_g) :?>
            <div class="contact-page-details-item --schedule">
              <div class="contact-page-details-item-icon icon-horario_icon"></div>
              <div class="contact-page-details-item-info">
                <div class="contact-page-details-item-title">
                  <h3 class="contact-page-details-item-title-text"><?php _e('Horario','ciudaris') ?></h3>
                </div>
                <div class="contact-page-details-item-link"><?php echo $schedule_g ?></div>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <div class="contact-page-address">
            <div class="contact-page-address-title-buttons">
              <?php if($address_g) :?>
              <div class="contact-page-address-info">
                <div class="contact-page-address-title">
                  <h3 class="contact-page-address-title-text"><?php _e('Ubícanos','ciudaris') ?></h3>
                </div>
                <div class="contact-page-address-link"><?php echo $address_g ?></div>
              </div>
            <?php endif; ?>
              <div class="contact-page-address-buttons">
                <?php if($waze_details_contact) :?>
                <div class="contact-page-address-button">
                  <a class="main-banner-button general-button --black --icon-left --type0 --border-blue" target="_blank" href="<?php echo $waze_details_contact?>">
                    <span class="general-button-text"><?php _e('Ir con Waze','ciudaris'); ?></span>
                    <div class="general-button-icon icon-waze_icon"></div>
                  </a>
                </div>
                <?php endif; ?>
                <?php if($gmaps_details_contact) :?>
                <div class="contact-page-address-button">
                  <a class="main-banner-button general-button --black --icon-left --type0 --border-blue" target="_blank" href="<?php echo $gmaps_details_contact ?>">
                    <span class="general-button-text"><?php _e('Ir con Maps','ciudaris'); ?></span>
                    <div class="general-button-icon icon-gmaps_icon"></div>
                  </a>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php if($image_details_contact) :?>
          <figure class="contact-page-image">
            <img src="<?php echo $image_details_contact ?>" alt="Ciudaris" class="contact-page-img" width="523" height="352" loading="lazy">
          </figure>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- -->
</section>

<?php get_footer(); ?>