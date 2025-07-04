<?php
// Enable support for featured images, custom logo, title tag
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// Register menu
function arrastay_register_menus() {
    register_nav_menus([
        'main_menu' => __('Main Menu', 'arrastay')
    ]);
}
add_action('after_setup_theme', 'arrastay_register_menus');

// Load CSS
function arrastay_enqueue_styles() {
    wp_enqueue_style('arrastay-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'arrastay_enqueue_styles');
