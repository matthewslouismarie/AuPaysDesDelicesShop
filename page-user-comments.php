<?php
/**
 * Template Name: User Comments
 * 
 * Displays the comments of the currently logged-in user.
 * 
 * @package Au_Pays_Des_Delices
 * @since 1.0.0
 */

/**
 * Loads the definition of declaration and definition of display_top_bar().
 */
require_once( FUNCTIONS_PATH . 'display-top-bar.php' );

require_once( FUNCTIONS_PATH . 'display-main-container-closing-tags.php' );
require_once( FUNCTIONS_PATH . 'display-main-container-opening-tags.php' );
require_once( FUNCTIONS_PATH . 'display-user-comments.php' );

get_header();

display_top_bar( get_the_ID() );

display_main_container_opening_tags();

display_user_comments();

display_main_container_closing_tags();

get_footer();