<?php

/**
 * Displays the formatted subtitle of a page.
 * 
 * @since 1.0.0
 * @see 
 */
function display_sub_title() {
	$sub_title = osetin_get_field( 'sub_title' );
	?>
	<h2 class="page-content-sub-title">
		<?php echo esc_html( $sub_title ); ?>
	</h2>
	<?php
}