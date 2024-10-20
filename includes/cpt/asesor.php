<?php

function register_cpt_asesor() {
	register_post_type( 'asesor',
		array(
			'labels' => array(
				'name' => __( 'Asesores' ),
				'singular_name' => __( 'Asesor' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'asesor'),
			'show_in_rest' => true,
			'menu_position' => 20,
			'menu_icon' => 'dashicons-groups',
			#https://developer.wordpress.org/resource/dashicons/#admin-links
			'supports' => array('title','thumbnail'),
			'publicly_queryable' => false,
		)
	);
}	

add_action( 'init', 'register_cpt_asesor' );