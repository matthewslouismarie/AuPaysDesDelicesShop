<?php

if ( ! defined( 'USP_INIT_FILE_REQUIRED' ) ) {
	die( "USP init file must be included before any other file." );
}

function usp_should_display_url_field(): bool {
	return ( USP_OPTIONS['usp_url'] == 'show' || USP_OPTIONS['usp_url'] == 'optn' ) && usp_allow_custom_urls();
}

/**
 * Displays if the author name field should be displayed in USP forms.
 * 
 * @since 1.0.0
 * 
 * @return True if the the author name field should be displayed, false otherwise.
 */
function usp_should_display_author_name_field(): bool {
	return ( USP_OPTIONS['usp_name'] == 'show' || USP_OPTIONS['usp_name'] == 'optn' ) && usp_allow_custom_names();
}

function usp_should_display_email_field(): bool {
	return USP_OPTIONS['usp_email'] == 'show' || USP_OPTIONS['usp_email'] == 'optn';
}

function usp_should_display_title_field(): bool {
	return USP_OPTIONS['usp_title'] == 'show' || USP_OPTIONS['usp_title'] == 'optn';
}

function usp_should_display_tags_field(): bool {
	return USP_OPTIONS['usp_tags'] == 'show' || USP_OPTIONS['usp_tags'] == 'optn';
}

function usp_should_display_categories_field(): bool {
	return ( USP_OPTIONS['usp_category'] == 'show' || USP_OPTIONS['usp_category'] == 'optn' ) && ! usp_use_predefined_category();
}

function usp_should_display_content_field(): bool {
	return USP_OPTIONS['usp_content'] == 'show' || USP_OPTIONS['usp_content'] == 'optn';
}

function usp_should_display_image_field(): bool {
	return USP_OPTIONS['usp_images'] == 'show' && USP_OPTIONS['max-images'] !== 0;
}


function usp_display_form_opening_tags(): void {
	?>
	<div id="<?php echo FORM_CONTAINER_ID ?>">
		<form action="#" data-parsley-validate enctype="multipart/form-data"  id="<?php echo FORM_ID ?>" method="post">
	<?php
}

function usp_display_form_closing_tags(): void {
	?>
		</form>
	</div>
	<script>(function(){var e = document.getElementById('<?php echo USP_HUMAN_VERIFICATION_FIELDSET_ID ?>'); if(e) e.parentNode.removeChild(e);})();</script>
	<?php
}

function usp_display_form_general_error_message(): void {
	?>
	<div id="<?php echo GENERAL_ERROR_CONTAINER_ID ?>" class="<?php echo GENERAL_ERROR_CONTAINER_CLASS ?> <?php echo USP_HIDDEN_CLASS ?>">
		<?php esc_html_e( 'Please complete the required fields.', 'usp' ); ?>
	</div>
	<?php echo usp_error_message();
}

function usp_display_author_name_field(): void {
	?>
	<fieldset class="<?php echo AUTHOR_NAME_FIELDSET_CLASS ?>">
		<label for="<?php echo USP_AUTHOR_NAME_INPUT_ID ?>">
			<?php esc_html_e('Your Name', 'usp'); ?>
		</label>
		<input id="<?php echo USP_AUTHOR_NAME_INPUT_ID ?>" name="<?php echo USP_AUTHOR_NAME_INPUT_NAME ?>" type="text" value="" placeholder="<?php esc_attr_e('Your Name', 'usp'); ?>"<?php if ( usp_check_required( 'usp_name') ) usp_display_required_or_nothing(); ?> class="<?php echo INPUT_CLASS ?>">
	</fieldset>
	<?php
}

function usp_display_url_field(): void {
	?>
	<fieldset class="<?php echo USP_AUTHOR_URL_FIELDSET_CLASS ?>">
	<label for="<?php echo USP_AUTHOR_URL_INPUT_ID ?>">
		<?php esc_html_e('Your URL', 'usp'); ?>
	</label>
	<input id="<?php echo USP_AUTHOR_URL_INPUT_ID ?>" name="<?php echo USP_AUTHOR_URL_INPUT_NAME ?>" type="text" value="" placeholder="<?php esc_attr_e('Your URL', 'usp'); ?>"<?php if ( usp_check_required( 'usp_url' ) ) usp_display_required_or_nothing(); ?> class="<?php echo INPUT_CLASS ?>">
	</fieldset>
	<?php
}

function usp_display_email_field(): void {
	?>
	<fieldset class="<?php echo USP_AUTHOR_EMAIL_FIELDSET_CLASS ?>">
		<label for="<?php echo USP_AUTHOR_EMAIL_INPUT_ID ?>"><?php esc_html_e('Your Email', 'usp'); ?></label>
		<input id="<?php echo USP_AUTHOR_EMAIL_INPUT_ID ?>" name="<?php echo USP_AUTHOR_EMAIL_INPUT_NAME ?>" type="text" value="" placeholder="<?php esc_attr_e('Your Email', 'usp'); ?>"<?php if (usp_check_required('usp_email')) usp_display_required_or_nothing(); ?> class="<?php echo INPUT_CLASS ?>">
	</fieldset>
	<?php
}

