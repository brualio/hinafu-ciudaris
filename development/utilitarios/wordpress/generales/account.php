<?php

// Login
add_action('wp_ajax_nopriv__loginAjax', '_loginAjax');
add_action('wp_ajax__loginAjax', '_loginAjax');
function _loginAjax(){
	check_ajax_referer( 'ajax-login-nonce', 'security' );
	$email = $_POST['username_email'];
	$info = array();
	$info['user_login'] = $email;
	$info['user_password'] = $_POST['username_pass'];

	$user_signon = wp_signon( $info, false );
	if ( !is_wp_error($user_signon) ){
		wp_send_json( array('loggedin' => TRUE ) );
	} else {
		$error = $user_signon->errors;
		if(isset( $user_signon->errors['invalid_email'])):
			$error['invalid_email'][0] = 'Dirección de correo electrónico desconocida.';
		endif;
		if(isset( $user_signon->errors['incorrect_password'])):
			$error['incorrect_password'][0] = '"La contraseña que has introducido para la dirección de correo electrónico <strong>'.$email.'</strong> no es correcta."';
		endif;
		wp_send_json( array('loggedin' => FALSE ,'message' => $error ) );
	}
	wp_die();
}

// Register
function get_random_unique_username( $prefix = '' ){
	$user_exists = 1;
	do {
		 $rnd_str = sprintf("%06d", mt_rand(1, 99999999));
		 $user_exists = username_exists( $prefix . $rnd_str );
	} while( $user_exists > 0 );
	return $prefix . $rnd_str;
}

add_action('wp_ajax_nopriv__registerAjax', '_registerAjax');
add_action('wp_ajax__registerAjax', '_registerAjax');
function _registerAjax(){
	check_ajax_referer( 'ajax-register-nonce', 'security-register' );
	$email = stripcslashes($_POST['register_email']);
	$pass = $_POST['register_pass'];
	$user_data = array(
		'user_login' => get_random_unique_username( "user_" ),
		'user_email' => $email,
		'user_pass' => $pass ,
		'user_nicename' => stripcslashes($_POST['register_name']),
		'display_name' => stripcslashes($_POST['register_name']),
		'first_name' => stripcslashes($_POST['register_name']),
		'role' => 'subscriber'
	);

	$user_id = wp_insert_user($user_data);
	if ( !is_wp_error($user_id ) ){
		_new_user_notification( $user_id, $_POST['register_pass'] );
		$info = array();
		$info['user_login'] = $email;
		$info['user_password'] = $pass;
		$user_signon = wp_signon( $info, false );
		if(!is_wp_error($user_signon)){
			wp_send_json( array('registered' => TRUE ) );
		}else{
			wp_send_json( array('registered' => FALSE ) );
		}
	} else {
		$error = $user_id->errors;
		/*if(isset( $user_id->errors['invalid_email'])):
			$error['invalid_email'][0] = 'Dirección de correo electrónico desconocida.';
		endif; */

		wp_send_json( array('registered' => FALSE ,'message' => $error ) );
	}
	wp_die();
	}


// Forget password
add_action('wp_ajax_nopriv__forgetYourPasswordAjax', '_forgetYourPasswordAjax');
add_action('wp_ajax__forgetYourPasswordAjax', '_forgetYourPasswordAjax');
function _forgetYourPasswordAjax(){
check_ajax_referer( 'ajax-forgetYourPassword-nonce', 'security-forgetYourPassword' );
$email = sanitize_text_field($_POST['forget_email']);
if(email_exists($email)){
	$user = get_user_by('email',$email);
	if(isset($user) && !empty($user)){
		$user_id = $user->ID;
		$user_info = get_userdata($user_id);
		$unique = get_password_reset_key( $user_info );
		$unique_url = network_site_url("?action=rp&key=$unique&login=" . rawurlencode($user_info->user_login), '');

		add_filter( 'wp_mail_content_type', '_content_type' );

		$subject  =  jc_get_option('jc_mails_options','mail_lost_password_subject') ? jc_get_option('jc_mails_options','mail_lost_password_subject') : 'Reset Password Link';

		$at = array('{{name}}', '{{user_login}}', '{{url}}');
		$rp = array(ucfirst( $user_info->first_name ), $user_info->user_login , '<a href="'.$unique_url.'">aqui</a>' );
		$message = str_replace($at, $rp, jc_get_option('jc_mails_options','mail_lost_password'));

		$mt = _mailHTML( $subject , $message );
		$msg = '<span class="text-w">Comprueba tu correo electrónico para el enlace de confirmación .</a></span>';
		@wp_mail( $email , $subject, $mt );

		wp_send_json( array( 'send' => true, 'message' => $msg ));
	}

}else{
	$msg = 'No hay ninguna cuenta con ese nombre de usuario o dirección de correo electrónico.';
	wp_send_json( array( 'send' => false, 'message' => array('exist' => $msg) ));
}

wp_die();
}


function _content_type() { return 'text/html'; }

