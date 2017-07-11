<?php

require_once( APDD_FUNCTIONS_PATH . 'get-page-title-from-slug.php' );

function display_top_bar_userpro_buttons() {
	
	if ( is_user_logged_in() ) {
		display_body_top_bar_user_section();
	} else {
?>
	<li>
		<a href="#" class="popup-login"><?php _e('Login', 'osetin'); ?></a>
	</li>
	<li>
		<a href="<?= get_page_url_by_slug( REGISTER_SLUG ) ?>"><?= get_page_title_from_slug( REGISTER_SLUG ) ?></a>
	</li>
<?php
	}
}