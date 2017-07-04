<?php

function is_fixed_header_activated(): bool {
	return osetin_get_field( 'use_fixed_header', 'option' );
}