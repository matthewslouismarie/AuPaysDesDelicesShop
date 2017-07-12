<?php
/**
 * Definition of display_user_comments()
 * 
 * @package APDD_Shop
 * @since 1.0.0
 */

require_once( APDD_FUNCTIONS_PATH . 'display-wp-comment.php' );

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

	if ( 0 === sizeof( $comments ) ) {
?>
<p><?= __( 'You did not write any comments yet.', 'neptune' ) ?></p>
<?php
	}

	foreach ( $comments as $current_comment ) {
		display_wp_comment( $current_comment );
	}
}