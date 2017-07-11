<?php

function get_category_hierarchy( $category_id ) {
	$category_path = get_category_parents( $category_id , false, '/', true );
	$category_hierarchy = explode( '/', $category_path, -2 );
	return $category_hierarchy;
}