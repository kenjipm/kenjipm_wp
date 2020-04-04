<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'gutenbook-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.4.1', 'all' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'gutenbook-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version'), 'all'
    );
}