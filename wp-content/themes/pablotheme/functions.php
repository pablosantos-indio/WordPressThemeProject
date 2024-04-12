<?php
// functions.php - Funções e definições do tema.

function meu_tema_scripts() {
    // Carrega os estilos e scripts.
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('menu', get_template_directory_uri() . '/mobile-menu.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'meu_tema_scripts');

// Registrar localização do menu.
function meu_tema_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'meu_tema'),
        )
    );
}

add_action('init', 'meu_tema_menus');
