<?php

function display_category_hierarchy( $category_hierarchy ) {

	$hierarchy_so_far = '';

	$n_of_categories = sizeof( $category_hierarchy );
	for ( $i = 0; $i < $n_of_categories; $i++ ) {
		$hierarchy_so_far .= '/' . $category_hierarchy[ $i ];
		if ( 0 === $i && in_array( $category_hierarchy[0], APDD_SLUGS_OF_L10N_CATEGORIES ) ) {
			continue;
		}
		$category = get_category_by_path( $hierarchy_so_far, true );
		echo( '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a></li>' );

	}
}