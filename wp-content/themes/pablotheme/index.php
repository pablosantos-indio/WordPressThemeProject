<?php
// index.php - Página inicial padrão para a listagem de posts.
get_header(); ?>

    <div class="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h6><?php the_time('F j, Y'); ?> By <a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?= get_the_author_meta('display_name'); ?></a></h6>
        
            <h4><?php the_title(); ?></h4>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read More...</a>
            <hr />
        <?php endwhile; ?>
        <?php else : ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    
    </div>

    <?php get_template_part('template-parts/pagination'); ?>  
     
<?php get_footer(); ?>