<?php

require_once( FUNCTIONS_PATH . 'get-logo.php' );

function display_mobile_header(): void {
	
	$logo = get_logo();

	$mobile_logo_image_url = osetin_get_field( 'mobile_logo_image', 'option', $logo->get_url() );
	$mobile_logo_image_width = osetin_get_field( 'mobile_logo_image_width', 'option', '210' );
?>
	<div class="mobile-header-w">
		<div class="mobile-header-menu-w menu-activated-on-click color-scheme-<?= osetin_get_field('mobile_header_background_color_type', 'option', 'dark'); ?>" style="<?= osetin_get_css_prop('background-color', osetin_get_field('mobile_header_background_color', 'option')); ?>">
			<?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'mobile-header-menu', 'container' => '', 'fallback_cb' => false ) ); ?>
		</div>
		<div class="mobile-header">
			<div class="mobile-menu-toggler">
				<i class="os-icon os-icon-thin-hamburger">
			</i>
		</div>
		<div class="mobile-logo" style="width: <?= $mobile_logo_image_width; ?>px;">
			<a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?= $mobile_logo_image_url; ?>" alt="">
			</a>
		</div>
		<div class="mobile-menu-search-toggler">
			<i class="os-icon os-icon-thin-search"></i>
		</div>
	</div>
<?php
}