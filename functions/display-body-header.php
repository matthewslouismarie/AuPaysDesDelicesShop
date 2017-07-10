<?php

require_once( APDD_FUNCTIONS_PATH . 'get-logo.php' );
require_once( APDD_FUNCTIONS_PATH . 'get-logo-image-url.php' );

function display_body_header() {

	$logo = get_logo();

	if ( osetin_get_field( 'enable_custom_header_settings' ) === true ) {
		$top_menu_version_type = osetin_get_field( 'top_menu_type' );
	} else {
		$top_menu_version_type = osetin_get_field( 'top_menu_type_option', 'option', 'version_1' );
	}

	$top_menu_bg_color =  osetin_get_field( 'top_menu_background_color', 'option' );
	$top_menu_bg_color_type =  osetin_get_field( 'top_menu_background_color_type', 'option', 'light' );

?>
	<div class="os-container main-header-w main-header-<?= $top_menu_version_type; ?>">
		<div class="main-header color-scheme-<?= $top_menu_bg_color_type; ?> " style="<?= osetin_get_css_prop('background-color', $top_menu_bg_color); ?>">
			<?php if ( $top_menu_version_type != 'version_2' ) { ?>
			<div class="logo" style="width: <?= $logo->get_width(); ?>px;">
				<a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?= get_logo_image_url() ?>" alt="">
				</a>
			</div>
			<?php wp_nav_menu( array( 'menu' => APDD_HEADER_MENU_NAME, 'theme_location' => 'header', 'menu_id' => 'header-menu', 'container_class' => 'top-menu menu-activated-on-hover', 'fallback_cb' => false ) ); ?>
			<div class="search-trigger">
				<i class="os-icon os-icon-thin-search"></i>
			</div>
			<?php } else { ?>
			<div class="top-logo-w">
				<div class="social-trigger-w">
					<div class="social-trigger">
						<i class="os-icon os-icon-thin-heart"></i>
					</div>
					<?php osetin_social_share_icons( 'header' ); ?>
				</div>
				<div class="logo" style="width: <?= $logo->get_width(); ?>px;">
					<a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?= $logo->get_url(); ?>" alt="">
					</a>
				</div>
				<div class="search-trigger">
					<i class="os-icon os-icon-thin-search"></i>
				</div>
			</div>
			<div class="top-menu-w">
				<?php wp_nav_menu( array( 'menu' => APDD_HEADER_MENU_NAME, 'theme_location' => 'header', 'menu_id' => 'header-menu', 'container_class' => 'top-menu menu-activated-on-hover', 'fallback_cb' => false ) ); ?>
			</div>
			<?php } ?>
		</div>
	</div>
<?php
}