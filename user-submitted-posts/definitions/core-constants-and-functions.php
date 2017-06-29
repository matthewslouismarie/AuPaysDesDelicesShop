<?php

if ( ! defined( 'USP_INIT_FILE_REQUIRED' ) ) {
	die( "USP init file must be included before any other file." );
}

// USP options
define( 'USP_OPTIONS', array(
'author' => get_current_user_id(),
'categories' => 
array (
	0 => '1',
),
'number-approved' => -1,
'error-message' => 'There was an error. Please ensure that you have added a title, some content, and that you have uploaded only images.',
'min-images' => 0,
'max-images' => 1,
'min-image-height' => 0,
'min-image-width' => 0,
'max-image-height' => 1500,
'max-image-width' => 1500,
'usp_name' => 'hide',
'usp_url' => 'hide',
'usp_email' => 'hide',
'usp_title' => 'show',
'usp_tags' => 'show',
'usp_category' => 'show',
'usp_images' => 'hide',
'upload-message' => 'Please select your image(s) to upload.',
'usp_response' => '2',
'usp_casing' => 0,
'usp_content' => 'show',
'success-message' => 'Success! Thank you for your submission.',
'usp_email_alerts' => 1,
'usp_email_html' => 0,
'usp_email_address' => 'louismarie.matthews@outlook.fr',
'usp_email_from' => 'louismarie.matthews@outlook.fr',
'usp_use_author' => 0,
'usp_use_url' => 0,
'usp_use_cat' => 0,
'usp_use_cat_id' => '',
'usp_richtext_editor' => 0,
'usp_add_another' => '',
'disable_required' => 0,
'titles_unique' => 0,
'email_alert_subject' => '',
'email_alert_message' => '',
));

// Field constants
const AUTHOR_NAME_FIELDSET_CLASS = 'usp-name';

const USP_TITLE_FIELDSET_CLASS = 'usp-title';
const USP_TITLE_INPUT_NAME = 'user-submitted-title';

// Functions
function usp_display_required_or_nothing(): void {
	if ( ! $usp_options['disable_required'] ) {
		echo ' data-required="true" required';
	}
}

function usp_display_file_required_or_nothing(): void {
	if ( ! $usp_options['disable_required'] ) {
		echo ' usp-required-file';
	}
}

function usp_allow_custom_names(): bool {
	return ! ( is_user_logged_in() && USP_OPTIONS['usp_use_author'] );
}

function usp_allow_custom_urls(): bool {
	return ! ( is_user_logged_in() && USP_OPTIONS['usp_use_url'] );
}

function usp_use_predefined_category(): bool {
	return USP_OPTIONS['usp_use_cat'] == true;
}