<?php
/**
 * Template Name: Submit Recipe
 */

require_once( $functions . 'display-top-bar.php' );
require_once( $functions . 'display-main-container-opening-tags.php' );
require_once( $functions . 'display-main-container-closing-tags.php' );
require_once( $functions . 'display-front-end-submit-recipe-form.php' );

get_header();

display_top_bar( get_the_ID() );

display_main_container_opening_tags();

if ( ! is_user_logged_in() ) {
	// TODO
	echo "vous devez être connectés";
} else {
	display_front_end_submit_recipe_form( $usp_options );
}

display_main_container_closing_tags();

get_footer();