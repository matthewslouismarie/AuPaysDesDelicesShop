<?php

function generate_query_arguments( int $os_posts_per_page, int $paged ): array {
	$args = array(
	'orderby'        => 'position',
	'order'          => 'DESC',
	'posts_per_page' => $os_posts_per_page,
	'paged'          => $paged,
	'tax_query'      => array()
	);

	// Filter selected categories
	if ( osetin_get_field( 'show_posts_from_selected_categories', false, false, true ) ) {
		$args['category__in'] = osetin_get_field('show_posts_from_selected_categories', false, false, true);
	}

	// Filter selected tags
	if ( osetin_get_field( 'show_posts_from_selected_tags', false, false, true ) ) {
		$args['tag__in'] = osetin_get_field('show_posts_from_selected_tags', false, false, true );
	}

	// Filter selected posts
	if ( osetin_get_field( 'show_only_specific_posts', false, false, true ) ) {
		$args['post__in'] = osetin_get_field('show_only_specific_posts', false, false, true );
	}

	// Filter selected cuisines
	if ( osetin_get_field('show_posts_from_selected_cuisines', false, false, true ) ) {
	array_push( $args['tax_query'], array(
				'taxonomy' => 'recipe_cuisine',
				'field'    => 'term_id',
				'terms'    => osetin_get_field( 'show_posts_from_selected_cuisines', false, false, true )
				));
	}

	// Filter selected features
	if ( osetin_get_field( 'show_posts_from_selected_features', false, false, true ) ) {
	array_push( $args['tax_query'], array(
				'taxonomy' => 'recipe_feature',
				'field'    => 'term_id',
				'terms'    => osetin_get_field( 'show_posts_from_selected_features', false, false, true )
				));
	}
	
	// Filter out any non-recipe post
	$args['post_type'] = array( 'osetin_recipe' );

	return $args;
}