function usp_display_title_field(): void {
	?>
	<fieldset class="<?php echo USP_TITLE_FIELDSET_CLASS ?>">
		<label for="<?php echo USP_TITLE_INPUT_ID ?>"><?php esc_html_e('Post Title', 'usp'); ?></label>
		<input id="<?php echo USP_TITLE_INPUT_ID ?>" name="<?php echo USP_TITLE_INPUT_NAME ?>" type="text" value="" placeholder="<?php esc_attr_e('Post Title', 'usp'); ?>"<?php if (usp_check_required('usp_title')) usp_display_required_or_nothing(); ?> class="<?php echo INPUT_CLASS ?>">
	</fieldset>
	<?php
}

function usp_display_tags_field(): void {
	?>
	<fieldset class="<?php echo USP_TAGS_FIELDSET_CLASS ?>">
		<label for="<?php echo USP_TAGS_INPUT_ID ?>"><?php esc_html_e('Post Tags', 'usp'); ?></label>
		<input id="<?php echo USP_TAGS_INPUT_ID ?>" name="<?php echo USP_TAGS_INPUT_NAME ?>" type="text" value="" placeholder="<?php esc_attr_e('Post Tags', 'usp'); ?>"<?php if (usp_check_required('usp_tags')) usp_display_required_or_nothing(); ?> class="<?php echo INPUT_CLASS ?>">
	</fieldset>
	<?php
}

function usp_display_categories_field(): void {
	?>
	<fieldset class="<?php echo USP_CATEGORIES_FIELDSET_CLASS ?>">
		<label for="<?php echo USP_CATEGORIES_FIELDSET_ID ?>">
			<?php esc_html_e('Post Category', 'usp'); ?>
			</label>
		<select id="<?php echo USP_CATEGORIES_FIELDSET_ID ?>" name="<?php echo USP_CATEGORIES_SELECT_NAME ?>"<?php if (usp_check_required('usp_category')) usp_display_required_or_nothing(); ?> class="usp-select">
			<option value=""><?php esc_html_e('Please select a category..', 'usp'); ?></option>
			<?php foreach ( USP_OPTIONS['categories'] as $category_id ) { $category = get_category( $category_id ); if ( ! $category ) { continue; } ?>
			
			<option value="<?php echo $category_id; ?>"><?php $category = get_category($category_id); echo sanitize_text_field($category->name); ?></option>
			<?php } ?>
			
		</select>
	</fieldset>
	<?php
}

function usp_display_content_field(): void {
	?>
	<fieldset class="<?php echo USP_CONTENT_FIELDSET_CLASS ?>">
		<?php if ( USP_OPTIONS['usp_richtext_editor'] == true ) { ?>
		
		<div class="<?php echo USP_CONTENT_FIELDSET_DIV_CLASS ?>">
		<?php $usp_rte_settings = array(
				'wpautop'          => true,  // enable rich text editor
				'media_buttons'    => true,  // enable add media button
				'textarea_name'    => USP_CONTENT_TEXTAREA_NAME, // name
				'textarea_rows'    => '10',  // number of textarea rows
				'tabindex'         => '',    // tabindex
				'editor_css'       => '',    // extra CSS
				'editor_class'     => 'usp-rich-textarea', // class
				'teeny'            => false, // output minimal editor config
				'dfw'              => false, // replace fullscreen with DFW
				'tinymce'          => true,  // enable TinyMCE
				'quicktags'        => true,  // enable quicktags
				'drag_drop_upload' => true,  // enable drag-drop
			);
			$usp_rte_settings = apply_filters( 'usp_editor_settings', $usp_rte_settings );
			$usp_editor_content = apply_filters( 'usp_editor_content', '' );
			wp_editor( $usp_editor_content, 'uspcontent', $usp_rte_settings ); ?>
			
		</div>
		<?php } else { ?>
			
		<label for="<?php echo USP_CONTENT_TEXTAREA_ID ?>">
			<?php esc_html_e('Post Content', 'usp'); ?>
		</label>
		<textarea id="<?php echo USP_CONTENT_TEXTAREA_ID ?>" name="<?php echo USP_CONTENT_TEXTAREA_NAME ?>" rows="5" placeholder="<?php esc_attr_e('Post Content', 'usp'); ?>"<?php if (usp_check_required('usp_content')) usp_display_required_or_nothing(); ?> class="usp-textarea"></textarea>
		<?php } ?>
		
	</fieldset>
	<?php
}

