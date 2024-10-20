<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		;
		?>
		<h2 class="comments-title">
			<?php if ( '1' === $twenty_twenty_one_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'romex' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'romex' ) ),
					esc_html( number_format_i18n( $twenty_twenty_one_comment_count ) )
				);
				?>
			<?php endif; ?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'walker'      => new comment_walker(),
					'avatar_size' => 120,
					'style'       => 'div',
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'romex' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m4 13v-2h12l-4-4 1-2 7 7-7 7-1-2 4-4z" fill="currentColor"/></svg>' : '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 13v-2H8l4-4-1-2-7 7 7 7 1-2-4-4z" fill="currentColor"/></svg>',
					esc_html__( 'Older comments', 'romex' )
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					esc_html__( 'Newer comments', 'romex' ),
					is_rtl() ? '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 13v-2H8l4-4-1-2-7 7 7 7 1-2-4-4z" fill="currentColor"/></svg>' : '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m4 13v-2h12l-4-4 1-2 7 7-7 7-1-2 4-4z" fill="currentColor"/></svg>'
				),
			)
		);
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'romex' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php	comment_form([
			"fields" => [
				'author' => sprintf(
					'<p class="comment-form-author">%s %s</p>',
					sprintf(
							'<label for="author">%s%s</label>',
							__( 'Name' ),
							( $req ? $required_indicator : '' )
					),
					sprintf(
							'<input id="author" name="author" type="text" placeholder="'. __('Name*','romex' ) .'" value="%s" size="30" maxlength="245"%s />',
							esc_attr( $commenter['comment_author'] ),
							( $req ? $required_attribute : '' )
					)
			),
			'email'  => sprintf(
					'<p class="comment-form-email">%s %s</p>',
					sprintf(
							'<label for="email">%s%s</label>',
							__( 'Email' ),
							( $req ? $required_indicator : '' )
					),
					sprintf(
							'<input id="email" name="email" %s value="%s" placeholder="'.__('Email*','romex' ).'" size="30" maxlength="100" aria-describedby="email-notes"%s />',
							( $html5 ? 'type="email"' : 'type="text"' ),
							esc_attr( $commenter['comment_author_email'] ),
							( $req ? $required_attribute : '' )
					)
			),
			],
			
			"comment_field" => "<p class=\"comment-form-comment\"><textarea id=\"comment\" name=\"comment\" type=\"text\" value=\"\" placeholder=\"". sprintf( __('Comment*','romex' ), 1 ) ."\" cols=\"8\" maxlength=\"65525\" required=\"required\"></textarea></p>",
			"comment_notes_before" => "<p class=\"comment-notes\"><span id=\"email-notes\">". sprintf( __('Your email will not be visible','romex' ), 1 ) ."</span></p>",
			"title_reply" => __("Comment", "romex"),
			'cancel_reply_link'    => __( '(<span>cancel reply</span>)','romex' ),
			'label_submit' => __('Post Comment','romex'),
			"logged_in_as" =>  null,
			'submit_button'        => '<div class="button-submit"><div class="g-button g-button--brown w--icoRight g-button--animate inline">
			<div class="g-button__on">
			<div class="animate"></div>
			<input name="%1$s" type="submit" id="%2$s" class="g-button__text g--uppercase" value="'. sprintf( __('Send','romex' ), 1 ) .'" />
			<div class="g-button__ico inline">
				<svg xmlns="http://www.w3.org/2000/svg" width="23.773" height="10.873" viewBox="0 0 23.773 10.873" class="ico-1 brown">
					<g id="Grupo_399" data-name="Grupo 399" transform="translate(0 0.383)">
						<line id="Línea_8" data-name="Línea 8" x2="23" transform="translate(0 5.11)" fill="none" stroke="#472e25" stroke-width="1"/>
						<path id="Trazado_266" data-name="Trazado 266" d="M1417,1448.5l5.958-5.12-5.958-4.99" transform="translate(-1399.958 -1438.39)" fill="none" stroke="#472e25" stroke-width="1"/>
					</g>
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" width="23.773" height="10.873" viewBox="0 0 23.773 10.873" class="ico-2 white">
					<g id="Grupo_399" data-name="Grupo 399" transform="translate(0 0.383)">
						<line id="Línea_8" data-name="Línea 8" x2="23" transform="translate(0 5.11)" fill="none" stroke="#fff" stroke-width="1"/>
						<path id="Trazado_266" data-name="Trazado 266" d="M1417,1448.5l5.958-5.12-5.958-4.99" transform="translate(-1399.958 -1438.39)" fill="none" stroke="#fff" stroke-width="1"/>
					</g>
				</svg>
			</div>
			</div>
		</div></div>',
		]);
		?>



	

</div><!-- #comments -->



