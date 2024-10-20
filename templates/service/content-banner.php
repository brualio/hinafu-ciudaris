<?php
$options = get_fields('options');
$title_banner_service_g = $options['title_banner_service_g'];
$subtitle_banner_service_g = $options['subtitle_banner_service_g'];
$image_banner_service_g = $options['image_banner_service_g'];
?>
<div class="service-banner">
  <div class="service-banner-content">
    <?php if($title_banner_service_g || $subtitle_banner_service_g) :?>
    <div class="service-banner-title general-title --version6">
      <div class="general-title-titles">
        <div class="general-title-title">
          <h1 class="general-title-title-text --uppercase"><?php echo $title_banner_service_g  ?></h1>
        </div> 
        <div class="general-title-subtitle">
          <h2 class="general-title-subtitle-text"><?php echo $subtitle_banner_service_g  ?></h2>
        </div> 
      </div>
    </div>
    <?php endif; ?>
    <figure class="service-banner-image">
      <img src="<?php echo $image_banner_service_g ?>" class="service-banner-img" alt="Ciudaris" width="340" height="338" loading="lazy">
    </figure>
  </div>
</div>