<?php

require_once( APDD_CLASSES_PATH . 'class-image.php' );

function get_body_background_image() {

	$background = null;

	if ( is_category() ) {
		$cat_id = get_query_var('cat');
		$body_bg_image = osetin_get_field( 'category_page_background_image', "category_{$cat_id}", false, true );
		if ( empty( $body_bg_image ) ) {
			$body_bg_image = osetin_get_field( 'background_image_option', 'option', false, true );
		}
	} else {
		$body_bg_image = osetin_get_settings_field( 'background_image', false, false, false, true );
	}
	if ( ! empty( $body_bg_image ) && is_array( $body_bg_image ) ) {
		$size = 'osetin-for-background';
		$body_bg_image_url = $body_bg_image['sizes'][ $size ];
		$body_bg_image_width = $body_bg_image['sizes'][ $size . '-width' ];
		$body_bg_image_height = $body_bg_image['sizes'][ $size . '-height' ];
		if ( $body_bg_image_width ) {
			$body_bg_image_width = str_replace( 'px', '', $body_bg_image_width );
		}
		if ( $body_bg_image_height ) {
			$body_bg_image_height = str_replace( 'px', '', $body_bg_image_height );
		}
		$background = new Image( $body_bg_image_url, $body_bg_image_width, $body_bg_image_height );
	}

	return $background;
}