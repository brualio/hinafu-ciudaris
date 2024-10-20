<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="author" content="<?php bloginfo('name'); ?>">
	<meta name="robots" content="all, index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/public/assets/css/main.min.css"/>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php
$options = get_fields('options');
$logotipo_header = $options['logotipo_header'];
$logotipo2_header = $options['logotipo2_header'];

$address_g = $options['address_g'];
$telephone_g = $options['telephone_g'];

$text_events_g = $options['text_events_g'];
$image_events_g = $options['image_events_g'];
$url_events_g = $options['url_events_g'];
?>
<header class="main-header main--header">
	<div class="main-header-block main-header--scroll">
		<div class="main-header-container main-wrapper-container --default">
			<a class="main-header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img class="main-header-logo-img --color" src="<?php echo $logotipo_header ?>" width="150" height="90" alt="Ciudaris" />
				<img class="main-header-logo-img --white" src="<?php echo $logotipo2_header ?>"  width="150" height="90" alt="Ciudaris" />
			</a>
			<div class="main-header-content">
				<nav class="main-header-nav list--none">
					<?php wp_nav_menu( array(
						'theme_location' => 'header',
						'menu_class' => 'main-header-list',
						'container' => '',
						'container_class' => '',
					)); ?> 
				</nav>
				<div class="main-header-burguer sidebar--open">
					<svg class="header-burguer--1" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
						<g filter="url(#filter0_b_226_2426)">
							<path d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" fill="#E3E3E3" fill-opacity="0.2"/>
							<path d="M0.5 24C0.5 11.0213 11.0213 0.5 24 0.5C36.9787 0.5 47.5 11.0213 47.5 24C47.5 36.9787 36.9787 47.5 24 47.5C11.0213 47.5 0.5 36.9787 0.5 24Z" stroke="#2C2C2C"/>
						</g>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M35 24.2432C35 23.5774 34.5234 23.0376 33.9355 23.0376H14.0645C13.4766 23.0376 13 23.5774 13 24.2432C13 24.9091 13.4766 25.4489 14.0645 25.4489H33.9355C34.5234 25.4489 35 24.9091 35 24.2432Z" fill="#2C2C2C"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M35 16.2056C35 15.5398 34.5234 15 33.9355 15H14.0645C13.4766 15 13 15.5398 13 16.2056C13 16.8715 13.4766 17.4113 14.0645 17.4113H33.9355C34.5234 17.4113 35 16.8715 35 16.2056Z" fill="#2C2C2C"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M35 32.2809C35 31.615 34.5234 31.0752 33.9355 31.0752H14.0645C13.4766 31.0752 13 31.615 13 32.2809C13 32.9467 13.4766 33.4865 14.0645 33.4865H33.9355C34.5234 33.4865 35 32.9467 35 32.2809Z" fill="#2C2C2C"/>
						<defs>
							<filter id="filter0_b_226_2426" x="-10" y="-10" width="68" height="68" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feGaussianBlur in="BackgroundImageFix" stdDeviation="5"/>
								<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_226_2426"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_226_2426" result="shape"/>
							</filter>
						</defs>
					</svg>
					<svg class="header-burguer--2" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
						<g filter="url(#filter0_b_161_2749)">
							<path d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" fill="#E3E3E3" fill-opacity="0.2"/>
							<path d="M0.5 24C0.5 11.0213 11.0213 0.5 24 0.5C36.9787 0.5 47.5 11.0213 47.5 24C47.5 36.9787 36.9787 47.5 24 47.5C11.0213 47.5 0.5 36.9787 0.5 24Z" stroke="#D5D5D5"/>
						</g>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M35 24.2432C35 23.5774 34.5234 23.0376 33.9355 23.0376H14.0645C13.4766 23.0376 13 23.5774 13 24.2432C13 24.9091 13.4766 25.4489 14.0645 25.4489H33.9355C34.5234 25.4489 35 24.9091 35 24.2432Z" fill="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M35 16.2056C35 15.5398 34.5234 15 33.9355 15H14.0645C13.4766 15 13 15.5398 13 16.2056C13 16.8715 13.4766 17.4113 14.0645 17.4113H33.9355C34.5234 17.4113 35 16.8715 35 16.2056Z" fill="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M35 32.2809C35 31.615 34.5234 31.0752 33.9355 31.0752H14.0645C13.4766 31.0752 13 31.615 13 32.2809C13 32.9467 13.4766 33.4865 14.0645 33.4865H33.9355C34.5234 33.4865 35 32.9467 35 32.2809Z" fill="white"/>
						<defs>
							<filter id="filter0_b_161_2749" x="-10" y="-10" width="68" height="68" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feGaussianBlur in="BackgroundImageFix" stdDeviation="5"/>
								<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_161_2749"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_161_2749" result="shape"/>
							</filter>
						</defs>
					</svg>
				</div>
			</div>
		</div>
	</div>
