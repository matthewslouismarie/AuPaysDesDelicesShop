<?php
/**
 * Template Name: Set the user language to French (France)
 *
 * @package Set Language to French (France)
 * @since 1.0.0
 */

setcookie( APDD_COOKIE_LANGUAGE, 'fr_FR', strtotime( '+30 days' ), '/' );

wp_redirect( home_url() );