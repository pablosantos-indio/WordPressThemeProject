<?php
    /**
     * Header file
     */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/cat-facts-high-resolution-logo.png" width="135" alt="<?php bloginfo('name'); ?>"></a>
            </div>
            <?php if(has_nav_menu('primary')): ?>
                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => 'nav',
                ]); ?>
            <? endif; ?>
        </div>
    </header>