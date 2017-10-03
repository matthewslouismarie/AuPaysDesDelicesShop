<?php

function get_page_title_from_slug( $slug ) {
	if ( APDD_DEBUG_MODE ) {
		return 'Erreur 404';
	}
	$page = get_page_by_path( $slug );
	return get_the_title( $page );
}