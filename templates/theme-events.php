<?php
/* Template Name: Template - Events */
get_header(); ?>
<?php
$page_id = get_the_ID();
$options = get_fields($page_id);

//Banner
$title_banner_events = $options['title_banner_events'];
$subtitle_banner_events = $options['subtitle_banner_events'];

//Image
$imagedesktop_image_events = $options['imagedesktop_image_events'];
$imagemobile_image_events = $options['imagemobile_image_events'] ? $options['imagemobile_image_events'] : $imagedesktop_image_events;

//Form
$form_form_events = $options['form_form_events'];

//Details
$title_details_events = $options['title_details_events'];
$subtitle_details_events = $options['subtitle_details_events'];
$description_details_events = $options['description_details_events'];
$date_details_events = $options['date_details_events'];
$address_details_events = $options['address_details_events'];
$schedule_details_events = $options['schedule_details_events'];
$image_details_events = $options['image_details_events'];

//Featured projects
$title_projects_events = $options['title_projects_events'];
$button_projects_events = $options['button_projects_events'];
$projects_projects_events = $options['projects_projects_events'];
?>

<section class="events-page">
  <div class="events-page-banner-image-details-form">
    <!-- Banner -->
    <div class="events-page-banner main-banner">
      <div class="events-page-banner-container main-wrapper-container --default2">
        <div class="main-banner-info">
          <div class="main-banner-info-content">
            <?php if($title_banner_events || $subtitle_banner_events) :?>
            <div class="events-page-banner-title general-title --version2">
              <hgroup class="general-title-titles">
                <div class="general-title-title">
                  <h1 class="general-title-title-text --uppercase"><?php echo $title_banner_events ?></h1>
                </div>
                <div class="general-title-subtitle">
                  <h2 class="general-title-subtitle-text"><?php echo $subtitle_banner_events  ?></h2>
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
    <!--  -->
    <!-- Image -->
    <div class="events-page-image">
      <div class="events-page-image-container main-wrapper-container --default2">
        <figure class="events-page-image-image">
          <img alt="Ciudaris" width="1400" height="480" loading="lazy" class="events-page-image-img image--change" data-src="<?php echo $imagedesktop_image_events ?>;<?php echo $imagedesktop_image_events ?>;<?php echo $imagemobile_image_events ?>">
        </figure>
      </div>
    </div>
    <!--  -->
    <!-- Details Form -->
    <div class="events-page-details-form">
      <div class="events-page-details-form-container main-wrapper-container --default2">
        <div class="events-page-details-form-block">
          <div class="events-page-details">
            <?php if($title_details_events) :?>
            <div class="events-page-details-title">
              <h2 class="events-page-details-title-text"><?php echo $title_details_events ?></h2>
            </div>
            <?php endif;?>
            <div class="events-page-details-description">
              <div class="events-page-details-description-title">
                <h3 class="events-page-details-description-title-text"><?php echo $subtitle_details_events ?></h3>
              </div>
              <div class="events-page-details-description-description">
                <?php echo $description_details_events ?>
              </div>
              <div class="events-page-details-description-items">
                <?php if($date_details_events) :?>
                <div class="events-page-details-description-item --address">
                  <span class="events-page-details-description-item-icon icon-calendar"></span>
                  <div class="events-page-details-description-item-text">
                    <?php echo $date_details_events; ?>
                  </div>
                </div>
                <?php endif;?>
                <?php if($address_details_events) :?>
                <div class="events-page-details-description-item --address">
                  <span class="events-page-details-description-item-icon icon-horario_icon"></span>
                  <div class="events-page-details-description-item-text">
                    <?php echo $address_details_events; ?>
                  </div>
                </div>
                <?php endif;?>
                <?php if($schedule_details_events) :?>
                <div class="events-page-details-description-item --address">
                  <span class="events-page-details-description-item-icon icon-mappin_icon_n"></span>
                  <div class="events-page-details-description-item-text">
                    <?php echo $schedule_details_events; ?>
                  </div>
                </div>
                <?php endif;?>
              </div>
              <?php if($image_details_events) :?>
              <div class="events-page-details-marker">
                <img src="<?php echo $image_details_events ?>" alt="Ciudaris" width="217" height="238" loading="lazy" class="events-page-details-marker">
              </div>
              <?php endif;?>
            </div>
          </div>
          <?php if($form_form_events) :?>
          <div class="events-page-form">
          <?php
            setup_postdata( $form_form_events ); 
            $form_form_events_ID = $form_form_events->ID;
            echo do_shortcode( '[contact-form-7 id="'.$form_form_events_ID.'" ]' ); 
            wp_reset_postdata(); ?>
          </div>
          <?php endif;?>
        </div>
      </div>
    </div>
    <!--  -->
  </div>

  <!-- Projects -->
  <div class="events-page-projects">
    <div class="events-page-project-container main-wrapper-container --default2">
      <div class="events-page-project-title-button">
        <?php if($title_projects_events) :?>
        <div class="events-page-project-title general-title --version5">
          <div class="general-title-titles">
            <div class="general-title-subtitle">
              <h2 class="general-title-subtitle-text"><?php echo $title_projects_events ?></h2>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php if($button_projects_events) :?>
        <?php
        $url = $button_projects_events['url'];
        $label = $button_projects_events['label'];  
        ?>
        <div class="events-page-project-button">
          <a class="general-button --type1 --border-blue" href="<?php echo $url ?>">
            <span class="general-button-text"><?php echo $label ?></span>
          </a>
        </div>
        <?php endif; ?>
      </div>
      <?php if(count($projects_projects_events)>0) :?>
      <div class="events-page-projects-items">
        <?php foreach($projects_projects_events as $project) :?>
        <?php
        $ID = $project->ID;
        $image = get_field( 'featured_image_project',  $ID );
        $image_hover = get_field( 'hover_image_project',  $ID );
        $permalink = get_permalink( $ID );
        $title = get_the_title( $ID );
        $category = get_the_term_list( $ID, 'categoria-proyecto', '', ', ', '' ) ;
        $district = get_the_term_list( $ID, 'distrito-proyecto', '', ', ', '' ) ;
        $logotipo_project = get_field( 'logotipo_project',  $ID );
        $price_project = get_field( 'price_project',  $ID );
        $footage2_project = get_field( 'footage2_project',  $ID );
        $bedrooms2_project = get_field( 'bedrooms2_project',  $ID );
        ?>
        <div class="events-page-projects-item">
          <a href="<?php echo esc_url( $permalink ); ?>" class="item-project item--project">
            <figure class="item-project-image">
              <img src="<?php echo $image ?>" data-image-hover="<?php echo $image_hover ?>" alt="<?php echo esc_html( $title ); ?>" class="item-project-img" width="420" height="560" loading="lazy">
            </figure>
            <div class="item-project-info">
              <div class="item-project-category"><?php echo strip_tags($category); ?></div>
              <div class="item-project-details">
                <div class="item-project-details-row1">
                  <div class="item-project-district-logotipo">
                    <?php if($district) :?>
                    <div class="item-project-district">
                      <span class="_icon icon-mappin_icon_n"></span>
                      <?php echo strip_tags($district); ?>
                    </div>
                    <?php endif;?>
                    <figure class="item-project-logotipo">
                      <img src="<?php echo $logotipo_project ?>" alt="<?php echo esc_html( $title ); ?>" class="item-project-logotipo-img" loading="lazy">
                    </figure>
                  </div>
                  <div class="item-project-price">
                    <div class="item-project-price-label"><?php _e('Precio desde','ciudaris') ?></div>
                    <div class="item-project-price-txt"><?php echo $price_project ?></div>
                  </div>
                </div>
                <div class="item-project-details-row2">
                  <div class="item-project-details-row-item">
                    <div class="item-project-footage">
                    <svg class="_icon" xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                      <path d="M13.8387 11.071V4.92902C14.6712 4.70541 15.2903 3.92917 15.2903 3C15.2903 1.89722 14.4223 1 13.3548 1C12.4555 1 11.7044 1.63986 11.4881 2.5H5.54419C5.32783 1.63986 4.5768 1 3.67743 1C2.60998 1 1.74194 1.89722 1.74194 3C1.74194 3.92917 2.36105 4.70541 3.19356 4.92902V11.071C2.36105 11.2946 1.74194 12.0708 1.74194 13C1.74194 14.1028 2.60998 15 3.67743 15C4.5768 15 5.32783 14.3601 5.54419 13.5H11.4881C11.7044 14.3601 12.4555 15 13.3548 15C14.4223 15 15.2903 14.1028 15.2903 13C15.2903 12.0708 14.6712 11.2946 13.8387 11.071ZM11.4881 12.5H5.54419C5.36826 11.8006 4.83823 11.2528 4.1613 11.071V4.92902C4.83823 4.74719 5.36826 4.1994 5.54419 3.5H11.4881C11.664 4.1994 12.194 4.74719 12.871 4.92902V11.071C12.194 11.2528 11.664 11.8006 11.4881 12.5ZM13.3548 2C13.8883 2 14.3226 2.44849 14.3226 3C14.3226 3.55151 13.8883 4 13.3548 4C12.8214 4 12.3871 3.55151 12.3871 3C12.3871 2.44849 12.8214 2 13.3548 2ZM2.70969 3C2.70969 2.44849 3.14394 2 3.67743 2C4.21091 2 4.64517 2.44849 4.64517 3C4.64517 3.55151 4.21091 4 3.67743 4C3.14394 4 2.70969 3.55151 2.70969 3ZM3.67743 14C3.14394 14 2.70969 13.5515 2.70969 13C2.70969 12.4485 3.14394 12 3.67743 12C4.21091 12 4.64517 12.4485 4.64517 13C4.64517 13.5515 4.21091 14 3.67743 14ZM13.3548 14C12.8214 14 12.3871 13.5515 12.3871 13C12.3871 12.4485 12.8214 12 13.3548 12C13.8883 12 14.3226 12.4485 14.3226 13C14.3226 13.5515 13.8883 14 13.3548 14Z" fill="#00385D" stroke="#00385D" stroke-width="0.8"/>
                    </svg>
                    <div class="_text">
                    <?php echo $footage2_project ?>
                    </div>
                    </div>
                  </div>
                  <div class="item-project-details-row-item">
                    <div class="item-project-footage">
                      <svg class="_icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M1.93555 18V13C1.93555 12.55 2.02426 12.1417 2.20168 11.775C2.3791 11.4083 2.61297 11.0833 2.90329 10.8V8C2.90329 7.16667 3.18555 6.45833 3.75006 5.875C4.31458 5.29167 5.00006 5 5.80651 5H9.67748C10.0485 5 10.3952 5.07083 10.7178 5.2125C11.0404 5.35417 11.3388 5.55 11.613 5.8C11.8872 5.55 12.1855 5.35417 12.5081 5.2125C12.8307 5.07083 13.1775 5 13.5485 5H17.4194C18.2259 5 18.9114 5.29167 19.4759 5.875C20.0404 6.45833 20.3226 7.16667 20.3226 8V10.8C20.613 11.0833 20.8468 11.4083 21.0243 11.775C21.2017 12.1417 21.2904 12.55 21.2904 13V18C21.2904 18.2833 21.1976 18.5208 21.0122 18.7125C20.8267 18.9042 20.5968 19 20.3226 19C20.0485 19 19.8186 18.9042 19.6331 18.7125C19.4476 18.5208 19.3549 18.2833 19.3549 18V17H3.87103V18C3.87103 18.2833 3.77829 18.5208 3.59281 18.7125C3.40732 18.9042 3.17748 19 2.90329 19C2.6291 19 2.39926 18.9042 2.21377 18.7125C2.02829 18.5208 1.93555 18.2833 1.93555 18ZM12.5807 10H18.3872V8C18.3872 7.71667 18.2944 7.47917 18.1089 7.2875C17.9235 7.09583 17.6936 7 17.4194 7H13.5485C13.2743 7 13.0444 7.09583 12.8589 7.2875C12.6735 7.47917 12.5807 7.71667 12.5807 8V10ZM4.83877 10H10.6452V8C10.6452 7.71667 10.5525 7.47917 10.367 7.2875C10.1815 7.09583 9.95168 7 9.67748 7H5.80651C5.53232 7 5.30248 7.09583 5.117 7.2875C4.93151 7.47917 4.83877 7.71667 4.83877 8V10ZM3.87103 15H19.3549V13C19.3549 12.7167 19.2622 12.4792 19.0767 12.2875C18.8912 12.0958 18.6614 12 18.3872 12H4.83877C4.56458 12 4.33474 12.0958 4.14926 12.2875C3.96377 12.4792 3.87103 12.7167 3.87103 13V15Z" fill="#00385D"/>
                      </svg>
                      <div class="_text">
                      <?php echo $bedrooms2_project ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <!-- -->
</section>
  
<?php get_footer(); ?>