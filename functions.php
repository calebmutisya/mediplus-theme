<?php
function mediplus_enqueue_scripts() {
    // Load style.css
    wp_enqueue_style('mediplus-style', get_stylesheet_uri());

    // Example: enqueue a JS file (optional)
    wp_enqueue_script(
        'mediplus-main',
        get_template_directory_uri() . '/main.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'mediplus_enqueue_scripts');

function mediplus_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mediplus-theme'),
    ));
}
add_action('after_setup_theme', 'mediplus_setup');

function mediplus_enqueue_styles() {
    // Enqueue Tailwind CSS
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri() . '/dist/output.css',
        array(),
        '1.0.0'
    );
    
    // Optional: Keep your existing theme styles
    wp_enqueue_style(
        'mediplus-style',
        get_stylesheet_uri(),
        array('tailwind-css'),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'mediplus_enqueue_styles');
?>