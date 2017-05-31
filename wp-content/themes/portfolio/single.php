<?php get_header(); ?>

<?php while(have_posts()): the_post(); 
?>

    <section class="portfolio-detail">
        <div class="container">
            <article>
                <?php the_title('<h1 class="text-left title-section">', '</h1>'); ?>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <figure>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </figure>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="info">
                            <div class="descripcion">
                                <?php the_content(); ?>
                            </div>
                            <?php 
                                if(the_field('repositorio')){  
                                    $repo = ('<p><span><strong>Repository: </strong></span><span>'.the_field('repositorio').'</span></p>');
                                }
                            ?>
                            
                            <a href="<?php echo the_field('link'); ?>" class="btn btn-default">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    Galería de imágenes
                </div>
            </article>
        </div>
    </section>
    

<?php endwhile; ?>

<?php get_footer(); ?>