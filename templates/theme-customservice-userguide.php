<?php
/* Template Name: Template - Custom service user guide */
get_header(); ?>

<?php
$page_id = get_the_ID();
$options = get_fields($page_id);

//Banner
$title_service_userguide = $options['title_service_userguide'];
$list_service_userguide = $options['list_service_userguide'];
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
          <div class="service-page-userguide">
            <?php if($title_service_userguide) :?>
            <div class="service-page-userguide-title general-title --version4">
              <div class="general-title-titles">
                <div class="general-title-title">
                  <h1 class="general-title-title-text"><?php echo $title_service_userguide ?></h1>
                </div>
              </div>
            </div>
            <?php endif ?>
            <?php if($list_service_userguide) :?>
            <div class="service-page-userguide-items">
              <?php foreach ($list_service_userguide as $item) :?>
              <?php
              $title = $item['title'];
              $text = $item['text'];
              $file = $item['file'];  
              ?>
              <a class="service-page-userguide-item legal-item" href="<?php echo $file ?>" target="_blank" download>
                <div class="legal-item-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                  <circle cx="25" cy="25" r="25" fill="#DFF5FA"/>
                  <path d="M25.3608 28.0402C25.2342 28.1763 25.0552 28.2538 24.8676 28.2538C24.6799 28.2538 24.501 28.1763 24.3743 28.0402L20.8099 24.2088C20.5608 23.9411 20.5797 23.5256 20.8521 23.2809C21.1246 23.0361 21.5473 23.0547 21.7964 23.3224L24.1992 25.9052V16.2122C24.1992 15.8495 24.4985 15.5554 24.8676 15.5554C25.2367 15.5554 25.5359 15.8495 25.5359 16.2122V25.9052L27.9388 23.3224C28.1879 23.0547 28.6106 23.0361 28.883 23.2809C29.1554 23.5256 29.1743 23.9411 28.9253 24.2088L25.3608 28.0402Z" fill="#00B2E3" stroke="#00B2E3" stroke-width="0.4"/>
                  <path d="M16.9883 26.476C16.9883 26.0552 16.6676 25.7141 16.272 25.7141C15.8764 25.7141 15.5557 26.0552 15.5557 26.476V26.5318C15.5556 27.9211 15.5556 29.0409 15.667 29.9217C15.7825 30.836 16.0298 31.6059 16.6047 32.2173C17.1796 32.8289 17.9034 33.0919 18.7631 33.2148C19.5911 33.3332 20.644 33.3332 21.9501 33.3332H27.7856C29.0917 33.3332 30.1445 33.3332 30.9726 33.2148C31.8323 33.0919 32.5561 32.8289 33.131 32.2173C33.7059 31.6059 33.9532 30.836 34.0687 29.9217C34.18 29.0409 34.18 27.9211 34.18 26.5318V26.476C34.18 26.0552 33.8593 25.7141 33.4637 25.7141C33.0681 25.7141 32.7474 26.0552 32.7474 26.476C32.7474 27.9342 32.7458 28.9512 32.6489 29.7186C32.5546 30.464 32.3823 30.8587 32.118 31.1399C31.8536 31.4211 31.4825 31.6043 30.7817 31.7046C30.0602 31.8077 29.1041 31.8094 27.7331 31.8094H22.0026C20.6316 31.8094 19.6754 31.8077 18.954 31.7046C18.2532 31.6043 17.8821 31.4211 17.6177 31.1399C17.3534 30.8587 17.181 30.464 17.0868 29.7186C16.9898 28.9512 16.9883 27.9342 16.9883 26.476Z" fill="#00B2E3" stroke="#00B2E3" stroke-width="0.4"/>
                  </svg>
                </div>
                <div class="legal-item-info">
                  <div class="legal-item-title">
                    <h4 class="legal-item-title-text"><?php echo $title ?></h4>
                  </div>
                  <div class="legal-item-tax">
                    <?php echo $text ?>
                  </div>
                </div>
              </a>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- -->
</section>

<?php get_footer(); ?>