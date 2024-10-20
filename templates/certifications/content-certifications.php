<?php
$options_g = get_fields('options');
$subtitle_certifications_g = $options_g['subtitle_certifications_g'];
$title_certifications_g = $options_g['title_certifications_g'];
$image_certifications_g = $options_g['image_certifications_g'];
$list_certifications_g = $options_g['list_certifications_g'];
?>

<div class="certifications-general">
  <div class="certifications-general-container main-wrapper-container --default2">
    <div class="certifications-general-info">
      <div class="certifications-general-info1">
        <?php if($subtitle_certifications_g || $title_certifications_g) :?>
        <div class="certifications-general-title general-title --version9">
          <hgroup class="general-title-titles">
            <div class="general-title-title">
              <h2 class="general-title-title-text --uppercase"><?php echo $subtitle_certifications_g ?></h2>
            </div>
            <div class="general-title-subtitle">
              <h3 class="general-title-subtitle-text"><?php echo $title_certifications_g ?></h3>
            </div>
          </hgroup>
        </div>
        <?php endif; ?>
        <?php if($image_certifications_g) : ?>
        <figure class="certifications-general-image">
          <img src="<?php echo $image_certifications_g ?>" alt="Ciudaris" class="certifications-general-img" loading="lazy">
        </figure>
        <?php endif; ?>
      </div>
      <div class="certifications-general-info2">
        <?php if($list_certifications_g) :?>
        <div class="certifications-general-items">
          <?php foreach($list_certifications_g as $item) : ?>
          <?php
          $image = $item['image'];
          $title = $item['title'];
          $text = $item['text'];
          ?>
          <?php if($image || $title || $text) : ?>
          <article class="certifications-general-item">
            <figure class="certifications-general-item-image">
              <img src="<?php echo $image ?>" alt="<?php echo $text ?>" class="certifications-general-item-img" loading="lazy">
            </figure>
            <div class="certifications-general-item-info">
              <div class="certifications-general-item-title">
                <h3 class="certifications-general-item-title-text"><?php echo $title ?></h3>
              </div>
              <div class="certifications-general-item-text"><?php echo $text ?></div>
            </div>
          </article>
          <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <figure class="certifications-general-plants">
    <img class="certifications-general-plants-img" width="126" height="298" src="<?php echo get_template_directory_uri(); ?>/public/assets/images/certifications-plant.svg" alt="Ciudaris" loading="lazy">
  </figure>
</div>