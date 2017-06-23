<?php

/**
 * Determines if the current page has a regular header or not.
 * 
 * @since 1.0.0
 * @see get_the_ID()
 * @see osetin_is_regular_header()
 * @return bool True the current page has a regular header, false otherwise.
 */
function is_regular_header(): bool {
	return osetin_is_regular_header( get_the_ID() );
}