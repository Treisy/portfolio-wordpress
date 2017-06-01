<?php
    /*
    * Template Name: Skills
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

<section class="skills-details">
    <article>
        <div class="panel-group" id="accordionDiseno" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="page-header" role="tab" id="diseno">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listDiseno" aria-expanded="false" aria-controls="listDiseno" class="collapsed">
                            Diseño <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listDiseno" role="tabpanel" aria-labelledby="listDiseno">
                    <div class="panel-body">
                        <?php 
                            $args = array(
                                'post_type' => 'habilidades',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'category_name' => 'diseno' 
                            );
                            $diseno = new WP_Query( $args );
                            while($diseno->have_posts()): $diseno->the_post();
                        ?>
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-3 col-lg-2">
                                    <span><?php the_title() ?></span>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-lg-10">
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_field('porcentaje_de_conocimiento'); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field('porcentaje_de_conocimiento');?>%;">
                                            <span class="sr-only"><?php the_field('porcentaje_de_conocimiento'); ?>% Complete</span>
                                        </div>
                                        <span class="progress-completed"><?php the_field('porcentaje_de_conocimiento'); ?>%</span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <article>
        <div class="panel-group" id="accordionFE" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="page-header" role="tab" id="frontEnd">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listFrontEnd" aria-expanded="false" aria-controls="listFrontEnd" class="collapsed">
                            Tecnologías FrontEnd <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listFrontEnd" role="tabpanel" aria-labelledby="listFrontEnd">
                    <div class="panel-body">
                        <?php 
                            $args = array(
                                'post_type' => 'habilidades',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'category_name' => 'tecnologias-frontend' 
                            );
                            $tecnologias_frontend = new WP_Query( $args );
                            while($tecnologias_frontend->have_posts()): $tecnologias_frontend->the_post();
                        ?>
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-3 col-lg-2">
                                    <span><?php the_title() ?></span>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-lg-10">
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_field('porcentaje_de_conocimiento'); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field('porcentaje_de_conocimiento');?>%;">
                                            <span class="sr-only"><?php the_field('porcentaje_de_conocimiento'); ?>% Complete</span>
                                        </div>
                                        <span class="progress-completed"><?php the_field('porcentaje_de_conocimiento'); ?>%</span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <article>
        <div class="panel-group" id="accordionBE" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="page-header" role="tab" id="backend">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listBackEnd" aria-expanded="false" aria-controls="listBackEnd" class="collapsed">
                            Tecnologías BackEnd <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listBackEnd" role="tabpanel" aria-labelledby="listBackEnd">
                    <div class="panel-body">
                        <?php 
                            $args = array(
                                'post_type' => 'habilidades',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'category_name' => 'tecnologias-backend' 
                            );
                            $tecnologias_backend = new WP_Query( $args );
                            while($tecnologias_backend->have_posts()): $tecnologias_backend->the_post();
                        ?>
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-3 col-lg-2">
                                    <span><?php the_title() ?></span>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-lg-10">
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_field('porcentaje_de_conocimiento'); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field('porcentaje_de_conocimiento');?>%;">
                                            <span class="sr-only"><?php the_field('porcentaje_de_conocimiento'); ?>% Complete</span>
                                        </div>
                                        <span class="progress-completed"><?php the_field('porcentaje_de_conocimiento'); ?>%</span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </article>
    

    <article>
        <div class="panel-group" id="accordionBD" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="page-header" role="tab" id="database">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listBD" aria-expanded="false" aria-controls="listBD" class="collapsed">
                            Bases de Datos <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listBD" role="tabpanel" aria-labelledby="listBD">
                    <div class="panel-body">
                        <?php 
                            $args = array(
                                'post_type' => 'habilidades',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'category_name' => 'bases-de-datos' 
                            );
                            $bases_de_datos = new WP_Query( $args );
                            while($bases_de_datos->have_posts()): $bases_de_datos->the_post();
                        ?>
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-3 col-lg-2">
                                    <span><?php the_title() ?></span>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-lg-10">
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_field('porcentaje_de_conocimiento'); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field('porcentaje_de_conocimiento');?>%;">
                                            <span class="sr-only"><?php the_field('porcentaje_de_conocimiento'); ?>% Complete</span>
                                        </div>
                                        <span class="progress-completed"><?php the_field('porcentaje_de_conocimiento'); ?>%</span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <article>
        <div class="panel-group" id="accordionCMS" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="page-header" role="tab" id="cms">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listCMS" aria-expanded="false" aria-controls="listCMS" class="collapsed">
                            CMS <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listCMS" role="tabpanel" aria-labelledby="listCMS">
                    <div class="panel-body">
                        <?php 
                            $args = array(
                                'post_type' => 'habilidades',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'category_name' => 'cms' 
                            );
                            $cms = new WP_Query( $args );
                            while($cms->have_posts()): $cms->the_post();
                        ?>
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-3 col-lg-2">
                                    <span><?php the_title() ?></span>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-lg-10">
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_field('porcentaje_de_conocimiento'); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field('porcentaje_de_conocimiento');?>%;">
                                            <span class="sr-only"><?php the_field('porcentaje_de_conocimiento'); ?>% Complete</span>
                                        </div>
                                        <span class="progress-completed"><?php the_field('porcentaje_de_conocimiento'); ?>%</span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article>
        <div class="panel-group" id="accordionTools" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="page-header" role="tab" id="cms">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listTools" aria-expanded="false" aria-controls="listTools" class="collapsed">
                            Herramientas Web <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listTools" role="tabpanel" aria-labelledby="listTools">
                    <div class="panel-body">
                        <?php 
                            $args = array(
                                'post_type' => 'habilidades',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'category_name' => 'herramientas-web' 
                            );
                            $herramientas_web = new WP_Query( $args );
                            while($herramientas_web->have_posts()): $herramientas_web->the_post();
                        ?>
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-3 col-lg-2">
                                    <span><?php the_title() ?></span>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-lg-10">
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_field('porcentaje_de_conocimiento'); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php the_field('porcentaje_de_conocimiento');?>%;">
                                            <span class="sr-only"><?php the_field('porcentaje_de_conocimiento'); ?>% Complete</span>
                                        </div>
                                        <span class="progress-completed"><?php the_field('porcentaje_de_conocimiento'); ?>%</span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<?php get_footer(); ?>