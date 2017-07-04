<?php

function display_fixed_header(): void {

$logo = get_logo();

$fixed_menu_logo_image_url = osetin_get_field( 'fixed_header_logo', 'option', $logo->get_url() );
$fixed_menu_logo_image_width = osetin_get_field( 'fixed_header_logo_width', 'option', '210' );
?>
<div class="fixed-header-w color-scheme-<?= osetin_get_field('fixed_menu_bar_background_color_type', 'option', 'light'); ?>" style="<?= osetin_get_css_prop('background-color', osetin_get_field('fixed_menu_bar_background_color', 'option')); ?>">
	<div class="os-container">
		<div class="fixed-header-i">
			<div class="fixed-logo-w" style="width: <?= $fixed_menu_logo_image_width; ?>px;">
				<a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?= get_logo_image_url(); ?>" alt="">
				</a>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'fixed-header-menu', 'container_class' => 'fixed-top-menu-w menu-activated-on-hover', 'fallback_cb' => false ) ); ?>
			<div class="fixed-search-trigger-w">
				<div class="search-trigger">
					<i class="os-icon os-icon-thin-search"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}