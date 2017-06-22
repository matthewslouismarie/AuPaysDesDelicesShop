<?php

function display_current_post( $paged ): void {
	// Looks like it doesn't do anything, maybe it only displays something with a certain theme config - LM
	echo osetin_get_hero_recipes_slider(); 
	osetin_show_featured_recipes_slider();

	$content_field_value = get_the_content();
	$bordered = osetin_get_field( 'show_featured_recipes_slider' ) ? false : true;
	$layout_type_for_index = osetin_get_settings_field( 'layout_type_for_index' );
	$sticky_posts = get_sticky_posts( $paged );
	$osetin_recipes_query = get_recipes_index_query( $paged ); 

	if ( osetin_get_field( 'content_location' ) == 'as_header' ) {
		display_content_located_as_header( $content_field_value );
	}
?>
	<div class="os-container">
		<?php echo build_index_posts( $layout_type_for_index, false, $osetin_recipes_query, $sticky_posts, false, $content_field_value, false, $bordered ) ?>
	</div>
<?php
}