// Redefine user notification function
function _new_user_notification( $user_id, $pass = '' ) {

	add_filter( 'wp_mail_content_type', '_content_type' );

	$user = new WP_User($user_id);
	$user_login = stripslashes($user->user_login);
	$user_email = stripslashes($user->user_email);

	$message_admin = '<p>Nombre de usuario: '.$user->user_login.'</p>';
	$message_admin .= '<p>Correo electrónico: '.$user->user_email.'</p>';
	//ADMIN
	$message  = _mailHTML( 'Registrado un nuevo usuario en tu sitio'.get_option('blogname') , $message_admin );

	@wp_mail(_emailSend(), 'Registro de nuevo usuario' , $message);

	$subject  =  jc_get_option('jc_mails_options','mail_welcome_subject') ? jc_get_option('jc_mails_options','mail_welcome_subject') : 'Registro de nuevo usuario';

	$at = array('{{name}}', '{{user_login}}', '{{pass}}' ,'{{email}}','{{blog}}');
	$rp = array( $user->first_name ,$user->user_login , $pass , $user->user_email, get_bloginfo('url'));
	$messages = str_replace($at, $rp, jc_get_option('jc_mails_options','mail_welcome'));

	//USERS
	$message2  = _mailHTML( '' , $messages );

	@wp_mail($user_email, $subject , $message2 );

	remove_filter ( 'wp_mail_content_type', '_content_type' );
}

add_action('wp_ajax_nopriv__resetPasswordAjax', '_resetPasswordAjax');
add_action('wp_ajax__resetPasswordAjax', '_resetPasswordAjax');
function _resetPasswordAjax(){
	check_ajax_referer( 'ajax-reset-password-nonce', 'security-reset-password' );
	$pass = $_POST['reset-password'];
	$user = check_password_reset_key( $_POST['key'], $_POST['login'] );
	reset_password( $user, $pass );
	wp_send_json( array( 'reset' => true, 'message' => '<span class="text-w">La contraseña fue actualizada con éxito</span>' ));
	wp_die();
}

add_action('wp_ajax_nopriv__changePasswordAjax', '_changePasswordAjax');
add_action('wp_ajax__changePasswordAjax', '_changePasswordAjax');
function _changePasswordAjax(){
	$save_pass            = true;

	check_ajax_referer( 'ajax-change-nonce', 'security-change' );
	$pass_cur             = ! empty( $_POST['password'] ) ? $_POST['password'] : '';
	$pass1                = ! empty( $_POST['password-new'] ) ? $_POST['password-new'] : '';
	$pass2                = ! empty( $_POST['password-repeat'] ) ? $_POST['password-repeat'] : '';

	$user_id = get_current_user_id();
	$current_user       = get_user_by( 'id', $user_id );

	$user               = new stdClass();
	$user->ID           = $user_id;


	if ( ! empty( $pass_cur ) && empty( $pass1 ) && empty( $pass2 ) ) {
		$error = 'Complete todos los campos de contraseña.';
		$save_pass = false;
	} elseif ( empty( $pass1 )){
		$error = 'Ingrese su contraseña actual.';
		$save_pass = false;
	} elseif ( ! empty( $pass1 ) && empty( $pass_cur ) ) {
		$error = 'Ingrese su contraseña actual.';
		$save_pass = false;
	} elseif ( ! empty( $pass1 ) && empty( $pass2 ) ) {
		$error = 'Por favor re ingrese su contraseña.';
		$save_pass = false;
	} elseif ( ( ! empty( $pass1 ) || ! empty( $pass2 ) ) && $pass1 !== $pass2 ) {
		$error = 'Las nuevas contraseñas no coinciden.';
		$save_pass = false;
	} elseif ( ! empty( $pass1 ) && ! wp_check_password( $pass_cur, $current_user->user_pass, $current_user->ID ) ) {
		$error = 'Tu contraseña actual es incorrecta.';
		$save_pass = false;
	}

	if ( $pass1 && $save_pass ) {
		$user->user_pass = $pass1;
		wp_update_user( $user );
		//wp_clear_auth_cookie();
		//wp_logout();
	 wp_send_json( array( 'change' => true ));
	}else{
		wp_send_json( array( 'change' => false, 'message' => $error ));
	}

	wp_die();
}

add_action('wp_ajax_nopriv__deleteAcountAjax', '_deleteAcountAjax');
add_action('wp_ajax__deleteAcountAjax', '_deleteAcountAjax');
function _deleteAcountAjax(){
	check_ajax_referer( 'ajax-delete-nonce', 'security-delete' );
	$save_pass = true;
	$pass_cur = $_POST['password'];
	$user_id = get_current_user_id();
	$current_user       = get_user_by( 'id', $user_id );

	if(!wp_check_password( $pass_cur, $current_user->user_pass, $current_user->ID ) ) {
		$error = 'Tu contraseña actual es incorrecta.';
		$save_pass = false;
	}

	if ( $pass_cur && $save_pass ) {
		wp_delete_user($user_id);
		wp_clear_auth_cookie();
		wp_logout();
		wp_send_json( array( 'delete' => true, 'message' => '<span class="text-w">la cuenta se elimino con éxito </span>'  ));
	}else{
		wp_send_json( array( 'delete' => false, 'message' => $error ,'post' => $_POST , 'user'=> $current_user ));
	}

	wp_die();
}

add_filter( 'send_password_change_email', '__return_false' );
add_filter( 'show_admin_bar', '__return_false' );

if ( ! function_exists( 'wp_password_change_notification' ) ) {
	function wp_password_change_notification( $user ) {
			return;
	}
}

?>