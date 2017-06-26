<?php

/**
 * Returns the page url from the given slug.
 * 
 * @since 1.0.0
 * @param string $slug The slug of the page.
 * @return string The permalink of the page.
 */
function get_page_url_by_slug( string $slug ): string {
	return get_permalink( get_page_by_path( $slug ) );
}