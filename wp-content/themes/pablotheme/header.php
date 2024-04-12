<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="header-inner">
            <h1 class="site-title"><a href="<?php echo home_url("/"); ?>"><?php bloginfo('name'); ?></a></h1>
            <div>
            <nav class="main-nav">
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </nav>
            <div class="search-container">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>

