<?php // Opening PHP tag - nothing should be before this, not even whitespace

function get_logo_image_url() {
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