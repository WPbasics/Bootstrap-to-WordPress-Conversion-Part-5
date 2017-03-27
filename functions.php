<?php

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

// Theme Setup

function wpbasics_theme_setup(){
    // Nav Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

    // Add Featured Image Support
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'wpbasics_theme_setup');

//Excerpt Length Control.
function set_excerpt_length() {
    return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');