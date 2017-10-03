<?php

function is_userpro_activated() {
	global $userpro;
	
	if ( APDD_DEBUG_MODE ) {
		return false;
	}

	return isset( $userpro );
}