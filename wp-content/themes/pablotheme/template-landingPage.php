<?php

/**
 * Template Name: Landing Page
 * template-landingPage.php - Um modelo para páginas de destino.
 */

get_header(); ?>

<div class="container">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>

<?php wp_footer(); ?>
</body>

</html>