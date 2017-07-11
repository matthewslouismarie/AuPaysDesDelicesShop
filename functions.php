<?php

// Constants
define( 'APDD_FUNCTIONS_PATH' , get_stylesheet_directory() . '/functions/' );
define( 'APDD_CLASSES_PATH' , get_stylesheet_directory() . '/classes/' );
define( 'APDD_IMG_PATH', get_stylesheet_directory_uri() . '/img/' );
define( 'APDD_SWITCH_TO_FR_FR_SLUG', 'set-language-to-fr_fr' );
define( 'APDD_SWITCH_TO_EN_UK_SLUG', 'set-language-to-en_uk' );
define( 'APDD_COOKIE_LANGUAGE', 'user-language' );

define( 'APDD_SUPPORTED_LANGUAGES', array(
	'fr_FR',
	'en_UK',
));

define( 'APDD_SLUGS_OF_L10N_CATEGORIES', array(
	'fr_fr',
	'en_uk',
));

if ( ! isset( $_COOKIE[APDD_COOKIE_LANGUAGE] ) || ! in_array( $_COOKIE[APDD_COOKIE_LANGUAGE], APDD_SUPPORTED_LANGUAGES ) ) {
	define( 'APDD_CURRENT_LANGUAGE', 'fr_FR' );
} else {
	define( 'APDD_CURRENT_LANGUAGE', $_COOKIE[APDD_COOKIE_LANGUAGE] );
}

switch ( APDD_CURRENT_LANGUAGE ) {
	case 'fr_FR':
		define( 'APDD_L10N_EXCLUDED_CATEGORIES', 'en_UK' );
		define( 'APDD_IS_RUNTIME_TRANSLATION_ACTIVATED', true );
		define( 'APDD_BOOKMARKS_SLUG', 'mes-marque-pages' );
		define( 'APDD_COMMENTS_SLUG', 'mes-commentaires' );
		define( 'APDD_MEAL_PLANS_SLUG', 'mes-meal-plans' );
		define( 'APDD_REGISTER_SLUG', 'join-the-community' );
		define( 'APDD_HEADER_MENU_NAME', 'Header Menu (fr_FR)');
		break;
	
	case 'en_UK':
		define( 'APDD_L10N_EXCLUDED_CATEGORIES', 'fr_FR' );
		define( 'APDD_IS_RUNTIME_TRANSLATION_ACTIVATED', false );
		define( 'APDD_BOOKMARKS_SLUG', 'my-bookmarks' );
 		define( 'APDD_COMMENTS_SLUG', 'my-comments' );
		define( 'APDD_MEAL_PLANS_SLUG', 'my-meal-plans' );
		define( 'APDD_REGISTER_SLUG', 'devenir-ambassadeur' );
		define( 'APDD_HEADER_MENU_NAME', 'Header Menu (en_UK)');
		break;
	
	default:
		throw new exception;
}

// Localisation
require_once( APDD_FUNCTIONS_PATH . 'restrict-query-to-user-language.php' );
add_action( 'pre_get_posts', 'restrict_query_to_user_language', 10, 1 );

if ( true === APDD_IS_RUNTIME_TRANSLATION_ACTIVATED ) {
	require_once( APDD_FUNCTIONS_PATH . 'runtime-translate.php' );
	add_filter( 'gettext', 'runtime_translate', 10, 3 );
}

// Netpune Style
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );