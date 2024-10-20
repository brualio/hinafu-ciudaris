<div class="block-news-aside">
  <div class="block-news-aside-items">    
    <div class="block-news-aside-item --categories">
      <div class="block-news-aside-title">
        <div class="block-news-aside-title-text"><?php _e('Categorías','ciudaris') ?></div>
      </div>
      <div class="block-news-aside-categories --list-none">
        <?php wp_list_categories('title_li='); ?>
      </div>
    </div>
    <?php
    $args = array( 
      'meta_key' => 'post_views_count',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'posts_per_page' => 4
    );
    $wp_query = new WP_Query($args); ?>
    <?php if($wp_query->have_posts()) : ?>
    <div class="block-news-aside-item --recent">
      <div class="block-news-aside-title">
        <div class="block-news-aside-title-text"><?php _e('publicaciones más vistas','ciudaris') ?></div>
      </div>
      <div class="block-news-aside-recent">
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <a class="block-news-aside-recent-item" href="<?php echo get_permalink(); ?>">
          <figure class="block-news-aside-recent-item-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></figure>
          <div class="block-news-aside-recent-item-info">
            <div class="block-news-aside-recent-item-title">
              <h3 class="block-news-aside-recent-item-title-text"><?php the_title() ?></h3>
            </div>
            <div class="block-news-aside-recent-item-date"><?php echo the_date_custom_post_day_month() ?></div>
          </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
    <?php endif ?>
  </div>
</div>