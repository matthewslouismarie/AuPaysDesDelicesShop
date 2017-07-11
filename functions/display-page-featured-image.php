<?php

/**
 * Displays the featured image of the page.
 * 
 * Displays the featured image of the page. Before calling this function, make
 * sure the page actually has a featured image. This can be done the following
 * way:
 * 
 *    if ( osetin_is_imaged_header( get_the_ID() ) ) {
 *	      display_page_featured_image();
 *    }
 * 
 * @since 1.0.0
 * @see osetin_is_bbpress()
 * @see get_post_thumbnail_id()
 * @see get_the_ID()
 */
function display_page_featured_image()
{
	if ( osetin_is_bbpress() ) {
		$page_bg_image_url = get_template_directory_uri() . '/assets/img/patterns/flowers_light.jpg';
	} else {
		$page_bg_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	}

	$style = osetin_get_css_prop( 'background-image', $page_bg_image_url, false, 'background-repeat: repeat; background-position: top left;' );
	?>
	<div class="os-container">
		<div class="page-intro-header with-background" style="<?php echo $style ?>">
			<h2>
				<?php echo osetin_get_the_title( get_the_ID() ); ?>
			</h2>
		</div>
	</div>
	<?php
}