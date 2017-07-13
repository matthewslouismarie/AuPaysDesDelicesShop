<?php

/**
 * Displays a button which can be clicked to register on the website.
 * 
 * @since 1.0.0
 */
function display_join_the_community_button() {
	?>
	<div class="os-container top-bar-w">
		<div class="top-bar bordered join-the-community-button-container">
			<a class="popup-register join-the-community-button" href=""><?= __( 'Join the community', APDD_TEXT_DOMAIN ) ?></a>
		</div>
	</div>
	<?php
}