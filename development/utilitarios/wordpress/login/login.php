
<?php
$args = [
	'redirect' => admin_url(), 
	'form_id' => 'loginform-custom',
	'label_username' => __( 'Correo Electrónico' ),
	'label_password' => __( 'Contraseña' ),
	'label_remember' => __( 'Recuérdame' ),
	'label_log_in' => __( 'Iniciar Sesión' ),
	'remember' => true,
	"redirect" => site_url("mensajes-asociados"),
];

wp_login_form( $args );
?>

<?php

add_action( 'wp_login_failed', 'front_end_login_fail' );
add_action( 'authenticate', 'check_username_password', 1, 3);

function front_end_login_fail( $username ) {
$referrer = $_SERVER['HTTP_REFERER'];    
if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) {
    wp_redirect( get_permalink(811) . "?login=failed" ); 
    exit;
}
}
function check_username_password( $login, $username, $password ) {
$referrer = $_SERVER['HTTP_REFERER'];
if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) { 
    if( $username == "" || $password == "" ){
        wp_redirect( get_permalink(811) . "?login=empty" );
        exit;
    }
}
}

?>