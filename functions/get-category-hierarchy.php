<?php

function get_category_hierarchy( $category_id, $until = -2 ) {
	$category_path = get_category_parents( $category_id , false, '/', true );
	$category_hierarchy = explode( '/', $category_path, $until );
	return $category_hierarchy;
}