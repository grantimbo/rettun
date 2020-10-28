<footer class="pt-3 pb-3">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-6">
                <a href="index.html" class="d-inline">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="title" class="logo mb-3" width="120">
                </a>
            </div>
            <div class="col-lg-6 copyright">
                <p>Copyright @ <?php echo date('Y'); ?> - Rettun LLC. All Rights Reserved</p>
                <div class="privacy-links">
                    <?php footer_links(); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>