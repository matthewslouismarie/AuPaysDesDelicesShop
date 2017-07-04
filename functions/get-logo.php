<?php

require_once( CLASSES_PATH . 'class-image.php' );

function get_logo(): ?Image {

	$default_logo = get_template_directory_uri() . '/assets/img/neptune-logo.png';
	if ( osetin_get_field( 'enable_custom_header_settings' ) === true ) {
		$logo_image_url = osetin_get_field( 'logo_image' );
		$logo_image_width = osetin_get_field( 'logo_image_width' );
	} else {
		$logo_image_url = osetin_get_field( 'logo_image_option', 'option', $default_logo );
		$logo_image_width = osetin_get_field( 'logo_image_width_option', 'option', '210' );
	}

	return new Image( $logo_image_url, $logo_image_width, null );
}