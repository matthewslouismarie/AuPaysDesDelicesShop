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

// Field classes and ids

const INPUT_CLASS = 'usp-input';

const EXCLUDE_CLASS = 'exclude';

const USP_CLONE_CLASS = 'usp-clone';

const USP_HIDDEN_CLASS = 'usp-hidden';

const FORM_CONTAINER_ID = 'user-submitted-posts';
const FORM_ID = 'usp_form';

const GENERAL_ERROR_CONTAINER_ID = 'usp-error-message';
const GENERAL_ERROR_CONTAINER_CLASS = 'usp-callout-failure';

const USP_AUTHOR_NAME_FIELDSET_CLASS = 'usp-name';
const USP_AUTHOR_NAME_INPUT_ID = 'user-submitted-name';
const USP_AUTHOR_NAME_INPUT_NAME = 'user-submitted-name';

const USP_AUTHOR_URL_FIELDSET_CLASS = 'usp-url';
const USP_AUTHOR_URL_INPUT_ID = 'user-submitted-url';
const USP_AUTHOR_URL_INPUT_NAME = 'user-submitted-url';

const USP_AUTHOR_EMAIL_FIELDSET_CLASS = 'usp-email';
const USP_AUTHOR_EMAIL_INPUT_ID = 'user-submitted-email';
const USP_AUTHOR_EMAIL_INPUT_NAME = 'user-submitted-email';

const USP_TITLE_FIELDSET_CLASS = 'usp-title';
const USP_TITLE_INPUT_ID = 'user-submitted-title';
const USP_TITLE_INPUT_NAME = 'user-submitted-title';

const USP_TAGS_FIELDSET_CLASS = 'usp-tags';
const USP_TAGS_INPUT_ID = 'user-submitted-tags';
const USP_TAGS_INPUT_NAME = 'user-submitted-tags';

const USP_CATEGORIES_FIELDSET_CLASS = 'usp-category';
const USP_CATEGORIES_FIELDSET_ID = 'user-submitted-category';
const USP_CATEGORIES_SELECT_NAME = 'user-submitted-category';

const USP_CONTENT_FIELDSET_CLASS = 'usp-content';
const USP_CONTENT_FIELDSET_DIV_CLASS = 'usp_text-editor';
const USP_CONTENT_TEXTAREA_ID = 'user-submitted-content';
const USP_CONTENT_TEXTAREA_NAME = 'user-submitted-content';

const USP_IMAGE_FIELDSET_CLASS = 'usp-images';
const USP_IMAGE_UPLOAD_MESSAGE_ID = 'usp-upload-message';
const USP_IMAGE_INPUT_CONTAINER_ID = 'user-submitted-image';
const USP_IMAGE_INPUT_ID = 'user-submitted-image';
const USP_IMAGE_INPUT_NAME = 'user-submitted-image';

const USP_IMAGE_MIN_IMAGES_ID = 'usp-min-images';
const USP_IMAGE_MIN_IMAGES_NAME = 'usp-min-images';
const USP_IMAGE_MAX_IMAGES_ID = 'usp-max-images';
const USP_IMAGE_MAX_IMAGES_NAME = 'usp-max-images';

const USP_IMAGE_ADD_ANOTHER_ID = 'usp_add-another';
const USP_IMAGE_ADD_ANOTHER_CLASS = 'usp-no-js';

const USP_HUMAN_VERIFICATION_FIELDSET_ID = 'coldform_verify';
const USP_HUMAN_VERIFICATION_INPUT_ID = 'user-submitted-verify';
const USP_HUMAN_VERIFICATION_INPUT_NAME = 'user-submitted-verify';

const USP_SUBMIT_CONTAINER_ID = 'usp-submit';
const USP_SUBMIT_INPUT_CLASS = 'usp-submit';
const USP_SUBMIT_INPUT_ID = 'user-submitted-post';
const USP_SUBMIT_INPUT_NAME = 'user-submitted-post';

const USP_SUCCESS_MESSAGE_CONTAINER_ID = 'usp-success-message';


// Functions

function usp_allow_custom_categories(): bool {
	if ( isset( USP_OPTIONS['usp_category'] ) && USP_OPTIONS['usp_category'] == 'show' ) {
		return true;
	} else {
		return false;
	}
}

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

function usp_use_emails(): bool {
	if ( isset( USP_OPTIONS['usp_email'] ) && USP_OPTIONS['usp_email'] !== 'hide' ) {
		return true;
	} else {
		return false;
	}
}

function usp_allow_custom_names(): bool {
	return ! ( is_user_logged_in() && USP_OPTIONS['usp_use_author'] );
}

function usp_allow_custom_urls(): bool {
	return ! ( is_user_logged_in() && USP_OPTIONS['usp_url'] === 'show' );
}

function usp_use_urls(): bool {
	return USP_OPTIONS['usp_use_url'];
}

function usp_use_predefined_category(): bool {
	return USP_OPTIONS['usp_use_cat'] == true;
}

function usp_allow_custom_titles(): bool {
	return USP_OPTIONS['usp_title'] === 'show' || USP_OPTIONS['usp_title'] === 'optn';
}

function usp_use_tags(): bool {
	if ( USP_OPTIONS['usp_tags'] === 'show' || USP_OPTIONS['usp_tags'] === 'optn' ) {
		return true;
	} else {
		return false;
	}
}

function usp_allow_visitors(): bool {
	if ( 'usp_use_author' !== 0 ) {
		return true;
	} else {
		return false;
	}
}