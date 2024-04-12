<?php
// functions.php - Funções e definições do tema.
function mytheme_enqueue_styles() {
    // Carrega os estilos do tema.
    wp_enqueue_style('mytheme-style', get_stylesheet_uri(), []);
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_menus() {
    // Registra os menus do tema.
    register_nav_menus([
            'primary' => 'Primary Menu',
            'footer' => 'Footer Menu',
    ]);
}
add_action('init', 'mytheme_menus');

function theme_scripts() {
    wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/mobile-menu.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
