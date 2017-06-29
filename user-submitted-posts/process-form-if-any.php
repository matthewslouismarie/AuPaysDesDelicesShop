<?php

if ( ! defined( 'USR_INIT_FILE_REQUIRED' ) ) {
	die( "USR init file must be included before any other file." );
}

require_once( USP_FORM_PROCESSING_FUNCTIONS_PATH );

add_action( 'parse_request', 'usp_check_for_public_submission', 1 );