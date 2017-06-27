<?php
/**
 * Template Name: User Bookmarks
 * 
 * @package Au_Pays_Des_Delices
 * @since 1.0.0
 */

/**
 * Loads the definition of declaration and definition of display_top_bar().
 */
require_once( $functions . 'display-top-bar.php' );

require_once( $functions . 'display-main-container-closing-tags.php' );
require_once( $functions . 'display-main-container-opening-tags.php' );
require_once( $functions . 'display-user-bookmarks.php' );

get_header();

display_top_bar( get_the_ID() );

display_main_container_opening_tags();

display_user_bookmarks();

display_main_container_closing_tags();

get_footer();