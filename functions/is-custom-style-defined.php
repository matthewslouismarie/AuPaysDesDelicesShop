<?php

function is_custom_style_defined(): bool {
	return osetin_get_field( 'custom_css_styles', 'option' ) !== null;
}