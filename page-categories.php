<?php

require_once( $functions . 'display-category-mosaics.php' );

/*
 * Template Name: Categories
 */

get_header();

if ( have_posts() ) {
	while (have_posts() ) {
		the_post();
		display_category_mosaics();
	}
}

get_footer();