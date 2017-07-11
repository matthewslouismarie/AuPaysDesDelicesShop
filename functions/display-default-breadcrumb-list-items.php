<?php

require_once( APDD_FUNCTIONS_PATH . 'breadcrumb/display-category-hierarchy.php' );

function display_default_breadcrumb_list_items() {
?>
<?php if ( is_home() ) : ?>
	<li>
		<?= esc_html__( 'Home', 'osetin' ) ?>
	</li>
<?php elseif ( is_category() ) : ?>
	<li>
		<a href="<?= site_url() ?>">
			<?= esc_html__( 'Home', 'osetin' ) ?>
		</a>
	</li>
	<?php
	$category_hierarchy = get_category_hierarchy( get_query_var( 'cat' ) );
	display_category_hierarchy( $category_hierarchy );
	echo '<li>' . get_cat_name( get_query_var( 'cat' ) ) . '</li>'; ?>
<?php elseif ( is_archive() ) : ?>
	<li>
		<a href="<?= site_url() ?>">
			<?= esc_html__( 'Home', 'osetin' ) ?>
		</a>
	</li>
	<li><?= get_the_archive_title() ?></li>
<?php elseif ( ( get_post_type() == 'osetin_meal_plan' ) && get_user_meal_plans_permalink() ) : ?>
	<li>
		<a href="<?= site_url() ?>">
			<?= esc_html__( 'Home', 'osetin' ) ?>
		</a>
	</li>
	<li>
		<a href="' . get_user_meal_plans_permalink() . '">
			<?php esc_html__( 'My Meal Plans', 'osetin' )  ?>
		</a>
	</li>
	<li>
		<?= get_the_title() ?>
	</li>
<?php else : ?>
	<li>
		<a href="<?= site_url() ?>">
			<?= esc_html__( 'Home', 'osetin' ) ?>
		</a>
	</li>
	<?php
	$categories = get_the_category();
	if ( ! empty( $categories ) ) {
		$category = $categories[0];
		echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( esc_html__( "View all posts in %s", 'osetin' ), $category->name ) ) . '">' . $category->cat_name . '</a></li>';
	}
	?>
	<li>
		<?= get_the_title() ?>
	</li>
<?php endif; ?>
<?php
}