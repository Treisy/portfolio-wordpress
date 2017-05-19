<?php

// Adding styles
function portfolio_styles(){
    // Register styles
    wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '7.0.0');
    wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.7.0');
    wp_register_style('main', get_template_directory_uri(). '/css/main.css', array('normalize'), '1.0');

    // Call styles
    wp_enqueue_style('normalize');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'portfolio_styles');

// Adding menus
function portfolio_menus() {
    register_nav_menus(array(
        'header-menu' => _('Header Menu', portfolio),
        'social-menu' => _('Social Menu', portfolio)
    ));
}

add_action('init', portfolio_menus);

?>