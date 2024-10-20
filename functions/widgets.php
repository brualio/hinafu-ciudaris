<?php

function tutsplus_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Seccion #1', 'agesp' ),
		'id' => 'first-widget-area',
		'description' => __( 'Primer Widget', 'agesp' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Seccion #2', 'agesp' ),
		'id' => 'second-widget-area',
		'description' => __( 'Segundo Widget', 'agesp' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'tutsplus_widgets_init' );

?>