<?php

/**
 * Determines if the sidebar sidebar-index is active or not.
 * 
 * @since 1.0.0
 * @see osetin_is_active_sidebar
 * @return bool True if sidebar-index is active, false otherwise.
 */
function is_sidebar_index_active(): bool {
	return osetin_is_active_sidebar( CURRENT_SIDEBAR_INDEX );
}