<?php
/* Template Name: Template - Quote */
get_header(); ?>

<?php 
$page_id = get_the_ID();
$options = get_fields($page_id);
$options_g = get_fields('options');

//Banner
$title_banner_quote = $options['title_banner_quote'];
$subtitle_banner_quote = $options['subtitle_banner_quote'];

//Form
$text_form_quote = $options['text_form_quote'];
$form_form_quote = $options['form_form_quote'];

//Carrousel
$image_quote_g_g = $options_g['image_quote_g_g'];
?>

<section class="quote-page">
  <!--Banner -->
  <div class="quote-page-banner main-banner --type2">
    <div class="quote-page-banner-container main-wrapper-container --default2">
      <div class="main-banner-info">
        <div class="main-banner-info-content">
          <?php if($title_banner_quote || $subtitle_banner_quote) :?>
          <div class="quote-page-banner-title general-title --version3">
            <hgroup class="general-title-titles">
              <div class="general-title-title">
                <h1 class="general-title-title-text --uppercase"><?php echo $title_banner_quote ?></h1>
              </div>
              <div class="general-title-subtitle">
                <h2 class="general-title-subtitle-text"><?php echo $subtitle_banner_quote ?></h2>
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
  <!--Carrousel -->
  <div class="quote-page-form-carrousel">
    <div class="quote-page-form-carrousel-container main-wrapper-container --default2">
      <div class="quote-page-form-carrousel-block">
        <?php if($text_form_quote || $form_form_quote) :?>
        <div class="quote-page-form">
          <div class="quote-page-form-title"> 
            <h3 class="quote-page-form-title-text">
              <?php echo $text_form_quote ?>
            </h3>
          </div>
          <div class="quote-page-form-form">
            <?php
            setup_postdata( $form_form_quote ); 
            $form_form_quote_ID = $form_form_quote->ID;
            echo do_shortcode( '[contact-form-7 id="'.$form_form_quote_ID.'" ]' ); 
            wp_reset_postdata(); ?>
          </div>
        </div>
        <?php endif; ?>
        <div class="quote-page-carrousel">
          <div class="quote-page-carrousel-slide quote--carrousel --list-none" id="quote--carrousel-popup">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <div class="quote-page-carrousel-item">
                  <figure class="quote-page-carrousel-item-image">
                    <img class="quote-page-carrousel-item-img" width="700" height="431" src="<?php echo $image_quote_g_g ?>" alt="Ciudaris">
                  </figure>
                  <a style="display:none" href="<?php echo $image_quote_g_g ?>" class="quote-page-carrousel-item-image quote--carrousel-image">
                    <img class="quote-page-carrousel-item-img" width="700" height="431" src="<?php echo $image_quote_g_g ?>" alt="Ciudaris">
                    <span class="quote-page-carrousel-item-icon icon-zoom_icon"></span>
                  </a>
                </div>
              </li>
             
            </ul>
          </div>
          <div class="general-arrows quote-page-carrousel-arrows" style="display:none">
            <div class="general-arrow --type2  quote--carrousel-prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1944 4.31775C13.9692 4.06058 13.5779 4.03452 13.3205 4.25955L7.06931 9.72411C6.59931 10.135 6.59931 10.8654 7.06931 11.2763L13.3205 16.7409C13.5779 16.9659 13.9692 16.9398 14.1944 16.6827C14.4197 16.4255 14.3936 16.0346 14.1361 15.8095L8.06255 10.5002L14.1361 5.19086C14.3936 4.96583 14.4197 4.57493 14.1944 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="general-arrow --type2  quote--carrousel-next">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85833 4.31775C7.08357 4.06058 7.47484 4.03452 7.73226 4.25955L13.9834 9.72411C14.4534 10.135 14.4534 10.8654 13.9834 11.2763L7.73226 16.7409C7.47484 16.9659 7.08357 16.9398 6.85833 16.6827C6.63308 16.4255 6.65917 16.0346 6.91659 15.8095L12.9902 10.5002L6.91659 5.19086C6.65917 4.96583 6.63308 4.57493 6.85833 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- -->
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
  //Carrousel
  let quoteCarrouselID = document.querySelector('.quote--carrousel')
  if(quoteCarrouselID){
    var quoteCarrousel = new Swiper(quoteCarrouselID, {
      loop: false,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      navigation: {
        nextEl: '.quote--carrousel-next',
        prevEl: '.quote--carrousel-prev',
      }
    });
  }
 
  //Popup
  let quotePopup = document.getElementById('quote--carrousel-popup')
  if (quotePopup) {
    lightGallery(quotePopup, {
      selector: '.quote--carrousel-image',
      thumbnail: false,
      download: false
    });
  }

  $( 'select[name=proyecto_cotizado]' ).on( 'change', function( e ) {
    let $modelos_select = $( 'select[name=modelo_cotizado]' );
    $modelos_select.html( '<option value=""></option>' );

    let option  = $( this ).val();
    let modelos = projects[option];

    modelos.forEach( function( m ) {
      $modelos_select.append( '<option value="' + m.label + '">' + m.label + '</option>' );
    } );

  } );
  
});

</script>

<?php get_footer(); ?>