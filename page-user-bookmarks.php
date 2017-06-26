<?php
/**
 * Template Name: User Bookmarks
 * 
 * @package Au_Pays_Des_Delices
 * @since 1.0.0
 */

require_once( $functions . 'display-main-container-closing-tags.php' );
require_once( $functions . 'display-main-container-opening-tags.php' );
require_once( $functions . 'display-user-bookmarks.php' );

get_header();

display_main_container_opening_tags();

display_user_bookmarks();

display_main_container_closing_tags();

get_footer();