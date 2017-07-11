<?php

require_once( 'functions/generate-query-arguments.php' );
require_once( 'functions/get-sticky-posts.php' );
require_once( 'functions/get-recipes-index-query.php' );
require_once( 'functions/display-current-post.php' );

/**
 * 
 * Template Name: Recipe Index (modified by Louis-Marie Matthews)
 *
 */
 
 get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		if ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
		} else {
			$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		}

		display_current_post( $paged );
	}
}

get_footer();