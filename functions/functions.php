<?php
/**
 * Function definitions
 * 
 * @package APDD_Shop
 * @since 1.0.0
 */

/**
 * Displays a message informing the user that the action they attempted was
 * unsuccessful because they need to be logged-in.
 * 
 * @since 1.0.0
 */
function display_error_not_a_member() {
	?>
	<p>Vous n'êtes pas connectés.</p>
	<?php
}

function apdd_enqueue_style( string $handle, string $filename, array $deps ) {
	wp_enqueue_style( $handle, get_stylesheet_directory_uri() . '/' . $filename, $deps, filemtime( get_stylesheet_directory() . '/' . $filename ) );
}