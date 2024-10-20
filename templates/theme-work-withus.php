<?php
/* Template Name: Template - Work with us */
get_header(); ?>

<?php
$page_id = get_the_ID();
$options = get_fields($page_id);

//Banner
$title_banner_workwithus = $options['title_banner_workwithus'];
$subtitle_banner_workwithus = $options['subtitle_banner_workwithus'];

//Jobs
$jobs_jobs_workwithus = $options['jobs_jobs_workwithus'];

//Form
$title_form_workwithus = $options['title_form_workwithus'];
$text_form_workwithus = $options['text_form_workwithus'];
$form_form_workwithus = $options['form_form_workwithus'];

?>

<!-- Banner -->
<section class="workwithus-banner main-banner">
  <div class="workwithus-banner-container main-wrapper-container --default2">
    <div class="main-banner-info">
      <div class="main-banner-info-content">
        <?php if($title_banner_workwithus || $subtitle_banner_workwithus) :?>
        <div class="workwithus-banner-title general-title --version2 ">
          <hgroup class="general-title-titles">
            <div class="general-title-title">
              <h1 class="general-title-title-text --uppercase"><?php echo $title_banner_workwithus ?></h1>
            </div>
            <div class="general-title-subtitle">
              <h2 class="general-title-subtitle-text"><?php echo $subtitle_banner_workwithus  ?></h2>
            </div> 
          </hgroup> 
        </div>
      </div>
      <?php endif; ?>
      <div class="main-banner-figure">
        <?php echo do_shortcode('[figure_one type="color"]') ?>
      </div>
    </div>
  </div>
</section>
<!--  -->

<!--Jobs Form -->
<section class="workwithus-jobs-form">
  <div class="workwithus-jobs-form-container main-wrapper-container --default2">
    <div class="workwithus-jobs-form-block">
      <?php if( count($jobs_jobs_workwithus)>0 ): ?>
      <div class="workwithus-jobs">
        <div class="workwithus-jobs-items">
          <?php foreach( $jobs_jobs_workwithus as $job):  ?>
          <?php 
          $job_title = get_the_title($job->ID);
          $job_description = get_the_content(null, false, $job->ID);
          $requirement_employe = get_field('requirement_employe',$job->ID);
          $functions_employe = get_field('functions_employe',$job->ID);
          $postulation_list_employe = get_field('postulation_list_employe',$job->ID);
          ?>
          <article class="workwithus-jobs-item">
            <div class="workwithus-jobs-item-title accordion--pitcher workwithus-jobs-item--pitcher">
              <h3 class="workwithus-jobs-item-title-text"><?php echo $job_title ?></h3>
              <div class="workwithus-jobs-content-item-icon">
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
            
            <div class="workwithus-jobs-item-content accordion--content workwithus-jobs-item--content">
              <div class="workwithus-jobs-item-content-in">
                <?php if($job_description) :?>
                <div class="workwithus-jobs-item-description">
                  <?php echo $job_description ?>
                </div>
                <?php endif ?>
                <div class="workwithus-jobs-content-items">
                  <?php if($requirement_employe) :?>
                  <div class="workwithus-jobs-content-item --requirements">
                    <div class="workwithus-jobs-content-item-title">
                      <h4 class="workwithus-jobs-content-item-title-text --uppercase"><?php _e('Requisitos','ciudaris') ?></h4>
                    </div>
                    <div class="workwithus-jobs-content-item-text">
                      <?php echo $requirement_employe ?>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if($functions_employe) :?>
                  <div class="workwithus-jobs-content-item --requirements">
                    <div class="workwithus-jobs-content-item-title">
                      <h4 class="workwithus-jobs-content-item-title-text --uppercase"><?php _e('Funciones','ciudaris') ?></h4>
                    </div>
                    <div class="workwithus-jobs-content-item-text">
                      <?php echo $functions_employe ?>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>
                <?php if($postulation_list_employe) :?>
                <div class="workwithus-jobs-content-postulation">
                  <div class="workwithus-jobs-content-postulation-title">
                    <h4 class="workwithus-jobs-content-postulation-title-text">
                      <?php _e('Ver postulación en','ciudaris') ?>:
                    </h4>
                  </div>
                  <div class="workwithus-jobs-content-postulation-items">
                    <?php foreach($postulation_list_employe as $employe) :?>
                    <?php
                    $postulation = $employe['postulation'];
                    $url = $employe['url'];  
                    ?>
                    <a href="<?php echo $url ?>" target="_blank" class="workwithus-jobs-content-postulation-item">
                      <img class="workwithus-jobs-content-postulation-item-img" src="<?php echo get_template_directory_uri(); ?>/public/assets/images/logotipo-<?php echo $postulation ?>.png" alt="<?php echo $job_title ?>" loading="lazy">
                    </a>
                    <?php endforeach ?>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </article>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
      <?php endif; ?>
      <div class="workwithus-form-wrap workwithus-form--sticky">
        <div class="workwithus-form ">
          <?php if($title_form_workwithus || $text_form_workwithus) :?>
          <div class="workwithus-form-title general-title --version4">
            <div class="general-title-titles">
              <div class="general-title-title">
                <h2 class="general-title-title-text"><?php echo $title_form_workwithus ?></h2>
              </div>
              <div class="general-title-text">
                <?php echo $text_form_workwithus ?>
              </div> 
            </div>
          </div>
          <?php endif; ?>
          <?php if( $form_form_workwithus ): 
          setup_postdata( $form_form_workwithus ); 
          $form_form_workwithus_ID = $form_form_workwithus->ID;
          echo do_shortcode( '[contact-form-7 id="'.$form_form_workwithus_ID.'" ]' ); 
          wp_reset_postdata();
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->

<!-- Aboutus -->
<?php get_template_part( 'templates/aboutus/content', 'aboutus'); ?>
<!-- -->

<?php get_footer(); ?>