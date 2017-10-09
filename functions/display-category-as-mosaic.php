<?php

function display_category_as_mosaic( WP_Term $category ) {
	
	$tile_background = osetin_get_field( 'category_tile_bg', "category_{$category->cat_ID}" );
	$style = osetin_get_css_prop( 'background-image', $tile_background, false, 'background-repeat: repeat; background-position: center center;  background-size: cover;');
?>
<a href="<?= esc_attr( get_category_link( $category ) ) ?>" class="category-tile" style="<?php echo $style ?>">
	<div class="category-fader">
	</div>
	<h3>
		<?= $category->name ?>
	</h3>
</a>
<?php
}