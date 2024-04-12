<?php
// get the footer. Set it to include the blogname and current datw, as well as the footer menu
?>

<footer>
    <div class="container">
        <div class="blog-name">
            <?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>
        </div>
        <div>
            <?php if (has_nav_menu('footer')) : ?>
                <?php wp_nav_menu(['theme_location' => 'footer']); ?>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>