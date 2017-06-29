<?php

if ( ! defined( 'USP_INIT_FILE_REQUIRED' ) ) {
	die( "USP init file must be included before any other file." );
}

function usp_is_submission_post_request(): bool {
	return isset( $_POST[ USP_SUBMIT_INPUT_NAME ], $_POST['usp-nonce'] ) && ! empty( $_POST[ USP_SUBMIT_INPUT_NAME ] ) && wp_verify_nonce( $_POST['usp-nonce'], 'usp-nonce' );
}

function usp_get_title_from_post_request( array $post ): string {

	if ( ! usp_allow_custom_titles() ) {
		return usp_get_default_title();
	} else {
		$title = sanitize_text_field( $post[ USP_TITLE_INPUT_NAME ] );
		if ( strlen( $title ) === 0 ) {
			throw new exception; // TODO
		} else {
			if ( isset( USP_OPTIONS['titles_unique']) && USP_OPTIONS['titles_unique'] && ! usp_check_duplicates( $title ) ) {
				throw new exception;
			}
			return $title;
		}
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
	} else {
		$url = esc_url( $_POST[ USP_AUTHOR_URL_INPUT_NAME ] );
		if ( strlen( $url) === 0 ) {
			throw new exception; // TODO
		} else {
			return $url;
		}
	}
}

function usp_get_category_from_post_request( array $post ): int {
	if ( usp_use_predefined_category() ) {
		return USP_OPTIONS['usp_use_cat_id'];
	} else {
		$category_id = intval( $post[ USP_CATEGORIES_SELECT_NAME ] );
		$category = get_the_category_by_ID( $category_id );
		if ( ! is_wp_error( $category ) ) {
			return $category_id;
		} else {
			throw new exception;
		}
	}
}

function usp_get_email_from_post_request( array $post ): string {
	$email = sanitize_email( $post[ USP_AUTHOR_EMAIL_INPUT_NAME ] );
	if ( ! usp_validateEmail( $email ) ) { // TODO:!!
		throw new exception;
	} else {
		return $email;
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
	$verification = sanitize_text_field( $post[ USP_HUMAN_VERIFICATION_INPUT_NAME ] );
	if ( empty( $verification ) ) {
		return $verification;
	} else {
		throw new exception;
	}
}

// TODO: rich text formatting
function usp_get_content_from_post_request( array $post ): string {
	if ( isset( $post[ USP_CONTENT_TEXTAREA_NAME ] ) ) {
		$text = usp_sanitize_content( $post[ USP_CONTENT_TEXTAREA_NAME ] );
		if ( strlen( $text ) === 0 ) {
			throw new exception;
		} else {
			return $text;
		}
	} else {
		throw new exception;
	}
}

function usp_get_files_from_post_request( array $post ): array {
	if ( isset( $_FILES[ USP_IMAGE_INPUT_NAME ] ) ) {
		return $_FILES[ USP_IMAGE_INPUT_NAME ];
	} else {
		return array();
	}
}