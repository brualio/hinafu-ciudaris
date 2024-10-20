<?php
//Testimonials
$options_g = get_fields('options');
$title_testimonials_g = $options_g['title_testimonials_g'];
$subtitle_testimonials_g = $options_g['subtitle_testimonials_g'];
$list_testimonials_g = $options_g['list_testimonials_g'];
?>

<div class="testimonials-general">
  <div class="testimonials-general-container main-wrapper-container --default2">
    <?php if($title_testimonials_g || $subtitle_testimonials_g) :?>
    <div class="testimonials-general-title general-title --version2">
      <hgroup class="general-title-titles">
        <div class="general-title-title">
          <h2 class="general-title-title-text --uppercase"><?php echo $title_testimonials_g ?></h2>
        </div> 
        <div class="general-title-subtitle">
          <h3 class="general-title-subtitle-text"><?php echo $subtitle_testimonials_g ?></h3>
        </div>
      </hgroup>
    </div>
    <?php endif ?>
    <div class="testimonials-general-carrousel-wrap">
      <div class="testimonials-general-carrousel-inside">
        <div class="testimonials-general-carrousel-in" id="lightgallery2">
          <div class="testimonials-general-carrousel testimonials--carrousel --list-none">
            <ul class="swiper-wrapper">
              <?php foreach ($list_testimonials_g as $item) :?>
              <?php
              $text = $item['text'];
              $name = $item['name'];
              $charge = $item['charge'];
              $video = $item['video'];
              $mp4 = $item['mp4'];
              $youtube = $item['youtube'];
              ?>
              <li class="swiper-slide">
                <div class="testimonials-general-carrousel-item testimonials---carrousel-item">
                  <div class="testimonials-general-carrousel-item-text">
                    <svg class="testimonials-general-carrousel-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                      <path d="M28 24C28 19 30 16 36 13M28 24H38C38.5304 24 39.0391 24.2107 39.4142 24.5858C39.7893 24.9609 40 25.4696 40 26V33C40 33.5304 39.7893 34.0391 39.4142 34.4142C39.0391 34.7893 38.5304 35 38 35H30C29.4696 35 28.9609 34.7893 28.5858 34.4142C28.2107 34.0391 28 33.5304 28 33V24ZM8 24C8 19 10 16 16 13M8 24H18C18.5304 24 19.0391 24.2107 19.4142 24.5858C19.7893 24.9609 20 25.4696 20 26V33C20 33.5304 19.7893 34.0391 19.4142 34.4142C19.0391 34.7893 18.5304 35 18 35H10C9.46957 35 8.96086 34.7893 8.58578 34.4142C8.21071 34.0391 8 33.5304 8 33V24Z" stroke="#00385D" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <?php echo $text ?>
                  </div>
                  <div class="testimonials-general-carrousel-item-video">
                  <?php if($video == "mp4") :?>
                    <div class="testimonials-general-carrousel-item-video-button openVideo" data-video-type="mp4" data-video-id="videos/video2.mp4">
                      <div class="_text"><?php _e('Ver Video','ciudaris') ?></div>
                      <div class="_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                          <ellipse cx="20.4918" cy="20.4918" rx="20.4918" ry="20.4918" fill="#00B2E3" fill-opacity="0.15"/>
                          <path d="M27.0554 19.6894C27.7221 20.0743 27.7221 21.0365 27.0554 21.4214L18.0554 26.6176C17.3888 27.0025 16.5554 26.5214 16.5554 25.7516L16.5554 15.3593C16.5554 14.5895 17.3888 14.1083 18.0554 14.4932L27.0554 19.6894Z" fill="#00B2E3"/>
                        </svg>
                      </div>
                    </div>
                  <?php elseif($video == "youtube"): ?>
                    <div class="testimonials-general-carrousel-item-video-button openVideo" data-video-type="youtube" data-video-id="dQw4w9WgXcQ">
                      <div class="_text"><?php _e('Ver Video','ciudaris') ?></div>
                      <div class="_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                          <ellipse cx="20.4918" cy="20.4918" rx="20.4918" ry="20.4918" fill="#00B2E3" fill-opacity="0.15"/>
                          <path d="M27.0554 19.6894C27.7221 20.0743 27.7221 21.0365 27.0554 21.4214L18.0554 26.6176C17.3888 27.0025 16.5554 26.5214 16.5554 25.7516L16.5554 15.3593C16.5554 14.5895 17.3888 14.1083 18.0554 14.4932L27.0554 19.6894Z" fill="#00B2E3"/>
                        </svg>
                      </div>
                    </div>
                  <?php endif; ?>                    
                  </div>
                  <?php if($name || $charge) :?>
                  <div class="testimonials-general-detail-item">
                    <div class="testimonials-general-detail-item-name">
                      <?php echo $name ?>
                    </div>
                    <div class="testimonials-general-detail-item-charge">
                      <?php echo $charge ?>
                    </div>
                  </div>
                  <?php endif; ?>
                  <div class="lightgallery" style="display: none;">
                  <?php if($video == "mp4") :?>
                    <a href="<?php echo $mp4 ?>" >
                      <img src="" alt="Ciudaris">
                    </a>
                  <?php elseif($video == "youtube"): ?>
                    <a href="<?php echo $youtube ?>">
                      <img src="" alt="Ciudaris">
                    </a>
                  <?php endif; ?>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
       
      </div>
      <div class="testimonials-general-thumbnails testimonials--thumbnails --list-none">
        <ul class="swiper-wrapper">
          <?php foreach ($list_testimonials_g as $item) :?>
          <?php
          $imagen = $item['imagen'];
          ?>
          <li class="swiper-slide">
            <?php if($imagen) :?>
            <div class="testimonials-general-thumbnails-item">
              <figure class="testimonials-general-thumbnails-item-image">
                <img src="<?php echo $imagen ?>" alt="" class="testimonials-general-thumbnails-item-img" loading="lazy" width="80" height="80">
              </figure>
            </div>
            <?php endif; ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>  
      <div class="general-arrows testimonials-general-carrousel-arrows">
        <div class="general-arrow --type1 testimonials--carrousel-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1944 4.31775C13.9692 4.06058 13.5779 4.03452 13.3205 4.25955L7.06931 9.72411C6.59931 10.135 6.59931 10.8654 7.06931 11.2763L13.3205 16.7409C13.5779 16.9659 13.9692 16.9398 14.1944 16.6827C14.4197 16.4255 14.3936 16.0346 14.1361 15.8095L8.06255 10.5002L14.1361 5.19086C14.3936 4.96583 14.4197 4.57493 14.1944 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="general-arrow --type1 testimonials--carrousel-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85833 4.31775C7.08357 4.06058 7.47484 4.03452 7.73226 4.25955L13.9834 9.72411C14.4534 10.135 14.4534 10.8654 13.9834 11.2763L7.73226 16.7409C7.47484 16.9659 7.08357 16.9398 6.85833 16.6827C6.63308 16.4255 6.65917 16.0346 6.91659 15.8095L12.9902 10.5002L6.91659 5.19086C6.65917 4.96583 6.63308 4.57493 6.85833 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
          </svg>
        </div>
      </div>  
    </div>
    
  </div>
</div>