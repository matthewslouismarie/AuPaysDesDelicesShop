<?php

function get_category_hierarchy( $category_id, $until = -2 ) {
	$category_path = get_category_parents( $category_id , false, '/', true );
	if ( is_string( $category_path ) ) {
		return explode( '/', $category_path, $until );
	} else {
		return array();
	}
}