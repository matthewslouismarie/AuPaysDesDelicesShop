<?php

if ( ! defined( 'USP_INIT_FILE_REQUIRED' ) ) {
	die( "USP init file must be included before any other file." );
}

require_once( USP_REQUEST_PROCESSING_FUNCTIONS_PATH );

add_action( 'parse_request', 'usp_process_request', 1 );