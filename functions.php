<?php

add_action( 'wp_enqueue_scripts', 'ap_theme_enqueue_styles' );
function ap_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
    wp_enqueue_style( 'child-css-style', get_stylesheet_directory_uri() . '/css/style.css', array('parent-style'));
}