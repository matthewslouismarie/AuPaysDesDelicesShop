<?php

function user_has_posts( $user_id ) {
	$user_has_posts_query = array(
	'post_type'      => 'osetin_recipe',
	'author'         => $user_id,
	'post_status'    => array( 'publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash' ),
	'posts_per_page' => 1
	);
	$user_has_posts = new WP_Query( $user_has_posts_query );
	if ( isset( $user_has_posts->posts ) && count( $user_has_posts->posts ) > 0 ) {
		return true;
	} else {
		return false;
	}
}