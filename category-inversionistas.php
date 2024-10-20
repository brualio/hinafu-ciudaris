<?php
get_header(); ?>
<?php
$options = get_fields('options');
$category = get_queried_object();
$category_id = $category->term_id;
$category_name = $category->name;

//Banner
$background_banner_investors = $options['background_banner_investors'];
$title_banner_investors = $options['title_banner_investors'];
$subtitle_banner_investors = $options['subtitle_banner_investors'];
$button1_banner_investors = $options['button1_banner_investors'];
$button2_banner_investors = $options['button2_banner_investors'];
$pie_banner_investors = $options['pie_banner_investors'];

//List
$title_list_investors = $options['title_list_investors'];
$list_list_investors = $options['list_list_investors'];

//Numbers
$title_numbers_investors = $options['title_numbers_investors'];
$subtitle_numbers_investors = $options['subtitle_numbers_investors'];
$text_numbers_investors = $options['text_numbers_investors'];
$list_numbers_investors = $options['list_numbers_investors'];
$imagen_numbers_investors = $options['imagen_numbers_investors'];

//Carrousel
$title_carrousel_investors = $options['title_carrousel_investors'];
$list_carrousel_investors = $options['list_carrousel_investors'];

//Rel
$title_rel_investors = $options['title_rel_investors'];
$button_rel_investors = $options['button_rel_investors'];
?>

