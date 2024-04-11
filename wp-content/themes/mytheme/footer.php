<footer>
    <div class="container">
        <?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>
        <div>
            <?php 
                if(has_nav_menu('footer')) : 
                    wp_nav_menu(['theme_location' => 'footer']);
                endif;
            ?>
        </div>
</footer>

<?php wp_footer(); ?>
    
    </body>
</html>
