<?php

function restrict_query_to_user_language( $query ) {
	$l10n_excluded_category = get_category_by_slug( APDD_L10N_EXCLUDED_CATEGORIES );
	if ( false !== $l10n_excluded_category ) {
		$l10n_excluded_category_id = $l10n_excluded_category->term_id;
		$query->query_vars['cat'] = '-' . $l10n_excluded_category_id;
	}
}