<?php get_header(); ?>
<div class="content">
    <?php while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>