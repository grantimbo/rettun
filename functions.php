<?php
/*
 *  Author: Grant Imbo (grantimbo.com)
 *  Description: Site functions for rettun.com
 */

 // Add Theme Support
if (function_exists('add_theme_support')) {

    add_theme_support('menus');
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

// remove wp-admin menus
function remove_menus() {

    remove_menu_page( 'edit.php' ); // Post
    remove_menu_page( 'upload.php' ); // Post
    remove_menu_page( 'tools.php' ); // Tools
    remove_menu_page( 'plugins.php' ); // Tools
    remove_menu_page( 'edit-comments.php' ); // Comments

}


// Add links
function header_links() {
    wp_nav_menu( array(
        'container' => '',
        'items_wrap' => '%3$s',
        'theme_location' => 'header-menu',
        )
    );
}

function footer_links() {
    wp_nav_menu( array(
        'container' => '',
        'items_wrap' => '%3$s',
        'theme_location' => 'footer-menu',
        )
    );
}

function register_menus() {
    register_nav_menus( array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'rettun'), // Sidebar Navigation
        'footer-menu' => __('Footer Menu', 'rettun'), // Sidebar Navigation
    ));
}


/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'header_styles'); // Add Theme Stylesheet
add_action( 'admin_init', 'remove_menus' ); // Remove Admin Menus
add_action('init', 'register_menus'); // Add header and footer menus