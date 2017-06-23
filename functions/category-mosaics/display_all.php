<?php

namespace category_mosaics;

function display_all() {
	$categories = get_categories( array( 'type' => 'osetin_recipe' ) );

	foreach ( $categories as $category ) {
		$category_bg_image_url = osetin_get_field('category_tile_bg', "category_{$category->cat_ID}");
		?>
		<a href="<?php echo get_category_link($category->cat_ID); ?>" class="category-tile" style="<?php echo osetin_get_css_prop('background-image', $category_bg_image_url, false, 'background-repeat: repeat; background-position: center center;  background-size: cover;'); ?>">
			<div class="category-fader">
			</div>
			<div class="category-recipes-count">
				<?php echo esc_html($category->category_count).' '.esc_html__('Recipes', 'osetin'); ?>
			</div>
			<h3>
				<?php echo esc_html($category->cat_name); ?>
			</h3>
		</a>
		<?php
	}
}