<?php

require_once( APDD_FUNCTIONS_PATH . 'display_subheader.php' );
require_once( APDD_FUNCTIONS_PATH . 'display_page_featured_image.php' );
require_once( APDD_FUNCTIONS_PATH . 'display_page_regular_header.php' );
require_once( APDD_FUNCTIONS_PATH . 'category-mosaics/display_all.php' );
require_once( APDD_FUNCTIONS_PATH . 'category-mosaics/display_items.php' );

function display_category_mosaics() {
	display_subheader();

	if ( osetin_is_imaged_header( get_the_ID() ) ) {
		display_page_featured_image();
	}

	?>
	<div class="os-container">		
		<div class="page-w">
			<div class="page-content">
				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( osetin_is_regular_header( get_the_ID() ) ) {
						display_page_regular_header();
					} ?>
					<div class="category-tiles columns-3">
						<?php
						if ( osetin_get_field( 'which_categories_to_show' ) == 'all' ) {
							category_mosaics\display_all();
						} elseif ( osetin_have_rows( 'category_items' ) ) {
							category_mosaics\display_items();
						}
						?>
					</div>
				</article>
			</div>
		</div>	
	</div>
	<?php
	}