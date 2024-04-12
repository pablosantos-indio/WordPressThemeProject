<?php


// get the stylesheet for the theme
function projectonetheme_enqueue_scripts()
{
    wp_enqueue_style('projectonetheme-style', get_stylesheet_uri(), []);
}
// hook to call the function
add_action('wp_enqueue_scripts', 'projectonetheme_enqueue_scripts');


// register the menus
function projectonetheme_menus()
{
    register_nav_menus([
        'primary' => 'Primary menu',
        'footer' => 'Footer',
    ]);
}
add_action('init', 'projectonetheme_menus');

function mytheme_support()
{
    // add support for a title to be managed by wp
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mytheme_support');

// add a "read more" link to the end of the excerpt
function new_excerpt_more($more)
{
    global $post;
    return '... <a class="read-more" href="' . get_permalink($post->ID) . '">Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// add jquery for the mobile menu
function theme_scripts()
{
    wp_enqueue_script('jquery');

    wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
