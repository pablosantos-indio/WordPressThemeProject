
<?php 

    /*
    * The main templete file
    * It is used to siplay a page when nothing more specific matches the query.
    */

    // echo 'Hello WP';
    get_header();
?>

<div class="container">
    <?php 
        if(is_category()){
            echo '<h1>' . single_cat_title('Viewings results for category: ', false) . '</h1>';
        } elseif(is_tag()){
            echo '<h1>' . single_tag_title('Viewings results for tag: ', false) . '</h1>';
        } elseif(is_author()){
            echo '<h1>Viewings results for author: ' . get_the_author() . '</h1>';
        }
    ?>

    <?php if (have_posts()) : ?>
        <div class="card-grid-container">
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div <?php post_class('card-body'); ?> id="post-<?php the_ID(); ?>">
                    <div class="card-img-top">
                        <?php the_post_thumbnail(); ?>
                    </div>
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