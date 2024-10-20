<?php
get_header(); ?>

<?php 
$post_id = get_the_ID();
$options = get_fields($post_id);
$options_g = get_fields('options');

$post_id_page = 32;
$options_page = get_fields($post_id_page);

//generals
$title = get_the_title();
$category = get_the_term_list( $post_id, 'categoria-proyecto', '', ', ', '' ) ;
$district = get_the_term_list( $post_id, 'distrito-proyecto', '', ', ', '' ) ;

//Banner
$type_banner_project = $options['type_banner_project'];
$video_banner_project = $options['video_banner_project'];
$title_banner_project = $options['title_banner_project'];
$list_banner_project = $options['list_banner_project'];
$background_mobile_banner_project = $options['background_mobile_banner_project'];

//Details
$logotipo_project = $options['logotipo_project'];
$address_project = $options['address_project'];
$price_project = $options['price_project'];
$bedrooms_project = $options['bedrooms_project'];
$footage_project = $options['footage_project'];
$advance_project = $options['advance_project'];

//About
$subtitle_about_project = $options['subtitle_about_project'];
$title_about_project = $options['title_about_project'];
$text_about_project = $options['text_about_project'];
$flats_project = $options['flats_project'];
$departaments_project = $options['departaments_project'];
$brochure_project = $options['brochure_project'];
$information_legal_project = $options['information_legal_project'];
$Financed_by_project = $options['Financed_by_project'];
$endorsed_by_project = $options['endorsed_by_project'];

//Video
$video_by_project = $options['video_by_project'];

//Common Area
$title_common_areas_project = $options['title_common_areas_project'];
$list_common_areas_project = $options['list_common_areas_project'];

//Gallery
$title_gallery_projects = $options_page['title_gallery_projects'];
$subtitle_gallery_projects = $options_page['subtitle_gallery_projects'];
$list_gallery_project = isset($options['list_gallery_project']) ? $options['list_gallery_project'] : '';

//Address
$title_address_project = $options['title_address_project'];
$text_address_project = $options['text_address_project'];
$list_address_project = $options['list_address_project'];
$title2_address_project = $options['title2_address_project'];
$waze_address_project = $options['waze_address_project'];
$gmaps_address_project = $options['gmaps_address_project'];

//Quote
$title_quote_projects = $options_page['title_quote_projects'];
$text_quote_projects = $options_page['text_quote_projects'];
$form_quote_projects = $options_page['form_quote_projects'];

//360
$title_360_project = $options['title_360_project'];
$background_360_project = $options['background_360_project'];
$url_360_project = $options['url_360_project'];

//Asesor
$title_asesor_projects = $options_page['title_asesor_projects'];
$asesor_asesors_project = $options['asesor_asesors_project'];

//More
$title_more_projects = $options_page['title_more_projects'];
$button_more_project = $options_page['button_more_project'];
$projects_more_project = $options['projects_more_project'];

//Pie
$title_pie_project = $options['title_pie_project'];
$content_pie_project = $options['content_pie_project'];

$image_quote_g_g = $options_g['image_quote_g_g'];

