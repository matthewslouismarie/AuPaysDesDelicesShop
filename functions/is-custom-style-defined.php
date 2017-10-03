<?php

function is_custom_style_defined(): bool {
	if ( APDD_DEBUG_MODE ) {
		return false;
	}
	return osetin_get_field( 'custom_css_styles', 'option' ) !== null;
}