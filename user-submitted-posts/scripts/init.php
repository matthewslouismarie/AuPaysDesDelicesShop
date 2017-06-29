<?php
/**
 * Initialization file of User Submitted Posts.
 * 
 * This file MUST be required BEFORE any other USP file. Also, before using any
 * file, it is absolutely necessary to define the following constants:
 *
 * - USP_CORE_CONSTANTS_AND_FUNCTIONS_PATH
 * - USP_FORM_DISPLAYING_FUNCTIONS_PATH
 * - USP_FORM_PROCESSING_FUNCTIONS_PATH
 * - USP_PROCESS_FORM_IF_ANY_PATH
 * - USP_REQUEST_PROCESSING_FUNCTIONS_PATH
 * - USP_FORM_EXTRACTING_FUNCTIONS_PATH
 *
 * @package User_Submitted_Recipes
 * @since 1.0.0
 */

// The actual value of the constant is useless, the only thing that matters is 
// wether or not the constant exists.
define( 'USP_INIT_FILE_REQUIRED', true );

require_once( USP_CORE_CONSTANTS_AND_FUNCTIONS_PATH );