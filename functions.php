<?php // Opening PHP tag - nothing should be before this, not even whitespace
add_action( 'wp_enqueue_scripts', 'neptune_child_enqueue_styles' );

function neptune_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}