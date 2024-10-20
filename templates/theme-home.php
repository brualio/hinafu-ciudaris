<?php
/* Template Name: Template - Home */
get_header(); ?>

<?php
$page_id = get_the_ID();
$options = get_fields($page_id);

//Banner
$list_banner_home = $options['list_banner_home'];

//Projects
$title_projects_home = $options['title_projects_home'];
$subtitle_projects_home = $options['subtitle_projects_home'];
$button_projects_home = $options['button_projects_home'];
$projects_projects_home = $options['projects_projects_home'];

//Blog
$title_blog_home = $options['title_blog_home'];
$subtitle_blog_home = $options['subtitle_blog_home'];
$button_blog_home = $options['button_blog_home'];

?>
<!-- Banner -->
<?php if($list_banner_home) :?>
<section class="page-home-banner main-slider main--slider --list-none">
	<ul class="main-slider-list swiper-wrapper">
    <?php foreach ($list_banner_home as $item) :?>
    <?php
    $type = $item['type'];
    $background_desktop = $item['background_desktop'];
    $background_mobile = $item['background_mobile'] ? $item['background_mobile'] : $background_desktop;
    $video_mp4 = $item['video_mp4'];
    $title = $item['title'];
    $project = $item['project'];
    $id_project = $project->ID;
    $permalink_project = get_permalink( $id_project );
    $logotipo_project = get_field( 'logotipo_project', $id_project );
    $address_project = get_field( 'address_project', $id_project );
    $district = get_the_term_list( $id_project, 'distrito-proyecto', '', ', ', '' ) ;
    ?>
		<li class="main-slider-item swiper-slide">
      <div class="main-slider-image-video">
        <?php if($type=="imagen") :?>
          <figure class="main-slider-image background--change" data-bg="<?php echo $background_desktop ?>;<?php echo $background_desktop ?>;<?php echo $background_mobile ?>" ></figure>
        <?php elseif($type=="videomp4") :?>
          <video class="main-slider-image-video" preload="metadata" autoplay loop muted playsinline>
            <source src="<?php echo esc_url($video_mp4); ?>" type="video/mp4">
          </video>
        <?php endif;?>
      </div>
			<div class="main-slider-container main-wrapper-container --default">
				<div class="main-slider-info">
					<div class="main-slider-title">
						<h2 class="main-slider-title-text"><?php echo $title ?></h2>
					</div>         
					<div class="main-slider-button">
            <div class="main-footer-quote-button">
              <a class="general-button --type2 --white" href="<?php echo $permalink_project ?>">
                <svg class="general-button-figure" xmlns="http://www.w3.org/2000/svg" width="59" height="66" viewBox="0 0 59 66" fill="none">
                <path class="--arrow" d="M51.3536 33.3536C51.5488 33.1583 51.5488 32.8417 51.3536 32.6464L48.1716 29.4645C47.9763 29.2692 47.6597 29.2692 47.4645 29.4645C47.2692 29.6597 47.2692 29.9763 47.4645 30.1716L50.2929 33L47.4645 35.8284C47.2692 36.0237 47.2692 36.3403 47.4645 36.5355C47.6597 36.7308 47.9763 36.7308 48.1716 36.5355L51.3536 33.3536ZM1 33.5H51V32.5H1V33.5Z" fill="white"/>
                <path class="--circle" d="M58.3742 52.5C52.5237 60.1016 43.3339 65 33 65C15.3269 65 1 50.6731 1 33C1 15.3269 15.3269 1 33 1C43.3339 1 52.5237 5.89842 58.3742 13.5" stroke="white"/>
                </svg>
                <span class="general-button-text"><?php _e('Conoce más','ciudaris') ?></span>
              </a>
            </div>
					</div>
          <div class="main-slider-details">
            <?php if($logotipo_project) :?>
            <figure class="main-slider-logotipo">
              <img class="main-slider-logotipo-img" src="<?php echo $logotipo_project ?>" alt="<?php echo $title ?>" loading="lazy">
            </figure>
            <?php endif; ?>
            <div class="main-slider-district-address">
              <?php if($district) :?>
              <div class="main-slider-district">
                <i class="icon-mappin_icon_n main-slider-district-icon"></i><?php echo strip_tags($district); ?></div>
              <?php endif; ?>
              <?php if($address_project) :?>
              <div class="main-slider-address"><?php echo $address_project ?></div>
              <?php endif; ?>
            </div>
          </div>
				</div>
			</div>
		</li>
    <?php endforeach; ?>
	</ul>
  <div class="main-slider-pagination-wrap">
    <div class="general-pagination-slide --type2 main-slider-pagination main-slider--pagination"></div>
  </div>
