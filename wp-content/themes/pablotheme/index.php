<?php
// index.php - Página inicial padrão para a listagem de posts.
get_header(); ?>

<div class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read More...</a>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>