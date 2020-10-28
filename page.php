<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="imgSection redSection section-spacer text-center">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="bg-white pt-5 pb-5">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>