<?php
/**
 * Definition of display_user_comments()
 * 
 * @package Au_Pays_Des_Delices
 * @since 1.0.0
 */

require_once( FUNCTIONS_PATH . 'display-wp-comment.php' );

/**
 * Displays a formatted list of the comments of the currently logged-in user.
 * 
 * @since 1.0.0
 * 
 * @see get_current_user_id()
 */
function display_user_comments() {
	$args = array(
	'user_id' => get_current_user_id(),
	);

	$comments = get_comments( $args );

	foreach ( $comments as $current_comment ) {
		display_wp_comment( $current_comment );
	}
}