</section>
<?php endif; ?>
<!-- -->

<!-- Projects -->
<div class="home-page-projects">
  <div class="home-page-projects-container main-wrapper-container --default">
    <div class="home-page-projects-title-button">
      <?php if($title_projects_home || $subtitle_projects_home) :?>
      <div class="home-page-projects-title general-title --version8">
        <div class="general-title-titles">
          <div class="general-title-title">
            <h3 class="general-title-title-text --uppercase">
              <?php echo $title_projects_home ?></h3>
          </div>
          <div class="general-title-subtitle">
            <h3 class="general-title-subtitle-text">
              <?php echo $subtitle_projects_home ?></h3>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if($button_projects_home) :?>
      <?php
      $label = $button_projects_home['label'];
      $url = $button_projects_home['url'];
      ?>
      <a class="project-detail-rel-button general-title-button general-button --type1 --border-blue" href="<?php echo $url ?>">
        <span class="general-button-text"><?php echo  $label ?></span>
      </a>
      <?php endif; ?>
    </div>
    <div class="home-page-projects-items">
    <?php foreach($projects_projects_home as $project) :?>
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
      <div class="home-page-projects-item">
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
                  <?php _e('Desde','ciudaris') ?> <?php echo $footage2_project ?>
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
  </div>
</div>
<!--  -->

<!-- Aboutus -->
<?php get_template_part( 'templates/aboutus/content', 'aboutus'); ?>
<!-- --> 

<!-- Testimonials -->
<?php get_template_part( 'templates/testimonials/content', 'testimonials'); ?>
<!-- --> 

<!-- Location -->
<div class="home-page-location">
  <?php get_template_part( 'templates/location/content', 'location'); ?>
</div>
<!-- -->

