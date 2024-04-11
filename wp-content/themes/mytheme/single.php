<?php
    /**
     *  Templates for displaying single posts
     */
    get_header();
    $authorId = get_post_field('post_author');
?>

<div class="container">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <?php the_post_thumbnail(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="card-meta">
            <span class="card-date"><?= get_the_date(); ?></span>
            <span class="card-author">
                By <a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID', $authorId))); ?>">
                    <?= get_the_author_meta('display_name', $authorId); ?></a> 
            </span>
            <span class="card-taxonomy"> In <?php the_category(' '); ?></span>
        </div>
        <?php the_content(); ?>
    </article>
</div>

<?php get_footer(); ?>