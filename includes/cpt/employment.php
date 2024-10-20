<?php

function register_cpt_employment() {
	register_post_type( 'employment',
		array(
			'labels' => array(
				'name' => __( 'Empleos' ),
				'singular_name' => __( 'Empleo' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'employment'),
			'show_in_rest' => true,
			'menu_position' => 20,
			'menu_icon' => 'dashicons-businessman',
			#https://developer.wordpress.org/resource/dashicons/#admin-links
			'supports' => array('title','editor'),
			'publicly_queryable' => false,
		)
	);
}	

add_action( 'init', 'register_cpt_employment' );