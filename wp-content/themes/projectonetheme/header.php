<?php

// display header

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div class="hamburger-menu">
            <div class="hamburger-icon">
                &#9776;
            </div>
            <div class="container">
                <div class="title">
                    <h1>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                </div>
                <?php if (has_nav_menu('primary')) : ?>
                    <?php wp_nav_menu(
                        [
                            'theme_location' => 'primary',
                            'container' => 'nav',
                        ]
                    );
                    ?>
                <?php endif; ?>
            </div>
    </header>