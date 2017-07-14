<?php

require_once APDD_FUNCTIONS_PATH . 'display-category-page-with-default-layout.php';
require_once APDD_FUNCTIONS_PATH . 'display-category-page-with-subcategories-mosaics-layout.php';

$cat_id = get_query_var( 'cat' );
$category_layout_type = osetin_get_field( 'layout_type_for_term_archive', "category_{$cat_id}" );

// put this code into function?
if ( APDD_MOSAICS_OF_SUBCATEGORIES_LAYOUT === $category_layout_type ) {
	display_category_page_with_subcategories_mosaics_layout();
} else {
	display_category_page_with_default_layout();
}