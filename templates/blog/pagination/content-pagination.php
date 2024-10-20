<?php if( $wp_query->max_num_pages >= 1 ) { ?>
<?php
	echo '<div class="pagination-wp">';
	echo paginate_links( array(
		'base' => preg_replace('/\?.*/', '', get_pagenum_link(1)) . '%_%',
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
	) );
	echo '</div>';
	?>
<?php } ?> 