<?php

function usp_allow_custom_names(): bool {
	return ! ( is_user_logged_in() && USP_OPTIONS['usp_use_author'] );
}

function usp_allow_custom_urls(): bool {
	return ! ( is_user_logged_in() && USP_OPTIONS['usp_use_url'] );
}

function usp_use_categories(): bool {
	return USP_OPTIONS['usp_use_cat'] == true;
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
	return ( USP_OPTIONS['usp_category'] == 'show' || USP_OPTIONS['usp_category'] == 'optn' ) && ( USP_OPTIONS['usp_use_cat'] == false );
}

function usp_should_display_content_field(): bool {
	return USP_OPTIONS['usp_content'] == 'show' || USP_OPTIONS['usp_content'] == 'optn';
}

function usp_should_display_image_field(): bool {
	return USP_OPTIONS['usp_images'] == 'show' && USP_OPTIONS['max-images'] !== 0;
}

function usp_display_author_name_field(): void {
	if ( USP_OPTIONS['disable_required'] ) {
		$usp_required = ''; 
		$usp_captcha  = '';
		$usp_files    = '';
	} else {
		$usp_required = ' data-required="true" required';
		$usp_captcha  = ' user-submitted-captcha'; 
		$usp_files    = ' usp-required-file';
	}
	?>
	<fieldset class="usp-name">
		<label for="user-submitted-name">
			<?php esc_html_e('Your Name', 'usp'); ?>
		</label>
		<input id="user-submitted-name" name="user-submitted-name" type="text" value="" placeholder="<?php esc_attr_e('Your Name', 'usp'); ?>"<?php if ( usp_check_required( 'usp_name') ) echo $usp_required; ?> class="usp-input">
	</fieldset>
	<?php
}

function usp_display_form_opening_tags(): void {
	?>
	<div id="user-submitted-posts">
		<form action="#" data-parsley-validate enctype="multipart/form-data"  id="usp_form" method="post">
	<?php
}

function usp_display_form_closing_tags(): void {
	?>
		</form>
	</div>
	<script>(function(){var e = document.getElementById('coldform_verify'); if(e) e.parentNode.removeChild(e);})();</script>
	<?php
}

function usp_display_form_general_error_message(): void {
	?>
	<div id="usp-error-message" class="usp-callout-failure usp-hidden">
		<?php esc_html_e( 'Please complete the required fields.', 'usp' ); ?>
	</div>
	<?php echo usp_error_message();
}

function usp_display_url_field(): void {
	?>
	<fieldset class="usp-url">
	<label for="user-submitted-url"><?php esc_html_e('Your URL', 'usp'); ?></label>
	<input id="user-submitted-url" name="user-submitted-url" type="text" value="" placeholder="<?php esc_attr_e('Your URL', 'usp'); ?>"<?php if ( usp_check_required( 'usp_url' ) ) echo $usp_required; ?> class="usp-input">
	</fieldset>
	<?php
}

function usp_display_email_field(): void {
	?>
	<fieldset class="usp-email">
		<label for="user-submitted-email"><?php esc_html_e('Your Email', 'usp'); ?></label>
		<input id="user-submitted-email" name="user-submitted-email" type="text" value="" placeholder="<?php esc_attr_e('Your Email', 'usp'); ?>"<?php if (usp_check_required('usp_email')) echo $usp_required; ?> class="usp-input">
	</fieldset>
	<?php
}

function usp_display_title_field(): void {
	?>
	<fieldset class="usp-title">
		<label for="user-submitted-title"><?php esc_html_e('Post Title', 'usp'); ?></label>
		<input id="user-submitted-title" name="user-submitted-title" type="text" value="" placeholder="<?php esc_attr_e('Post Title', 'usp'); ?>"<?php if (usp_check_required('usp_title')) echo $usp_required; ?> class="usp-input">
	</fieldset>
	<?php
}

function usp_display_tags_field(): void {
	?>
	<fieldset class="usp-tags">
		<label for="user-submitted-tags"><?php esc_html_e('Post Tags', 'usp'); ?></label>
		<input id="user-submitted-tags" name="user-submitted-tags" type="text" value="" placeholder="<?php esc_attr_e('Post Tags', 'usp'); ?>"<?php if (usp_check_required('usp_tags')) echo $usp_required; ?> class="usp-input">
	</fieldset>
	<?php
}

