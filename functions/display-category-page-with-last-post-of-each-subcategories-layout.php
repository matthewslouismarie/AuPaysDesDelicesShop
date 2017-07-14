<?php
require_once( APDD_FUNCTIONS_PATH . 'display-top-bar.php' );
require_once( APDD_FUNCTIONS_PATH . 'get-page-w-additional-classes.php' );
require_once( APDD_FUNCTIONS_PATH . 'is-regular-header.php' );
require_once( APDD_FUNCTIONS_PATH . 'display-regular-header.php' );
require_once( APDD_FUNCTIONS_PATH . 'has-sub-title.php' );
require_once( APDD_FUNCTIONS_PATH . 'display-sub-title.php' );
require_once( APDD_FUNCTIONS_PATH . 'should-load-up-the-comments-template.php' );
require_once( APDD_FUNCTIONS_PATH . 'display-sidebar-index.php' );
require_once( APDD_FUNCTIONS_PATH . 'is-sidebar-index-active.php' );
require_once( APDD_FUNCTIONS_PATH . 'custom-build-index-posts.php' );

function display_category_page_with_last_post_of_each_subcategories_layout() {
	$lifestyle_direct_children = get_categories( array(
	'parent' => get_query_var( 'cat' ),
) );

get_header();

display_top_bar( 0 );
?>

<div class="os-container">
	<div class="page-w <?php echo esc_attr( get_page_w_additional_classes() ) ?>">
		<div class="page-content">
			<?php foreach ( $lifestyle_direct_children as $child ) : ?>
				<h2>
					<a href="<?= get_category_link( $child->term_id ) ?>">
						<?= $child->name ?>
					</a>
				</h2>
				<?php
				$args = array(
				'posts_per_page' => 1, // we need only the latest post, so get that post only
				'cat' => $child->term_id // Use the category id, can also replace with category_name which uses category slug
				);
				$query = new WP_Query( $args );
				?>
    			<?php echo custom_build_index_posts( false, $layout_type_for_index, false, $query, false, $header_arr ); ?>
			<?php endforeach ?>
		</div>
		<?php if ( is_sidebar_index_active() ) display_sidebar_index() ?>
	</div>
</div>

<?php

get_footer();
}