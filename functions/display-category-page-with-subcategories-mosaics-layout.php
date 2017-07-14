<?php

require_once APDD_FUNCTIONS_PATH . 'display-top-bar.php';
require_once APDD_FUNCTIONS_PATH . 'display-category-as-mosaic.php';
require_once APDD_FUNCTIONS_PATH . 'display-main-container-opening-tags.php';
require_once APDD_FUNCTIONS_PATH . 'display-main-container-closing-tags.php';
require_once APDD_FUNCTIONS_PATH . 'display-mosaics-opening-tags.php';
require_once APDD_FUNCTIONS_PATH . 'display-mosaics-closing-tags.php';

function display_category_page_with_subcategories_mosaics_layout() {
	$subcategories = get_categories( 
		array(
			'parent'     => get_query_var( 'cat' ),
			'hide_empty' => 0,
		)
	);
	get_header();
	display_top_bar();
	display_main_container_opening_tags();
	display_mosaics_opening_tags();
	foreach ( $subcategories as $current_subcategory ) {
		display_category_as_mosaic( $current_subcategory );
	}
	display_mosaics_closing_tags();
	display_main_container_closing_tags();

	get_footer();
}