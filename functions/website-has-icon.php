<?php

function website_has_icon(): bool {
	return function_exists( 'wp_site_icon' );
}