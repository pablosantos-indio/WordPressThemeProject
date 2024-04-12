<?php get_header(); ?>

<div class="container">
    <div class="search-container"><?php get_search_form(); ?></div>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>
