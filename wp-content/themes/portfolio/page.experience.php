<?php
    /*
    * Template Name: Experience
    */
?>

<?php get_header(); ?>
<?php 
    $imagen = get_the_post_thumbnail_url();
?>
<div class="hero-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="text-wrapper">
        <?php the_title('<h1 class="text-center title-section">', '</h1>'); ?>
    </div>
</div>

<section class="experience-detail">
    <div class="container">
        <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'experiencia',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'category_name' => 'trabajo' 
                );
                $trabajo = new WP_Query( $args );
                while($trabajo->have_posts()): $trabajo->the_post();
            ?>
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php the_title() ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <h4 class="list-group-item-heading">Cargo</h4>
                            <p class="list-group-item-text"><?php the_field('cargo'); ?></p>
                        </div>
                        <div class="list-group">
                            <h4 class="list-group-item-heading">Período</h4>
                            <p class="list-group-item-text"><?php the_field('periodo'); ?></p>
                        </div>
                        <div class="list-group">
                            <h4 class="list-group-item-heading">Funciones</h4>
                            <p class="list-group-item-text"><?php the_field('funciones'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
        <div class="row text-center">
            <a href="" class="btn btn-default">Descargar CV</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>