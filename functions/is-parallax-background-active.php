<?php

function is_parallax_background_active(): bool {
	return osetin_get_settings_field( 'parallax_background' ) === 'yes';
}