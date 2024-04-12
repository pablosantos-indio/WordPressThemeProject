<?php
// wp will use this template to display a single post
get_header();

$authorId = get_post_field('post_author');

?>


<div class="container">
    <div class="search-container">
        <?php get_search_form(); ?>
    </div>
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

</div>

<?php

get_footer();

?>