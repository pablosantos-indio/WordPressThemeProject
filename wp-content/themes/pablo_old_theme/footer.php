<footer>
    <div class="container">
        <div class="blog-name">
            <?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>
        </div>
        <div class="footer-nav">
            <?php if (has_nav_menu('footer')) : ?>
                <?php wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'footer-menu']); ?>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
