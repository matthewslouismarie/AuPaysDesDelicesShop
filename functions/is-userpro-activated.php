<?php

function is_userpro_activated() {
	global $userpro;
	return isset( $userpro );
}