</header>

<span class="main-sidebar-overlay main-sidebar--overlay"></span>
<div class="main-sidebar main--sidebar">
	<div class="main-sidebar-container list--none">
		<div class="main-sidebar-burguer sidebar--close">
			<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
				<g clip-path="url(#clip0_1076_15079)">
					<path d="M8.59275 7.49989L14.2557 1.8369C14.5538 1.53885 14.5538 1.0421 14.2557 0.744047C13.9577 0.445995 13.4609 0.445995 13.1629 0.744047L7.49989 6.40703L1.8369 0.744047C1.53885 0.445995 1.0421 0.445995 0.744047 0.744047C0.445995 1.0421 0.445995 1.53885 0.744047 1.8369L6.40703 7.49989L0.744047 13.1629C0.445995 13.4609 0.445995 13.9577 0.744047 14.2557C0.942748 14.3551 1.14145 14.4544 1.34015 14.4544C1.53885 14.4544 1.73755 14.3551 1.8369 14.2557L7.49989 8.59275L13.1629 14.2557C13.3616 14.4544 13.5603 14.4544 13.6596 14.4544C13.8583 14.4544 14.057 14.3551 14.1564 14.2557C14.4544 13.9577 14.4544 13.4609 14.1564 13.1629L8.59275 7.49989Z" fill="white"/>
				</g>
				<defs>
					<clipPath id="clip0_1076_15079">
						<rect width="13.9091" height="13.9091" fill="white" transform="translate(0.54541 0.54541)"/>
					</clipPath>
				</defs>
			</svg>
		</div>
		<div class="main-sidebar-promo">
			<div class="main-sidebar-promo-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="5" height="25" viewBox="0 0 5 25" fill="none">
					<circle cx="2.5" cy="2.5" r="2.5" transform="matrix(-3.96134e-08 -1 -1 4.82333e-08 5 25)" fill="#FF313A"/>
					<circle cx="2.5" cy="2.5" r="2.5" transform="matrix(-3.96134e-08 -1 -1 4.82333e-08 5 15)" fill="#00B2E3"/>
					<circle cx="2.5" cy="2.5" r="2.5" transform="matrix(-3.96134e-08 -1 -1 4.82333e-08 5 5)" fill="#FAB906"/>
				</svg>
			</div>
			<div class="main-sidebar-promo-text"><?php echo $text_events_g  ?></div>
		</div>
		<div class="main-sidebar-nav-events">
			<nav class="main-sidebar-nav --list-none">
			<?php wp_nav_menu( array(
				'theme_location' => 'header-sidebar-top',
				'menu_class' => 'main-sidebar-list main-sidebar-list-top',
				'container' => '',
				'container_class' => '',
			)); ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'header-sidebar',
				'menu_class' => 'main-sidebar-list',
				'container' => '',
				'container_class' => '',
			)); ?>
			</nav>
			<div class="main-sidebar-events">
				<?php if($url_events_g) :?>
				<a href="<?php echo $url_events_g ?>" target="_blank" class="main-sidebar-events-image">
					<img src="<?php echo $image_events_g ?>" alt="Ciudaris" lazy="loading" class="main-sidebar-events-img">
				</a>
				<?php else :?>
				<figure class="main-sidebar-events-image">
					<img src="<?php echo $image_events_g ?>" alt="Ciudaris" lazy="loading" class="main-sidebar-events-img">
				</figure>
				<?php endif;?>
			</div>
		</div>
		<div class="main-sidebar-details-social">
			<div class="main-sidebar-details">
				<div class="main-sidebar-details-items">
					<?php if($address_g) : ?>
					<a href="https://www.google.com/maps/place/<?php echo $address_g ?>" target="_blank" class="main-sidebar-details-item --address">
						<span class="main-sidebar-details-item-icon icon-mappin_icon_n"></span>
						<div class="main-sidebar-details-item-text"><?php echo $address_g ?></div>
					</a>
					<?php endif; ?>
					<?php if($telephone_g) : ?>
					<a href="tel:<?php echo $telephone_g ?>" class="main-sidebar-details-item --telephone">
						<span class="main-sidebar-details-item-icon icon-phone_icon_b"></span>
						<div class="main-sidebar-details-item-text"><?php echo $telephone_g ?></div>
					</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="main-sidebar-social --list-none">
				<?php echo do_shortcode('[social_media_list]')?>
			</div>
		</div>
			
	</div>
