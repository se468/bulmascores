<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area box">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="is-size-4">
			<?php
			$comment_count = get_comments_number();
			if ( '1' === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'bulmascores' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'bulmascores' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->
		
		
		<div class="mb-2">
			<?php the_comments_navigation(); ?>
			<ul class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      => 'ul',
						'short_ping' => true,
					) );
				?>
			</ul><!-- .comment-list -->
		
			<?php 
			the_comments_navigation();

			if ( ! comments_open() ) : ?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bulmascores' ); ?></p>
			<?php endif; ?>
		</div>
	<?php endif; // Check for have_comments(). ?>
	
	<div>
		<?php 
		$comments_args = array(

	        'comment_field' => '<div class="comment-form-comment field"><label class="label" for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true" class="textarea"></textarea></div>',
	        'submit_field' => '<button class="button is-link">Post Commment</button>'
		);
		comment_form( $comments_args );
		?>
	</div>

</div><!-- #comments -->
