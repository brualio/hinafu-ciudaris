<?php
/* Template Name: Template - Custom service consult */
get_header(); ?>

<?php
$page_id = get_the_ID();
$options = get_fields($page_id);
$options_g = get_fields('options');

//Form text
$text_service_consult = $options['text_service_consult'];
$form_service_consult = $options['form_service_consult'];

//details
$schedule_g = $options_g['schedule_g'];
$telephone_g = $options_g['telephone_g'];
$email_g = $options_g['email_g'];
$pie_service_consult = $options['pie_service_consult'];

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
          <div class="service-page-consult">
            <?php if($text_service_consult) :?>
            <div class="service-page-consult-text">
              <?php echo $text_service_consult ?>
            </div>
            <?php endif; ?>
            <div class="service-page-consult-form-details">
              <?php if($form_service_consult) :?>
              <div class="service-page-consult-form">
                <?php
                setup_postdata( $form_service_consult ); 
                $form_service_consult_ID = $form_service_consult->ID;
                echo do_shortcode( '[contact-form-7 id="'.$form_service_consult_ID.'" ]' ); 
                wp_reset_postdata(); ?>
              </div>
              <?php endif; ?>
              <div class="service-page-consult-details">
                <div class="service-page-consult-detail-items">
                  <?php if($schedule_g) :?>
                  <div class="service-page-consult-detail-item --schedule">
                    <div class="service-page-consult-detail-item-title">
                      <h3 class="service-page-consult-detail-item-title-text">
                        <?php _e('Horario de atención','ciudaris') ?>
                      </h3>
                    </div>
                    <div class="service-page-consult-detail-item-link">
                      <div class="service-page-consult-detail-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                          <g clip-path="url(#clip0_1076_15940)">
                            <path d="M9 0.75C4.425 0.75 0.75 4.425 0.75 9C0.75 13.575 4.425 17.25 9 17.25C13.575 17.25 17.25 13.575 17.25 9C17.25 4.425 13.575 0.75 9 0.75ZM9 15.75C5.25 15.75 2.25 12.75 2.25 9C2.25 5.25 5.25 2.25 9 2.25C12.75 2.25 15.75 5.25 15.75 9C15.75 12.75 12.75 15.75 9 15.75Z" fill="#00385D"/>
                            <path d="M12.3 9.825L9.75 8.55V4.5C9.75 4.05 9.45 3.75 9 3.75C8.55 3.75 8.25 4.05 8.25 4.5V9C8.25 9.3 8.4 9.525 8.7 9.675L11.7 11.175C11.775 11.25 11.85 11.25 12 11.25C12.3 11.25 12.525 11.1 12.675 10.8C12.825 10.5 12.675 10.05 12.3 9.825Z" fill="#00385D"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_1076_15940">
                              <rect width="18" height="18" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <div class="service-page-consult-detail-item-text"><?php echo $schedule_g ?></div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if($telephone_g) :?>
                  <div class="service-page-consult-detail-item --email">
                    <div class="service-page-consult-detail-item-title">
                      <h3 class="service-page-consult-detail-item-title-text">
                        <?php _e('Llámanos','ciudaris') ?>
                      </h3>
                    </div>
                    <div class="service-page-consult-detail-item-link">
                      <div class="service-page-consult-detail-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M17.742 14.3443L13.7001 12.65C13.646 12.6273 13.5876 12.6161 13.5287 12.6171C13.4699 12.6181 13.412 12.6313 13.3587 12.6558C12.6559 12.9795 12.0903 13.5342 11.7595 14.2243C10.3643 13.7664 9.09617 12.9967 8.05478 11.9757C7.01339 10.9548 6.22711 9.71032 5.75774 8.3402C6.45903 8.01615 7.02506 7.46417 7.36027 6.77748C7.38595 6.72477 7.39991 6.66728 7.40121 6.60884C7.40251 6.55041 7.39112 6.49238 7.3678 6.43861L5.63557 2.44956C5.61101 2.39401 5.57485 2.34415 5.52944 2.3032C5.48403 2.26226 5.43038 2.23114 5.37197 2.21186C5.03878 2.10366 4.69022 2.04814 4.33932 2.04736C3.44968 2.04845 2.59679 2.39629 1.96771 3.01458C1.33864 3.63287 0.984742 4.47114 0.983634 5.34553C0.962536 8.88436 2.35726 12.2896 4.86709 14.827C7.37693 17.3645 10.8008 18.8308 14.4005 18.91C14.5277 18.9198 14.6633 18.9198 14.7905 18.9198C14.9177 18.9198 15.0541 18.9198 15.2005 18.9091C16.0132 18.8115 16.7615 18.4249 17.3041 17.8224C17.8468 17.2198 18.1463 16.4428 18.1462 15.6381C18.1484 15.2984 18.0944 14.9606 17.9863 14.638C17.9726 14.5733 17.9432 14.5129 17.9007 14.4618C17.8581 14.4107 17.8037 14.3704 17.742 14.3443ZM15.1202 18.0899C15.0139 18.0982 14.9034 18.0982 14.7913 18.0973C14.6917 18.0973 14.5696 18.0974 14.4424 18.0891C11.0583 18.0184 7.83812 16.6429 5.47666 14.2594C3.1152 11.876 1.80173 8.67561 1.81963 5.34882C1.81987 4.9733 1.90697 4.60276 2.07433 4.26519C2.2417 3.92762 2.48496 3.63186 2.78571 3.40028C3.08647 3.16869 3.43686 3.00734 3.81039 2.92841C4.18392 2.84949 4.57082 2.85506 4.94184 2.9447L6.52093 6.58173C6.20864 7.11406 5.70696 7.51397 5.11255 7.70442C5.00905 7.7377 4.92284 7.80933 4.87221 7.90408C4.82158 7.99884 4.81054 8.10926 4.84142 8.21189C5.32919 9.85391 6.23042 11.3485 7.46173 12.5574C8.69304 13.7663 10.2147 14.6505 11.8858 15.1282C11.9904 15.1585 12.1028 15.1475 12.1992 15.0976C12.2957 15.0477 12.3685 14.9627 12.4022 14.8609C12.5958 14.2767 13.006 13.7855 13.5511 13.4848L17.2332 15.0278C17.2861 15.2271 17.3122 15.4322 17.311 15.6381C17.3121 16.2389 17.0902 16.8194 16.6868 17.2708C16.2835 17.7222 15.7264 18.0135 15.1202 18.0899Z" fill="#00385D" stroke="#00385D" stroke-width="0.5"/>
                          <path d="M10.8413 0.919922C10.7303 0.919922 10.6239 0.963249 10.5454 1.04037C10.4669 1.1175 10.4229 1.2221 10.4229 1.33116C10.4229 1.44023 10.4669 1.54483 10.5454 1.62196C10.6239 1.69908 10.7303 1.74241 10.8413 1.74241C12.7783 1.74459 14.6353 2.50189 16.0049 3.84816C17.3745 5.19444 18.1448 7.01972 18.1468 8.92353C18.1468 9.0326 18.1909 9.1372 18.2693 9.21432C18.3478 9.29144 18.4542 9.33477 18.5652 9.33477C18.6762 9.33477 18.7826 9.29144 18.8611 9.21432C18.9395 9.1372 18.9836 9.0326 18.9836 8.92353C18.9812 6.80172 18.1226 4.76748 16.5961 3.26706C15.0697 1.76663 13.0001 0.922534 10.8413 0.919922Z" fill="#00385D" stroke="#00385D" stroke-width="0.5"/>
                          <path d="M10.8413 4.20994C12.1127 4.21146 13.3315 4.70859 14.2304 5.59227C15.1294 6.47595 15.635 7.674 15.6363 8.9236C15.6363 9.03267 15.6804 9.13727 15.7588 9.2144C15.8373 9.29152 15.9437 9.33485 16.0547 9.33485C16.1657 9.33485 16.2721 9.29152 16.3506 9.2144C16.429 9.13727 16.4731 9.03267 16.4731 8.9236C16.4716 7.45593 15.8777 6.0488 14.8219 5.01093C13.7661 3.97305 12.3345 3.38919 10.8413 3.38745C10.7303 3.38745 10.6239 3.43078 10.5454 3.5079C10.4669 3.58502 10.4229 3.68963 10.4229 3.79869C10.4229 3.90776 10.4669 4.01236 10.5454 4.08949C10.6239 4.16661 10.7303 4.20994 10.8413 4.20994Z" fill="#00385D" stroke="#00385D" stroke-width="0.5"/>
                          <path d="M10.8413 6.67722C11.447 6.67809 12.0277 6.91505 12.456 7.33613C12.8843 7.75721 13.1251 8.32804 13.1258 8.92343C13.1258 9.0325 13.1699 9.1371 13.2484 9.21422C13.3268 9.29135 13.4333 9.33467 13.5442 9.33467C13.6552 9.33467 13.7616 9.29135 13.8401 9.21422C13.9186 9.1371 13.9626 9.0325 13.9626 8.92343C13.9618 8.10997 13.6326 7.33007 13.0475 6.75479C12.4623 6.17951 11.6689 5.85582 10.8413 5.85474C10.7303 5.85474 10.6239 5.89806 10.5454 5.97519C10.4669 6.05231 10.4229 6.15691 10.4229 6.26598C10.4229 6.37505 10.4669 6.47965 10.5454 6.55677C10.6239 6.63389 10.7303 6.67722 10.8413 6.67722Z" fill="#00385D" stroke="#00385D" stroke-width="0.5"/>
                        </svg>
                      </div>
                      <a href="tel:<?php echo $telephone_g ?>"class="service-page-consult-detail-item-text"><?php echo $telephone_g ?></a>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if($email_g) :?>
                  <div class="service-page-consult-detail-item --schedule">
                    <div class="service-page-consult-detail-item-title">
                      <h3 class="service-page-consult-detail-item-title-text">
                        <?php _e('Escríbenos','ciudaris') ?>
                      </h3>
                    </div>
                    <div class="service-page-consult-detail-item-link">
                      <div class="service-page-consult-detail-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                          <path d="M18.571 1H1.4284C1.192 1 1 1.20735 1 1.4641V13.5352C1 13.792 1.192 14 1.4284 14H18.571C18.8086 14 19 13.792 19 13.5352V1.4641C19 1.20735 18.8086 1 18.571 1ZM1.8574 2.47485L7.1482 7.06905L1.8574 12.3496V2.47485ZM10 8.3567L2.599 1.9282H17.4016L10 8.3567ZM7.8244 7.65665L9.7312 9.31285L9.7336 9.31415C9.7378 9.31805 9.7426 9.32195 9.7462 9.3252C9.754 9.33105 9.7612 9.33755 9.769 9.3421C9.7738 9.346 9.7786 9.3486 9.7834 9.35185C9.7918 9.3577 9.8008 9.3629 9.8092 9.36745C9.8134 9.36875 9.817 9.37135 9.8206 9.37395C9.8338 9.3798 9.8476 9.38565 9.8608 9.3902C9.8608 9.3902 9.862 9.3902 9.8626 9.3915C9.8752 9.3954 9.889 9.4006 9.9022 9.40255C9.9058 9.40385 9.9088 9.40515 9.9124 9.40515C9.9238 9.4084 9.9346 9.4097 9.946 9.411C9.949 9.4123 9.9532 9.4123 9.9562 9.4123C9.9706 9.4149 9.9844 9.4162 9.9988 9.4162C10.0132 9.4162 10.0276 9.4149 10.042 9.4123C10.045 9.4123 10.0486 9.4123 10.0516 9.411C10.0636 9.4097 10.075 9.4084 10.0858 9.40515C10.0894 9.40515 10.093 9.40385 10.096 9.40255C10.1092 9.4006 10.1224 9.3954 10.1356 9.3915C10.1362 9.3902 10.1374 9.3902 10.1374 9.3902C10.1512 9.385 10.1644 9.37915 10.1776 9.37395C10.1818 9.37135 10.1854 9.36875 10.189 9.36745C10.198 9.36225 10.2064 9.35705 10.216 9.35185C10.2208 9.3486 10.2256 9.346 10.2298 9.3421C10.237 9.3369 10.2448 9.3304 10.252 9.3252C10.2568 9.32195 10.2616 9.31805 10.2652 9.31415L10.2676 9.31285L12.1744 7.65665L17.6002 13.0711H2.3992L7.8244 7.65665ZM12.8524 7.06905L18.1426 2.47485V12.3386L12.8524 7.06905Z" fill="#00385D" stroke="#00385D" stroke-width="0.3"/>
                        </svg>
                      </div>
                      <a href="mailto:<?php echo $email_g ?>"class="service-page-consult-detail-item-text"><?php echo $email_g ?></a>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if($pie_service_consult) :?>
                  <div class="service-page-consult-detail-item --terms">
                    <div class="service-page-consult-detail-item-title">
                      <h3 class="service-page-consult-detail-item-title-text">
                        <?php _e('Términos y condiciones','ciudaris') ?>
                      </h3>
                    </div>
                    <div class="service-page-consult-detail-item-link">
                      <div class="service-page-consult-detail-item-text"><?php echo $pie_service_consult ?></div>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- -->
</section>

<?php get_footer(); ?>