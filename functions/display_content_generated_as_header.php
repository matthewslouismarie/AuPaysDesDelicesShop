<?php

function display_content_generated_as_header( content_field_value ) {
	$css_extra_class = has_post_thumbnail() ? 'with-background' : 'without-background';
	$page_intro_header_inline_style = osetin_get_css_prop( 'background-image', wp_get_attachment_url( get_post_thumbnail_id() ), false, 'background-repeat: repeat; background-position: top left;' );
	?>
	<div class="os-container">
		<div class="page-intro-header <?php echo esc_attr( $css_extra_class ) ?>" style="<?php echo esc_attr( $page_intro_header_inline_style ) ?>">
			<h2><?php echo osetin_get_the_title( get_the_ID() ); ?></h2>
				<?php if ( $content_field_value ) : ?>
					<div class="page-intro-description">
						<?php echo do_shortcode( $content_field_value ); ?>
					</div>
				<?php endif ?>
		</div>
	</div>
	<?php
}