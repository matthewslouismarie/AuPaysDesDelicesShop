<?php

// Constants
// Maybe instead of define we could use "const". That would mean that
// APDD_FUNCTIONS_PATH, APDD_CLASSES_PATH and APDD_IMG_PATH would be hard-coded.
// Not that a big deal for 3 constants.
define( 'APDD_FUNCTIONS_PATH' , get_stylesheet_directory() . '/functions/' );
define( 'APDD_CLASSES_PATH' , get_stylesheet_directory() . '/classes/' );
define( 'APDD_IMG_PATH', get_stylesheet_directory_uri() . '/img/' );
define( 'APDD_COOKIE_LANGUAGE', 'user-language' );
define( 'APDD_TEXT_DOMAIN', 'apdd_shop' );
define( 'APDD_DEFAULT_LANGUAGE', 'en_UK' );
define( 'APDD_MOSAICS_OF_SUBCATEGORIES_LAYOUT', 'mosaics_of_subcategories' );

define( 'APDD_SWITCH_TO_LANGUAGE', array(
	'fr_FR' => 'passer-en-francais-france',
	'en_UK' => 'set-language-to-en_uk',
));

define( 'APDD_SUPPORTED_LANGUAGES', array(
	'fr_FR',
	'en_UK',
));

define( 'APDD_SLUGS_OF_L10N_CATEGORIES', array(
	'fr_fr',
	'en_uk',
));

define( 'L10N_CATEGORY_TO_LANGUAGE', array(
	'fr_fr' => 'fr_FR',
	'en_uk' => 'en_UK',
));

define( 'APDD_LIFESTYLE_SLUG', array(
	'fr_FR' => 'lifestyle-fr_fr',
	'en_UK' => 'lifestyle-en_uk',
));

define( 'APDD_STORIES_SLUG', array(
	'fr_FR' => 'stories-fr_FR',
	'en_UK' => 'stories-en_UK',
));

define( 'APDD_RECIPES_SLUG', array(
	'fr_FR' => 'recettes',
	'en_UK' => 'recipes',
));

define( 'APDD_L10N_EXCLUDED_CATEORIES', array(
	'fr_FR' => array( 'en_UK' ),
	'en_UK' => array( 'fr_FR' ),
));

define( 'APDD_IS_RUNTIME_TRANSLATION_ACTIVATED', array(
	'fr_FR' => true,
	'en_UK' => false,
));

define( 'APDD_BOOKMARKS_SLUG', array(
	'fr_FR' => 'mes-marque-pages',
	'en_UK' => 'my-bookmarks',
));

define( 'APDD_COMMENTS_SLUG', array(
	'fr_FR' => 'mes-commentaires',
	'en_UK' => 'my-comments',
));

define( 'APDD_MEAL_PLANS_SLUG', array(
	'fr_FR' => 'mes-meal-plans',
	'en_UK' => 'my-meal-plans',
));

define( 'APDD_REGISTER_SLUG', array(
	'fr_FR' => 'devenir-ambassadeur',
	'en_UK' => 'join-the-community',
));

define( 'APDD_HEADER_MENU_NAME', array(
	'fr_FR' => 'Header Menu (fr_FR)',
	'en_UK' => 'Header Menu (en_UK)',
));

if ( ! isset( $_COOKIE[APDD_COOKIE_LANGUAGE] ) || ! in_array( $_COOKIE[APDD_COOKIE_LANGUAGE], APDD_SUPPORTED_LANGUAGES ) ) {
	define( 'APDD_CURRENT_LANGUAGE', 'fr_FR' );
} else {
	define( 'APDD_CURRENT_LANGUAGE', $_COOKIE[APDD_COOKIE_LANGUAGE] );
}


