<?php
// Adds theme scripts and styles
function pablo_theme_enqueue_assets() {
    wp_enqueue_style('pablo-theme-style', get_stylesheet_uri());
    
    // Checks if jQuery is already enqueued to avoid redundancy
    if (!wp_script_is('jquery', 'enqueued')) {
        wp_enqueue_script('jquery');
    }
    
    wp_enqueue_script('pablo-theme-mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'pablo_theme_enqueue_assets');

// Registers theme menus
function pablo_theme_register_menus() {
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ]);
}
add_action('init', 'pablo_theme_register_menus');

// Adds support for theme title tag
function pablo_theme_add_support() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'pablo_theme_add_support');

// Customizes the "Read more" text for excerpts
function pablo_theme_excerpt_more($more) {
    global $post;
    return '... <a class="read-more" href="' . get_permalink($post->ID) . '">Read more...</a>';
}
add_filter('excerpt_more', 'pablo_theme_excerpt_more');
