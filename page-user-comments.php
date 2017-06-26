<?php
/**
 * Template Name: User Comments
 * 
 * Displays the comments of the currently logged-in user.
 * 
 * @package Au_Pays_Des_Delices
 * @since 1.0.0
 */

require_once( $functions . 'display-main-container-closing-tags.php' );
require_once( $functions . 'display-main-container-opening-tags.php' );
require_once( $functions . 'display-user-comments.php' );

get_header();

display_main_container_opening_tags();

display_user_comments();

display_main_container_closing_tags();

get_footer();