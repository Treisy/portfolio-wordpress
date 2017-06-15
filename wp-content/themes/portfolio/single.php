<?php get_header(); ?>

<?php while(have_posts()): the_post(); 
?>

    <section class="portfolio-detail">
        <article>
            <?php the_title('<h1 class="text-left title-section">', '</h1>'); ?>

            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <figure class="img-principal img-responsive">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </figure>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row galeria">
	                    <?php if (get_field('imagen_1')): ?>
	                        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
	                            <figure class="img-thumbnail img-responsive img-galeria">
	                                <img src="<?php the_field('imagen_1'); ?>" alt="">
	                            </figure>
	                        </div>
						<?php endif; ?>
	
						<?php if (get_field('imagen_2')): ?>
	                        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
	                            <figure class="img-thumbnail img-responsive img-galeria">
		                            <img src="<?php the_field('imagen_2'); ?>" alt="">
	                            </figure>
	                        </div>
						<?php endif; ?>
		
						<?php if (get_field('imagen_3')): ?>
	                        <div class="col-xs-10 col-sm-6 col-xs-offset-1 col-sm-offset-0">
	                            <figure class="img-thumbnail img-responsive img-galeria">
		                            <img src="<?php the_field('imagen_3'); ?>" alt="">
	                            </figure>
	                        </div>
						<?php endif; ?>
			
			
						<?php if (get_field('imagen_4')): ?>
		                    <div class="col-xs-10 col-sm-6 col-xs-offset-1 col-sm-offset-0">
			                    <figure class="img-thumbnail img-responsive img-galeria">
				                    <img src="<?php the_field('imagen_4'); ?>" alt="">
			                    </figure>
		                    </div>
						<?php endif; ?>
	                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="info">
                        <div class="descripcion">
			                <?php the_content(); ?>
                        </div>
                        <div class="row">
	                        <?php if(get_field('repositorio')): ?>
	                            <div class="col-xs-12 col-sm-4 col-sm-offset-2 text-center">
	                                <a href="<?php echo the_field('repositorio'); ?>" class="links" target="_blank">
	                                    <i class="fa fa-github" aria-hidden="true"></i> Repositorio
	                                </a>
	                            </div>
							<?php endif; ?>
	                        
	                        <?php if(get_field('link')): ?>
	                            <div class="col-xs-12 col-sm-4 text-center">
	                                <a href="<?php echo the_field('link'); ?>" class="links" target="_blank">
		                                <i class="fa fa-video-camera" aria-hidden="true"></i> Ver Proyecto
	                                </a>
	                            </div>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    

<?php endwhile; ?>

<?php get_footer(); ?>