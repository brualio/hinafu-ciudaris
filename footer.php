</main>

<?php
$options = get_fields('options');
//Logotipo
$logotipo_footer = $options['logotipo_footer'];
//Members
$title_footer_menbers = $options['title_footer_menbers'];
$images_footer_menbers = $options['images_footer_menbers'];
//details
$address_g = $options['address_g'];
$telephone_g = $options['telephone_g'];
//quote
$title_footer_quote = $options['title_footer_quote'];
$texto_footer_quote = $options['texto_footer_quote'];
$button_footer_quote = $options['button_footer_quote'];
$image_footer_quote = $options['image_footer_quote'];
//legal
$text_footer_legal = $options['text_footer_legal'];
//Ruc
$ruc_g = $options['ruc_g'];
?>
<footer class="main-footer">
	<div class="main-footer-container main-wrapper-container --default">
		<div class="main-footer-desktop">
			<div class="main-footer-top">
				<div class="main-footer-left-right">
					<div class="main-footer-left">
						<div class="main-footer-left-top">
							<div class="main-footer-left-top-line1">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-footer-logo">
									<img class="main-footer-logo-img" loading="lazy" src="<?php echo $logotipo_footer ?>" alt="Ciudaris"/>
								</a>
								<div class="main-footer-members">
									<div class="main-footer-members-title">
										<h3 class="main-footer-members-title-text"><?php echo $title_footer_menbers?></h3>
									</div>
									<?php if($images_footer_menbers) :?>
									<div class="main-footer-members-list">
										<?php foreach($images_footer_menbers as $image) : ?>
										<?php $image_img = $image['image'] ?>
										<?php $image_url = $image['url'] ?>
										<?php if($image_url) :?>
										<a class="main-footer-members-item-image" target="_blank" href="<?php echo $image_url ?>">
											<img  class="main-footer-members-item-img" src="<?php echo $image_img ?>" alt="Ciudaris">
										</a>
										<?php else : ?>
										<figure class="main-footer-members-item-image">
											<img  class="main-footer-members-item-img" src="<?php echo $image_img ?>" alt="Ciudaris">
										</figure>
										<?php endif; ?>
										<?php endforeach; ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="main-footer-left-top-line2">
								<div class="main-footer-detail-items">
									<?php if($address_g) :?>
									<div class="main-footer-detail-item --address">
										<div class="main-footer-detail-item-title">
											<h4 class="main-footer-detail-item-title-text"><?php _e( 'Ubícanos', 'ciudaris' ); ?></h4>
										</div>
										<a href="https://www.google.com/maps/place/<?php echo $address_g ?>" target="_blank" class="main-footer-detail-item-link">
											
											<div class="main-footer-detail-item-link-text">
											<span class="main-footer-detail-item-link-icon icon-mappin_icon_n"></span><?php echo $address_g ?></div>
										</a>
									</div>
									<?php endif; ?>
									<?php if($telephone_g) :?>
									<div class="main-footer-detail-item --telephone">
										<div class="main-footer-detail-item-title">
											<h4 class="main-footer-detail-item-title-text"><?php _e( 'Llámanos', 'ciudaris' ); ?></h4>
										</div>
										<a href="tel:<?php echo $telephone_g ?>" class="main-footer-detail-item-link">
											
											<div class="main-footer-detail-item-link-text">
											<span class="main-footer-detail-item-link-icon icon-phone_icon_b"></span><?php echo $telephone_g ?></div>
										</a>
									</div>
									<?php endif; ?>
									<div class="main-footer-detail-item">
										<div class="main-footer-detail-item-title">
											<h4 class="main-footer-detail-item-title-text"><?php _e( 'Síguenos', 'ciudaris' ); ?></h4>
										</div>
										<div class="main-footer-social --list-none">
											<?php echo do_shortcode('[social_media_list]') ?>
										</div>
									</div>
								
								</div>
							</div>
						</div>
						<div class="main-footer-left-bottom">
							<div class="main-footer-navs">
								<nav class="main-footer-nav --menu1 --list-none">
									<?php wp_nav_menu( array(
										'theme_location' => 'footer-1',
										'menu_class' => 'main-footer-list',
										'container' => '',
										'container_class' => '',
									)); ?>
								</nav>
								<nav class="main-footer-nav --menu2 --list-none">
									<?php wp_nav_menu( array(
										'theme_location' => 'footer-2',
										'menu_class' => 'main-footer-list',
										'container' => '',
										'container_class' => '',
									)); ?>
								</nav>
								<nav class="main-footer-nav --menu3 --list-none">
									<?php wp_nav_menu( array(
										'theme_location' => 'footer-3',
										'menu_class' => 'main-footer-list',
										'container' => '',
										'container_class' => '',
									)); ?>
								</nav>
								<nav class="main-footer-nav --menu4 --list-none">
									<?php wp_nav_menu( array(
										'theme_location' => 'footer-4',
										'menu_class' => 'main-footer-list',
										'container' => '',
										'container_class' => '',
									)); ?>
								</nav>
							</div>
						</div>
					</div>
					<div class="main-footer-right">
						<div class="main-footer-quote">
							<?php if($title_footer_quote) :?>
							<div class="main-footer-quote-title">
								<h3 class="main-footer-quote-title-text">
									<?php echo $title_footer_quote ?>
								</h3>
							</div>
							<?php endif;?>
							<?php if($texto_footer_quote) :?>
							<div class="main-footer-quote-text">
								<?php echo $texto_footer_quote ?>
							</div>
							<?php endif;?>
							<?php if($button_footer_quote) :?>
							<?php $label = $button_footer_quote['label'] ?>
							<?php $url = $button_footer_quote['url'] ?>
							<div class="main-footer-quote-button">
								<a class="general-button --type2 --lightblue" href="<?php echo $url ?>">
									<svg class="general-button-figure" xmlns="http://www.w3.org/2000/svg" width="59" height="66" viewBox="0 0 59 66" fill="none">
									<path class="--arrow" d="M51.3536 33.3536C51.5488 33.1583 51.5488 32.8417 51.3536 32.6464L48.1716 29.4645C47.9763 29.2692 47.6597 29.2692 47.4645 29.4645C47.2692 29.6597 47.2692 29.9763 47.4645 30.1716L50.2929 33L47.4645 35.8284C47.2692 36.0237 47.2692 36.3403 47.4645 36.5355C47.6597 36.7308 47.9763 36.7308 48.1716 36.5355L51.3536 33.3536ZM1 33.5H51V32.5H1V33.5Z" fill="white"/>
									<path class="--circle" d="M58.3742 52.5C52.5237 60.1016 43.3339 65 33 65C15.3269 65 1 50.6731 1 33C1 15.3269 15.3269 1 33 1C43.3339 1 52.5237 5.89842 58.3742 13.5" stroke="white"/>
									</svg>
									<span class="general-button-text"><?php echo $label ?></span>
								</a>
							</div>
							<?php endif;?>
							<?php if($image_footer_quote) :?>
							<figure class="main-footer-quote-image">
								<img class="main-footer-quote-img" src="<?php echo $image_footer_quote ?>" loading="lazy"  alt="Ciudaris">
							</figure>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
			<div class="main-footer-bottom">
				<?php if($text_footer_legal) :?>
				<div class="main-footer-legal">
					<?php echo $text_footer_legal ?>
				</div>
				<?php endif;?>
			</div>
		</div>
		<div class="main-footer-mobile">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-footer-logo">
				<img class="main-footer-logo-img" loading="lazy" src="<?php echo $logotipo_footer ?>" alt="Ciudaris"/>
			</a>
			<div class="main-footer-quote">
				<?php if($title_footer_quote) :?>
				<div class="main-footer-quote-title">
					<h3 class="main-footer-quote-title-text">
						<?php echo $title_footer_quote ?>
					</h3>
				</div>
				<?php endif;?>
				<?php if($button_footer_quote) :?>
				<?php $label = $button_footer_quote['label'] ?>
				<div class="main-footer-quote-button">
					<button class="general-button --type2 --lightblue">
						<svg class="general-button-figure" xmlns="http://www.w3.org/2000/svg" width="59" height="66" viewBox="0 0 59 66" fill="none">
						<path class="--arrow" d="M51.3536 33.3536C51.5488 33.1583 51.5488 32.8417 51.3536 32.6464L48.1716 29.4645C47.9763 29.2692 47.6597 29.2692 47.4645 29.4645C47.2692 29.6597 47.2692 29.9763 47.4645 30.1716L50.2929 33L47.4645 35.8284C47.2692 36.0237 47.2692 36.3403 47.4645 36.5355C47.6597 36.7308 47.9763 36.7308 48.1716 36.5355L51.3536 33.3536ZM1 33.5H51V32.5H1V33.5Z" fill="white"/>
						<path class="--circle" d="M58.3742 52.5C52.5237 60.1016 43.3339 65 33 65C15.3269 65 1 50.6731 1 33C1 15.3269 15.3269 1 33 1C43.3339 1 52.5237 5.89842 58.3742 13.5" stroke="white"/>
						</svg>
						<span class="general-button-text"><?php echo $label ?></span>
					</button>
				</div>
				<?php endif;?>
			</div>
			<div class="main-footer-detail-items">
				<div class="main-footer-detail-item">
					<div class="main-footer-detail-item-title">
						<h4 class="main-footer-detail-item-title-text"><?php _e( 'Síguenos', 'ciudaris' ); ?></h4>
					</div>
					<div class="main-footer-social --list-none">
						<?php echo do_shortcode('[social_media_list]') ?>
					</div>
				</div>
				<?php if($address_g) :?>
				<div class="main-footer-detail-item --address">
					<div class="main-footer-detail-item-title">
						<h4 class="main-footer-detail-item-title-text"><?php _e( 'Ubícanos', 'ciudaris' ); ?></h4>
					</div>
					<a href="https://www.google.com/maps/place/ <?php echo $address_g ?>" target="_blank" class="main-footer-detail-item-link">
						
						<div class="main-footer-detail-item-link-text"><span class="main-footer-detail-item-link-icon icon-mappin_icon_n"></span><?php echo $address_g ?></div>
					</a>
				</div>
				<?php endif; ?>
				<?php if($telephone_g) :?>
				<div class="main-footer-detail-item --telephone">
					<div class="main-footer-detail-item-title">
						<h4 class="main-footer-detail-item-title-text"><?php _e( 'Llámanos', 'ciudaris' ); ?></h4>
					</div>
					<a href="tel:<?php echo $telephone_g ?>" class="main-footer-detail-item-link">
						
						<div class="main-footer-detail-item-link-text"><span class="main-footer-detail-item-link-icon icon-phone_icon_b"></span><?php echo $telephone_g ?></div>
					</a>
				</div>
				<?php endif; ?>			
			</div>
			<div class="main-footer-members">
				<div class="main-footer-members-title">
					<h3 class="main-footer-members-title-text"><?php echo $title_footer_menbers?></h3>
				</div>
				<?php if($images_footer_menbers) :?>
				<div class="main-footer-members-list">
					<?php foreach($images_footer_menbers as $image) : ?>
					<?php $image_img = $image['image'] ?>
					<?php $image_url = $image['url'] ?>
					<?php if($image_url) :?>
					<a class="main-footer-members-item-image" target="_blank" href="<?php echo $image_url ?>">
						<img  class="main-footer-members-item-img" src="<?php echo $image_img ?>" alt="Ciudaris">
					</a>
					<?php else : ?>
					<figure class="main-footer-members-item-image">
						<img  class="main-footer-members-item-img" src="<?php echo $image_img ?>" alt="Ciudaris">
					</figure>
					<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="main-footer-legal-mobile">
				<div class="main-footer-legal-mobile-title main-footer-legal-mobile--title">
						<h4 class="main-footer-legal-mobile-title-text">
						<?php _e('Legales','ciudaris') ?>
						<div class="main-footer-legal-mobile-title-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M3.85859 6.56935C3.68523 6.81846 3.72356 7.17908 3.94419 7.37481L8.47685 11.3958C8.7839 11.6682 9.2161 11.6682 9.52315 11.3958L14.0558 7.37481C14.2764 7.17908 14.3148 6.81846 14.1414 6.56935C13.9681 6.32024 13.6487 6.27697 13.428 6.4727L9 10.4009L4.57198 6.4727C4.35134 6.27697 4.03194 6.32024 3.85859 6.56935Z" fill="white" stroke="#00B2E3" stroke-linecap="round"/>
							</svg>
						</div>
					</h4>
				</div>
				<div class="main-footer-legal-mobile-content">
					<div class="main-footer-legal-mobile-navs">
						<nav class="main-footer-nav --menu3 --list-none">
							<?php wp_nav_menu( array(
								'theme_location' => 'footer-3',
								'menu_class' => 'main-footer-list',
								'container' => '',
								'container_class' => '',
							)); ?>
						</nav>
						<nav class="main-footer-nav --menu4 --list-none">
							<?php wp_nav_menu( array(
								'theme_location' => 'footer-4',
								'menu_class' => 'main-footer-list',
								'container' => '',
								'container_class' => '',
							)); ?>
						</nav>
					</div>
					<?php if($text_footer_legal) :?>
					<div class="main-footer-legal">
						<?php echo $text_footer_legal ?>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
		<div class="main-footer-pie">
			<div class="main-footer-copyright">
				Ciudaris © <?php echo date('Y') ?> <?php _e('Todos los derechos reservados','options') ?>.
			</div>
			<?php if($ruc_g) :?>
			<div class="main-footer-ruc">
				RUC <?php echo $ruc_g ?>
			</div>
			<?php endif;?>
			<a class="main-footer-desing" href="https://www.staffdigital.pe/" target="_blank">
				<?php _e('Diseño Web por','ciudaris') ?>
				<img class="main-footer-desing-img" src="<?php echo get_template_directory_uri(); ?>/public/assets/images/staffdigital.svg" alt="Ciudaris" loading="lazy">
			</a>
		</div>
	</div>
		
		
</footer>
<?php wp_footer(); ?>
</body>
</html>
