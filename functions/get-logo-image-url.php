<?php

function get_logo_image_url() {
	return get_stylesheet_directory_uri() . '/img/logo.png';
	if ( is_home() ) {
		return get_stylesheet_directory_uri() . '/img/logo-index.jpg';
	}
	elseif ( is_page ( 'categories' ) ) {
		return get_stylesheet_directory_uri() . '/img/logo-categories.jpg';
	}
	elseif ( is_category ( 'lifestyle' ) ) {
		return get_stylesheet_directory_uri() . '/img/logo-lifestyle.jpg';
	}
	elseif ( is_page ( 'devenir-ambassadeur' ) ) {
		return get_stylesheet_directory_uri() . '/img/logo-devenir-ambassadeur.jpg';
	}
	else {
		return get_stylesheet_directory_uri() . '/img/logo-default.jpg';
	}
}