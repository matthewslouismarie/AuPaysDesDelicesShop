<?php

/**
 * Determines if the comments template should be loaded for the current page.
 * 
 * @since 1.0.0
 * @see 
 * @return bool True if the comments template should be loaded, false otherwise.
 */
function should_load_up_the_comments_template() {
	// If comments are open or we have at least one comment
	return comments_open() || get_comments_number() >= 1;
}