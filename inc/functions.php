<?php

function _d($o, $titulo = "") {
	if(isset($titulo)) echo "<h1>" . $titulo . "</h1>";
	echo "<pre>";
	print_r($o);
	echo "</pre>";
}

function _debug($array_to_debug = []){
	$file = get_stylesheet_directory() . '/custom_debug.txt';
	file_put_contents($file, "Debugging: " . print_r($array_to_debug, true) . "\n\n", FILE_APPEND);
}

add_filter( 'wpcf7_form_tag', 'filter_select' );
function filter_select( $content ) {
	global $projects;

	if ( isset( $content['name'] ) && 'proyecto_cotizado' == $content['name'] ) {
		$args = array(
			'post_type'      => 'proyecto',
			'posts_per_page' => -1,
			'status'         => 'publish',
		);

		$q = new WP_Query( $args );

		$values = array();
		$labels = array( '' );
		$data   = array();

		while ( $q->have_posts() ) {
			$q->the_post();
			global $post;

			if ( have_rows( 'list_typology_project' ) ) {
				$data[ $post->post_name ] = array();

				$index = 0;
				while ( have_rows( 'list_typology_project' ) ) {
					the_row();

					$temp = array(
						'type' => get_sub_field( 'type' ),
						'dorm' => get_sub_field( 'bedroom' ),
						'area' => get_sub_field( 'area' ),
						'flat' => get_sub_field( 'flat' ),
					);

					$data[ $post->post_name ][] = array(
						'type'  => $temp['type'],
						'label' => implode( ' | ', array( $temp['type'], $temp['dorm'], $temp['area'] ) ),
						'img'   => $temp['flat'],
						'index' => $index++,
					);
				}
			}

			$values[] = $post->post_name;
			$labels[] = get_the_title();
		}

		if ( ! empty( $values ) ) {
			$values = array_merge( array( '' ), $values );

			$content['raw_values'] = $values;
			$content['values']     = $values;
			$content['labels']     = $labels;

			$projects = $data;
			add_action( 'wp_footer', 'projects_script' );
		}
	}

	wp_reset_query();
	return $content;
}

add_action( 'wp_footer', 'projects_script' );
function projects_script() {
	global $projects;
?>
<script>
	let projects = <?php echo json_encode( $projects ); ?>;
</script>
<?php
}

remove_action( 'wpcf7_swv_create_schema', 'wpcf7_swv_add_select_enum_rules', 20, 2 );

add_filter( 'query_vars', 'add_distrito_filter_var', 0 );
function add_distrito_filter_var( $vars ) {
	$vars[] = 'distrito';
	return $vars;
}

add_action( 'init', 'py_filter_rewrite_rules', 10 );
function py_filter_rewrite_rules() {
	flush_rewrite_rules();
	add_rewrite_rule( '^venta-departamentos/([^/]*)/?', 'index.php?page_id=32&distrito=$matches[1]', 'top' );
}

add_action( 'init', 'py_filter_rewrite_tag', 10);
function py_filter_rewrite_tag() {
	add_rewrite_tag( '%venta-departamentos%', '([^&]+)' );
}
