<?php

function get_page_title_from_slug( $slug ) {
	$page = get_page_by_path( $slug );
	return get_the_title( $page );
}