<?php

// Constants
define( 'APDD_FUNCTIONS_PATH' , get_stylesheet_directory() . '/functions/' );
define( 'APDD_CLASSES_PATH' , get_stylesheet_directory() . '/classes/' );
define( 'APDD_TEXTDOMAIN', 'aupaysdesdelices' );
define( 'APDD_IMG_PATH', get_stylesheet_directory_uri() . '/img/' );
define( 'APDD_SWITCH_TO_FR_FR_SLUG', 'set-language-to-fr_fr' );
define( 'APDD_SWITCH_TO_EN_UK_SLUG', 'set-language-to-en_uk' );
define( 'APDD_COOKIE_LANGUAGE', 'user-language' );

// Localisation
load_theme_textdomain( APDD_TEXTDOMAIN, get_stylesheet_directory() . '/languages' );

// Netpune Style
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );