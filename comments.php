<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to miro_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage MiroWPTheme
 */
?>
	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<div class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'miro' ); ?></div>
	</div><!-- .comments -->
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
				if (get_comments_number() == 1){
					printf( __( 'One comment on &ldquo;%2$s&rdquo;', 'miro' ),
							number_format_i18n( 1 ), '<span>' . get_the_title() . '</span>' );
				}else{
					printf( __( '%1$s comments on &ldquo;%2$s&rdquo;', 'miro' ),
							number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				}
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<h1 class="section-heading"><?php _e( 'Comment navigation', 'miro' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'miro' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'miro' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<ol class="commentlist">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use miro_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define miro_comment() and that will be used instead.
				 * See miro_comment() in miro/functions.php for more.
				 */
				wp_list_comments( array( 'callback' => 'miro_comment' ) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="section-heading"><?php _e( 'Comment navigation', 'miro' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'miro' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'miro' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php endif; ?>

	<?php 

	$comment_args = array(
		'fields' => apply_filters(
			'comment_form_default_fields', array(
				'author' => '<p class="comment-form-author">' .
					'<label for="author">' . __( 'Your Name' ) . '</label> ' .
					( $req ? '<span class="required">*</span>' : '' ) .
					'<input id="author" name="author" class="form-control" type="text" value="' .
					esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />' .
					'</p><!-- #form-section-author .form-section -->',
				'email'  => '<p class="comment-form-email">' .
					'<label for="email">' . __( 'Your Email' ) . '</label> ' .
					( $req ? '<span class="required">*</span>' : '' ) .
					'<input id="email" name="email" class="form-control" type="text" value="' . 
					esc_attr(  $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' />' .
					'</p><!-- #form-section-email .form-section -->',
				'url'    => ''
			)
		),
		'comment_field' => '<p class="comment-form-comment">' .
			'<label for="comment">' . __( 'Comment' ) . '</label>' .
			'<textarea id="comment" name="comment" class="form-control" rows="8" aria-required="true"></textarea>' .
			'</p><!-- #form-section-comment .form-section -->',
	    'comment_notes_after' => ''
	);
	comment_form( $comment_args );	?>

</div><!-- #comments -->