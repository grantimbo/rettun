<footer class="pt-3 pb-3">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-6 text-left">
                <a href="index.html" class="mb-2 d-inline">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="title" class="logo" width="120">
                </a>
            </div>
            <div class="col-lg-6 copyright text-right">
                <p>Copyright @ <?php echo date('Y'); ?> - Rettun LLC. All Rights Reserved</p>
                <div class="privacy-links">
                    <a href="<?php echo get_bloginfo('wpurl'); ?>/about">About &amp; Contact</a>
                    <a href="<?php echo get_bloginfo('wpurl'); ?>/legal">Legal</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>