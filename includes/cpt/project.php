<?php
function register_cpt_proyecto() {
	register_post_type( 'proyecto',
		array(
			'labels' => array(
				'name' => __( 'Proyectos' ),
				'singular_name' => __( 'Proyecto' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'proyecto'),
			'show_in_rest' => true,
			'menu_position' => 20,
			'menu_icon' => 'dashicons-building',
			#https://developer.wordpress.org/resource/dashicons/#admin-links
			'supports' => array('title'),
			//'publicly_queryable' => false,
		)
	);

	register_taxonomy(
		'categoria-proyecto',
		'proyecto',
		array(
			'hierarchical' => true,
			'label' => 'Categorias',
			'query_var' => true,
			'show_admin_column' => true,
			'rewrite' => array(
				'slug' => 'categoria-proyecto',
				'with_front' => false,
			)
		)
	);

	register_taxonomy(
		'distrito-proyecto',
		'proyecto',
		array(
			'hierarchical' => true,
			'label' => 'Distritos',
			'query_var' => true,
			'show_admin_column' => true,
			'rewrite' => array(
				'slug' => 'distrito-proyecto',
				'with_front' => false,
			)
		)
	);

}	
add_action( 'init', 'register_cpt_proyecto' );