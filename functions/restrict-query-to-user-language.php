<?php

function restrict_query_to_user_language( $query ) {
	// Checks if the query is only for a category
	if ( 1 === sizeof( $query->query ) && isset( $query->query['category_name'] ) ) {
		return;
	}
	$l10n_excluded_category = get_category_by_slug( APDD_L10N_EXCLUDED_CATEGORIES );
	if ( false !== $l10n_excluded_category ) {
		$l10n_excluded_category_id = $l10n_excluded_category->term_id;
		$query->query_vars['cat'] = '-' . $l10n_excluded_category_id;
	}
}