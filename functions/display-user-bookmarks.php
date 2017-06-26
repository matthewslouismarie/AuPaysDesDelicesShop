<?php
/**
 * Definition of display_user_bookmarks()
 * 
 * @package Au_Pays_Des_Delices
 * @since 1.0.0
 */

/**
 * Displays the bookmarks of the currently logged-in user.
 * 
 * @since 1.0.0
 * 
 * @see 
 */
function display_user_bookmarks(): void {
	global $userpro_fav;
	$bookmarks = $userpro_fav->get_bookmarks( get_current_user_id() );
	echo '<ul>';
	foreach ( $bookmarks as $id => $useless ) {
		if ( $id == 0 ) {
			continue;
		}
		
		$post = get_post( $id );
		echo '<li><a href="' . get_permalink( $id ) . '">' . $post->post_title . '</a></li>';
	}
	echo '</ul>';
}