<?php
get_header(); ?>

<section class="main-wrapper-padding --all">
	<div class="main-wrapper-container --default --styles-editor">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php the_title() ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		<?php endif; ?>
	</div>
</section>


<?php get_footer(); ?>