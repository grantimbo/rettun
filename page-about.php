<?php /* Template Name: About & Contact */ get_header(); ?>

<section class="imgSection redSection section-spacer">
    <div class="container">
        <h1>A brief look into the history of Rettun LLC – how it all began, what we've achieved, and where we are headed.</h1>
    </div>
</section>

<section class="bg-light pt-5 pb-5">
    <div class="container">
        <?php if (have_posts()): while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
    </div>
</section>

<section class="imgSection redSection section-spacer text-left">
    <div class="container">
        <h1>CUSTOMER SERVICE</h1>
        <p>Have an issue with your product? We'll fix it. Please contact our customer service team at : <b>contact@rettun.com</b></p>
    </div>
</section>

<section class="imgSection blackSection section-spacer text-left">
    <div class="container">
        <h3>LEGAL INQUIRIES</h3>
        <p>For legal inquiries, please contact our legal team: Mathys & Squires</p>
    </div>
</section>

<?php get_footer(); ?>