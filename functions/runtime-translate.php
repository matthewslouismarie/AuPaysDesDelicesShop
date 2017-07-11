<?php

require_once( get_stylesheet_directory() . '/languages/' . APDD_CURRENT_LANGUAGE . '.php' );

function runtime_translate( $translation, $text, $domain ) {
	global $current_language;

	if ( isset( $current_language[ $text ] ) ) {
		return $current_language[ $text ];
	} else {
		return $text;
	}
}