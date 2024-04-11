<?php 
    /*
    * Template Name: Contact Page
    */
    get_header();
?>

<div class="container">
    <div class="banner">
        <span>
            <h1><?php the_title(); ?></h1>
        </span>
    </div>

    <?php the_content(); ?>
</div>

<?php
    get_footer();
?>