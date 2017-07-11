<?php

require_once( APDD_FUNCTIONS_PATH . 'get-page-url-by-slug.php' );
require_once( APDD_FUNCTIONS_PATH . 'display-language-icons.php' );
require_once( APDD_FUNCTIONS_PATH . 'display-body-top-bar-logged-in-user-section.php' );
require_once( APDD_FUNCTIONS_PATH . 'display-body-top-bar-visitor-section.php' );
require_once( APDD_FUNCTIONS_PATH . 'is-userpro-activated.php' );

function display_body_top_bar() {
	$member_bar_bg = osetin_get_field( 'top_member_bar_background_color', 'option' );
	$top_profile_links_box_style = $member_bar_bg ? 'background-color: ' . $member_bar_bg : '';
?>
	<div class="os-container top-profile-links-box-container">
		<div class="top-profile-links-box-w">
			<div class="top-profile-links-box" style="<?= $top_profile_links_box_style ?>">
				<ul>
					<?php
					display_language_icons();

					if ( osetin_top_bar_member_buttons_visible() && is_userpro_activated() ) {
						if ( is_user_logged_in() ) {
							display_body_top_bar_logged_in_user_section();
						} else {
							display_body_top_bar_visitor_section();
						}
					}

					if ( osetin_top_bar_cart_button_visible() ) {
						display_body_top_bar_cart_buttons();
					}
					
					if ( osetin_top_bar_checkout_button_visible() ) {
						display_body_top_bar_checkout_button();
					}
					?>
				</ul>
			</div>
		</div>
	</div>
<?php
}