function usp_display_image_field(): void {

	?>
	<fieldset class="<?php echo USP_IMAGE_FIELDSET_CLASS ?>">
		<label for="<?php echo USP_IMAGE_INPUT_ID ?>"><?php esc_html_e('Upload an Image', 'usp'); ?></label>
		<div id="<?php echo USP_IMAGE_UPLOAD_MESSAGE_ID ?>">
			<?php esc_html_e(USP_OPTIONS['upload-message'], 'usp'); ?>
		</div>
		<div id="<?php echo USP_IMAGE_INPUT_CONTAINER_ID ?>">
			<?php // upload files
				
			$usp_minImages = intval( USP_OPTIONS['min-images'] );
			$usp_maxImages = intval( USP_OPTIONS['max-images'] );
			$usp_addAnother = USP_OPTIONS['usp_add_another'];
			
			if ( empty( $usp_addAnother ) ) {
				$usp_addAnother = '<a href="#" id="' . USP_IMAGE_ADD_ANOTHER_ID . '" class="' . USP_IMAGE_ADD_ANOTHER_CLASS . '">' . esc_html__('Add another image', 'usp') .'</a>';
			}
			
			if ( $usp_minImages > 0 ) : ?>
				<?php for ($i = 0; $i < $usp_minImages; $i++) : ?>
						
				<input name="<?php echo USP_IMAGE_INPUT_NAME ?>[]" type="file" size="25"<?php usp_display_required_or_nothing() ?> class="<?php echo INPUT_CLASS ?> <?php echo USP_CLONE_CLASS ?> <?php usp_display_file_required_or_nothing() ?> <?php echo EXCLUDE_CLASS ?>">
				<?php endfor; ?>
				<?php if ( $usp_minImages < $usp_maxImages ) : echo $usp_addAnother; endif; ?>
				<?php else : ?>
				
				<input name="<?php echo USP_IMAGE_INPUT_NAME ?>[]" type="file" size="25" class="<?php echo INPUT_CLASS ?> <?php echo USP_CLONE_CLASS ?> <?php echo EXCLUDE_CLASS ?>">
				<?php echo $usp_addAnother; ?>
			<?php endif; ?>
				
		</div>
		<input type="hidden" class="<?php echo USP_HIDDEN_CLASS ?> <?php echo EXCLUDE_CLASS ?>" id="<?php echo USP_IMAGE_MIN_IMAGES_ID ?>" name="<?php echo USP_IMAGE_MIN_IMAGES_NAME ?>" value="<?php echo USP_OPTIONS['min-images']; ?>">
		<input type="hidden" class="<?php echo USP_HIDDEN_CLASS ?> <?php echo EXCLUDE_CLASS ?>" id="<?php echo USP_IMAGE_MAX_IMAGES_ID ?>" name="<?php echo USP_IMAGE_MAX_IMAGES_NAME ?>" value="<?php echo USP_OPTIONS['max-images']; ?>">
	</fieldset>
	<?php
}

function usp_display_human_verification_field(): void {
	?>
	<fieldset id="<?php echo USP_HUMAN_VERIFICATION_FIELDSET_ID ?>" style="display:none;">
		<label for="<?php echo USP_HUMAN_VERIFICATION_INPUT_ID ?>">
			<?php esc_html_e('Human verification: leave this field empty.', 'usp'); ?>
		</label>
		<input id="<?php echo USP_HUMAN_VERIFICATION_INPUT_ID ?>" name="<?php echo USP_HUMAN_VERIFICATION_INPUT_NAME ?>" type="text" class="<?php echo EXCLUDE_CLASS ?>" value="">
	</fieldset>
	<?php
}

function usp_display_submit_button(): void {
	?>
	<div id="<?php echo USP_SUBMIT_CONTAINER_ID ?>">
		<input type="submit" class="<?php echo USP_SUBMIT_INPUT_CLASS ?> <?php echo EXCLUDE_CLASS ?>" id="<?php echo USP_SUBMIT_INPUT_ID ?>" name="<?php echo USP_SUBMIT_INPUT_NAME ?>" value="<?php esc_attr_e('Submit Post', 'usp'); ?>">
	</div>
	<?php
}

function usp_display_wp_nonce(): void {
	wp_nonce_field( 'usp-nonce', 'usp-nonce', false );
}

/**
 * Displays the form allowing members of the website to submit recipes for approval.
 * 
 * @since 1.0.0
 */
function display_front_end_submit_recipe_form(): void {
	
	usp_display_form_opening_tags();

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
	
	usp_display_submit_button();

	usp_display_wp_nonce();

	usp_display_form_closing_tags();
}



/**
 * Displays a message informing the user of the successful USP submission.
 * 
 * @since 1.0.0
 */
function usp_display_successful_submission() {
	?>
	<div id="<?php echo USP_SUCCESS_MESSAGE_CONTAINER_ID ?>">
		<?php echo USP_OPTIONS['success-message'] ?>
	</div>
	<?php
}