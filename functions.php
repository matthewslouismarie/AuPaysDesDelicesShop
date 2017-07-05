<?php

// Constants
define( 'FUNCTIONS_PATH' , get_stylesheet_directory() . '/functions/' );
define( 'CLASSES_PATH' , get_stylesheet_directory() . '/classes/' );
define( 'USP_CORE_CONSTANTS_AND_FUNCTIONS_PATH', get_stylesheet_directory() . '/user-submitted-posts/definitions/core-constants-and-functions.php' );
define( 'USP_FORM_DISPLAYING_FUNCTIONS_PATH', get_stylesheet_directory() . '/user-submitted-posts/definitions/form-displaying-functions.php' );
define( 'USP_FORM_PROCESSING_FUNCTIONS_PATH', get_stylesheet_directory() . '/user-submitted-posts/definitions/form-processing-functions.php' );
define( 'USP_PROCESS_FORM_IF_ANY_PATH', get_stylesheet_directory() . '/user-submitted-posts/scripts/process-form-if-any.php' );
define( 'USP_INIT_PATH', get_stylesheet_directory() . '/user-submitted-posts/scripts/init.php' );
define( 'USP_REQUEST_PROCESSING_FUNCTIONS_PATH', get_stylesheet_directory() . '/user-submitted-posts/definitions/request-processing-functions.php' );
define( 'USP_FORM_EXTRACTING_FUNCTIONS_PATH', get_stylesheet_directory() . '/user-submitted-posts/definitions/form-extracting-functions.php' );
define( 'USP_DEFINITIONS_PATH', get_stylesheet_directory() . '/user-submitted-posts/definitions/' );
define( 'APDD_TEXTDOMAIN', 'aupaysdesdelices' );
define( 'APDD_IMG_PATH', get_stylesheet_directory_uri() . '/img/' );
define( 'APDD_SWITCH_TO_FR_FR_SLUG', 'set-language-to-fr_fr' );
define( 'APDD_SWITCH_TO_EN_UK_SLUG', 'set-language-to-en_uk' );
define( 'APDD_COOKIE_LANGUAGE', 'user-language' );

load_theme_textdomain( APDD_TEXTDOMAIN, get_stylesheet_directory() . '/languages' );

//require_once( USP_INIT_PATH );
//require_once( USP_PROCESS_FORM_IF_ANY_PATH );

function get_logo_image_url() {
    return get_stylesheet_directory_uri() . '/img/logo.png';
    if ( is_home() ) {
        return get_stylesheet_directory_uri() . '/img/logo-index.jpg';
    }
    elseif ( is_page ( 'categories' ) ) {
        return get_stylesheet_directory_uri() . '/img/logo-categories.jpg';
    }
    elseif ( is_category ( 'lifestyle' ) ) {
        return get_stylesheet_directory_uri() . '/img/logo-lifestyle.jpg';
    }
    elseif ( is_page ( 'devenir-ambassadeur' ) ) {
        return get_stylesheet_directory_uri() . '/img/logo-devenir-ambassadeur.jpg';
    }
    else {
        return get_stylesheet_directory_uri() . '/img/logo-default.jpg';
    }
}

add_action( 'wp_enqueue_scripts', 'neptune_child_enqueue_styles' );

function neptune_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}