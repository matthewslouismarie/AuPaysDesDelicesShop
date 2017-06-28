<?php
/**
 * Definition of display_front_end_submit_recipe_form
 * 
 * @package Au_Pays_Des_Delices
 * @since 1.0.0
 */

require( $functions . 'user-submitted-posts/form.php' );

/**
 * Displays the form allowing members of the website to submit recipes for approval.
 * 
 * @since 1.0.0
 */
function display_front_end_submit_recipe_form( array $usp_options ): void {

	if ( $usp_options['disable_required'] ) {
		$usp_required = ''; 
		$usp_captcha  = '';
		$usp_files    = '';
	} else {
		$usp_required = ' data-required="true" required';
		$usp_captcha  = ' user-submitted-captcha'; 
		$usp_files    = ' usp-required-file';
	}
	
	usp_display_form_opening_tags();

	// User Submitted Posts @ https://m0n.co/usp

	usp_display_form_general_error_message();

	if ( usp_should_display_author_name_field() ) {
		display_author_name_field();
	}

	if ( usp_should_display_url_field() ) {
		usp_display_url_field();
	}
	
	if ( usp_should_display_email_field() ) {
		usp_display_email_field();
	}
	
	if ( usp_should_display_title_field() ) {
		usp_display_title_field();
	}
	
	if ( usp_should_display_tags_field() ) {
		usp_display_tags_field();
	}

	if ( usp_should_display_categories_field() ) {
		usp_display_categories_field();
	}
	
	if ( usp_should_display_content_field() ) {
		usp_display_content_field();
	}
	
	if ( usp_should_display_image_field() ) {
		usp_display_image_field();
	} 
	
	usp_display_human_verification_field();
	
	usp_display_hidden_default_values();

	usp_display_form_closing_tags();
}