<?php

function display_body_top_bar_visitor_section() {
?>

<li class="item">
	<a class="link" href="#" class="popup-login">
		<?php _e('Login', 'osetin'); ?>
	</a>
</li>

<li class="item">
	<a class="link" href="<?= get_page_url_by_slug( 'devenir-ambassadeur' ) ?>">
		<?= __( 'Join the community', APDD_TEXT_DOMAIN ) ?>
	</a>
</li>

<?php
}