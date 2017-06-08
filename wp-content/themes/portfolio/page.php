<?php get_header(); ?>

<?php
$pagina_blog = get_option( 'page_for_posts');
$imagen = get_post_thumbnail_id( $pagina_blog );
$imagen = wp_get_attachment_image_src( $imagen, full );
?>

<div class="hero-image light-theme" style="background-image:url(<?php echo $imagen[0] ?>)">
    <div class="text-wrapper">
        <h1 class="text-center title-section"><?php echo get_the_title( $pagina_blog ) ?></h1>
    </div>
</div>


<section class="portfolio-list">
    <div class="row">
        <ol class="breadcrumb text-center">
            <li class="active"><a href="#">All</a></li>
            <li><a href="#">Sitios Web</a></li>
            <li><a href="#">Aplicaciones Web</a></li>
        </ol>
    </div>


    <div class="row">
		
		<?php while(have_posts()): the_post(); ?>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')"></div>
                        </a>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="<?php the_permalink(); ?>">
							<?php the_title( '<span>', '</span>' ); ?>
                        </a>
                    </div>
                </div>
            </div>
		
		<?php endwhile; ?>

    </div>
</section>



<?php get_footer(); ?>
