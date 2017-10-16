<?php

require_once( APDD_FUNCTIONS_PATH . '/user-has-posts.php' );
require_once( APDD_FUNCTIONS_PATH . '/page-exists.php' );
require_once( APDD_FUNCTIONS_PATH . '/get-page-title-from-slug.php' );

// TODO: new function to replace __ to translate dynamically
function display_body_top_bar_logged_in_user_section() {
	global $userpro;
	$os_current_user = wp_get_current_user();
	
	?>

	<li class="item">
		<span>
			<?= __("Logged in as", 'osetin'); ?> <strong><?= $os_current_user->display_name; ?></strong>
		</span>
	</li>

	<li class="item">
		<a class="link" href="<?= $userpro->permalink( get_current_user_id() ); ?>">
			<i class="os-icon os-icon-head"></i>
			<span><?php _e('My Profile', 'osetin') ?></span>
		</a>
	</li>

	<?php if ( user_has_posts( get_current_user_id() ) ) : ?>
	<li class="item">
		<a class="link" href="<?= get_author_posts_url( get_current_user_id() ); ?>">
			<i class="os-icon os-icon-home-03"></i>
			<span><?= __( 'My Recipes' ) ?></span>
		</a>
	</li>  
	<?php endif; ?>

	<?php if ( page_exists( BOOKMARKS_SLUG ) ) : ?>
	<li class="item">
		<a class="link" href="<?= get_page_url_by_slug( BOOKMARKS_SLUG ) ?>">
			<i class="os-icon os-icon-ui-33"></i>
			<span><?= get_page_title_from_slug( BOOKMARKS_SLUG ) ?></span>
		</a>
	</li>
	<?php endif; ?>

	<?php if ( page_exists( COMMENTS_SLUG ) ) : ?>
	<li class="item">
		<a class="link" href="<?= get_page_url_by_slug( COMMENTS_SLUG ) ?>">
			<span><?= get_page_title_from_slug( COMMENTS_SLUG ) ?></span>
		</a>
	</li>
	<?php endif; ?>

	<?php if ( page_exists( MEAL_PLANS_SLUG ) ) : ?>
	<li class="item">
		<a class="link" href="<?= get_page_url_by_slug( MEAL_PLANS_SLUG ) ?>">
			<i class="os-icon os-icon-ui-33"></i>
			<span><?= get_page_title_from_slug( MEAL_PLANS_SLUG ) ?></span>
		</a>
	</li>
	<?php endif; ?>

	<li class="item">
		<a class="link" href="<?= wp_logout_url(); ?>">
			<i class="os-icon os-icon-signs-12"></i>
			<span>
				<?php _e('Logout', 'osetin') ?>
			</span>
		</a>
	</li>

	<?php
}