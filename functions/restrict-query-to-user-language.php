<?php

function restrict_query_to_user_language( $query ) {
	// Checks if the query is only for a category
	if ( 1 === sizeof( $query->query ) && isset( $query->query['category_name'] ) ) {
		return;
	}
	foreach ( L10N_EXCLUDED_CATEORIES as $excluded_category ) {
		$excluded_category = get_category_by_slug( $excluded_category );
		if ( false !== $excluded_category ) {
			$excluded_category_id = $excluded_category->term_id;
			$query->query_vars['cat'] .= '-' . $l10n_excluded_category_id;
		}
	}
}