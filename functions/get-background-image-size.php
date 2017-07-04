<?php

// can return 'small'
function get_background_image_size(): string {
	return osetin_get_settings_field('background_image_size');
}