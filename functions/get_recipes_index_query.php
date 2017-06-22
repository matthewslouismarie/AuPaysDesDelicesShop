<?php

function get_recipes_index_query( int $paged ): WP_Query {
	$args = generate_query_arguments( osetin_get_number_of_posts_per_page(), $paged );
	$query = new WP_Query( $args );
	return $query;
}