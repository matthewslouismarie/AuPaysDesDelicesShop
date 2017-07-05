<?php

/**
 * Displays the bar at the top of a regular page.
 * 
 * @since 1.0.0
 * 
 * @param int $page_id ID of the page.
 */
function display_top_bar ( int $page_id ) {
	?>
	<div class="os-container top-bar-w">
		<div class="top-bar <?php if(!osetin_is_imaged_header(get_the_ID())) echo 'bordered'; ?>">
			<?php osetin_output_breadcrumbs(); ?>
			<?php osetin_social_share_icons('header'); ?>
		</div>
	</div>
	<?php
}