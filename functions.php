<?php
/*
 *  Author: Grant Imbo (grantimbo.com)
 *  Description: Site functions for rettun.com
 */

 // Add Theme Support
if (function_exists('add_theme_support')) {

    // Add thumbnail
    add_theme_support('post-thumbnails');
}



// Load scripts (header.php)
function header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_deregister_script('jquery'); // Deregister WordPress jQuery
        
        wp_register_script('bootstraBundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.0.0'); // Site Functionalities
        wp_enqueue_script('bootstraBundle'); // Enqueue it!

        wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0'); // Site Functionalities
        wp_enqueue_script('scripts'); // Enqueue it!

    }

}


// Load styles
function header_styles() {

    wp_register_style('bootstrapCss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.0', 'all');
    wp_enqueue_style('bootstrapCss'); // Enqueue it!

    wp_register_style('fontAwesome', get_template_directory_uri() . '/img/icons/font-awesome/css/all.min.css', array(), '5.13.1', 'all');
    wp_enqueue_style('fontAwesome'); // Enqueue it!

    wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('styles'); // Enqueue it!

}




/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'header_styles'); // Add Theme Stylesheet