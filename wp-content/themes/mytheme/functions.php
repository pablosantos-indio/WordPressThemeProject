<?php

    function mytheme_enqueue_scripts() {
        wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), [] );
    }
    add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );

    function mytheme_menus()
    {
        register_nav_menus([
            'primary' => 'Primary menu',
            'footer' => 'Footer',
        ]);
    }
    add_action('init', 'mytheme_menus');

    function mytheme_support()
    {
        add_theme_support('post-thumbnails');
        /**
         *  let wordpress manage the document title
         */
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'mytheme_support');