function usp_display_categories_field(): void {
	?>
	<fieldset class="usp-category">
		<label for="user-submitted-category"><?php esc_html_e('Post Category', 'usp'); ?></label>
		<select id="user-submitted-category" name="user-submitted-category"<?php if (usp_check_required('usp_category')) echo $usp_required; ?> class="usp-select">
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
	<fieldset class="usp-content">
		<?php if ( USP_OPTIONS['usp_richtext_editor'] == true ) { ?>
		
		<div class="usp_text-editor">
		<?php $usp_rte_settings = array(
				'wpautop'          => true,  // enable rich text editor
				'media_buttons'    => true,  // enable add media button
				'textarea_name'    => 'user-submitted-content', // name
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
			
		<label for="user-submitted-content">
			<?php esc_html_e('Post Content', 'usp'); ?>
		</label>
		<textarea id="user-submitted-content" name="user-submitted-content" rows="5" placeholder="<?php esc_attr_e('Post Content', 'usp'); ?>"<?php if (usp_check_required('usp_content')) echo $usp_required; ?> class="usp-textarea"></textarea>
		<?php } ?>
		
	</fieldset>
	<?php
}

function usp_display_image_field(): void {
	?>
	<fieldset class="usp-images">
				<label for="user-submitted-image"><?php esc_html_e('Upload an Image', 'usp'); ?></label>
				<div id="usp-upload-message"><?php esc_html_e(USP_OPTIONS['upload-message'], 'usp'); ?></div>
				<div id="user-submitted-image">
				<?php // upload files
					
				$usp_minImages = intval(USP_OPTIONS['min-images']);
				$usp_maxImages = intval(USP_OPTIONS['max-images']);
				$usp_addAnother = USP_OPTIONS['usp_add_another'];
				
				if ( empty( $usp_addAnother ) ) $usp_addAnother = '<a href="#" id="usp_add-another" class="usp-no-js">'. esc_html__('Add another image', 'usp') .'</a>';
				
				if ($usp_minImages > 0) : ?>
					<?php for ($i = 0; $i < $usp_minImages; $i++) : ?>
							
					<input name="user-submitted-image[]" type="file" size="25"<?php echo $usp_required; ?> class="usp-input usp-clone<?php echo $usp_files; ?> exclude">
					<?php endfor; ?>
					<?php if ($usp_minImages < $usp_maxImages) : echo $usp_addAnother; endif; ?>
				<?php else : ?>
					
					<input name="user-submitted-image[]" type="file" size="25" class="usp-input usp-clone exclude">
					<?php echo $usp_addAnother; ?>
				<?php endif; ?>
					
				</div>
				<input type="hidden" class="usp-hidden exclude" id="usp-min-images" name="usp-min-images" value="<?php echo USP_OPTIONS['min-images']; ?>">
				<input type="hidden" class="usp-hidden exclude" id="usp-max-images" name="usp-max-images" value="<?php echo USP_OPTIONS['max-images']; ?>">
			</fieldset>
			<?php
}

function usp_display_human_verification_field(): void {
	?>
	<fieldset id="coldform_verify" style="display:none;">
		<label for="user-submitted-verify"><?php esc_html_e('Human verification: leave this field empty.', 'usp'); ?></label>
		<input id="user-submitted-verify" name="user-submitted-verify" type="text" class="exclude" value="">
	</fieldset>
	<?php
}

function usp_display_hidden_default_values(): void {
	?>
	<div id="usp-submit">
		<?php if ( ! usp_allow_custom_names() ) { ?>
		
		<input type="hidden" class="usp-hidden exclude" name="user-submitted-name" value="<?php echo $usp_user_name; ?>">
		<?php } ?>
		<?php if (! usp_allow_custom_urls() ) { ?>
		
		<input type="hidden" class="usp-hidden exclude" name="user-submitted-url" value="<?php echo $usp_user_url; ?>">
		<?php } ?>
		<?php if ( usp_use_categories() ) { ?>
		
		<input type="hidden" class="usp-hidden exclude" name="user-submitted-category" value="<?php echo USP_OPTIONS['usp_use_cat_id']; ?>">
		<?php } ?>
		
		<input type="submit" class="usp-submit exclude" id="user-submitted-post" name="user-submitted-post" value="<?php esc_attr_e('Submit Post', 'usp'); ?>">
		<?php wp_nonce_field('usp-nonce', 'usp-nonce', false); ?>
	</div>
	<?php
}