<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
function my_theme_enqueue_custom_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 'my_theme_enqueue_custom_styles' );