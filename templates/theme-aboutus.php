<?php
/* Template Name: Template - Aboutus */
get_header(); ?>

<?php 
$page_id = get_the_ID();
$options = get_fields($page_id);

//Banner
$title_banner_aboutus = $options['title_banner_aboutus'];
$subtitle_banner_aboutus = $options['subtitle_banner_aboutus'];
$image_banner_aboutus = $options['image_banner_aboutus'];

//Image
$image_image_aboutus = $options['image_image_aboutus'];

//Projects
$title_projects_aboutus = $options['title_projects_aboutus'];
$text_projects_aboutus = $options['text_projects_aboutus'];
$button_projects_aboutus = $options['button_projects_aboutus'];

//Mision Vision
$video_mv_aboutus = $options['video_mv_aboutus'];
$title_m_aboutus = $options['title_m_aboutus'];
$text_m_aboutus = $options['text_m_aboutus'];
$title_v_aboutus = $options['title_v_aboutus'];
$text_v_aboutus = $options['text_v_aboutus'];

//Details
$list_details_aboutus = $options['list_details_aboutus'];

//Path
$title_path_aboutus = $options['title_path_aboutus'];
$subtitle_path_aboutus = $options['subtitle_path_aboutus'];
$list_path_aboutus = $options['list_path_aboutus'];
?>
<section class="aboutus">
  <!-- Banner -->
  <div class="aboutus-banner">
    <div class="aboutus-banner-container main-wrapper-container --default2">
      <div class="aboutus-banner-title-image">
        <?php if($title_banner_aboutus || $subtitle_banner_aboutus) :?>
        <div class="aboutus-banner-title general-title --version7">
          <div class="general-title-titles">
            <div class="general-title-title">
              <h1 class="general-title-title-text --uppercase"><?php echo $title_banner_aboutus ?></h1>
            </div>
            <div class="general-title-subtitle">
              <h2 class="general-title-subtitle-text"><?php echo $subtitle_banner_aboutus ?></h2>
            </div>
          </div>
        </div>
        <?php endif ?>
        <figure class="aboutus-banner-image">
          <img src="<?php echo $image_banner_aboutus ?>" class="aboutus-banner-img" alt="Ciudaris" width="287" height="219" loading="lazy">
        </figure>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- Imagen -->
  <?php if($image_image_aboutus) :?>
  <div class="aboutus-image">
    <div class="aboutus-image-container">
      <figure class="aboutus-image-image">
        <img src="<?php echo $image_image_aboutus ?>"alt="Ciudaris" width="1500" height="504" loading="lazy" class="aboutus-image-img">
      </figure>
    </div>
  </div>
  <?php endif ?>
  <!--  -->
  <!-- Proyectos -->
  <div class="aboutus-projects">
    <div class="aboutus-projects-container main-wrapper-container --default2">
      <div class="aboutus-projects-content">
        <div class="aboutus-projects-info">
          <?php if($title_projects_aboutus) :?>
          <div class="aboutus-projects-title general-title --version5">
            <div class="general-title-titles">
              <div class="general-title-subtitle">
                <h2 class="general-title-subtitle-text"><?php echo $title_projects_aboutus ?></h2>
              </div>
            </div>
          </div>
          <?php endif ?>
          <?php if($button_projects_aboutus) :?>
          <?php
          $label = $button_projects_aboutus['label'];
          $url = $button_projects_aboutus['url']  
          ?>
          <div class="aboutus-projects-button">
            <a class="general-button --type2 --lightblue" href="<?php echo $url ?>">
              <svg class="general-button-figure" xmlns="http://www.w3.org/2000/svg" width="59" height="66" viewBox="0 0 59 66" fill="none">
              <path class="--arrow" d="M51.3536 33.3536C51.5488 33.1583 51.5488 32.8417 51.3536 32.6464L48.1716 29.4645C47.9763 29.2692 47.6597 29.2692 47.4645 29.4645C47.2692 29.6597 47.2692 29.9763 47.4645 30.1716L50.2929 33L47.4645 35.8284C47.2692 36.0237 47.2692 36.3403 47.4645 36.5355C47.6597 36.7308 47.9763 36.7308 48.1716 36.5355L51.3536 33.3536ZM1 33.5H51V32.5H1V33.5Z" fill="white"/>
              <path class="--circle" d="M58.3742 52.5C52.5237 60.1016 43.3339 65 33 65C15.3269 65 1 50.6731 1 33C1 15.3269 15.3269 1 33 1C43.3339 1 52.5237 5.89842 58.3742 13.5" stroke="white"/>
              </svg>
              <span class="general-button-text"><?php echo $label ?></span>
            </a>
          </div>
          <?php endif ?>
        </div>
        <div class="aboutus-projects-info2">
          <?php if($text_projects_aboutus) :?>
          <div class="aboutus-projects-text">
            <?php echo $text_projects_aboutus ?>
          </div>
          <?php endif ?>
          <?php if($button_projects_aboutus) :?>
          <?php
          $label = $button_projects_aboutus['label'];
          $url = $button_projects_aboutus['url']  
          ?>
          <div class="aboutus-projects-button">
            <a class="general-button --type2 --lightblue" href="<?php echo $url ?>">
              <svg class="general-button-figure" xmlns="http://www.w3.org/2000/svg" width="59" height="66" viewBox="0 0 59 66" fill="none">
              <path class="--arrow" d="M51.3536 33.3536C51.5488 33.1583 51.5488 32.8417 51.3536 32.6464L48.1716 29.4645C47.9763 29.2692 47.6597 29.2692 47.4645 29.4645C47.2692 29.6597 47.2692 29.9763 47.4645 30.1716L50.2929 33L47.4645 35.8284C47.2692 36.0237 47.2692 36.3403 47.4645 36.5355C47.6597 36.7308 47.9763 36.7308 48.1716 36.5355L51.3536 33.3536ZM1 33.5H51V32.5H1V33.5Z" fill="white"/>
              <path class="--circle" d="M58.3742 52.5C52.5237 60.1016 43.3339 65 33 65C15.3269 65 1 50.6731 1 33C1 15.3269 15.3269 1 33 1C43.3339 1 52.5237 5.89842 58.3742 13.5" stroke="white"/>
              </svg>
              <span class="general-button-text"><?php echo $label ?></span>
            </a>
          </div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- Mision - Vision -->
  <div class="aboutus-mv">
    <div class="aboutus-mv-container main-wrapper-container --default2">
      <div class="aboutus-mv-content">
        <div class="aboutus-mv-video">
          <video autoplay loop muted playsinline>
            <source src="<?php echo $video_mv_aboutus ?>" type="video/mp4">
          </video>
        </div>
        <div class="aboutus-mv-items">
          <?php if($title_m_aboutus || $text_m_aboutus ) :?>
          <div class="aboutus-mv-item">
            <div class="aboutus-mv-item-title">
              <h3 class="aboutus-mv-item-title-text"><?php echo $title_m_aboutus ?></h3>
            </div>
            <div class="aboutus-mv-item-text">
              <?php echo $text_m_aboutus ?>
            </div>
          </div>
          <?php endif ?>
          <?php if($title_v_aboutus || $text_v_aboutus ) :?>
          <div class="aboutus-mv-item">
            <div class="aboutus-mv-item-title">
              <h3 class="aboutus-mv-item-title-text"><?php echo $title_v_aboutus ?></h3>
            </div>
            <div class="aboutus-mv-item-text">
              <?php echo $text_v_aboutus ?>
            </div>
          </div>
          <?php endif ?>
       </div>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- Details -->
  <?php if($list_details_aboutus) :?>
  <div class="aboutus-details">
    <div class="aboutus-details-container main-wrapper-container --default2">
      <div class="aboutus-details-content">
        <div class="aboutus-details-items">
          <?php foreach($list_details_aboutus as $item) :?>
          <?php
          $icon = $item['icon'];
          $title = $item['title'];
          $text = $item['text'];
          ?>
          <article class="aboutus-details-item">
            <?php if($icon) :?>
            <div class="aboutus-details-item-icon">
              <img src="<?php echo $icon ?>" class="aboutus-details-item-icon-img" alt="Ciudaris" class="contact-page-img" loading="lazy">
            </div>
            <?php endif;?>
            <?php if($title || $text) :?>
            <div class="aboutus-details-item-info">
              <div class="aboutus-details-item-title">
                <h3 class="aboutus-details-item-title-text"><?php echo $title ?></h3>
              </div>
              <div class="aboutus-details-item-text"><?php echo $text ?></div>
            </div>
            <?php endif ?>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif ?>
  <!--  -->
  <!-- Path -->
  <div class="aboutus-path">
    <div class="aboutus-path-container main-wrapper-container --default2">
      <div class="aboutus-path-content">z
        <?php if($title_path_aboutus || $subtitle_path_aboutus) :?>
        <div class="aboutus-path-title general-title --version5">
          <div class="general-title-titles">
            <div class="general-title-title">
              <h2 class="general-title-title-text --uppercase"><?php echo $title_path_aboutus ?></h2>
            </div>
            <div class="general-title-subtitle">
              <h3 class="general-title-subtitle-text"><?php echo $subtitle_path_aboutus ?></h3>
            </div>
          </div>
        </div>
        <?php endif ?>

        <div class="aboutus-path-carrousel-block-arrows-list">
          <div class="aboutus-path-carrousel-list --list-none aboutus--carrousel">
            <ul class="swiper-wrapper">
              <?php foreach ($list_path_aboutus as $item) : ?>
              <?php
              $anio = $item['anio'];
              $image = $item['image'];
              $type = $item['type'];
              $project = $item['project'];
              $image_0 = $item['image_0'];
              $text_0 = $item['text_0'];
              $text2_0 = $item['text2_0'];
              $button_0 = $item['button_0'];
              ?>
              <li class="swiper-slide">
                <div class="aboutus-path-carrousel-item">
                  <?php if($type =="proyecto") :?>
                  <?php
                  $id_project = $project->ID;
                  $permalink_project = get_permalink( $id_project );
                  $logotipo2_project = get_field( 'logotipo2_project', $id_project );
                  $flats_project = get_field( 'flats_project', $id_project );
                  $footage2_project = get_field( 'footage2_project', $id_project );
                  $district = get_the_term_list( $id_project, 'distrito-proyecto', '', ', ', '' ) ;  
                  ?>
                  <div class="aboutus-path-carrousel-item-top">
                    <figure class="aboutus-path-carrousel-item-top-image">
                      <img src="<?php echo $logotipo2_project ?>" alt="Ciudaris" class="aboutus-path-carrousel-item-top-img">
                    </figure>
                    <div class="aboutus-path-carrousel-item-top-text1"><?php echo strip_tags($district); ?></div>
                    <div class="boutus-path-carrousel-item-top-text2">
                      <span><?php echo $flats_project ?> <?php _e('Pisos','ciudaris') ?></span>
                      <span><?php echo $footage2_project?></span>
                    </div>
                    <a class="project-detail-rel-button general-title-button general-button --type1 --border-blue" href="<?php echo $permalink_project ?>">
                      <span class="general-button-text"><?php _e('Ver Proyecto','ciudaris') ?></span>
                    </a>
                  </div>
                  <?php else :?>
                    no project
                  <div class="aboutus-path-carrousel-item-top">
                    <figure class="aboutus-path-carrousel-item-top-image">
                      <img src="" alt="Ciudaris" class="aboutus-path-carrousel-item-top-img">
                    </figure>
                    <div class="aboutus-path-carrousel-item-top-text1"></div>
                    <div class="boutus-path-carrousel-item-top-text2"></div>
                  </div>
                  <?php endif;?>
                  
                  <div class="aboutus-path-carrousel-item-year"><?php echo $anio ?></div>
                  <figure class="aboutus-path-carrousel-item-image">
                    <img src="<?php echo $image ?>" alt="Ciudaris" class="aboutus-path-carrousel-item-img">
                  </figure>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="general-arrows aboutus-path-carrousel-arrows">
            <div class="general-arrow --type1  aboutus--carrousel-prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1944 4.31775C13.9692 4.06058 13.5779 4.03452 13.3205 4.25955L7.06931 9.72411C6.59931 10.135 6.59931 10.8654 7.06931 11.2763L13.3205 16.7409C13.5779 16.9659 13.9692 16.9398 14.1944 16.6827C14.4197 16.4255 14.3936 16.0346 14.1361 15.8095L8.06255 10.5002L14.1361 5.19086C14.3936 4.96583 14.4197 4.57493 14.1944 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="general-arrow --type1  aboutus--carrousel-next">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85833 4.31775C7.08357 4.06058 7.47484 4.03452 7.73226 4.25955L13.9834 9.72411C14.4534 10.135 14.4534 10.8654 13.9834 11.2763L7.73226 16.7409C7.47484 16.9659 7.08357 16.9398 6.85833 16.6827C6.63308 16.4255 6.65917 16.0346 6.91659 15.8095L12.9902 10.5002L6.91659 5.19086C6.65917 4.96583 6.63308 4.57493 6.85833 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--  -->
  <!-- Certification -->
  <?php get_template_part( 'templates/certifications/content', 'certifications'); ?>
  <!-- -->
  <!-- Location -->
  <div class="aboutus-location">
    <?php get_template_part( 'templates/location/content', 'location'); ?>
  </div>
  <!-- -->
</section>

<?php get_footer(); ?>