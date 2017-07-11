<?php

function display_subheader() {
	$classes = 'top-bar';
	if ( ! has_post_thumbnail() ) {
		$classes .= ' bordered';
	}
	?>
	<div class="os-container top-bar-w">
		<div class="<?php echo esc_attr( $classes ) ?>">
			<?php osetin_output_breadcrumbs(); ?>
			<?php osetin_social_share_icons( 'header' ); ?>
		</div>
	</div>
	<?php
}