<?php
/**
 * Template Name: User Bookmarks
 * 
 * @package APDD_Shop
 * @since 1.0.0
 */

/**
 * Loads the definition of declaration and definition of display_top_bar().
 */
require_once( FUNCTIONS_PATH . 'display-top-bar.php' );

require_once( FUNCTIONS_PATH . 'display-main-container-closing-tags.php' );
require_once( FUNCTIONS_PATH . 'display-main-container-opening-tags.php' );
require_once( FUNCTIONS_PATH . 'display-user-bookmarks.php' );

get_header();

display_top_bar( get_the_ID() );

display_main_container_opening_tags();

display_user_bookmarks();

display_main_container_closing_tags();

get_footer();