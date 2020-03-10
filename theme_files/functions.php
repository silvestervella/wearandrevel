<?php

add_action( 'after_setup_theme', 'rb_child_theme_setup' );
function rb_child_theme_setup() {
    load_child_theme_textdomain( 'oggi', get_stylesheet_directory() . '/languages' );
}


// Load HTML5 Blank Child styles
function wearandrevel_styles_child()
{
    // Register Child Styles
    wp_register_style('wearandrevel-child', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_register_style('child-all', get_stylesheet_directory_uri() . '/css/all.css', array(), '1.0', 'all');

    // Enqueue Child Styles
    wp_enqueue_style('wearandrevel-child'); 
    wp_enqueue_style('child-all');

    //Register Child Scripts
    //wp_register_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
    wp_register_script( 'theme-script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ) );
    
    // Enqueue Child Scripts
    //wp_enqueue_script( 'bootstrap' ); 
    wp_enqueue_script( 'theme-script' );   

}
add_action('wp_enqueue_scripts', 'wearandrevel_styles_child', 20); // Add Theme Child Stylesheet


function load_admin_style() {
    wp_register_style( 'admin_css', get_stylesheet_directory_uri() . '/css/admin-style.css',  array(), '1.0', 'all' );
    wp_enqueue_style( 'admin_css' );
 }
 add_action( 'admin_enqueue_scripts', 'load_admin_style' );

?>
