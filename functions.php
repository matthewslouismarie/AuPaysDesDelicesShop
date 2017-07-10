<?php

// Constants
define( 'APDD_FUNCTIONS_PATH' , get_stylesheet_directory() . '/functions/' );
define( 'APDD_CLASSES_PATH' , get_stylesheet_directory() . '/classes/' );
define( 'APDD_TEXTDOMAIN', 'aupaysdesdelices' );
define( 'APDD_IMG_PATH', get_stylesheet_directory_uri() . '/img/' );
define( 'APDD_SWITCH_TO_FR_FR_SLUG', 'set-language-to-fr_fr' );
define( 'APDD_SWITCH_TO_EN_UK_SLUG', 'set-language-to-en_uk' );
define( 'APDD_COOKIE_LANGUAGE', 'user-language' );

$supported_languages = array(
	'fr_FR',
	'en_UK',
);
if ( ! isset( $_COOKIE[APDD_COOKIE_LANGUAGE] ) || ! in_array( $_COOKIE[APDD_COOKIE_LANGUAGE], $supported_languages) ) {
	setcookie( APDD_COOKIE_LANGUAGE, 'fr_FR', strtotime( '+30 days' ), '/' );
}
define( 'APDD_CURRENT_LANGUAGE', $_COOKIE[APDD_COOKIE_LANGUAGE] );

switch ( APDD_CURRENT_LANGUAGE ) {
	case 'fr_FR':
		define( 'APDD_L10N_EXCLUDED_CATEGORIES', 'en_UK' );
		define( 'APDD_L10N_TRANSLATIONS_PATH', get_stylesheet_directory() . '/languages/fr_FR.php' );
		define( 'APDD_BOOKMARKS_SLUG', 'mes-marque-pages' );
		define( 'APDD_COMMENTS_SLUG', 'mes-commentaires' );
		define( 'APDD_MEAL_PLANS_SLUG', 'mes-meal-plans' );
		define( 'APDD_REGISTER_SLUG', 'join-the-community' );
		break;
	
	case 'en_UK':
		define( 'APDD_L10N_EXCLUDED_CATEGORIES', 'fr_FR' );
		define( 'APDD_BOOKMARKS_SLUG', 'my-bookmarks' );
 		define( 'APDD_COMMENTS_SLUG', 'my-comments' );
		define( 'APDD_MEAL_PLANS_SLUG', 'my-meal-plans' );
		define( 'APDD_REGISTER_SLUG', 'devenir-ambassadeur' );
		break;
	
	default:
		throw new exception;
}

// Localisation
load_theme_textdomain( APDD_TEXTDOMAIN, get_stylesheet_directory() . '/languages' );

require_once( APDD_FUNCTIONS_PATH . 'restrict-query-to-user-language.php' );
add_action( 'pre_get_posts', 'restrict_query_to_user_language', 10, 1 );

if ( defined( 'APDD_L10N_TRANSLATIONS_PATH' ) ) {
	require_once( APDD_FUNCTIONS_PATH . 'runtime-translate.php' );
	add_filter( 'gettext', 'runtime_translate', 10, 3 );
}

// Netpune Style
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );