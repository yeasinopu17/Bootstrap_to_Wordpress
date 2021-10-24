<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}
?>

<div id="comments" class="comments-area bg-white mb-3 rounded-3 p-2">
	<div class="comments-wrap">

		<?php
		// You can start editing here -- including this comment!
		if (have_comments()) :
		?>
			<h3 class="comments-title text-center">
				<?php
				$bootstrap2wordpress_comment_count = get_comments_number();
				if ('1' === $bootstrap2wordpress_comment_count) {
					printf(
						/* translators: 1: title. */
						esc_html__('One thought on &ldquo;%1$s&rdquo;', 'bootstrap2wordpress'),
						'<span>' . wp_kses_post(get_the_title()) . '</span>'
					);
				} else {
					printf(
						/* translators: 1: comment count number, 2: title. */
						esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $bootstrap2wordpress_comment_count, 'comments title', 'bootstrap2wordpress')),

						number_format_i18n($bootstrap2wordpress_comment_count),

						// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						'<span>' . wp_kses_post(get_the_title()) . '</span>'
					);
				}
				?>
			</h3><!-- .comments-title -->

			<?php the_comments_navigation(); ?>

			<ol class="comment-list comments-list list-unstyled">
				<?php
				wp_list_comments(
					array(
						'style'      => 'ol',
						'short_ping' => true,
					)
				);
				?>
			</ol><!-- .comment-list -->

			<?php
			the_comments_navigation();

			// If comments are closed and there are comments, let's leave a little note, shall we?
			if (!comments_open()) :
			?>
				<p class="no-comments"><?php esc_html_e('Comments are closed.', 'bootstrap2wordpress'); ?></p>
		<?php
			endif;

		endif; // Check for have_comments().

		// COMMENT SECTION START HERE
		$args = array(
			
			//The comment form container class attribute. Default 'comment-respond'.
			'class_container' => 'comment-respond leave-comment border-top',

			//HTML format for the Submit button. Default: <input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />.
			'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-success" value="%4$s" />',
			'label_submit' => 'Submit',

			//HTML element for a message displayed before the comment fields if the user is not logged in. Default 'Your email address will not be published.'.
			'comment_notes_before' => '<small  class="d-block text-center">Your email address will not be published. <span class="text-danger">Required field mark as *</span></small>',

			// HTML displayed before the comment form title. Default: <h3 id="reply-title" class="comment-reply-title">.
			'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title text-center pt-2 mb-0">',
			'title_reply' => 'Leave a Comment',
			'title_reply_after' => ' </h3>', //Default: </h3>.

			'cancel_reply_before' => ' <span class="text-muted fs-5"> ',
			'cancel_reply_after' => '</span>',

			'class_form' => 'p-4 comment-form', //form tag class

			// 'comment_notes_after' => 'yeasin' //textarea er pore asbe

			// redefine your own textarea (the comment body)
			'comment_field' => '<div class="mb-3"><label for="comment" class="form-label">' . _x('Comment *', 'comment_form') . '</label><br /><textarea class="form-control" id="comment" name="comment" row="3" required="required" maxlength="65525"></textarea></div>',

			'fields' => apply_filters('comment_form_default_fields', array(
				'author' =>
				'<div class="mb-3">
					<label for="author" class="form-label">Name <span class="required">*</span></label>
					<input type="text" class="form-control" id="author" name="author" size="30" maxlength="245" required="required"/>
				</div>',
				'email' =>
				'<div class="mb-3">
					<label for="email" class="form-label">Email address <span class="required">*</span></label>
					<input type="email" class="form-control" id="email" name="email" size="30" maxlength="100" aria-describedby="emailHelp" required="required" />
					<div id="emailHelp" class="form-text">We\'ll never share your email with anyone else.</div>
				</div>',
				'url' =>
				'<div class="comment-form-url mb-3">
					<label for="url" class="form-label">Website</label>
					<input type="url" class="form-control" id="url" name="url"size="30" maxlength="200"/>
				</div>'

			))
		);



		comment_form($args);
		// COMMENT SECTION END HERE

		?>
	</div>
</div><!-- #comments -->