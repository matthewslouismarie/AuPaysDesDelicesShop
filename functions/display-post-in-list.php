<?php
/**
 * Definition of display_post_in_list().
 * 
 * @package Au_Pays_Des_Delices
 * @since 1.0.0
 */

/**
 * Displays the given post as if it was part of a list of posts.
 * 
 * @since 1.0.0
 * 
 * @see 
 * 
 * @param int $id The id of the post to display.
 */
function display_post_in_list( int $id ) {
	$post = get_post( $id );
	$permalink = get_permalink( $id );
	?>
	<li>
		<a href="<?php echo esc_attr( $permalink ) ?>">
			<?php echo $post->post_title ?>
		</a>
	</li>
	<?php
}