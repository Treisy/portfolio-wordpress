<?php get_header(); ?>
    <?php while(have_posts()): the_post(); ?>

        <div class="hero-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
            <div class="text-wrappe">
                <?php the_title('<h1 class="text-center title-section">', '</h1>'); ?>
            </div>
        </div>


     <?php endwhile; ?>
<?php get_footer(); ?>