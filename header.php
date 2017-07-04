<?php

require_once( FUNCTIONS_PATH . 'display-body-header.php' );
require_once( FUNCTIONS_PATH . 'display-body-opening-tag.php' );
require_once( FUNCTIONS_PATH . 'display-body-top-bar.php' );
require_once( FUNCTIONS_PATH . 'display-fixed-header.php' );
require_once( FUNCTIONS_PATH . 'display-mobile-header.php' );
require_once( FUNCTIONS_PATH . 'get-body-background-image.php' );
require_once( FUNCTIONS_PATH . 'get-logo.php' );
require_once( FUNCTIONS_PATH . 'is-custom-style-defined.php' );
require_once( FUNCTIONS_PATH . 'is-fixed-header-activated.php' );
require_once( FUNCTIONS_PATH . 'is-query-for-a-single-recipe.php' );
require_once( FUNCTIONS_PATH . 'print-logo.php' );
require_once( FUNCTIONS_PATH . 'website-has-icon.php' );

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php if ( website_has_icon() ) wp_site_icon(); ?>
  <?php wp_head(); ?>
  <?php if ( is_query_for_a_single_recipe() ) echo osetin_generate_recipe_rich_snippet(); ?>
</head>
<?php
$body_background = get_body_background_image();

$logo = get_logo();

display_body_opening_tag();

if ( is_custom_style_defined() ) {
	display_custom_style();
}

if ( is_parallax_background_active() && $body_background !== null ) {
	display_body_parallax_background( $body_background );
}

?>
<div class="all-wrapper with-animations">
	<?php print_logo() ?>
	<?php if ( osetin_top_bar_visible() ) display_body_top_bar() ?>
	<?php display_body_header() ?>
	<?php if ( is_fixed_header_activated() ) display_fixed_header() ?>
	<?php display_mobile_header() ?>
</div>