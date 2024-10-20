

<?php 	
    $custom_terms = get_terms('especialidad'); ?>
    <?php
    foreach($custom_terms as $custom_term) {
        wp_reset_query();
        $args = array(
            'post_type' => 'servicio',
            'posts_per_page' => 9,
            'tax_query' => array(
                array(
                    'taxonomy' => 'especialidad',
                    'field' => 'slug',
                    'terms' => $custom_term->slug,
                    
                ),
            ),
        );
        $loop = new WP_Query($args);
        if($loop->have_posts()) { ?>
            <div class="it" >
                <?php // echo '<h2>'.$custom_term->name.'</h2>'; ?>
                <?php
                while($loop->have_posts()) : $loop->the_post(); ?>
                    <?php the_title()?>
                    <?php 	
                endwhile;?>
            </div>
            <?php
    }
} 

?>