<?php 

function obtener_posts_ajax() {
    // Verificar nonce para la seguridad
    check_ajax_referer('mi_nonce', 'security');

    // Obtener el número de posts a cargar y el offset desde la solicitud
    $posts_per_page = intval($_POST['posts_per_page']);
    $offset = intval($_POST['offset']);

    // Configuración de la consulta
    $args = array(
        'posts_per_page' => $posts_per_page,
        'offset' => $offset,
        'post_status' => 'publish'
    );

    // Obtener los posts
    $query = new WP_Query($args);

    // Iniciar la variable de respuesta
    $response = array(
        'html' => '',
        'total' => $query->found_posts  // Total de posts disponibles
    );

    // Verificar si hay posts
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $response['html'] .= '<article class="post">';
            $response['html'] .= '<h2>' . get_the_title() . '</h2>';
            $response['html'] .= '<div class="entry-content">' . get_the_excerpt() . '</div>';
            $response['html'] .= '<a href="' . get_permalink() . '">Leer más</a>';
            $response['html'] .= '</article>';
        }
        wp_reset_postdata();
    } else {
        $response['html'] = '<p>No hay más posts disponibles.</p>';
    }

    // Devolver la respuesta al cliente
    echo json_encode($response);
    wp_die();
}
add_action('wp_ajax_obtener_posts', 'obtener_posts_ajax');
add_action('wp_ajax_nopriv_obtener_posts', 'obtener_posts_ajax');


?>