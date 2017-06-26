<?php
/**
 * Definition of display_wp_comment()
 * 
 * @package Au_Pays_Des_Delices
 * @since 1.0.0
 */

/**
 * Displays the given Wordpress comment.
 * 
 * @since 1.0.0
 * 
 * @see WP_Comment
 * 
 * @param WP_Comment $comment The comment to display.
 */
function display_wp_comment( WP_Comment $comment ): void {
	$post = get_post( $comment->comment_post_ID );
	?>
	<article class="apdd-comment-in-list">
		<p class="apdd-comment-in-list-details">
			Posté sur :
			<a href="<?php echo get_permalink( $post->ID ) ?>">
				<?php echo $post->post_title ?>
			</a>
			, <br />
			le <?php echo $comment->comment_date ?>.
		</p>
		<p>
			<?php echo $comment->comment_content ?>
		</p>
	</article>
	<?php
}