<?php

require_once( APDD_FUNCTIONS_PATH . 'get-category-hierarchy.php' );
require_once( APDD_FUNCTIONS_PATH . 'display-default-breadcrumb.php' );

function display_breadcrumb() {
	if ( osetin_is_bbpress() ) {
		bbp_breadcrumb();
	} else {
		display_default_breadcrumb();
	}
}