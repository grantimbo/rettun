<?php get_header(); ?>

<section class="imgSection redSection section-spacer text-center">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="bg-white pt-5 pb-5">
    <div class="container">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="p-5 mb-3 bg-white">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>