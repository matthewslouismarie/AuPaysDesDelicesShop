<?php
/**
 * Definition of display_user_bookmarks()
 * 
 * @package APDD_Shop
 * @since 1.0.0
 */

/**
 * Needs the definition of display_post_in_list().
 */
require_once( APDD_FUNCTIONS_PATH . 'display-post-in-list.php' );

/**
 * Displays the bookmarks of the currently logged-in user.
 * 
 * @since 1.0.0
 * 
 * @see 
 */
function display_user_bookmarks() {
	global $userpro_fav;
	$bookmarks = $userpro_fav->get_bookmarks( get_current_user_id() );

	$has_bookmarks = false;

	foreach ( $bookmarks as $id => $useless_variable ) {
		if ( $id == 0 ) {
			continue;
		} else {
			$has_bookmarks = true;
		}
	}

	if ( false === $has_bookmarks ) {
?>
<p><?= __( 'You do not have any bookmarks', APDD_TEXT_DOMAIN ) ?></p>
<?php
	} else {
	?>
	<ul>
		<?php
		foreach ( $bookmarks as $id => $useless_variable ) {
			if ( $id == 0 ) {
				continue;
			} else {
				display_post_in_list( $id );
			}
		}
		?>
	</ul>
	<?php
	}
}