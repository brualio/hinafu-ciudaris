<?php
function register_cpt_legal() {
	register_post_type( 'legal',
		array(
			'labels' => array(
				'name' => __( 'Legales' ),
				'singular_name' => __( 'Legal' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'legal'),
			'show_in_rest' => true,
			'menu_position' => 20,
			'menu_icon' => 'dashicons-media-document',
			#https://developer.wordpress.org/resource/dashicons/#admin-links
			'supports' => array('title'),
			'publicly_queryable' => false,
		)
	);

	register_taxonomy(
		'categoria-legal',
		'legal',
		array(
			'hierarchical' => true,
			'label' => 'Categorias',
			'query_var' => true,
			'show_admin_column' => true,
			'rewrite' => array(
				'slug' => 'categoria-legal',
				'with_front' => false,
			)
		)
	);
}	
add_action( 'init', 'register_cpt_legal' );