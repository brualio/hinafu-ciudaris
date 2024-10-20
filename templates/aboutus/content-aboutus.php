<?php
//Aboutus
$options_g = get_fields('options');
$image_aboutus_g = $options_g['image_aboutus_g'];
$title_aboutus_g = $options_g['title_aboutus_g'];
$subtitle_aboutus_g = $options_g['subtitle_aboutus_g'];
$text_aboutus_g = $options_g['text_aboutus_g'];
$button_aboutus_g = $options_g['button_aboutus_g'];
$logotipos_aboutus_g = $options_g['logotipos_aboutus_g'];
$details_aboutus_g = $options_g['details_aboutus_g'];
?>

<section class="aboutus-general">
  <div class="aboutus-general-container main-wrapper-container --default2">
    <figure class="aboutus-general-plants1">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/plants1.png" class="aboutus-general-plants1-img" alt="Ciudaris" width="81" height="135" loading="lazy">
    </figure>
    <figure class="aboutus-general-plants2">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/plants2.png" class="aboutus-general-plants2-img" alt="Ciudaris" width="116" height="189" loading="lazy">
    </figure>
    <div class="aboutus-general-image-info">
      <?php if($image_aboutus_g) :?>
      <figure class="aboutus-general-image">
        <img src="<?php echo $image_aboutus_g ?>" class="aboutus-general-image-img" alt="Ciudaris" width="612" height="651" loading="lazy">
      </figure>
      <?php endif; ?>
      <div class="aboutus-general-info">
        <div class="aboutus-general-title-logotipos">
          <?php if($title_aboutus_g || $subtitle_aboutus_g || $text_aboutus_g || $button_aboutus_g) :?>
          <div class="aboutus-general-title general-title --version5">
            <hgroup class="general-title-titles">
              <div class="general-title-title">
                <h3 class="general-title-title-text --uppercase"><?php echo $title_aboutus_g ?></h3>
              </div>
              <div class="general-title-subtitle">
                <h2 class="general-title-subtitle-text"><?php echo $subtitle_aboutus_g  ?></h2>
              </div> 
            </hgroup>
            <div class="general-title-text"><?php echo $text_aboutus_g ?></div>
            <?php 
            $label = $button_aboutus_g['label'];
            $url = $button_aboutus_g['url'];
            ?>
            <div class="general-title-buttons">
              <div class="general-title-button">
                <a class="general-button --type2 --lightblue" href="<?php echo $url; ?>">
                  <svg class="general-button-figure" xmlns="http://www.w3.org/2000/svg" width="59" height="66" viewBox="0 0 59 66" fill="none">
                  <path class="--arrow" d="M51.3536 33.3536C51.5488 33.1583 51.5488 32.8417 51.3536 32.6464L48.1716 29.4645C47.9763 29.2692 47.6597 29.2692 47.4645 29.4645C47.2692 29.6597 47.2692 29.9763 47.4645 30.1716L50.2929 33L47.4645 35.8284C47.2692 36.0237 47.2692 36.3403 47.4645 36.5355C47.6597 36.7308 47.9763 36.7308 48.1716 36.5355L51.3536 33.3536ZM1 33.5H51V32.5H1V33.5Z" fill="white"/>
                  <path class="--circle" d="M58.3742 52.5C52.5237 60.1016 43.3339 65 33 65C15.3269 65 1 50.6731 1 33C1 15.3269 15.3269 1 33 1C43.3339 1 52.5237 5.89842 58.3742 13.5" stroke="white"/>
                  </svg>
                  <span class="general-button-text"><?php echo $label ?></span>
                </a>
              </div>
            </div>
          </div>
          <?php endif; ?>
          <?php if(count($logotipos_aboutus_g)>0) :?>
          <div class="aboutus-general-logotipos">
            <?php foreach($logotipos_aboutus_g as $logotipo): ?>
            <?php
            $image = $logotipo['image'];
            ?>
            <figure class="aboutus-general-logotipo">
              <img src="<?php echo $image ?>" class="aboutus-general-logotipo-img" alt="Ciudaris" loading="lazy">
            </figure>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
        <?php if(count($details_aboutus_g)>0) :?>
        <div class="aboutus-general-details">
          <?php foreach($details_aboutus_g as $number) :?>
          <?php
          $symbol = $number['symbol'];
          $number_number = $number['number'];
          $text_number = $number['text_number'];
          ?>
          <div class="aboutus-general-detail">
            <div class="aboutus-general-detail-number">
              <?php if($symbol) :?>
              <span class="aboutus-general-symbol"><?php echo $symbol ?></span>
              <?php endif ?>
              <?php if($number_number) :?>
              <span class="aboutus-general-number-txt"><?php echo $number_number ?></span>
              <?php endif ?>
            </div>
            <?php if($text_number) :?>
            <div class="aboutus-general-number-text"><?php echo $text_number ?></div>
            <?php endif ?>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    
  </div>
</section>