<?php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

function my_theme_enqueue_scripts() {
    wp_enqueue_style('myTheme-style', get_stylesheet_uri(), []);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');