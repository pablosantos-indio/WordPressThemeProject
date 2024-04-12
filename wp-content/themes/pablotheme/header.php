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
        <div class="siteHeader__section">
        </div>
        <div class="siteHeader__section">
                <h1><a class="site-title" href="<?php echo home_url("/"); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <div class="siteHeader__section search-container">
            <?php get_search_form(); ?>
        </div>
    </header>
    <nav class="main-nav">
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </nav>