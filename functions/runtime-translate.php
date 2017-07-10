<?php

require_once( APDD_L10N_TRANSLATIONS_PATH );

function runtime_translate( $translation, $text, $domain ) {
	global $current_language;

	if ( isset( $current_language[ $text ] ) ) {
		return $current_language[ $text ];
	} else {
		return $text;
	}
}