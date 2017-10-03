<?php

/**
 * Determines if the current page has a sub title or not.
 * 
 * @since 1.0.0
 * @see osetin_get_field()
 * @return bool True if the current page has a non-empty sub title, false
 * otherwise.
 */
function has_sub_title(): bool {
	$sub_title = osetin_get_field( 'sub_title' );
	if ( ! empty( $sub_title ) && ! APDD_DEBUG_MODE ) {
		return true;
	} else {
		return false;
	}
}