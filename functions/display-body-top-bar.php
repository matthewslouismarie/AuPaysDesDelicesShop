<?php

require_once( FUNCTIONS_PATH . 'get-page-url-by-slug.php' );
require_once( FUNCTIONS_PATH . 'display-language-icons.php' );

function display_body_top_bar() {
	$member_bar_bg = osetin_get_field( 'top_member_bar_background_color', 'option' );
	$top_profile_links_box_style = $member_bar_bg ? 'background-color: ' . $member_bar_bg : '';
?>
	<div class="os-container top-profile-links-box-container">
		<div class="top-profile-links-box-w">
			<div class="top-profile-links-box" style="<?= $top_profile_links_box_style ?>">
				<ul>
					<?php display_language_icons() ?>
					<?php if ( osetin_top_bar_member_buttons_visible() ) { ?>
					<?php if ( is_user_logged_in() ) { ?>
					<?php 
					global $userpro;
					if ( isset( $userpro ) ) {
						$os_current_user = wp_get_current_user();
					?>
					<li>
						<span><?php _e("Logged in as", 'osetin'); ?> <strong><?= $os_current_user->display_name; ?></strong></span>
					</li>
					<li>
						<a href="<?= $userpro->permalink(get_current_user_id()); ?>">
							<i class="os-icon os-icon-head"></i> <span><?php _e('My Profile', 'osetin') ?></span>
						</a>
					</li>
					<?php
					$user_has_posts_query = array(
					'post_type'      => 'osetin_recipe',
					'author'         => get_current_user_id(),
					'post_status'    => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash'),
					'posts_per_page' => 1
					);
                    $user_has_posts = new WP_Query( $user_has_posts_query );
                    if ( isset( $user_has_posts->posts ) && count( $user_has_posts->posts ) > 0 ) {
					?>
                    <li>
						<a href="<?= get_author_posts_url( get_current_user_id() ); ?>"><i class="os-icon os-icon-home-03"></i> <span><?php _e('My Recipes', 'osetin') ?></span></a>
					</li>  
					<?php } ?>
					<?php if ( get_page_by_title( 'Mes Marque-pages' ) ) { ?>
					<li>
						<a href="<?= get_permalink( get_page_by_title( 'Bookmarks' ) ); ?>"><i class="os-icon os-icon-ui-33"></i> <span><?php _e('Mes Marque-pages', 'osetin') ?></span></a>
					</li>
					<?php } ?>
					<li>
						<a href="<?= esc_attr( get_page_url_by_slug( 'user-comments' ) ) ?>"><span><?= __( 'My Comments', APDD_TEXTDOMAIN ) ?></span></a>
					</li>
					<?php if ( get_user_meal_plans_permalink() ) { ?>
					<li>
						<a href="' . $user_meal_plans_permalink . '"><i class="os-icon os-icon-ui-33"></i><span><?= __('My Meal Plans', 'osetin') ?></span></a>
					</li>
					<?php } ?>
					<li>
						<a href="<?= wp_logout_url(); ?>"><i class="os-icon os-icon-signs-12"></i> <span><?php _e('Logout', 'osetin') ?></span></a>
					</li>
					<?php } ?>
					<?php } else { ?>
					<li>
						<a href="#" class="popup-login"><?php _e('Login', 'osetin'); ?></a>
					</li>
					<li>
						<a href="<?= get_page_url_by_slug( 'devenir-ambassadeur' ) ?>"><?= __( 'Join the community', APDD_TEXTDOMAIN ) ?></a>
					</li>
					<?php } ?>
					<?php } ?>
					<?php if ( osetin_top_bar_cart_button_visible() ) { ?>
					<?php if ( WC()->cart->cart_contents_count > 0 ) { ?>
					<li>
						<a href="<?= WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'osetin' ); ?>"><i class="os-icon os-icon-finance-28"></i> <span><?= sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count, 'osetin' ), WC()->cart->cart_contents_count ); ?> - <?= WC()->cart->get_cart_total(); ?></span></a>
					</li>
					<?php } else { ?>
					<li>
						<a href="<?= WC()->cart->get_cart_url(); ?>"><i class="os-icon os-icon-finance-28"></i> <span><?php _e('Cart is empty', 'osetin'); ?></span></a>
					</li>
					<?php } ?>
					<?php } ?>
					<?php if ( osetin_top_bar_checkout_button_visible() ) { ?>
					<?php if ( WC()->cart->cart_contents_count > 0 ) { ?>
					<li>
						<a href="<?= WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Checkout Now', 'osetin' ); ?>"><i class="os-icon os-icon-flag"></i> <span><?php _e( 'Checkout', 'osetin' ); ?></span></a>
					</li>
					<?php } ?>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
<?php
}