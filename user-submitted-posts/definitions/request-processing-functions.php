<?php
/**
 * Definitions of (the) function(s) handling the processing of a submission POST
 * request.
 * 
 * Functions handling the processing of post submission (HTTP) POST requests,
 * which includes the processing of the data related to the form. Functions 
 * defined here delegate this particular work to other functions defined in
 * form-processing-functions.php.
 * 
 * @package User_Submitted_Posts
 * since 1.0.0
 */

if ( ! defined( 'USP_INIT_FILE_REQUIRED' ) ) {
	die( "USP init file must be included before any other file." );
}

require_once( USP_FORM_PROCESSING_FUNCTIONS_PATH );

function usp_process_request(): void {
	if ( usp_is_submission_post_request() ) {
		usp_check_for_public_submission();
	}
}