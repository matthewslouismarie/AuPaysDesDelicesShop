<?php

function get_sticky_posts (int $paged ) {
	if ( $paged == 1) {
		return osetin_get_field( 'sticky_posts', false, false, true );
	} else {
		return null;
	}
}