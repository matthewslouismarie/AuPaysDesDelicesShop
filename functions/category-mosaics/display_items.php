<?php

namespace category_mosaics;

function display_items() {
	while ( osetin_have_rows( 'category_items' ) ) {
		the_row(); 
		$category_bg_image_url = get_sub_field( 'image' ); 
		if ( get_sub_field( 'what_to_show' ) == 'category' ) {
			$tile_link = get_category_link( get_sub_field( 'category' ) );
		} elseif ( get_sub_field( 'what_to_show' ) == 'page') {
			$tile_link = get_sub_field( 'page' );
		} else {
			$tile_link = get_sub_field( 'custom_link' );
		}

		$style = osetin_get_css_prop( 'background-image', $category_bg_image_url, false, 'background-repeat: repeat; background-position: center center;  background-size: cover;');

		?>
		<a href="<?php echo esc_attr( $tile_link ) ?>" class="category-tile" style="<?php echo $style ?>">
			<div class="category-fader">
			</div>
			<h3>
				<?php echo get_sub_field( 'title' ); ?>
			</h3>
		</a>
		<?php
	}
}