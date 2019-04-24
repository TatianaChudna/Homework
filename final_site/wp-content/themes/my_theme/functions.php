<?php
add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'my_theme_scripts');
function my_theme_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js', array('app.js'));
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.min.css');
}

add_action('after_setup_theme', 'my_theme_register_nav_menus') ;
function my_theme_register_nav_menus()
{
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
        'footer menu' => 'Connect Menu',
        'social menu' => 'Social Menu'
    ));
};
