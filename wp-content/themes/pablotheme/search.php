<?php get_header(); ?>
<div class="content">
    <h2>Showing Search Results for: "<?php echo get_search_query(); ?>"</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read More...</a>
        <?php endwhile;
    else : ?>
        <p>No search results found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>