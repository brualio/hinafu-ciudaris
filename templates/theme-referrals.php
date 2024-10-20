<?php
/* Template Name: Template - Referrals */
get_header(); ?>

<?php
$page_id = get_the_ID();
$options = get_fields($page_id);

//Banner
$title_banner_referrals = $options['title_banner_referrals'];
$subtitle_banner_referrals = $options['subtitle_banner_referrals'];

//Image
$img_image_referrals = $options['img_image_referrals'];

//Steps
$title_steps_referrals = $options['title_steps_referrals'];
$text_steps_referrals = $options['text_steps_referrals'];
$list_steps_referrals = $options['list_steps_referrals'];

//Form
$title_form_referrals = $options['title_form_referrals'];
$text_form_referrals = $options['text_form_referrals'];
$form_form_referrals = $options['form_form_referrals'];

//Terms
$title_terms_referrals = $options['title_terms_referrals'];
$text_terms_referrals = $options['text_terms_referrals'];
?>

<section class="referrals-page">
  <!-- Banner -->
  <div class="referrals-page-banner main-banner">
    <div class="referrals-page-banner-container main-wrapper-container --default2">
      <div class="main-banner-info">
        <div class="main-banner-info-content">
          <?php if($title_banner_referrals || $subtitle_banner_referrals) :?>
          <div class="legal-information-title general-title --version3">
            <hgroup class="general-title-titles">
              <div class="general-title-title">
                <h1 class="general-title-title-text --uppercase"><?php echo $title_banner_referrals ?></h1>
              </div>
              <div class="general-title-subtitle">
                <h2 class="general-title-subtitle-text"><?php echo $subtitle_banner_referrals  ?></h2>
              </div> 
            </hgroup>
          </div>
        </div>
        <?php endif; ?>
        <div class="main-banner-figure">
          <?php echo do_shortcode('[figure_one type="white"]') ?>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- Image -->
  <?php if($img_image_referrals) :?>
  <div class="referrals-page-images">
    <div class="referrals-page-image-container main-wrapper-container --default2">
      <figure class="referrals-page-image">
        <img src="<?php echo $img_image_referrals ?>" width="1400" height="400" loading="lazy" alt="Ciudaris" class="referrals-page-img">
      </figure>
    </div>
  </div>
  <?php endif; ?>
  <!--  -->
  <!-- Steps -->
  <div class="referrals-page-steps">
    <div class="referrals-page-steps-container main-wrapper-container --default2">
      <div class="referrals-page-steps-title-info-carrousel">
      <?php if($title_steps_referrals || $text_steps_referrals) :?>
      <div class="referrals-page-steps-title-info">
        <div class="referrals-page-steps-title">
          <h2 class="referrals-page-steps-title-text"><?php echo $title_steps_referrals ?></h2>
        </div>
        <div class="referrals-page-steps-text">
          <?php echo $text_steps_referrals ?>
        </div>
      </div>
      <?php endif; ?>
      <?php if($list_steps_referrals) :?>
      <div class="referrals-page-steps-carrousel">
        <div class="referrals-page-steps-carrousel-block">
          <div class="referrals-page-steps-carrousel-block-arrows-list">
            <div class="referrals-page-steps-carrousel-list --list-none referrals--carrousel">
              <ul class="swiper-wrapper">
                <?php foreach ($list_steps_referrals as $step) : ?>
                <?php
                $image = $step['image'];
                $title = $step['title'];
                $text = $step['text'];
                ?>
                <li class="swiper-slide">
                  <div class="referrals-page-steps-item">
                    <?php if($image) :?>
                    <figure class="referrals-page-steps-item-image">
                      <img src="<?php echo $image ?>" alt="Ciudaris" class="referrals-page-steps-item-img" width="61" height="61" loading="lazy">
                    </figure>
                    <?php endif; ?>
                    <div class="referrals-page-steps-item-info">
                      <?php if($title) :?>
                      <div class="referrals-page-steps-item-title">
                        <h3 class="referrals-page-steps-item-title-text"><?php echo $title ?></h3>
                      </div>
                      <?php endif; ?>
                      <?php if($text) :?>
                      <div class="referrals-page-steps-item-text">
                        <?php echo $text ?>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="general-arrows referrals-page-steps-carrousel-arrows">
              <div class="general-arrow --type1  referrals--carrousel-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1944 4.31775C13.9692 4.06058 13.5779 4.03452 13.3205 4.25955L7.06931 9.72411C6.59931 10.135 6.59931 10.8654 7.06931 11.2763L13.3205 16.7409C13.5779 16.9659 13.9692 16.9398 14.1944 16.6827C14.4197 16.4255 14.3936 16.0346 14.1361 15.8095L8.06255 10.5002L14.1361 5.19086C14.3936 4.96583 14.4197 4.57493 14.1944 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="general-arrow --type1  referrals--carrousel-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85833 4.31775C7.08357 4.06058 7.47484 4.03452 7.73226 4.25955L13.9834 9.72411C14.4534 10.135 14.4534 10.8654 13.9834 11.2763L7.73226 16.7409C7.47484 16.9659 7.08357 16.9398 6.85833 16.6827C6.63308 16.4255 6.65917 16.0346 6.91659 15.8095L12.9902 10.5002L6.91659 5.19086C6.65917 4.96583 6.63308 4.57493 6.85833 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
                </svg>
              </div>
            </div>
          </div>
          <div class="referrals-page-steps-carrousel-block-pagination referrals--carrousel-pagination"></div>
        </div>
      </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- Form -->
  <div class="referrals-page-form">
    <div class="referrals-page-form-container main-wrapper-container --default2">
      <div class="referrals-page-form-title-form">
        <div class="referrals-page-form-title">
          <?php if($title_form_referrals || $text_form_referrals) :?>
          <div class="referrals-page-form-title general-title --version4">
            <div class="general-title-titles">
              <div class="general-title-title">
                <h2 class="general-title-title-text"><?php echo $title_form_referrals ?></h2>
              </div>
              <div class="general-title-text">
                <?php echo  $text_form_referrals ?>
              </div> 
            </div>
          </div>
          <?php endif; ?>
        </div>
        <?php if( $form_form_referrals ): ?>
        <div class="referrals-page-form-form">
          <?php
          setup_postdata( $form_form_referrals ); 
          $form_form_referrals_ID = $form_form_referrals->ID;
          echo do_shortcode( '[contact-form-7 id="'.$form_form_referrals_ID.'" ]' ); 
          wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>   
      </div>
    </div>
  </div>
  <!--  -->
  <!-- Terms -->
  <?php if($title_terms_referrals || $text_terms_referrals) :?>
  <div class="referrals-page-terms">
    <div class="eferrals-page-terms-container main-wrapper-container --default2">
      <div class="referrals-page-terms-title-group">
        <div class="referrals-page-terms-title">
          <h3 class="referrals-page-terms-title-text"><?php echo $title_terms_referrals ?></h3>
        </div>
        <div class="referrals-page-terms-text"><?php echo $text_terms_referrals ?></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- -->
</section>


<?php get_footer(); ?>