<!-- Blog -->
<?php
$args = array( 
'post_type' => 'post', 
'post_status' => 'publish',
'posts_per_page' => 2,
'page' => 1,
);
$wp_query = new WP_Query($args); ?>
<?php if($wp_query->have_posts()) : ?>
<div class="home-page-blog">
  <div class="home-page-blog-container main-wrapper-container --default">
    <div class="home-page-blog-content">
      <?php if($title_blog_home || $subtitle_blog_home) :?>
      <div class="home-page-blog-title general-title --version5">
        <div class="general-title-titles">
          <div class="general-title-title">
            <h2 class="general-title-title-text --uppercase"><?php echo $title_blog_home ?></h2>
          </div>
          <div class="general-title-subtitle">
            <h3 class="general-title-subtitle-text"><?php echo $subtitle_blog_home  ?></h3>
          </div>
        </div>
      </div>
      <?php endif ?>
      <div class="home-page-blog-items">
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <?php 
        $permalink = get_permalink();
        $thumbnail_url = get_the_post_thumbnail_url();
        $title = get_the_title();
        $content = get_the_content();
        $author = get_the_author();
        ?>
        <article class="home-page-blog-item">
          <a href="<?php echo $permalink ?>" class="home-page-blog-item-image">
            <figure class="home-page-blog-item-image-img" style="background-image: url(<?php echo $thumbnail_url ?>)"></figure>
          </a>
          <div class="home-page-blog-item-info">
            <div class="home-page-blog-item-date-category">
              <div class="home-page-blog-item-date"><?php echo the_date_custom_post_day_month_year() ?></div>
              <div class="home-page-blog-item-category --list-none">
              <?php the_category(); ?>
              </div>
            </div>
            <a class="home-page-blog-item-title" href="<?php echo $permalink ?>">
              <h3 class="home-page-blog-item-title-text"><?php echo $title ?></h3>
            </a>
            <a class="home-page-blog-item-button" href="<?php echo $permalink ?>">
              <?php _e('Leer más','ciudaris') ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="9" viewBox="0 0 18 9" fill="none">
                <path d="M17.3023 4.90644C17.5366 4.67213 17.5366 4.29223 17.3023 4.05792L13.4839 0.239538C13.2496 0.00522334 12.8697 0.00522331 12.6354 0.239538C12.4011 0.473853 12.4011 0.853751 12.6354 1.08807L16.0295 4.48218L12.6354 7.87629C12.4011 8.11061 12.4011 8.4905 12.6354 8.72482C12.8697 8.95913 13.2496 8.95913 13.4839 8.72482L17.3023 4.90644ZM0.47699 5.08218L16.878 5.08218L16.878 3.88218L0.47699 3.88218L0.47699 5.08218Z" fill="#01385C"/>
              </svg>
            </a>
          </div>
        </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <?php if($button_blog_home) :?>
      <?php
      $label = $button_blog_home['label'];
      $url = $button_blog_home['url'];
      ?>
      <a class="home-page-blog-button general-title-button general-button --type1 --border-blue" href="<?php echo $url ?>">
        <span class="general-button-text"><?php echo  $label ?></span>
      </a>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endif ?>
<!--  -->

<!-- Popup -->
<?php
$options = get_fields('options');
$active_popup_g = $options['active_popup_g'];
$image_popup_g = $options['image_popup_g'];
$url_popup_g = $options['url_popup_g'];
?>
<?php if($active_popup_g) :?>
<div class="general-modal general-modal-image general-modal-image--type2 ---show" id="modal--home1">
  <div class="general-modal-overlay modal-overlay--close"></div>
  <div class="general-modal-popup">
    <span class="general-modal-close icon-close modal--close">
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
        <path d="M8.59275 7.49989L14.2557 1.8369C14.5538 1.53885 14.5538 1.0421 14.2557 0.744047C13.9577 0.445995 13.4609 0.445995 13.1629 0.744047L7.49989 6.40703L1.8369 0.744047C1.53885 0.445995 1.0421 0.445995 0.744047 0.744047C0.445995 1.0421 0.445995 1.53885 0.744047 1.8369L6.40703 7.49989L0.744047 13.1629C0.445995 13.4609 0.445995 13.9577 0.744047 14.2557C0.942748 14.3551 1.14145 14.4544 1.34015 14.4544C1.53885 14.4544 1.73755 14.3551 1.8369 14.2557L7.49989 8.59275L13.1629 14.2557C13.3616 14.4544 13.5603 14.4544 13.6596 14.4544C13.8583 14.4544 14.057 14.3551 14.1564 14.2557C14.4544 13.9577 14.4544 13.4609 14.1564 13.1629L8.59275 7.49989Z" fill="white"/>
      </svg>
    </span>
    <?php if($url_popup_g) :?>
      <a class="general-modal-popup-image" href="<?php echo $url_popup_g ?>" target="_blank">
        <img loading="lazy" width="740" height="450" data-src="<?php echo $image_popup_g ?>;<?php echo $image_popup_g ?>;<?php echo $image_popup_g ?>" alt="Ciudaris" class="image--change">
      </a>
    <?php else :?>
      <figure class="general-modal-popup-image">
        <img loading="lazy" width="740" height="450" data-src="<?php echo $image_popup_g ?>;<?php echo $image_popup_g ?>;<?php echo $image_popup_g ?>" alt="Ciudaris" class="image--change">
      </figure>
    <?php endif; ?>
  </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>