// Shortcuts
// TODO: is it the right way to name them? Their name does not begin with the 
// package name, nor even with an abbreviation of it. This leaves room for 
// errors caused by multiple constants being defined with the same name.
// Besides, it does not make it obvious that this constant is defined and used
// by this particular theme.
// However, it makes writing them and especially reading the code much more
// easier and pleasant.
// It's probably okay for shortcuts not to have any prefix.
define( 'SWITCH_TO_FR_FR_SLUG', APDD_SWITCH_TO_LANGUAGE['fr_FR'] );
define( 'SWITCH_TO_EN_UK_SLUG', APDD_SWITCH_TO_LANGUAGE['en_UK'] );
define( 'HEADER_MENU_NAME', APDD_HEADER_MENU_NAME[APDD_CURRENT_LANGUAGE] );
define( 'REGISTER_SLUG', APDD_REGISTER_SLUG[APDD_CURRENT_LANGUAGE] );
define( 'MEAL_PLANS_SLUG', APDD_MEAL_PLANS_SLUG[APDD_CURRENT_LANGUAGE] );
define( 'COMMENTS_SLUG', APDD_COMMENTS_SLUG[APDD_CURRENT_LANGUAGE] );
define( 'BOOKMARKS_SLUG', APDD_BOOKMARKS_SLUG[APDD_CURRENT_LANGUAGE] );
define( 'IS_RUNTIME_TRANSLATION_ACTIVATED', APDD_IS_RUNTIME_TRANSLATION_ACTIVATED[APDD_CURRENT_LANGUAGE] );
define( 'L10N_EXCLUDED_CATEORIES', APDD_L10N_EXCLUDED_CATEORIES[APDD_CURRENT_LANGUAGE] );
define( 'RECIPES_SLUG', APDD_RECIPES_SLUG[APDD_CURRENT_LANGUAGE] );
define( 'STORIES_SLUG', APDD_STORIES_SLUG[APDD_CURRENT_LANGUAGE] );
define( 'LIFESTYLE_SLUG', APDD_LIFESTYLE_SLUG[APDD_CURRENT_LANGUAGE] );

// Localisation
require_once( APDD_FUNCTIONS_PATH . 'restrict-query-to-user-language.php' );
add_action( 'pre_get_posts', 'restrict_query_to_user_language', 10, 1 );

if ( true === IS_RUNTIME_TRANSLATION_ACTIVATED ) {
	require_once( APDD_CLASSES_PATH . 'class-dynamic-translator.php' );
	$dynamic_translator = new Dynamic_Translator( APDD_CURRENT_LANGUAGE );
	add_filter( 'gettext', array( $dynamic_translator, 'translate' ), 10, 3 );
}


add_filter('acf/settings/load_json', 'my_acf_json_load_point', 50, 1 );

function my_acf_json_load_point( $paths ) {


    // ads path depending on current languagee
	$current_language_json_folder = get_stylesheet_directory() . '/acf-json/' . APDD_CURRENT_LANGUAGE;
	$json_folder_exists_for_this_language = is_dir( $current_language_json_folder );
	if ( $json_folder_exists_for_this_language ) {
		unset( $paths );
    	$paths[0] = $current_language_json_folder;
	}
    
    
    // return
    return $paths;
}

// Netpune Style
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

function register_localised_index_sidebars() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Archives/Index Sidebar (fr_FR)', APDD_TEXT_DOMAIN ),
			'id'			=> 'sidebar-index-fr_fr',
			'description'   => __( 'This sidebar only gets displayed when the website is set in French (France). When that happens the default Archives/Index Sidebar is not displayed.', APDD_TEXT_DOMAIN ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>',
		)
	);
}


add_action( 'widgets_init', 'register_localised_index_sidebars' );

switch ( APDD_CURRENT_LANGUAGE ) {
	case 'fr_FR':
		define( 'CURRENT_SIDEBAR_INDEX', 'sidebar-index-fr_fr' );
		break;
	
	default:
		define( 'CURRENT_SIDEBAR_INDEX', 'sidebar-index' );
}