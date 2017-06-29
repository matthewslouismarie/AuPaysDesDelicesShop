<?php

if ( ! defined( 'USP_INIT_FILE_REQUIRED' ) ) {
	die( "USP init file must be included before any other file." );
}

function usp_is_submission_post_request(): bool {
	return isset( $_POST[ USP_SUBMIT_INPUT_NAME ], $_POST['usp-nonce'] ) && ! empty( $_POST[ USP_SUBMIT_INPUT_NAME ] ) && wp_verify_nonce( $_POST['usp-nonce'], 'usp-nonce' );
}

function usp_get_title_from_post_request( array $post ): string {

	$post_request_contains_a_title = isset( $post[ USP_TITLE_INPUT_NAME ] );
	$title_option_is_on = USP_OPTIONS['usp_title'] == 'show' || USP_OPTIONS['usp_title'] == 'optn';
	
	if ( $post_request_contains_a_title && $title_option_is_on ) {
		return sanitize_text_field( $post[ USP_TITLE_INPUT_NAME ] );
	} else {
		return usp_get_default_title();
	}
}

function usp_get_author_username_from_post_request( array $post ): string {
	if ( ! usp_allow_custom_names() ) {
		return wp_get_current_user()->user_login;
	}
	elseif ( isset( $post[ USP_AUTHOR_NAME_INPUT_NAME ] ) ) {
		return sanitize_text_field( $post[ USP_AUTHOR_NAME_INPUT_NAME ] );
	} else {
		return '';
	}
}

function usp_get_author_url_from_post_request( array $post ): string {
	if ( ! usp_allow_custom_urls() ) {
		return wp_get_current_user()->user_url;
	} elseif ( isset( $_POST[ USP_AUTHOR_URL_INPUT_NAME ] ) ) {
		esc_url( $_POST[ USP_AUTHOR_URL_INPUT_NAME ] );
	} else {
		return '';
	}
}

function usp_get_category_from_post_request( array $post ): string {
	if ( usp_use_predefined_category() ) {
		return USP_OPTIONS['usp_use_cat_id'];
	} elseif ( isset( $post[ USP_CATEGORIES_SELECT_NAME ] ) ) {
		return intval( $post[ USP_CATEGORIES_SELECT_NAME ] );
	} else {
		return '';
	}
}

function usp_get_email_from_post_request( array $post ): string {
	if ( isset( $post[ USP_AUTHOR_EMAIL_INPUT_NAME ] ) ) {
		return sanitize_email( $post[ USP_AUTHOR_EMAIL_INPUT_NAME ] );
	} else {
		return '';
	}
}

function usp_get_tags_from_post_request( array $post ): string {
	if ( isset( $post[ USP_TAGS_INPUT_NAME ] ) ) {
		return sanitize_text_field( $_POST[ USP_TAGS_INPUT_NAME ] );
	} else {
		return '';
	}
}

function usp_get_captcha_from_post_request( array $post ): string {
	if ( isset( $post['user-submitted-captcha'] ) ) {
		return sanitize_text_field( $post['user-submitted-captcha'] );
	} else {
		return '';
	}
}

function usp_get_human_verification_from_post_request( array $post ): string {
	if ( isset( $post[ USP_HUMAN_VERIFICATION_INPUT_NAME ] ) ) {
		return sanitize_text_field( $post[ USP_HUMAN_VERIFICATION_INPUT_NAME ] );
	} else {
		return '';
	}
}

function usp_get_content_from_post_request( array $post ): string {
	if ( isset( $post[ USP_CONTENT_TEXTAREA_NAME ] ) ) {
		return usp_sanitize_content( $post[ USP_CONTENT_TEXTAREA_NAME ] );
	} else {
		return '';
	}
}

function usp_get_files_from_post_request( array $post ): array {
	if ( isset( $_FILES[ USP_IMAGE_INPUT_NAME ] ) ) {
		return $_FILES[ USP_IMAGE_INPUT_NAME ];
	} else {
		return array();
	}
}