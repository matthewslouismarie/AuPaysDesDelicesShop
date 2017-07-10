<?php
/**
 * Template Name: Set the user language to French (France)
 *
 * @package APDD_Shop
 * @since 1.0.0
 */

setcookie( APDD_COOKIE_LANGUAGE, 'fr_FR', strtotime( '+30 days' ), '/' );

wp_redirect( home_url() );

exit;