<?php

require_once APDD_FUNCTIONS_PATH . 'populate-translation-array.php';

class Dynamic_Translator {
	private $LANGUAGE;
	private $translation_array;

	public function __construct( string $language ) {
		$this->LANGUAGE = $language;
		$this->translation_array = array();
		$this->translation_array[ $this->LANGUAGE ] = array();
	}

	public function translate( string $translation, string $phrase_to_translate, string $domain ) : string {
		// TEMP (?)
		if ( 'osetin' === $domain ) {
			$domain = 'default';
		}
		
		if ( ! isset( $this->translation_array[ $this->LANGUAGE ][ $domain ] ) ) {
			populate_translation_array( $this->translation_array, $this->LANGUAGE, $domain );
		}

		if ( isset( $this->translation_array[ $this->LANGUAGE ][ $domain ][ $phrase_to_translate ] ) ) {
			return $this->translation_array[ $this->LANGUAGE ][ $domain ][ $phrase_to_translate ];
		} else {
			return $phrase_to_translate;
		}
	}
}