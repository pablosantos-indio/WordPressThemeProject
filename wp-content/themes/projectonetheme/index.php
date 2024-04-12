<?php

get_header();

?>

<div class="container">

    <div class="search-container">
        <?php get_search_form(); ?>
    </div>
    <!-- Loop to display blog posts -->
    <?php if (have_posts()) : ?>
        <div class="card-grid-container">

            <?php while (have_posts()) : ?>
                <!-- sets the pointer to the current post in the array -->
                <?php the_post(); ?>
                <div <?php post_class('card-body'); ?> id="post-<?php the_ID(); ?>">
                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="card-meta">
                        <span class="card-date"><?= get_the_date(); ?></span>
                        <span class="card-author">By <a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?= get_the_author_meta('display_name'); ?></a> </span>
                    </div>
                    <div class="card-text"><?php the_excerpt(); ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

    <?php get_template_part('template-parts/pagination'); ?>
</div>

<?php

get_footer();

?>