<?php

require_once( get_stylesheet_directory() . '/languages/' . APDD_CURRENT_LANGUAGE . '.php' );

function runtime_translate( $translation, $text, $domain ): string {
	global $apdd_shop_userpro_translation;
	global $apdd_shop_neptune_translation;

	if ( 'userpro' === $domain ) {
		if ( isset( $apdd_shop_userpro_translation[ $text ] ) ) {
			return $apdd_shop_userpro_translation[ $text ];
		} else {
			return $text;
		}
	}

	if ( isset( $apdd_shop_neptune_translation[ $text ] ) ) {
		return $apdd_shop_neptune_translation[ $text ];
	} else {
		return $text;
	}
}