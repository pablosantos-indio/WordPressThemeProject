<?php

/**
 * Template Name: Landing Page
 * template-landingPage.php - Um modelo para páginas de destino.
 */

 ?>

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
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="menu-icon"></span>
        </button>
    </div>
    <div class="siteHeader__section">
        <h1><a class="site-title" href="<?php echo home_url("/"); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>

</header>

    <div class="content">
    
    </div>
    
<!-- footer.php - Define o rodapé em todas as páginas. -->
<footer>
    <div class="siteFooter__section" style="height: 30px;">
    </div>
</footer>
</body>

</html>