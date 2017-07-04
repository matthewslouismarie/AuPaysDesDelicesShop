<?php

require_once( FUNCTIONS_PATH . 'is-parallax-background-active.php' );
require_once( FUNCTIONS_PATH . 'get-background-image-size.php' );

function get_body_inline_style(): string {
	$style = osetin_get_css_prop( 'background-color', osetin_get_field( 'background_color_option', 'option' ) );
	if ( is_parallax_background_active() && get_body_background_image_url() ) {
		$style .= osetin_get_css_prop( 'background-image', get_body_background_image_url(), false, 'background-repeat: repeat; background-position: top center;' );
	}
	if ( get_background_image_size() !== 'small' ) {
		$style .= 'background-size: contain;'; 
	}
	return $style;
}