<section class="page-investors">
  <!-- Banner -->
  <div class="page-investors-banner">
    <figure class="page-investors-banner-background" style="background-image: url('<?php echo $background_banner_investors ?>')"></figure>
    <div class="page-investors-banner-content">
      <div class="page-investors-banner-content-container main-wrapper-container --default2">
        <div class="page-investors-banner-inside">
          <div class="page-investors-banner-info">
            <?php if($title_banner_investors || $subtitle_banner_investors) :?>
            <div class="page-investors-banner-title">
              <h1 class="page-investors-banner-title-text"><?php echo $title_banner_investors ?></h1>
            </div>
            <div class="page-investors-banner-subtitle">
              <h3 class="page-investors-banner-subtitle-text"><?php echo $subtitle_banner_investors ?></h3>
            </div>
            <?php endif ?> 
            <div class="page-investors-banner-buttons">
              <?php if($button1_banner_investors) :?>
              <?php 
              $label = $button1_banner_investors['label'];
              $url = $button1_banner_investors['url'];
              ?>
                <a class="page-investors-banner-button general-button --type2 --white" href="<?php echo $url ?>">
                  <svg class="general-button-figure" xmlns="http://www.w3.org/2000/svg" width="59" height="66" viewBox="0 0 59 66" fill="none">
                  <path class="--arrow" d="M51.3536 33.3536C51.5488 33.1583 51.5488 32.8417 51.3536 32.6464L48.1716 29.4645C47.9763 29.2692 47.6597 29.2692 47.4645 29.4645C47.2692 29.6597 47.2692 29.9763 47.4645 30.1716L50.2929 33L47.4645 35.8284C47.2692 36.0237 47.2692 36.3403 47.4645 36.5355C47.6597 36.7308 47.9763 36.7308 48.1716 36.5355L51.3536 33.3536ZM1 33.5H51V32.5H1V33.5Z" fill="white"/>
                  <path class="--circle" d="M58.3742 52.5C52.5237 60.1016 43.3339 65 33 65C15.3269 65 1 50.6731 1 33C1 15.3269 15.3269 1 33 1C43.3339 1 52.5237 5.89842 58.3742 13.5" stroke="white"/>
                  </svg>
                  <span class="general-button-text"><?php echo $label ?></span>
                </a>
              <?php endif ?>
              <?php if($button2_banner_investors) :?>
                <?php 
                $label = $button2_banner_investors['label'];
                $file = $button2_banner_investors['file'];
                ?>
                <a class="page-investors-banner-button general-button --black --icon-left --type0 --border-white" href="<?php echo $file ?>" download>
                  <span class="general-button-text"><?php echo $label ?></span>
                  <div class="general-button-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path d="M9.34958 10.3486C9.25983 10.4451 9.13301 10.5 9 10.5C8.86699 10.5 8.74017 10.4451 8.65042 10.3486L6.1241 7.6331C5.94757 7.44335 5.96098 7.1489 6.15406 6.97541C6.34714 6.80193 6.64675 6.81509 6.82328 7.00483L8.52632 8.83543V1.96552C8.52632 1.70842 8.7384 1.5 9 1.5C9.2616 1.5 9.47368 1.70842 9.47368 1.96552V8.83543L11.1767 7.00483C11.3533 6.81509 11.6529 6.80193 11.846 6.97541C12.039 7.1489 12.0524 7.44335 11.8759 7.6331L9.34958 10.3486Z" fill="white" stroke="white" stroke-width="0.5"/>
                      <path d="M3.92308 9C3.92308 8.72387 3.71644 8.5 3.46154 8.5C3.20664 8.5 3 8.72387 3 9V9.0366C2.99999 9.94833 2.99998 10.6832 3.0717 11.2612C3.14618 11.8613 3.3055 12.3665 3.67591 12.7677C4.04632 13.1691 4.5127 13.3417 5.06662 13.4223C5.60014 13.5 6.27849 13.5 7.12008 13.5H10.8799C11.7215 13.5 12.3999 13.5 12.9334 13.4223C13.4873 13.3417 13.9537 13.1691 14.3241 12.7677C14.6945 12.3665 14.8538 11.8613 14.9283 11.2612C15 10.6832 15 9.94833 15 9.0366V9C15 8.72387 14.7934 8.5 14.5385 8.5C14.2836 8.5 14.0769 8.72387 14.0769 9C14.0769 9.95693 14.0759 10.6243 14.0135 11.1279C13.9527 11.6171 13.8417 11.8761 13.6714 12.0607C13.501 12.2452 13.262 12.3655 12.8104 12.4313C12.3455 12.4989 11.7295 12.5 10.8462 12.5H7.15385C6.27052 12.5 5.65444 12.4989 5.18961 12.4313C4.73806 12.3655 4.49894 12.2452 4.32862 12.0607C4.15831 11.8761 4.04726 11.6171 3.98655 11.1279C3.92406 10.6243 3.92308 9.95693 3.92308 9Z" fill="white" stroke="white" stroke-width="0.5"/>
                    </svg>
                  </div>
                </a>
              <?php endif ?>
            </div>
          </div>
          <?php if($pie_banner_investors) :?>
          <div class="page-investor-banner-pie">
            <?php echo$pie_banner_investors ?>
          </div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
  <!-- -->
  <!-- List -->
  <div class="page-investor-list">
    <div class="page-investor-list-container main-wrapper-container --default2">
      <?php if($title_list_investors) :?>
      <div class="page-investor-list-title general-title --version5">
        <div class="general-title-titles">
          <div class="general-title-subtitle">
            <h2 class="general-title-subtitle-text"><?php echo $title_list_investors  ?></h2>
          </div> 
        </div>
      </div>
      <?php endif ?>
      <?php if($list_list_investors) :?>
      <div class="page-investor-list-items">
        <?php foreach($list_list_investors as $item) :?>
        <?php
        $icon = $item['icon'];
        $text = $item['text'];
        ?>
        <?php if($icon || $text) :?>
        <article class="page-investor-list-item">
          <figure class="page-investor-list-item-icon">
            <img src="<?php echo $icon ?>" alt="<?php echo $text ?>" width="35" height="35" class="page-investor-list-item-icon-img" loading="lazy">
          </figure>
          <div class="page-investor-list-item-text">
            <?php echo $text ?>
          </div>
        </article>
        <?php endif;?>
        <?php endforeach; ?>
      </div>
      <?php endif;?>
    </div>
  </div>
  <!-- -->
  <!-- Numbers -->
  <div class="page-investors-numbers" style="background-image: url('<?php echo $imagen_numbers_investors ?>')">
    <div class="page-investors-numbers-container main-wrapper-container --default2">
      <div class="page-investors-numbers-inside">
        <div class="page-investors-numbers-info">
          <?php if($title_numbers_investors || $subtitle_numbers_investors || $text_numbers_investors) :?>
          <div class="page-investors-numbers-title general-title --version2">
            <div class="general-title-titles">
              <div class="general-title-title">
                <h2 class="general-title-title-text --uppercase"><?php echo $title_numbers_investors  ?></h2>
              </div> 
              <div class="general-title-subtitle">
                <h3 class="general-title-subtitle-text"><?php echo $subtitle_numbers_investors  ?></h3>
              </div> 
            </div>
            <div class="general-title-text">
              <?php echo $text_numbers_investors ?>
            </div>
          </div>
          <?php endif ?>
          <?php if($list_numbers_investors) :?>
          <div class="page-investors-numbers-numbers">
          <?php foreach($list_numbers_investors as $number) :?>
          <?php
          $symbol = $number['symbol'];
          $number_number = $number['number'];
          $text = $number['text'];
          ?>
            <div class="page-investors-numbers-detail">
              <div class="page-investors-numbers-detail-number">
                <?php if($number_number) :?>
                <span class="page-investors-numbers-number-txt"><?php echo $number_number ?></span>
                <?php endif ?>
                <?php if($symbol) :?>
                <span class="page-investors-numbers-symbol"><?php echo $symbol ?></span>
                <?php endif ?>
              </div>
              <?php if($text) :?>
              <div class="page-investors-numbers-number-text"><?php echo $text ?></div>
              <?php endif ?> 
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
  <!-- -->
  <!--Carrousel -->
  <div class="page-investors-carrousel">
    <div class="page-investors-carrousel-container main-wrapper-container --default2">
    <figure class="page-investors-plants1">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/plants-i.png" class="page-investors-plants1-img" alt="Ciudaris" width="81" height="135" loading="lazy">
    </figure>
    <figure class="page-investors-plants2">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/plants-i2.png" class="page-investors-plants2-img" alt="Ciudaris" width="116" height="189" loading="lazy">
    </figure>
      <?php if($title_carrousel_investors) :?>
      <div class="page-investors-carrousel-title general-title --version2">
        <div class="general-title-titles">
          <div class="general-title-subtitle">
            <h2 class="general-title-subtitle-text"><?php echo $title_carrousel_investors  ?></h2>
          </div> 
        </div>
      </div>
      <?php endif ?>
      <?php if($list_carrousel_investors) :?>
      <div class="page-investors-carrousel-block">
        <div class="page-investors-carrousel-block-arrows-list">
          <div class="page-investors-carrousel-list --list-none investors--carrousel">
            <ul class="swiper-wrapper">
              <?php foreach ($list_carrousel_investors as $item) : ?>
              <?php
              $image = $item['image'];
              ?>
              <li class="swiper-slide">
                <div class="page-investors-carrousel-item">
                  <?php if($image) :?>
                  <figure class="page-investors-item-image">
                    <img src="<?php echo $image ?>" alt="Ciudaris" class="page-investors-carrousel-item-img" width="1009" height="436" loading="lazy">
                  </figure>
                  <?php endif; ?>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="general-arrows page-investors-carrousel-arrows">
            <div class="general-arrow --type1  investors--carrousel-prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1944 4.31775C13.9692 4.06058 13.5779 4.03452 13.3205 4.25955L7.06931 9.72411C6.59931 10.135 6.59931 10.8654 7.06931 11.2763L13.3205 16.7409C13.5779 16.9659 13.9692 16.9398 14.1944 16.6827C14.4197 16.4255 14.3936 16.0346 14.1361 15.8095L8.06255 10.5002L14.1361 5.19086C14.3936 4.96583 14.4197 4.57493 14.1944 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="general-arrow --type1  investors--carrousel-next">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85833 4.31775C7.08357 4.06058 7.47484 4.03452 7.73226 4.25955L13.9834 9.72411C14.4534 10.135 14.4534 10.8654 13.9834 11.2763L7.73226 16.7409C7.47484 16.9659 7.08357 16.9398 6.85833 16.6827C6.63308 16.4255 6.65917 16.0346 6.91659 15.8095L12.9902 10.5002L6.91659 5.19086C6.65917 4.96583 6.63308 4.57493 6.85833 4.31775Z" fill="#00385D" stroke="#00385D" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
        </div>
        <div class="general-pagination-slide --type1 investors-carrousel-pagination investors--carrousel-pagination"></div>
      </div>
      <?php endif ?>
    </div>
  </div>
  <!-- -->
  <!-- Rel -->
  <?php
  $category_args = array(
  'cat' => $category_id,
  'posts_per_page' => 3,
  );
  $category_query = new WP_Query($category_args);
  ?>
  <?php if ($category_query->have_posts()) : ?>
  <div class="page-investors-rel">
    <div class="page-investors-rel-container main-wrapper-container --default2">
      <div class="page-investors-rel-title-button">
        <?php if($title_rel_investors) :?>
        <div class="page-investors-rel-title general-title --version2">
          <div class="general-title-titles">
            <div class="general-title-subtitle">
              <h2 class="general-title-subtitle-text"><?php echo $title_rel_investors  ?></h2>
            </div> 
          </div>
        </div>
        <?php endif ?>
        <?php if($button_rel_investors) :?>
        <?php 
        $url = $button_rel_investors['url'];
        $label = $button_rel_investors['label'];
        ?>
        <div class="page-investors-rel-button">
          <a class="general-button --type1 --border-blue" href="<?php echo $url ?>">
						<span class="general-button-text"><?php echo $label ?></span>
					</a>
        </div>
        <?php endif ?>
      </div>
      <div class="page-investors-rel-items">
        <?php while ($category_query->have_posts()) : $category_query->the_post(); ?>
        <div class="page-investors-rel-item">
          <?php get_template_part( 'templates/blog/item/content', 'blog'); ?>
        </div>
        <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <?php endif ?>
  <!-- -->
</section>

<?php get_footer(); ?>