?>
<section class="project-detail">
  <!-- Banner -->
  <div class="project-detail-banner">
    <div class="project-detail-banner-mobile">
      <figure class="project-detail-banner-mobile-background" style="background-image:url(<?php echo esc_url($background_mobile_banner_project); ?>)"></figure>
    </div>
    <?php if($type_banner_project == "video" && $video_banner_project) : ?>
    <div class="project-detail-banner-video">
      <video class="project-detail-banner-video-video" preload="metadata" autoplay loop muted playsinline>
        <source src="<?php echo esc_url($video_banner_project); ?>" type="video/mp4">
      </video>
    </div>
    <?php elseif($type_banner_project == "carrousel" && $list_banner_project) : ?>
    <div class="project-detail-banner-carrousel --list-none">
      <div class="project-detail-banner-carrousel-slide project--banner-carrousel swiper-container">
        <ul class="swiper-wrapper">
          <?php foreach($list_banner_project as $item) : ?>
          <li class="swiper-slide">
            <div class="project-detail-banner-carrousel-item">
              <figure class="project-detail-banner-carrousel-item-background" style="background-image:url('<?php echo esc_url($item['background_desktop']); ?>')"></figure>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <?php endif; ?>
    <?php if($category || $title_banner_project) :?>
    <div class="project-detail-banner-info">
      <div class="project-detail-banner-info-container main-wrapper-container --default2">
        <div class="project-detail-banner-info-block">
          <div class="project-detail-banner-info-inside">
            <div class="project-detail-banner-info-category"><?php echo strip_tags($category); ?></div>
            <div class="project-detail-banner-info-title">
              <h1 class="project-detail-banner-info-title-text"><?php echo $title_banner_project ?></h1>
            </div>
            <div class="project-detail-banner-details">
              <?php if($logotipo_project) :?>
              <figure class="project-detail-banner-logotipo">
                <img class="project-detail-banner-logotipo-img" src="<?php echo $logotipo_project ?>" alt="<?php echo $title ?>" loading="lazy">
              </figure>
              <?php endif; ?>
              <div class="project-detail-banner-district-address">
                <?php if($district) :?>
                <div class="project-detail-banner-district">
                  <i class="icon-mappin_icon_n project-detail-banner-district-icon"></i><?php echo strip_tags($district); ?></div>
                <?php endif; ?>
                <?php if($address_project) :?>
                <div class="project-detail-banner-address"><?php echo $address_project ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="general-pagination-slide --type2 project-banner-carrousel-pagination project--banner-carrousel-pagination"></div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
   </div>
  <!-- -->
  <!-- About -->
  <div class="project-detail-about">
    <div class="project-detail-about-container main-wrapper-container --default2">
      <div class="project-detail-about-info-content">
        <div class="project-detail-about-info">
          <div class="project-detail-about-list-items project-detail-about-list-items--mobile">
            <?php if($price_project) :?>
            <div class="project-detail-about-list-item --price">
              <div class="project-detail-about-list-item-label"><?php _e( 'Precio desde', 'ciudaris')?></div>
              <div class="project-detail-about-list-item-big"><?php echo $price_project ?></div>
            </div>
            <?php endif; ?>
            <?php if($bedrooms_project) :?>
            <div class="project-detail-about-list-item --bedrooms">
              <div class="project-detail-about-list-item-label"><?php _e( 'Dormitorios', 'ciudaris')?></div>
              <div class="project-detail-about-list-item-val">
                <svg class="_icon" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path d="M2 18.5V13.5C2 13.05 2.09167 12.6417 2.275 12.275C2.45833 11.9083 2.7 11.5833 3 11.3V8.5C3 7.66667 3.29167 6.95833 3.875 6.375C4.45833 5.79167 5.16667 5.5 6 5.5H10C10.3833 5.5 10.7417 5.57083 11.075 5.7125C11.4083 5.85417 11.7167 6.05 12 6.3C12.2833 6.05 12.5917 5.85417 12.925 5.7125C13.2583 5.57083 13.6167 5.5 14 5.5H18C18.8333 5.5 19.5417 5.79167 20.125 6.375C20.7083 6.95833 21 7.66667 21 8.5V11.3C21.3 11.5833 21.5417 11.9083 21.725 12.275C21.9083 12.6417 22 13.05 22 13.5V18.5C22 18.7833 21.9042 19.0208 21.7125 19.2125C21.5208 19.4042 21.2833 19.5 21 19.5C20.7167 19.5 20.4792 19.4042 20.2875 19.2125C20.0958 19.0208 20 18.7833 20 18.5V17.5H4V18.5C4 18.7833 3.90417 19.0208 3.7125 19.2125C3.52083 19.4042 3.28333 19.5 3 19.5C2.71667 19.5 2.47917 19.4042 2.2875 19.2125C2.09583 19.0208 2 18.7833 2 18.5ZM13 10.5H19V8.5C19 8.21667 18.9042 7.97917 18.7125 7.7875C18.5208 7.59583 18.2833 7.5 18 7.5H14C13.7167 7.5 13.4792 7.59583 13.2875 7.7875C13.0958 7.97917 13 8.21667 13 8.5V10.5ZM5 10.5H11V8.5C11 8.21667 10.9042 7.97917 10.7125 7.7875C10.5208 7.59583 10.2833 7.5 10 7.5H6C5.71667 7.5 5.47917 7.59583 5.2875 7.7875C5.09583 7.97917 5 8.21667 5 8.5V10.5ZM4 15.5H20V13.5C20 13.2167 19.9042 12.9792 19.7125 12.7875C19.5208 12.5958 19.2833 12.5 19 12.5H5C4.71667 12.5 4.47917 12.5958 4.2875 12.7875C4.09583 12.9792 4 13.2167 4 13.5V15.5Z" fill="#01385C"/>
                </svg>  
                <?php echo $bedrooms_project ?>
              </div>
            </div>
            <?php endif; ?>
            <?php if($footage_project) :?>
            <div class="project-detail-about-list-item --footage">
              <div class="project-detail-about-list-item-label"><?php _e( 'Metraje', 'ciudaris')?></div>
              <div class="project-detail-about-list-item-val">
                <svg class="_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                  <path d="M13.5 11.571V5.42902C14.3603 5.20541 15 4.42917 15 3.5C15 2.39722 14.103 1.5 13 1.5C12.0706 1.5 11.2946 2.13986 11.071 3H4.92899C4.70541 2.13986 3.92935 1.5 3 1.5C1.89697 1.5 1 2.39722 1 3.5C1 4.42917 1.63974 5.20541 2.5 5.42902V11.571C1.63974 11.7946 1 12.5708 1 13.5C1 14.6028 1.89697 15.5 3 15.5C3.92935 15.5 4.70541 14.8601 4.92899 14H11.071C11.2946 14.8601 12.0706 15.5 13 15.5C14.103 15.5 15 14.6028 15 13.5C15 12.5708 14.3603 11.7946 13.5 11.571ZM11.071 13H4.92899C4.74719 12.3006 4.19949 11.7528 3.5 11.571V5.42902C4.19949 5.24719 4.74719 4.6994 4.92899 4H11.071C11.2528 4.6994 11.8005 5.24719 12.5 5.42902V11.571C11.8005 11.7528 11.2528 12.3006 11.071 13ZM13 2.5C13.5513 2.5 14 2.94849 14 3.5C14 4.05151 13.5513 4.5 13 4.5C12.4487 4.5 12 4.05151 12 3.5C12 2.94849 12.4487 2.5 13 2.5ZM2 3.5C2 2.94849 2.44873 2.5 3 2.5C3.55127 2.5 4 2.94849 4 3.5C4 4.05151 3.55127 4.5 3 4.5C2.44873 4.5 2 4.05151 2 3.5ZM3 14.5C2.44873 14.5 2 14.0515 2 13.5C2 12.9485 2.44873 12.5 3 12.5C3.55127 12.5 4 12.9485 4 13.5C4 14.0515 3.55127 14.5 3 14.5ZM13 14.5C12.4487 14.5 12 14.0515 12 13.5C12 12.9485 12.4487 12.5 13 12.5C13.5513 12.5 14 12.9485 14 13.5C14 14.0515 13.5513 14.5 13 14.5Z" fill="#01385C" stroke="#01385C" stroke-width="0.8"/>
                </svg>  
                <?php echo $footage_project ?>
              </div>
            </div>
            <?php endif; ?>
            <?php if($advance_project) :?>
            <div class="project-detail-about-list-item --advance">
              <span class="project-detail-about-list-item-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 53.6905C41.9646 53.6905 53.6905 41.9646 53.6905 27.5C53.6905 13.0354 41.9646 1.30952 27.5 1.30952C13.0354 1.30952 1.30952 13.0354 1.30952 27.5C1.30952 41.9646 13.0354 53.6905 27.5 53.6905ZM27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55Z" fill="#D6D6D6"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M39.7783 3.79684C35.9612 1.77521 31.5989 0.880027 26.9645 0.880027V0C31.7437 0 36.2449 0.962806 40.1836 3.04882C43.4637 4.78603 46.3533 7.14944 48.6892 9.97735C50.7215 12.4377 52.335 15.25 53.4217 18.3079C54.4441 21.185 55 24.2788 55 27.5C55 31.375 54.1956 35.0654 52.7425 38.4158C51.3659 41.5898 49.4075 44.4581 47.0001 46.8897C44.5619 49.3524 41.5797 51.3688 38.3573 52.8C34.854 54.3559 31.1741 55 27.0862 55C23.6102 55 20.4348 54.384 17.3621 53.24C15.6812 52.6142 14.0092 51.7382 12.5 50.82L12.942 49.94C14.405 50.83 15.9541 51.7535 17.5831 52.36C20.5606 53.4686 23.5934 54.12 26.9645 54.12C30.9288 54.12 34.5204 53.4278 37.9153 51.92C41.0386 50.5328 44.0226 48.684 46.3868 46.2961C48.721 43.9384 50.5043 41.1363 51.8385 38.06C53.2466 34.8133 54.1418 31.2579 54.1418 27.5C54.1418 24.3759 53.6027 21.3772 52.612 18.5893C51.5588 15.6257 49.9949 12.8996 48.0245 10.5141C45.7596 7.77216 42.9579 5.48081 39.7783 3.79684Z" fill="#00B2E3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M26.8598 0H27.0782C31.8301 0 36.3144 0.961131 40.2433 3.05019C43.51 4.78719 46.3879 7.15026 48.7143 9.9778C50.7383 12.4379 52.3454 15.2501 53.4279 18.3081C54.4464 21.1854 55 24.2792 55 27.5C55 31.3746 54.1988 35.065 52.7513 38.4157C51.3801 41.5897 49.4295 44.4578 47.032 46.889C44.6024 49.3527 41.6326 51.3683 38.425 52.7985C34.9298 54.357 31.262 55 27.1984 55C23.7364 55 20.5727 54.3838 17.513 53.2401C15.8351 52.613 14.17 51.7367 12.6711 50.8211L12.5 50.7166L13.1328 49.4518L13.3357 49.5757C14.7829 50.4596 16.2969 51.3649 17.8844 51.9583C20.8062 53.0504 23.7771 53.6905 27.0782 53.6905C30.9687 53.6905 34.487 53.0087 37.8103 51.5269C40.8793 50.1584 43.8029 48.3381 46.1149 45.9937C48.3995 43.6769 50.1476 40.9209 51.457 37.8897C52.8389 34.6909 53.7152 31.1932 53.7152 27.5C53.7152 24.4259 53.1869 21.4755 52.216 18.7328C51.184 15.8172 49.6513 13.1348 47.7201 10.7876C45.5001 8.08943 42.7541 5.83468 39.6377 4.17764C35.9037 2.19221 31.6299 1.30955 27.0782 1.30955H26.8598V0ZM27.2965 0.437195V0.873714C31.8229 0.901585 36.0933 1.79858 39.8428 3.79228C43.0103 5.47646 45.8012 7.76804 48.0574 10.5103C50.0204 12.8961 51.5784 15.6228 52.6278 18.5872C53.6149 21.376 54.1519 24.3756 54.1519 27.5C54.1519 31.263 53.2591 34.8196 51.858 38.0627C50.5307 41.1352 48.7545 43.9389 46.4259 46.3001C44.0657 48.6936 41.0919 50.5416 37.9883 51.9255C34.6023 53.4353 31.0223 54.127 27.0782 54.127C23.717 54.127 20.6942 53.4745 17.7314 52.3671C16.1756 51.7856 14.6966 50.916 13.3109 50.0719L13.0703 50.5528C14.5084 51.4207 16.0851 52.2404 17.666 52.8313C20.679 53.9575 23.791 54.5635 27.1984 54.5635C31.2138 54.5635 34.8187 53.9286 38.2471 52.3999C41.408 50.9905 44.3319 49.0052 46.7209 46.5826C49.0811 44.1892 51.0009 41.3662 52.3503 38.2427C53.7747 34.9456 54.5632 31.3139 54.5632 27.5C54.5632 24.3295 54.0183 21.2849 53.0161 18.4537C51.9509 15.4444 50.3693 12.6766 48.3769 10.255C46.0868 7.47165 43.2539 5.14542 40.0381 3.43556C36.2428 1.41753 31.9084 0.466245 27.2965 0.437195Z" fill="#00B2E3"/>
                </svg>
                <div class="project-detail-about-list-item-icon-txt">
                  <div class="_symbol1"><?php echo $advance_project ?></div>
                  <div class="_symbol2">%</div>
                </div>
              </span>
            
              <div class="project-detail-about-list-item-label"><?php _e( 'Avance de obra', 'ciudaris')?></div>
            </div>
            <?php endif; ?>
          </div>

          <?php if($subtitle_about_project || $title_about_project || $text_about_project) :?>
          <div class="project-detail-about-title general-title --version8">
            <hgroup class="general-title-titles">
              <div class="general-title-title">
                <h2 class="general-title-title-text --uppercase"><?php echo $subtitle_about_project ?></h2>
              </div>
              <div class="general-title-subtitle">
                <h3 class="general-title-subtitle-text"><?php echo $title_about_project ?></h3>
              </div>
            </hgroup>
            <div class="general-title-text">
              <?php echo $text_about_project ?>
            </div>
          </div>
          <?php endif; ?>
          <div class="project-detail-about-details">
            <?php if($flats_project) :?>
            <div class="project-detail-about-detail">
              <span class="project-detail-about-detail-text"><?php echo $flats_project ?></span>
              <div class="project-detail-about-detail-txt"><?php _e('Pisos construidos','ciudaris') ?></div>
            </div>
            <?php endif; ?>
            <?php if($departaments_project) :?>
            <div class="project-detail-about-detail">
              <span class="project-detail-about-detail-text"><?php echo $departaments_project ?></span>
              <div class="project-detail-about-detail-txt"><?php _e('Departamentos','ciudaris') ?></div>
            </div>
            <?php endif; ?>
          </div>
          <div class="project-detail-about-buttons">
            <?php if($brochure_project) :?>
            <a class="project-detail-about-button general-button --black --icon-right --type0 --lightblue-noborder" href="<?php echo $brochure_project?>" download>
              <span class="general-button-text"><?php _e('Brochure','ciudaris') ?></span>
              <div class="general-button-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <path d="M9.34958 10.3486C9.25983 10.4451 9.13301 10.5 9 10.5C8.86699 10.5 8.74017 10.4451 8.65042 10.3486L6.1241 7.6331C5.94757 7.44335 5.96098 7.1489 6.15406 6.97541C6.34714 6.80193 6.64675 6.81509 6.82328 7.00483L8.52632 8.83543V1.96552C8.52632 1.70842 8.7384 1.5 9 1.5C9.2616 1.5 9.47368 1.70842 9.47368 1.96552V8.83543L11.1767 7.00483C11.3533 6.81509 11.6529 6.80193 11.846 6.97541C12.039 7.1489 12.0524 7.44335 11.8759 7.6331L9.34958 10.3486Z" fill="#00B2E3" stroke="#00B2E3" stroke-width="0.5"/>
                  <path d="M3.92308 9C3.92308 8.72387 3.71644 8.5 3.46154 8.5C3.20664 8.5 3 8.72387 3 9V9.0366C2.99999 9.94833 2.99998 10.6832 3.0717 11.2612C3.14618 11.8613 3.3055 12.3665 3.67591 12.7677C4.04632 13.1691 4.5127 13.3417 5.06662 13.4223C5.60014 13.5 6.27849 13.5 7.12008 13.5H10.8799C11.7215 13.5 12.3999 13.5 12.9334 13.4223C13.4873 13.3417 13.9537 13.1691 14.3241 12.7677C14.6945 12.3665 14.8538 11.8613 14.9283 11.2612C15 10.6832 15 9.94833 15 9.0366V9C15 8.72387 14.7934 8.5 14.5385 8.5C14.2836 8.5 14.0769 8.72387 14.0769 9C14.0769 9.95693 14.0759 10.6243 14.0135 11.1279C13.9527 11.6171 13.8417 11.8761 13.6714 12.0607C13.501 12.2452 13.262 12.3655 12.8104 12.4313C12.3455 12.4989 11.7295 12.5 10.8462 12.5H7.15385C6.27052 12.5 5.65444 12.4989 5.18961 12.4313C4.73806 12.3655 4.49894 12.2452 4.32862 12.0607C4.15831 11.8761 4.04726 11.6171 3.98655 11.1279C3.92406 10.6243 3.92308 9.95693 3.92308 9Z" fill="#00B2E3" stroke="#00B2E3" stroke-width="0.5"/>
                </svg>
              </div>
            </a>
            <?php endif; ?>
            <?php if($information_legal_project) :?>
            <a class="project-detail-about-button general-title-button general-button --type1 --border-blue" href="<?php echo $information_legal_project ?>">
              <span class="general-button-text"><?php _e( 'Información legal','ciudaris')?></span>
            </a>
            <?php endif; ?>
          </div>
          <div class="project-detail-about-financed-items">
            <?php if($Financed_by_project) :?>
            <div class="project-detail-about-item --Financed">
              <span class="project-detail-about-item-text"><?php _e('Financiado por','ciudaris') ?></span>
              <?php foreach($Financed_by_project as $item) :?>
              <?php $image = $item['image'] ?>
              <figure class="project-detail-about-item-image">
                <img class="project-detail-about-item-img" src="<?php echo $image ?>" alt="Ciudaris">
              </figure>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php if($endorsed_by_project) :?>
            <div class="project-detail-about-item --endorsed">
              <span class="project-detail-about-item-text"><?php _e('Avalado por','ciudaris') ?></span>
              <?php foreach($endorsed_by_project as $item) :?>
              <?php $image = $item['image'] ?>
              <figure class="project-detail-about-item-image">
                <img class="project-detail-about-item-img" src="<?php echo $image ?>" alt="Ciudaris">
              </figure>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
          
        </div>
        <div class="project-detail-about-content">
          <div class="project-detail-about-list-items">
            <?php if($price_project) :?>
            <div class="project-detail-about-list-item --price">
              <div class="project-detail-about-list-item-label"><?php _e( 'Precio desde', 'ciudaris')?></div>
              <div class="project-detail-about-list-item-big"><?php echo $price_project ?></div>
            </div>
            <?php endif; ?>
            <?php if($bedrooms_project) :?>
            <div class="project-detail-about-list-item --bedrooms">
              <div class="project-detail-about-list-item-label"><?php _e( 'Dormitorios', 'ciudaris')?></div>
              <div class="project-detail-about-list-item-val">
                <svg class="_icon" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path d="M2 18.5V13.5C2 13.05 2.09167 12.6417 2.275 12.275C2.45833 11.9083 2.7 11.5833 3 11.3V8.5C3 7.66667 3.29167 6.95833 3.875 6.375C4.45833 5.79167 5.16667 5.5 6 5.5H10C10.3833 5.5 10.7417 5.57083 11.075 5.7125C11.4083 5.85417 11.7167 6.05 12 6.3C12.2833 6.05 12.5917 5.85417 12.925 5.7125C13.2583 5.57083 13.6167 5.5 14 5.5H18C18.8333 5.5 19.5417 5.79167 20.125 6.375C20.7083 6.95833 21 7.66667 21 8.5V11.3C21.3 11.5833 21.5417 11.9083 21.725 12.275C21.9083 12.6417 22 13.05 22 13.5V18.5C22 18.7833 21.9042 19.0208 21.7125 19.2125C21.5208 19.4042 21.2833 19.5 21 19.5C20.7167 19.5 20.4792 19.4042 20.2875 19.2125C20.0958 19.0208 20 18.7833 20 18.5V17.5H4V18.5C4 18.7833 3.90417 19.0208 3.7125 19.2125C3.52083 19.4042 3.28333 19.5 3 19.5C2.71667 19.5 2.47917 19.4042 2.2875 19.2125C2.09583 19.0208 2 18.7833 2 18.5ZM13 10.5H19V8.5C19 8.21667 18.9042 7.97917 18.7125 7.7875C18.5208 7.59583 18.2833 7.5 18 7.5H14C13.7167 7.5 13.4792 7.59583 13.2875 7.7875C13.0958 7.97917 13 8.21667 13 8.5V10.5ZM5 10.5H11V8.5C11 8.21667 10.9042 7.97917 10.7125 7.7875C10.5208 7.59583 10.2833 7.5 10 7.5H6C5.71667 7.5 5.47917 7.59583 5.2875 7.7875C5.09583 7.97917 5 8.21667 5 8.5V10.5ZM4 15.5H20V13.5C20 13.2167 19.9042 12.9792 19.7125 12.7875C19.5208 12.5958 19.2833 12.5 19 12.5H5C4.71667 12.5 4.47917 12.5958 4.2875 12.7875C4.09583 12.9792 4 13.2167 4 13.5V15.5Z" fill="#01385C"/>
                </svg>  
                <?php echo $bedrooms_project ?>
              </div>
            </div>
            <?php endif; ?>
            <?php if($footage_project) :?>
            <div class="project-detail-about-list-item --footage">
              <div class="project-detail-about-list-item-label"><?php _e( 'Metraje', 'ciudaris')?></div>
              <div class="project-detail-about-list-item-val">
                <svg class="_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                  <path d="M13.5 11.571V5.42902C14.3603 5.20541 15 4.42917 15 3.5C15 2.39722 14.103 1.5 13 1.5C12.0706 1.5 11.2946 2.13986 11.071 3H4.92899C4.70541 2.13986 3.92935 1.5 3 1.5C1.89697 1.5 1 2.39722 1 3.5C1 4.42917 1.63974 5.20541 2.5 5.42902V11.571C1.63974 11.7946 1 12.5708 1 13.5C1 14.6028 1.89697 15.5 3 15.5C3.92935 15.5 4.70541 14.8601 4.92899 14H11.071C11.2946 14.8601 12.0706 15.5 13 15.5C14.103 15.5 15 14.6028 15 13.5C15 12.5708 14.3603 11.7946 13.5 11.571ZM11.071 13H4.92899C4.74719 12.3006 4.19949 11.7528 3.5 11.571V5.42902C4.19949 5.24719 4.74719 4.6994 4.92899 4H11.071C11.2528 4.6994 11.8005 5.24719 12.5 5.42902V11.571C11.8005 11.7528 11.2528 12.3006 11.071 13ZM13 2.5C13.5513 2.5 14 2.94849 14 3.5C14 4.05151 13.5513 4.5 13 4.5C12.4487 4.5 12 4.05151 12 3.5C12 2.94849 12.4487 2.5 13 2.5ZM2 3.5C2 2.94849 2.44873 2.5 3 2.5C3.55127 2.5 4 2.94849 4 3.5C4 4.05151 3.55127 4.5 3 4.5C2.44873 4.5 2 4.05151 2 3.5ZM3 14.5C2.44873 14.5 2 14.0515 2 13.5C2 12.9485 2.44873 12.5 3 12.5C3.55127 12.5 4 12.9485 4 13.5C4 14.0515 3.55127 14.5 3 14.5ZM13 14.5C12.4487 14.5 12 14.0515 12 13.5C12 12.9485 12.4487 12.5 13 12.5C13.5513 12.5 14 12.9485 14 13.5C14 14.0515 13.5513 14.5 13 14.5Z" fill="#01385C" stroke="#01385C" stroke-width="0.8"/>
                </svg>  
                <?php echo $footage_project ?>
              </div>
            </div>
            <?php endif; ?>
            <?php if($advance_project) :?>
            <div class="project-detail-about-list-item --advance">
              <span class="project-detail-about-list-item-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 53.6905C41.9646 53.6905 53.6905 41.9646 53.6905 27.5C53.6905 13.0354 41.9646 1.30952 27.5 1.30952C13.0354 1.30952 1.30952 13.0354 1.30952 27.5C1.30952 41.9646 13.0354 53.6905 27.5 53.6905ZM27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55Z" fill="#D6D6D6"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M39.7783 3.79684C35.9612 1.77521 31.5989 0.880027 26.9645 0.880027V0C31.7437 0 36.2449 0.962806 40.1836 3.04882C43.4637 4.78603 46.3533 7.14944 48.6892 9.97735C50.7215 12.4377 52.335 15.25 53.4217 18.3079C54.4441 21.185 55 24.2788 55 27.5C55 31.375 54.1956 35.0654 52.7425 38.4158C51.3659 41.5898 49.4075 44.4581 47.0001 46.8897C44.5619 49.3524 41.5797 51.3688 38.3573 52.8C34.854 54.3559 31.1741 55 27.0862 55C23.6102 55 20.4348 54.384 17.3621 53.24C15.6812 52.6142 14.0092 51.7382 12.5 50.82L12.942 49.94C14.405 50.83 15.9541 51.7535 17.5831 52.36C20.5606 53.4686 23.5934 54.12 26.9645 54.12C30.9288 54.12 34.5204 53.4278 37.9153 51.92C41.0386 50.5328 44.0226 48.684 46.3868 46.2961C48.721 43.9384 50.5043 41.1363 51.8385 38.06C53.2466 34.8133 54.1418 31.2579 54.1418 27.5C54.1418 24.3759 53.6027 21.3772 52.612 18.5893C51.5588 15.6257 49.9949 12.8996 48.0245 10.5141C45.7596 7.77216 42.9579 5.48081 39.7783 3.79684Z" fill="#00B2E3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M26.8598 0H27.0782C31.8301 0 36.3144 0.961131 40.2433 3.05019C43.51 4.78719 46.3879 7.15026 48.7143 9.9778C50.7383 12.4379 52.3454 15.2501 53.4279 18.3081C54.4464 21.1854 55 24.2792 55 27.5C55 31.3746 54.1988 35.065 52.7513 38.4157C51.3801 41.5897 49.4295 44.4578 47.032 46.889C44.6024 49.3527 41.6326 51.3683 38.425 52.7985C34.9298 54.357 31.262 55 27.1984 55C23.7364 55 20.5727 54.3838 17.513 53.2401C15.8351 52.613 14.17 51.7367 12.6711 50.8211L12.5 50.7166L13.1328 49.4518L13.3357 49.5757C14.7829 50.4596 16.2969 51.3649 17.8844 51.9583C20.8062 53.0504 23.7771 53.6905 27.0782 53.6905C30.9687 53.6905 34.487 53.0087 37.8103 51.5269C40.8793 50.1584 43.8029 48.3381 46.1149 45.9937C48.3995 43.6769 50.1476 40.9209 51.457 37.8897C52.8389 34.6909 53.7152 31.1932 53.7152 27.5C53.7152 24.4259 53.1869 21.4755 52.216 18.7328C51.184 15.8172 49.6513 13.1348 47.7201 10.7876C45.5001 8.08943 42.7541 5.83468 39.6377 4.17764C35.9037 2.19221 31.6299 1.30955 27.0782 1.30955H26.8598V0ZM27.2965 0.437195V0.873714C31.8229 0.901585 36.0933 1.79858 39.8428 3.79228C43.0103 5.47646 45.8012 7.76804 48.0574 10.5103C50.0204 12.8961 51.5784 15.6228 52.6278 18.5872C53.6149 21.376 54.1519 24.3756 54.1519 27.5C54.1519 31.263 53.2591 34.8196 51.858 38.0627C50.5307 41.1352 48.7545 43.9389 46.4259 46.3001C44.0657 48.6936 41.0919 50.5416 37.9883 51.9255C34.6023 53.4353 31.0223 54.127 27.0782 54.127C23.717 54.127 20.6942 53.4745 17.7314 52.3671C16.1756 51.7856 14.6966 50.916 13.3109 50.0719L13.0703 50.5528C14.5084 51.4207 16.0851 52.2404 17.666 52.8313C20.679 53.9575 23.791 54.5635 27.1984 54.5635C31.2138 54.5635 34.8187 53.9286 38.2471 52.3999C41.408 50.9905 44.3319 49.0052 46.7209 46.5826C49.0811 44.1892 51.0009 41.3662 52.3503 38.2427C53.7747 34.9456 54.5632 31.3139 54.5632 27.5C54.5632 24.3295 54.0183 21.2849 53.0161 18.4537C51.9509 15.4444 50.3693 12.6766 48.3769 10.255C46.0868 7.47165 43.2539 5.14542 40.0381 3.43556C36.2428 1.41753 31.9084 0.466245 27.2965 0.437195Z" fill="#00B2E3"/>
                </svg>
                <div class="project-detail-about-list-item-icon-txt">
                  <div class="_symbol1"><?php echo $advance_project ?></div>
                  <div class="_symbol2">%</div>
                </div>
              </span>
            
              <div class="project-detail-about-list-item-label"><?php _e( 'Avance de obra', 'ciudaris')?></div>
            </div>
            <?php endif; ?>
          </div>
          <?php if($video_by_project) :?>
          <div class="project-detail-about-video">
            <video class="project-detail-about-video-video" preload="metadata" autoplay loop muted playsinline>
              <source src="<?php echo esc_url($video_by_project); ?>" type="video/mp4">
            </video>
          </div>
          <?php endif; ?>
          <?php if($list_common_areas_project) :?>
          <div class="project-detail-about-areas">
            <?php if($title_common_areas_project) :?>
            <div class="project-detail-about-areas-title general-title --version11">
              <div class="general-title-titles">
                <div class="general-title-subtitle">
                  <h3 class="general-title-subtitle-text"><?php echo $title_common_areas_project ?></h3>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <div class="project-detail-about-areas-items">
              <?php foreach($list_common_areas_project as $item ) :?>
              <?php
              $icon = $item['icon'];
              $text = $item['text'];  
              ?>
              <div class="project-detail-about-areas-item">
                <figure class="project-detail-about-areas-item-image">
                  <img src="<?php echo $icon ?>" alt="<?php echo $text ?>" class="project-detail-about-areas-item-img" loading="lazy">
                </figure>
                <div class="project-detail-about-areas-item-text"><?php echo $text ?></div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
      
      
    </div>
  </div>
  <!-- -->
  <!-- Certifications -->
  <?php get_template_part( 'templates/certifications/content', 'certifications'); ?>
  <!-- -->
  <!-- Gallery -->
  <div class="project-detail-gallery project--gallery">
    <div class="project-detail-gallery-container">
      <div class="project-detail-gallery-title-tab">
        <div class="project-detail-gallery-title-tab-container main-wrapper-container --default2">
          <?php if($title_gallery_projects || $subtitle_gallery_projects) :?>
          <div class="project-detail-gallery-title general-title --version8">
            <hgroup class="general-title-titles">
              <div class="general-title-title">
                <h2 class="general-title-title-text --uppercase">
                  <?php echo $title_gallery_projects ?></h2>
              </div>
              <div class="general-title-subtitle">
                <h3 class="general-title-subtitle-text">
                  <?php echo $subtitle_gallery_projects ?></h3>
              </div>
            </hgroup>
          </div>
          <?php endif; ?>
          <?php if(count($list_gallery_project)>0) :?>
          <div class="project-detail-gallery-tab ">
            <div class="project-detail-gallery-tab-select">
            </div>
            <div class="project-detail-gallery-tab-links --list-none">
              <ul class="project-detail-gallery-tab-links-ul">
                <?php foreach($list_gallery_project as $item) :?>
                <?php
                $title = $item['title'];
                ?>
                <li class="project-detail-gallery-tab-link project--gallery-link">
                  <?php echo $title ?>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php if(count($list_gallery_project)>0) :?>
      <div class="project-detail-gallery-content">
        <div class="project-detail-gallery-tab-content">
          <?php $i=0; ?>
          <?php foreach($list_gallery_project as $item) :?>
          <?php
            $title = $item['title'];
            $list = $item['list'];
          ?>
          <div class="project-detail-gallery-tab-content-item project--gallery-content">
            <div class="project-detail-gallery-tab-carrousel-top project-gallery--top<?php echo $i ?> --list-none">
              <ul class="swiper-wrapper">
                <?php foreach($list as $subitem) :?>
                <?php
                $image_list = $subitem['image_list'];
                $text_list = $subitem['text_list'];
                ?>
                <li class="swiper-slide">
                  <div class="project-detail-gallery-tab-carrousel-top-item">
                    <figure class="project-detail-gallery-tab-carrousel-top-item-image" style="background-image: url('<?php echo $image_list ?>')">
                      <span class="project-detail-gallery-tab-carrousel-top-icon icon-zoom_icon"></span>
                    </figure>
                    <div class="project-detail-gallery-tab-carrousel-top-item-content">
                      <div class="project-detail-gallery-tab-carrousel-top-item-pagination-text">
                        <div class="project-detail-gallery-tab-carrousel-top-item-pagination project-gallery-top--pagination<?php echo $i ?>"></div>
                        <?php if($text_list) :?>
                        <div class="project-detail-gallery-tab-carrousel-top-item-text"><?php echo $text_list ?></div>
                        <?php endif ?>
                      </div>
                    </div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
              <div class="general-arrows project-detail-gallery-tab-carrousel-top-item-arrows">
                <div class="general-arrow --type2 project-gallery-top--prev<?php echo $i ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1944 4.31775C13.9692 4.06058 13.5779 4.03452 13.3205 4.25955L7.06931 9.72411C6.59931 10.135 6.59931 10.8654 7.06931 11.2763L13.3205 16.7409C13.5779 16.9659 13.9692 16.9398 14.1944 16.6827C14.4197 16.4255 14.3936 16.0346 14.1361 15.8095L8.06255 10.5002L14.1361 5.19086C14.3936 4.96583 14.4197 4.57493 14.1944 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
                  </svg>
                </div>
                <div class="general-arrow --type2 project-gallery-top--next<?php echo $i ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85833 4.31775C7.08357 4.06058 7.47484 4.03452 7.73226 4.25955L13.9834 9.72411C14.4534 10.135 14.4534 10.8654 13.9834 11.2763L7.73226 16.7409C7.47484 16.9659 7.08357 16.9398 6.85833 16.6827C6.63308 16.4255 6.65917 16.0346 6.91659 15.8095L12.9902 10.5002L6.91659 5.19086C6.65917 4.96583 6.63308 4.57493 6.85833 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="project-detail-gallery-tab-carrousel-thumbnail project-gallery--thumbnail<?php echo $i ?> --list-none">
              <ul class="swiper-wrapper">
                <?php foreach($list as $subitem) :?>
                <?php $image_list = $subitem['image_list']; ?>
                <li class="swiper-slide">
                  <div class="project-detail-gallery-tab-carrousel-thumbnail-item">
                    <figure class="project-detail-gallery-tab-carrousel-thumbnail-item-image" style="background-image: url('<?php echo $image_list ?>')"></figure>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <?php $i++ ?>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <!-- -->
  <!-- Quote -->
  <div class="project-detail-form-carrousel-block">
    <div class="project-detail-quote-form-carrousel-container main-wrapper-container --default2">
      <div class="quote-page-form-carrousel-block">
        <div class="project-detail-quote-form">
          <?php if($title_quote_projects || $text_quote_projects) :?>
          <div class="project-detail-quote-form-title general-title --version12">
            <div class="general-title-titles">
              <div class="general-title-subtitle">
                <h2 class="general-title-subtitle-text"><?php  echo $title_quote_projects ?></h2>
              </div> 
            </div>
            <div class="general-title-text">
              <?php echo $text_quote_projects ?>
            </div>
          </div>
          <?php endif ?>
          <?php if($form_quote_projects) :?>
          <div class="project-detail-quote-form-form">
            <?php
            setup_postdata( $form_quote_projects ); 
            $form_quote_projects_ID = $form_quote_projects->ID;
            echo do_shortcode( '[contact-form-7 id="'.$form_quote_projects_ID.'" ]' ); 
            wp_reset_postdata(); ?>
          </div>
          <?php endif ?>
        </div>
        
        <div class="project-detail-quote-carrousel">
          <div class="project-detail-quote-carrousel-slide quote--carrousel --list-none" id="quote--carrousel-popup">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <div class="project-detail-quote-carrousel-item">
                  <figure class="project-detail-quote-carrousel-item-image">
                    <img class="project-detail-quote-carrousel-item-img" width="700" height="431" src="<?php echo $image_quote_g_g ?>" alt="Ciudaris">
                  </figure>
                  <a style="display:none" href="<?php echo $image_quote_g_g ?>" class="project-detail-quote-carrousel-item-image quote--carrousel-image">
                    <img class="project-detail-quote-carrousel-item-img" width="700" height="431" src="<?php echo $image_quote_g_g ?>" alt="Ciudaris">
                    <span class="project-detail-quote-carrousel-item-icon icon-zoom_icon"></span>
                  </a>
                </div>
              </li>
              
            </ul>
          </div>
          <div class="general-arrows project-detail-quote-carrousel-arrows" style="display:none">
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
  <!-- 360-->
  <?php if($url_360_project ) :?>
  <div class="project-detail-360">
    <div class="project-detail-360-item">
      <div class="project-detail-360-background" style="background-image: url('<?php echo $background_360_project ?>')">
        <div class="project-detail-360-info" id="project--360">
          <div class="project-detail-360-icon">
            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_b_185_12394)">
              <circle cx="50" cy="50" r="45" fill="white"/>
              </g>
              <path d="M39.822 49.8393H34.5711C34.2301 49.8393 33.9031 49.9748 33.662 50.2159C33.4209 50.457 33.2854 50.784 33.2854 51.125C33.2854 51.466 33.4209 51.793 33.662 52.0341C33.9031 52.2753 34.2301 52.4107 34.5711 52.4107H39.822C40.6106 52.4114 41.3672 52.099 41.9256 51.5421C42.4839 50.9851 42.7983 50.2293 42.7997 49.4407V38.939C42.799 38.1513 42.486 37.396 41.9292 36.8387C41.3724 36.2815 40.6174 35.9678 39.8297 35.9664H34.5711C34.2301 35.9664 33.9031 36.1019 33.662 36.343C33.4209 36.5841 33.2854 36.9112 33.2854 37.2521C33.2854 37.5931 33.4209 37.9202 33.662 38.1613C33.9031 38.4024 34.2301 38.5379 34.5711 38.5379H39.822C39.9279 38.5385 40.0293 38.5811 40.104 38.6563C40.1786 38.7314 40.2205 38.8331 40.2205 38.939V42.8964H34.5711C34.2301 42.8964 33.9031 43.0319 33.662 43.273C33.4209 43.5141 33.2854 43.8412 33.2854 44.1821C33.2854 44.5231 33.4209 44.8502 33.662 45.0913C33.9031 45.3324 34.2301 45.4679 34.5711 45.4679H40.2283V49.433C40.2293 49.4866 40.2195 49.54 40.1995 49.5897C40.1794 49.6395 40.1495 49.6847 40.1116 49.7226C40.0737 49.7606 40.0285 49.7905 39.9787 49.8105C39.9289 49.8305 39.8756 49.8403 39.822 49.8393Z" fill="#01385C"/>
              <path d="M54.9318 49.4407V45.8741C54.9324 45.0855 54.62 44.3289 54.0631 43.7706C53.5062 43.2122 52.7504 42.8978 51.9617 42.8964H47.994V38.939C47.994 38.8326 48.0363 38.7306 48.1115 38.6554C48.1868 38.5801 48.2888 38.5379 48.3952 38.5379H53.646C53.987 38.5379 54.3141 38.4024 54.5552 38.1613C54.7963 37.9202 54.9318 37.5931 54.9318 37.2521C54.9318 36.9112 54.7963 36.5841 54.5552 36.343C54.3141 36.1019 53.987 35.9664 53.646 35.9664H48.3952C47.6072 35.9678 46.8519 36.2814 46.2948 36.8386C45.7376 37.3958 45.424 38.151 45.4226 38.939V49.4407C45.4246 50.2282 45.7386 50.9829 46.2957 51.5395C46.8528 52.0961 47.6077 52.4094 48.3952 52.4107H51.9617C52.749 52.4094 53.5037 52.096 54.0604 51.5393C54.617 50.9826 54.9304 50.228 54.9318 49.4407ZM52.3603 49.4407C52.3603 49.5464 52.3183 49.6478 52.2436 49.7226C52.1688 49.7973 52.0675 49.8393 51.9617 49.8393H48.3952C48.3426 49.8396 48.2905 49.8296 48.2419 49.8097C48.1932 49.7898 48.149 49.7605 48.1117 49.7235C48.0744 49.6864 48.0448 49.6424 48.0246 49.5938C48.0044 49.5453 47.994 49.4933 47.994 49.4407V45.4679H51.9617C52.0675 45.4679 52.1688 45.5099 52.2436 45.5846C52.3183 45.6593 52.3603 45.7607 52.3603 45.8664V49.4407Z" fill="#01385C"/>
              <path d="M61.3475 52.4107H63.2838C64.2879 52.4107 65.251 52.012 65.9612 51.3022C66.6715 50.5925 67.0708 49.6297 67.0715 48.6256V39.7516C67.0702 38.7477 66.6706 37.7853 65.9605 37.0757C65.2504 36.366 64.2877 35.9671 63.2838 35.9664H61.3475C60.3438 35.9678 59.3816 36.3669 58.6716 37.0764C57.9617 37.7859 57.5619 38.7479 57.5598 39.7516V48.6256C57.5612 49.6295 57.9608 50.5918 58.6709 51.3015C59.381 52.0111 60.3436 52.41 61.3475 52.4107ZM60.1312 39.7516C60.1319 39.4294 60.2604 39.1207 60.4884 38.8932C60.7164 38.6657 61.0254 38.5379 61.3475 38.5379H63.2838C63.6059 38.5379 63.9149 38.6657 64.143 38.8932C64.371 39.1207 64.4994 39.4294 64.5001 39.7516V48.6256C64.4994 48.9477 64.371 49.2564 64.143 49.484C63.9149 49.7115 63.6059 49.8393 63.2838 49.8393H61.3475C61.0254 49.8393 60.7164 49.7115 60.4884 49.484C60.2604 49.2564 60.1319 48.9477 60.1312 48.6256V39.7516Z" fill="#01385C"/>
              <path d="M70.944 37.8153C71.6339 37.8158 72.3084 37.6116 72.8822 37.2287C73.456 36.8458 73.9033 36.3012 74.1675 35.664C74.4317 35.0267 74.501 34.3254 74.3666 33.6488C74.2321 32.9722 73.8999 32.3506 73.4121 31.8628C72.9243 31.375 72.3028 31.0429 71.6262 30.9084C70.9496 30.774 70.2483 30.8432 69.611 31.1075C68.9738 31.3717 68.4292 31.819 68.0463 32.3928C67.6633 32.9666 67.4592 33.6411 67.4597 34.331C67.4611 35.2547 67.8286 36.1401 68.4817 36.7932C69.1349 37.4464 70.0203 37.8139 70.944 37.8153ZM70.944 33.4156C71.1252 33.415 71.3024 33.4683 71.4533 33.5686C71.6042 33.6689 71.7219 33.8117 71.7916 33.9789C71.8613 34.1461 71.8798 34.3302 71.8447 34.508C71.8097 34.6857 71.7227 34.8491 71.5948 34.9774C71.4669 35.1057 71.3038 35.1931 71.1261 35.2286C70.9485 35.2642 70.7643 35.2462 70.5968 35.177C70.4294 35.1078 70.2863 34.9904 70.1856 34.8398C70.0849 34.6892 70.0311 34.5121 70.0311 34.331C70.0308 34.2109 70.0542 34.0919 70.0999 33.9809C70.1456 33.8698 70.2128 33.7689 70.2976 33.6838C70.3824 33.5988 70.4832 33.5313 70.5941 33.4853C70.705 33.4392 70.8239 33.4156 70.944 33.4156Z" fill="#01385C"/>
              <path d="M46.5129 59.4255C46.3943 59.3027 46.2525 59.2048 46.0956 59.1374C45.9387 59.07 45.77 59.0345 45.5993 59.0331C45.4286 59.0316 45.2593 59.0641 45.1013 59.1287C44.9433 59.1934 44.7997 59.2889 44.679 59.4096C44.5583 59.5303 44.4628 59.6739 44.3982 59.8319C44.3335 59.9899 44.301 60.1592 44.3025 60.3299C44.304 60.5006 44.3394 60.6693 44.4068 60.8262C44.4742 60.983 44.5721 61.1249 44.6949 61.2435L46.8421 63.3881C31.2489 62.9175 20.4284 59.0115 20.4284 55.7278C20.4284 54.5321 22.2284 52.6627 27.2606 50.9964C27.421 50.9434 27.5694 50.8593 27.6973 50.7489C27.8252 50.6385 27.9302 50.5041 28.0061 50.3532C28.082 50.2022 28.1275 50.0379 28.1399 49.8694C28.1523 49.7009 28.1314 49.5316 28.0784 49.3712C28.0253 49.2108 27.9413 49.0624 27.8309 48.9345C27.7205 48.8066 27.5861 48.7017 27.4351 48.6258C27.2842 48.5499 27.1199 48.5044 26.9514 48.492C26.7829 48.4796 26.6136 48.5005 26.4532 48.5535C20.8295 50.4152 17.8569 52.8941 17.8569 55.7278C17.8569 62.2155 32.8458 65.5635 46.9424 65.9672L44.6949 68.2147C44.4535 68.4557 44.3177 68.7829 44.3175 69.124C44.3173 69.4652 44.4526 69.7925 44.6936 70.0339C44.9347 70.2754 45.2618 70.4111 45.603 70.4114C45.9442 70.4116 46.2715 70.2763 46.5129 70.0352L50.9101 65.6381C51.1511 65.397 51.2865 65.07 51.2865 64.7291C51.2865 64.3882 51.1511 64.0612 50.9101 63.8201L46.5129 59.4255Z" fill="#01385C"/>
              <path d="M73.5463 48.5536C73.3847 48.495 73.213 48.4694 73.0413 48.4783C72.8697 48.4872 72.7015 48.5305 72.5468 48.6055C72.3922 48.6805 72.2541 48.7858 72.1409 48.9152C72.0276 49.0445 71.9414 49.1952 71.8874 49.3584C71.8334 49.5216 71.8127 49.694 71.8265 49.8653C71.8402 50.0367 71.8882 50.2035 71.9676 50.356C72.047 50.5085 72.1562 50.6435 72.2887 50.7531C72.4211 50.8626 72.5742 50.9445 72.7389 50.9939C77.7712 52.6679 79.5712 54.5321 79.5712 55.7279C79.5712 58.8136 70.2061 62.5781 55.0809 63.3213C54.9121 63.3253 54.7457 63.3626 54.5912 63.431C54.4368 63.4993 54.2973 63.5974 54.1808 63.7197C53.9455 63.9666 53.8179 64.2969 53.8261 64.6379C53.8342 64.9789 53.9775 65.3026 54.2245 65.538C54.4714 65.7733 54.8016 65.9009 55.1426 65.8927H55.2043C68.6118 65.2319 82.1426 61.835 82.1426 55.7279C82.1426 52.8941 79.1701 50.4153 73.5463 48.5536Z" fill="#01385C"/>
              <circle cx="50" cy="50" r="49.5" stroke="white"/>
              <defs>
              <filter id="filter0_b_185_12394" x="-5" y="-5" width="110" height="110" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feGaussianBlur in="BackgroundImageFix" stdDeviation="5"/>
              <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_185_12394"/>
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_185_12394" result="shape"/>
              </filter>
              </defs>
            </svg>
          </div>
          <?php if($title_360_project) :?>
          <div class="project-detail-360-title">
            <h3 class="project-detail-360-title-text"><?php echo $title_360_project ?></h3>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <iframe class="project-detail-360-iframe" src="<?php echo $url_360_project ?>" frameborder="0" loading="lazy"></iframe>
    </div>
  </div>
  <?php endif ?>
  <!-- -->
  <!-- Asesor-->
  <div class="project-detail-asesor">
    <div class="project-detail-asesor-container main-wrapper-container --default2">
       <div class="project-detail-asesor-title-carrousel">
          <?php if($title_asesor_projects) :?>
          <div class="project-detail-asesor-title general-title --version10">
            <div class="general-title-titles">
              <div class="general-title-subtitle">
                <h3 class="general-title-subtitle-text"><?php echo $title_asesor_projects ?></h3>
              </div>
            </div>
          </div>
          <?php endif; ?>
          <div class="project-detail-asesor-carrousel project--asesor-carrousel --list-none">
            <ul class="swiper-wrapper">
              <?php foreach($asesor_asesors_project as $asesor) :?>
              <?php
              $ID = $asesor->ID;
              $name_asesor = get_the_title( $ID );
              $image_asesor = get_the_post_thumbnail_url(  $ID  );
              $charge_asesor = get_field( 'charge_asesor',  $ID );
              $telephone_asesor = get_field( 'telephone_asesor',  $ID );
              $whatsapp_asesor = get_field( 'whatsapp_asesor',  $ID );
              $email_asesor = get_field( 'email_asesor',  $ID );
              ?>
              <li class="swiper-slide">
                <div class="project-detail-asesor-item">
                  <div class="project-detail-asesor-item-image-info">
                    <figure class="project-detail-asesor-item-image">
                      <img src="<?php echo $image_asesor ?>" alt="Ciudaris" class="project-detail-asesor-item-img" width="80" height="80" loading="lazy">
                    </figure>
                    <?php if($charge_asesor || $name_asesor ) :?>
                    <div class="project-detail-asesor-item-info">
                      <div class="project-detail-asesor-item-name"><?php echo $name_asesor ?></div>
                      <div class="project-detail-asesor-item-charge"><?php echo $charge_asesor ?></div>
                    </div>
                    <?php endif; ?>
                  </div>
                  <div class="project-detail-asesor-item-details">
                    <?php if($telephone_asesor) :?>
                    <a class="project-detail-asesor-item-detail-item --telephone" href="tel:<?php echo $telephone_asesor ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                        <rect width="26.4" height="26.4" transform="translate(0.300049 0.400024)" fill="#00B2E3"/>
                        <path d="M23.0297 21.048C23.0297 21.048 21.7551 22.2999 21.4428 22.6669C20.934 23.2098 20.3345 23.4662 19.5486 23.4662C19.4731 23.4662 19.3925 23.4662 19.3169 23.4612C17.8207 23.3657 16.4303 22.7825 15.3875 22.2848C12.5362 20.9073 10.0325 18.9516 7.95192 16.4731C6.23408 14.4069 5.08549 12.4965 4.3248 10.4453C3.8563 9.19349 3.68502 8.21818 3.76058 7.29817C3.81096 6.70997 4.03765 6.22231 4.45578 5.80504L6.17362 4.09071C6.42047 3.85945 6.68243 3.73376 6.93935 3.73376C7.25672 3.73376 7.51364 3.9248 7.67485 4.08568C7.67989 4.09071 7.68492 4.09574 7.68996 4.10076C7.99726 4.38732 8.28944 4.68394 8.59674 5.00066C8.75291 5.16154 8.91411 5.32241 9.07532 5.48832L10.4506 6.86079C10.9846 7.39369 10.9846 7.88638 10.4506 8.41928C10.3045 8.56507 10.1635 8.71086 10.0174 8.85163C9.5942 9.28398 9.92662 8.95224 9.48834 9.34438C9.47827 9.35443 9.46819 9.35946 9.46315 9.36952C9.02991 9.80187 9.11052 10.2242 9.2012 10.5107C9.20623 10.5258 9.21127 10.5409 9.21631 10.556C9.57398 11.4207 10.0777 12.2351 10.8435 13.2054L10.8485 13.2104C12.2389 14.9197 13.7049 16.252 15.322 17.2725C15.5285 17.4033 15.7401 17.5088 15.9416 17.6094C16.123 17.6999 16.2942 17.7853 16.4403 17.8758C16.4605 17.8859 16.4806 17.901 16.5008 17.911C16.6721 17.9965 16.8333 18.0367 16.9995 18.0367C17.4176 18.0367 17.6796 17.7753 17.7652 17.6898L18.7527 16.7044C18.924 16.5335 19.196 16.3273 19.5134 16.3273C19.8257 16.3273 20.0826 16.5234 20.2388 16.6943C20.2438 16.6994 20.2438 16.6994 20.2489 16.7044L23.0246 19.4745C23.5435 19.9873 23.0297 21.048 23.0297 21.048Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </a>
                    <?php endif; ?>
                    <?php if($whatsapp_asesor) :?>
                    <a class="project-detail-asesor-item-detail-item --whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_asesor ?>&amp;text=Hola">
                      <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                        <rect width="26.4" height="26.0394" transform="translate(0.300049 -0.000244141)" fill="#00B2E3"/>
                        <path d="M12.8776 2.18223C7.06747 2.4551 2.48242 7.22775 2.50005 12.965C2.50542 14.7125 2.93312 16.3618 3.68761 17.8192L2.5292 23.3654C2.46654 23.6654 2.74087 23.9281 3.04303 23.8576L8.55299 22.57C9.96859 23.2655 11.5586 23.6672 13.2414 23.6925C19.1799 23.782 24.1316 19.1311 24.3167 13.2758C24.5152 6.99936 19.2633 1.88227 12.8776 2.18223ZM19.4522 18.8904C17.8386 20.482 15.6931 21.3585 13.4111 21.3585C12.0749 21.3585 10.7956 21.0628 9.6087 20.4796L8.84137 20.1026L5.4632 20.892L6.17428 17.4873L5.79625 16.7571C5.18008 15.5669 4.86765 14.2798 4.86765 12.9317C4.86765 10.6808 5.75631 8.56474 7.36995 6.9731C8.96917 5.39572 11.1496 4.50493 13.4113 4.50493C15.6933 4.50498 17.8386 5.3815 19.4523 6.97304C21.0659 8.56464 21.9546 10.6807 21.9546 12.9316C21.9546 15.1624 21.0514 17.313 19.4522 18.8904Z" fill="white"/>
                        <path d="M18.707 15.2654L16.5935 14.6668C16.3156 14.5881 16.0164 14.6659 15.814 14.8693L15.2971 15.3887C15.0792 15.6077 14.7485 15.6781 14.4601 15.563C13.4603 15.1639 11.3572 13.3195 10.8201 12.397C10.6652 12.1309 10.6908 11.7981 10.881 11.5553L11.3323 10.9795C11.509 10.754 11.5463 10.451 11.4294 10.1902L10.5402 8.20659C10.3273 7.73149 9.71172 7.59318 9.30959 7.92864C8.71973 8.42072 8.01985 9.16848 7.93477 9.9969C7.78477 11.4575 8.41983 13.2986 10.8213 15.5094C13.5957 18.0634 15.8174 18.4009 17.2639 18.0552C18.0844 17.8592 18.7401 17.0734 19.1539 16.43C19.436 15.9913 19.2132 15.4088 18.707 15.2654Z" fill="white"/>
                      </svg>
                    </a>
                    <?php endif; ?>
                    <?php if($email_asesor) :?>
                    <a class="project-detail-asesor-item-detail-item --email" href="mailto:<?php echo $email_asesor ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                        <rect width="26.4" height="26.0394" transform="translate(0.300049 0.0847168)" fill="#00B2E3"/>
                        <path d="M6.91563 4.42224C4.48573 4.42224 2.51562 6.36543 2.51562 8.76213V17.4419C2.51562 19.8386 4.48573 21.7818 6.91563 21.7818H20.1157C22.5456 21.7818 24.5157 19.8386 24.5157 17.4419V8.76213C24.5157 6.36543 22.5456 4.42224 20.1157 4.42224H6.91563ZM6.91563 6.59219H20.1157C21.2245 6.59219 22.1408 7.39507 22.2926 8.4475C21.2388 9.41638 19.6724 10.6055 18.6373 11.3389C16.2558 13.0261 14.1602 14.187 13.5156 14.187C12.871 14.187 10.7755 13.0272 8.39403 11.3389C7.35893 10.6055 6.34144 9.81238 5.57474 9.169C5.24804 8.8945 5.00602 8.67316 4.81902 8.49089C4.97082 7.43846 5.80683 6.59219 6.91563 6.59219ZM4.72664 11.3162C7.51844 13.5436 11.6093 16.3439 13.5156 16.3569C14.7575 16.3656 16.8816 15.196 19.0486 13.7194C20.1695 12.9545 21.417 12.0463 22.3168 11.301L22.3157 17.4419C22.3157 18.6408 21.3312 19.6119 20.1157 19.6119H6.91563C5.70013 19.6119 4.71563 18.6408 4.71563 17.4419L4.72664 11.3162Z" fill="white"/>
                      </svg>
                    </a>
                    <?php endif; ?>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
            <div class="general-pagination-slide --type1 project---asesor-pagination project-detail-asesor-pagination"></div>
          </div>
       </div>           
    </div>
  </div>
  <!-- -->
  <!-- Testimonials -->
  <?php get_template_part( 'templates/testimonials/content', 'testimonials'); ?>
  <!-- -->
  <!-- Rel -->
  <div class="project-detail-rel">
    <div class="project-detail-rel-container main-wrapper-container --default">
      <div class="project-detail-rel-title-button">
        <?php if($title_more_projects) :?>
        <div class="project-detail-rel-title general-title --version8">
          <div class="general-title-titles">
            <div class="general-title-subtitle">
              <h3 class="general-title-subtitle-text">
                <?php echo $title_more_projects ?></h3>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php if($button_more_project) :?>
        <?php
        $label = $button_more_project['label'];
        $url = $button_more_project['url'];
        ?>
        <a class="project-detail-rel-button general-title-button general-button --type1 --border-blue" href="<?php echo $url ?>">
          <span class="general-button-text"><?php echo  $label ?></span>
        </a>
        <?php endif; ?>
      </div>
      <?php if($projects_more_project) :?>
      <div class="project-detail-rel-carrousel project--rel-carrousel --list-none">
        <ul class="swiper-wrapper">
          <?php foreach($projects_more_project as $project) :?>
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
          <li class="swiper-slide">
            <article class="project-detail-rel-item">
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
            </article>
          </li>
          <?php endforeach; ?>
        </ul>
        <div class="general-pagination-slide --type1 project--rel-carrousel--pagination project-rel-carrousel-pagination"></div>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <!--  -->
  <!-- Pie -->
  <div class="project-detail-pie general-content">
    <div class="general-content-container main-wrapper-container --default2">
      <?php if($title_pie_project) :?>
        <div class="general-content-title general-title --version8">
          <div class="general-title-titles">
            <div class="general-title-subtitle">
              <h3 class="general-title-subtitle-text">
                <svg class="_icon" xmlns="http://www.w3.org/2000/svg" width="49" height="10" viewBox="0 0 49 10" fill="none">
                  <ellipse cx="5" cy="4.54545" rx="5" ry="4.54545" transform="matrix(-1 8.74228e-08 8.74228e-08 1 49 0)" fill="#FF313A"/>
                  <ellipse cx="5" cy="4.54545" rx="5" ry="4.54545" transform="matrix(-1 8.74228e-08 8.74228e-08 1 30 0)" fill="#00B2E3"/>
                  <ellipse cx="5" cy="5" rx="5" ry="5" transform="matrix(-1 8.74228e-08 8.74228e-08 1 10 0)" fill="#FAB906"/>
                </svg>  
                <?php echo $title_pie_project ?></h3>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if($content_pie_project) :?>
      <div class="general-content-text">
        <?php echo $content_pie_project ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <!--  -->
</section>
<?php get_footer(); ?>