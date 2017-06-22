<?php

require_once( 'functions/generate_query_arguments.php' );
require_once( 'functions/get_sticky_posts.php' );
require_once( 'functions/get_recipes_index_query.php' );
require_once( 'functions/display_current_post.php' );

/*
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