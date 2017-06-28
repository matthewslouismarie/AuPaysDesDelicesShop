<?php
/**
 * The template for displaying all pages.
 * 
 * @package Au_Pays_Des_Delices_Shop
 * @since 1.0.0
 */

/*
 * Template Name: Join the Community
 */

require_once( $functions . 'display-top-bar.php' );
require_once( $functions . 'get-page-w-additional-classes.php' );
require_once( $functions . 'is-regular-header.php' );
require_once( $functions . 'display-regular-header.php' );
require_once( $functions . 'has-sub-title.php' );
require_once( $functions . 'display-sub-title.php' );
require_once( $functions . 'should-load-up-the-comments-template.php' );
require_once( $functions . 'display-sidebar-index.php' );
require_once( $functions . 'is-sidebar-index-active.php' );
require_once( $functions . 'display-join-the-community-button.php' );

get_header();

while ( have_posts() ) {
	the_post();

	display_top_bar( get_the_ID() );

	if ( ! is_user_logged_in() ) {
		display_join_the_community_button();
	}

	if ( osetin_is_imaged_header( get_the_ID() ) ) {
		display_page_featured_image();
	}
	?>

	<div class="os-container">
		<div class="page-w <?php echo esc_attr( get_page_w_additional_classes() ) ?>">
			<div class="page-content">
				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php // TODO: to delete if confirmed if ( is_regular_header() ) display_regular_header() ?>
					<?php // TODO: to delete if confirmed if ( has_sub_title() ) display_sub_title() ?>
					<?php the_content(); ?>
					<?php if ( should_load_up_the_comments_template() ) comments_template(); ?>
				</article>
			</div>
			<?php if ( is_sidebar_index_active() ) display_sidebar_index() ?>
		</div>
	</div>

	<?php
}

get_footer();