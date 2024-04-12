<?php
//this template will display the search results
get_header();



?>


<div class="container">

    <div class="search-container">
        <?php get_search_form(); ?>
    </div>

    <?php if (have_posts()) : ?>


        <h1 class="search-title">
            <?php printf(esc_html__('Showing search results for "%s"', 'text-domain'), '<span>' . get_search_query() . '</span>'); ?>
        </h1>

        <div class="card-grid-container">
            <?php while (have_posts()) : the_post(); ?>
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

        <?php get_template_part('template-parts/pagination'); ?>

    <?php else : ?>

        <div class="no-results-container">
            <div class="page-header">
                <h2 class="page-title"><?php esc_html_e('Nothing Found', 'text-domain'); ?></h2>
            </div>
            <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'text-domain'); ?></p>
        </div>

    <?php endif; ?>

</div>

<?php

get_footer();

?>