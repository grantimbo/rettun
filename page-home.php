<?php /* Template Name: Home */ get_header(); ?>

<section class="imgSection blackSection section-spacer text-center">
    <div class="container smallContainer">
        <h1 class="pt-3 pb-5">We are Rettun LLC</h1>
        <?php if (have_posts()): while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
    </div>
</section>

<section id="ourbrands" class="ourbrands section-spacer container text-center">
    <h1 class="mb-2">Our Brands</h1>
    <p class="pb-5">Kindly refer to the links below to access your brand of choice.</p>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <a href="http://go-beast.com/" target="_blank" class="border bg-light brand-logos">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/brands/go-beast.png" class="img-fluid" alt="GoBeast">
            <p>GoBeast</p>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <a href="http://tuffmantools.com/" target="_blank" class="border bg-light brand-logos">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/brands/tuffman-tools.png" class="img-fluid" alt="TuffMan Tools">
            <p>TuffMan Tools</p>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <a href="#" target="_blank" class="border bg-light brand-logos">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/brands/everything-automotive.png" class="img-fluid" alt="Everything Automobiles">
            <p>Everything Automobiles</p>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <a href="#" target="_blank" class="border bg-light brand-logos">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/brands/cuddler.png" class="img-fluid" alt="Cuddlerr">
            <p>Cuddlerr</p>
            </a>
        </div>
    </div>
</section>

<section class="imgSection redSection section-spacer text-center">
    <div class="container smallContainer">
        <h1 class="pt-3 pb-5">We're Always Here to Help!</h1>
        <p>If you have an issue with any of our products – Talk to us. We'll fix it.</br>All you have to do is contact our Customer Service team at <b>contact@rettun.com</b></p>
    </div>
</section>

<?php get_footer(); ?>