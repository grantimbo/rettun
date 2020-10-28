<?php get_header(); ?>

<section class="imgSection redSection section-spacer text-center">
    <div class="container">
        <h1>404 Not Found</h1>
    </div>
</section>

<div class="container text-center">
    <div class="p-5 mb-3">
		<h3>Apologies</h3>
		<p>The page you are looking for does not exist. <br>It may have been moved, or removed altogether. <br>You may return to the <a color="#ccc" href="<?php echo home_url(); ?>"><?php _e( 'home page.', 'tariku' ); ?></a></p>
    </div>
</div>
<?php wp_footer(); ?>