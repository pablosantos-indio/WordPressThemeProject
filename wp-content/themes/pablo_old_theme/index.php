<?php get_header(); ?>

<div class="container">
    <div class="search-container"><?php get_search_form(); ?></div>

    <?php if (have_posts()) : ?>
        <div class="card-grid-container">
            <?php while (have_posts()) : the_post(); ?>
                <div <?php post_class('card-body'); ?> id="post-<?php the_ID(); ?>">
                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="card-meta">
                        <span class="card-date"><?php echo get_the_date(); ?></span>
                        <span class="card-author">By <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo get_the_author_meta('display_name'); ?></a></span>
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

<?php get_footer(); ?>
