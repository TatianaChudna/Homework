<?php
add_action( 'wp_enqueue_scripts', 'my_theme_scripts');
function my_theme_scripts() {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js', array('app.js'));
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.min.css');
}

add_action( 'after_setup_theme', 'my_theme_register_nav_menu' );
function my_theme_register_nav_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {

    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}