</div>

<!-- Admin -->
<?php
$current_user = wp_get_current_user();
if (user_can( $current_user, 'administrator' ) || user_can( $current_user, 'editor' )) {?>
    <script>
        document.body.parentElement.classList.add('---admin-bar')
    </script>
<?php
}
?>
<!--  -->

<!-- Whatsapp -->
<?php
$number_whatsapp_g = $options['number_whatsapp_g'];
$text_whatsapp_g = $options['text_whatsapp_g'] ? $options['text_whatsapp_g'] : 'Hola, necesito información';
?>
<?php if($number_whatsapp_g) :?>
<a class="whatsapp-fixed" href="https://api.whatsapp.com/send?phone=<?php echo $number_whatsapp_g ?>&amp;text=<?php echo $text_whatsapp_g ?>" target="_blank">
	<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
		<circle cx="40" cy="40" r="40" fill="#58CE35" fill-opacity="0.2"/>
		<circle cx="40.7275" cy="40.7271" r="32" fill="#58CE35" fill-opacity="0.29"/>
		<path fill-rule="evenodd" clip-rule="evenodd" d="M23.2725 56.7275L25.6357 48.137C24.1776 45.623 23.4112 42.7708 23.412 39.8495C23.4156 30.7092 30.8881 23.2729 40.0694 23.2729C44.5256 23.2749 48.708 25.0013 51.8524 28.1347C54.9977 31.2681 56.7287 35.4331 56.727 39.8624C56.7231 49.003 49.2504 56.44 40.0702 56.44C40.0694 56.44 40.0705 56.44 40.0702 56.44H40.0627C37.2751 56.4389 34.5357 55.7425 32.1028 54.4225L23.2725 56.7275Z" fill="#2DC600" stroke="white" stroke-width="2"/>
		<path fill-rule="evenodd" clip-rule="evenodd" d="M36.2122 32.4699C35.8893 31.7553 35.5492 31.7409 35.2419 31.7285C34.9906 31.7177 34.7029 31.7183 34.4158 31.7183C34.1284 31.7183 33.6612 31.826 33.2662 32.2554C32.8709 32.6848 31.7568 33.7231 31.7568 35.8347C31.7568 37.9466 33.302 39.987 33.5175 40.2737C33.7331 40.56 36.5002 45.0319 40.8824 46.7522C44.5244 48.1821 45.2654 47.8977 46.056 47.8262C46.8466 47.7546 48.6067 46.7879 48.966 45.7857C49.3255 44.7836 49.3255 43.9248 49.2176 43.7451C49.1097 43.5664 48.8223 43.459 48.3912 43.2444C47.9601 43.0299 45.8404 41.9913 45.4451 41.8482C45.0498 41.7049 44.7624 41.6337 44.475 42.0634C44.1874 42.4925 43.3618 43.459 43.1102 43.7451C42.8586 44.032 42.607 44.0679 42.1759 43.853C41.7448 43.6379 40.3561 43.185 38.7089 41.7229C37.4273 40.5854 36.5618 39.1804 36.3102 38.7508C36.0588 38.3216 36.306 38.1096 36.4996 37.8751C36.8483 37.4529 37.4334 36.6938 37.5771 36.4077C37.7208 36.1211 37.6489 35.8706 37.5413 35.6558C37.4334 35.4412 36.5953 33.3188 36.2122 32.4699Z" fill="white"/>
	</svg>
</a>
<?php endif; ?>
<!-- -->

<main class="content-page">