<?php
//Location
$options_g = get_fields('options');
$title_location_g = $options_g['title_location_g'];
$subtitle_location_g = $options_g['subtitle_location_g'];
$map_desktop_location_g = $options_g['map_desktop_location_g'];
$map_mobile_location_g = $options_g['map_mobile_location_g'] ? $options_g['map_mobile_location_g'] : $map_desktop_location_g ;
$button_location_g = $options_g['button_location_g'];
?>

<section class="location-general">
  <div class="location-general-container main-wrapper-container --default2">
    <div class="location-general-title-button">
      <?php if($title_location_g || $subtitle_location_g) :?>
      <div class="location-general-title general-title --version5">
        <div class="general-title-titles">
          <div class="general-title-title">
            <h2 class="general-title-title-text --uppercase"><?php echo $title_location_g ?></h2>
          </div>
          <div class="general-title-subtitle">
            <h3 class="general-title-subtitle-text"><?php echo $subtitle_location_g  ?></h3>
          </div>
        </div>
      </div>
      <?php endif ?>
      <?php if($button_location_g) :?>
      <?php
      $label = $button_location_g['label'];
      $url = $button_location_g['url'];
      ?>
      <a class="project-detail-rel-button general-title-button general-button --type1 --border-blue" href="<?php echo $url ?>">
        <span class="general-button-text"><?php echo  $label ?></span>
      </a>
      <?php endif; ?>
    </div>
    <div class="location-general-maps">
      <figure class="location-general-map">
        <img class="location-general-map-img image--change" loading="lazy" data-src="<?php echo $map_desktop_location_g ?>;<?php echo $map_desktop_location_g ?>;<?php echo $map_mobile_location_g ?>" width="1400" height="500" alt="Ciudaris">
      </figure>
    </div>
  </div>
</section>