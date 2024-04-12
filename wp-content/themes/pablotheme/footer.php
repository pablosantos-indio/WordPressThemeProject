<!-- footer.php - Define o rodapé em todas as páginas. -->
<footer>
    <div class="siteFooter__section">
        <p class="siteFooter-bloginfo"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> </p>
        <nav class="footer-nav">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
    </div>
</footer>
</body>

</html>