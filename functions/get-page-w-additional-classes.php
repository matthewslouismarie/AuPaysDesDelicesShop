<?php

/**
 * Returns classes that should be added to .page-w div blocks.
 * 
 * Returns classes that should be added to .page-w div blocks. These classes 
 * vary depending on wether or not the sidebar-index sidebar is active.
 * 
 * @see osetin_is_active_sidebar()
 * 
 * @return string The additional classes preceded by a space if there is at 
 * least one class.
 */
function get_page_w_additional_classes(): string {
	if ( osetin_is_active_sidebar( 'sidebar-index' ) ) {
		return 'with-sidebar sidebar-location-right';
	} else {
		return '';
	}
}