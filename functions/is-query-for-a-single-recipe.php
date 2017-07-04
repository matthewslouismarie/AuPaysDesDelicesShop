<?php

function is_query_for_a_single_recipe(): bool {
	return is_singular( 'osetin_recipe' ) === 'yes';
}