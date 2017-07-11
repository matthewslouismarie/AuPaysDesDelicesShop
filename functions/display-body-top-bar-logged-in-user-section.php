<?php

require_once( APDD_FUNCTIONS_PATH . '/user-has-posts.php' );
require_once( APDD_FUNCTIONS_PATH . '/page-exists.php' );
require_once( APDD_FUNCTIONS_PATH . '/get-page-title-from-slug.php' );

// TODO: new function to replace __ to translate dynamically
function display_body_top_bar_logged_in_user_section() {
	global $userpro;
	$os_current_user = wp_get_current_user();
	
	?>

	<li>
		<span>
			<?= __("Logged in as", 'osetin'); ?> <strong><?= $os_current_user->display_name; ?></strong>
		</span>
	</li>

	<li>
		<a href="<?= $userpro->permalink( get_current_user_id() ); ?>">
			<i class="os-icon os-icon-head"></i>
			<span><?php _e('My Profile', 'osetin') ?></span>
		</a>
	</li>

	<?php if ( user_has_posts( get_current_user_id() ) ) : ?>
	<li>
		<a href="<?= get_author_posts_url( get_current_user_id() ); ?>">
			<i class="os-icon os-icon-home-03"></i>
			<span><?= __( 'My Recipes' ) ?></span>
		</a>
	</li>  
	<?php endif; ?>

	<?php if ( page_exists( APDD_BOOKMARKS_SLUG ) ) : ?>
	<li>
		<a href="<?= get_page_url_by_slug( APDD_BOOKMARKS_SLUG ) ?>">
			<i class="os-icon os-icon-ui-33"></i>
			<span><?= get_page_title_from_slug( APDD_BOOKMARKS_SLUG ) ?></span>
		</a>
	</li>
	<?php endif; ?>

	<?php if ( page_exists( APDD_COMMENTS_SLUG ) ) : ?>
	<li>
		<a href="<?= get_page_url_by_slug( APDD_COMMENTS_SLUG ) ?>">
			<span><?= get_page_title_from_slug( APDD_COMMENTS_SLUG ) ?></span>
		</a>
	</li>
	<?php endif; ?>

	<?php if ( page_exists( APDD_MEAL_PLANS_SLUG ) ) : ?>
	<li>
		<a href="<?= get_page_url_by_slug( APDD_MEAL_PLANS_SLUG ) ?>">
			<i class="os-icon os-icon-ui-33"></i>
			<span><?= get_page_title_from_slug( APDD_MEAL_PLANS_SLUG ) ?></span>
		</a>
	</li>
	<?php endif; ?>

	<li>
		<a href="<?= wp_logout_url(); ?>">
			<i class="os-icon os-icon-signs-12"></i>
			<span>
				<?php _e('Logout', 'osetin') ?>
			</span>
		</a>
	</li>

	<?php
}