<?php
/**
 * ROI Labs Theme Functions - Simplified Version
 * 
 * @package ROILabs
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function roilabs_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'roilabs'),
    ));
}
add_action('after_setup_theme', 'roilabs_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function roilabs_enqueue_scripts() {
    wp_enqueue_style('roilabs-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'roilabs_enqueue_scripts');

/**
 * Get custom logo or site title
 */
function roilabs_get_logo() {
    if (has_custom_logo()) {
        return get_custom_logo();
    } else {
        return '<h1 class="site-title"><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
    }
}

/**
 * Display navigation menu
 */
function roilabs_navigation_menu($location = 'primary') {
    if (has_nav_menu($location)) {
        wp_nav_menu(array(
            'theme_location' => $location,
            'container' => false,
            'menu_class' => 'nav-menu',
            'fallback_cb' => false,
        ));
    }
}