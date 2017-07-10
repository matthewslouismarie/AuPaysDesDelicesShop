<?php
/**
 * Template Name: Set the user language to English (UK)
 *
 * @package APDD_Shop
 * @since 1.0.0
 */

setcookie( APDD_COOKIE_LANGUAGE, 'en_UK', strtotime( '+30 days' ), '/' );

wp_redirect( home_url() );