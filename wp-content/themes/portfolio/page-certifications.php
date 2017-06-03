<?php
    /*
    * Template Name: Certifications
    */
?>

<?php get_header(); ?>
<?php 
    $imagen = get_the_post_thumbnail_url();
?>
<div class="hero-image light-theme" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="text-wrapper">
        <?php the_title('<h1 class="text-center title-section light-theme">', '</h1>'); ?>
    </div>
</div>

<section class="certifications-list">
    <!--Inicio de los títulos universitarios-->
    <article>
        <div class="panel-group" id="accordionDiseno" role="tablist" aria-multiselectable="false">
            <div class="panel">
                <div class="page-header" role="tab" id="diseno">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listTitulos" aria-expanded="false" aria-controls="listTitulos" class="collapsed">
                            Títulos Universitarios <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listTitulos" role="tabpanel" aria-labelledby="listTitulos">
                    <div class="panel-body">
                        <div class="row">
                            <?php 
                                $args = array(
                                    'post_type' => 'certificaciones',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'category_name' => 'titulo-universitario' 
                                );
                                $tituloUniversitario = new WP_Query( $args );
                                while($tituloUniversitario->have_posts()): $tituloUniversitario->the_post();
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                </div>
                            </div>
                        
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--Fin de los títulos universitarios-->

    <!--Inicio de los títulos de herramientas web-->
    <article>
        <div class="panel-group" id="accordionDiseno" role="tablist" aria-multiselectable="false">
            <div class="panel">
                <div class="page-header" role="tab" id="diseno">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listTools" aria-expanded="false" aria-controls="listTools" class="collapsed">
                            Herramientas Web <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listTools" role="tabpanel" aria-labelledby="listTools">
                    <div class="panel-body">
                        <div class="row">
                            <?php 
                                $args = array(
                                    'post_type' => 'certificaciones',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'category_name' => 'herramientas-web' 
                                );
                                $herramientas_web = new WP_Query( $args );
                                while($herramientas_web->have_posts()): $herramientas_web->the_post();
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                </div>
                            </div>
                        
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--Fin de los títulos de herramientas web-->

    <!--Inicio de los títulos de herramientas de diseño-->
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
                        <div class="row">
                            <?php 
                                $args = array(
                                    'post_type' => 'certificaciones',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'category_name' => 'diseno' 
                                );
                                $diseno = new WP_Query( $args );
                                while($diseno->have_posts()): $diseno->the_post();
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                       <?php the_post_thumbnail('full'); ?>
                                    </div>
                                </div>
                            </div>
                        
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--Fin de los títulos de herramientas de diseño-->

    <!--Inicio de los títulos de tecnologías frontend-->
    <article>
        <div class="panel-group" id="accordionFE" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="page-header" role="tab" id="FE">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listFE" aria-expanded="false" aria-controls="listFE" class="collapsed">
                            Tecnologías FrontEnd <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listFE" role="tabpanel" aria-labelledby="listFE">
                    <div class="panel-body">
                        <div class="row">
                            <?php 
                                $args = array(
                                    'post_type' => 'certificaciones',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'category_name' => 'tecnologias-frontend' 
                                );
                                $tecnologias_frontend = new WP_Query( $args );
                                while($tecnologias_frontend->have_posts()): $tecnologias_frontend->the_post();
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                </div>
                            </div>
                        
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--Fin de los títulos de tecnologías frontend-->

    <!--Inicio de los títulos de tecnologías backend-->
    <article>
        <div class="panel-group" id="accordionBE" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="page-header" role="tab" id="BE">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listBE" aria-expanded="false" aria-controls="listBE" class="collapsed">
                            Tecnologías BackEnd <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listBE" role="tabpanel" aria-labelledby="listBE">
                    <div class="panel-body">
                        <div class="row">
                            <?php 
                                $args = array(
                                    'post_type' => 'certificaciones',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'category_name' => 'tecnologias-backend' 
                                );
                                $tecnologias_backend = new WP_Query( $args );
                                while($tecnologias_backend->have_posts()): $tecnologias_backend->the_post();
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                </div>
                            </div>
                        
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
        <!--Fin de los títulos de tecnologías backend-->


    <!--Inicio de los títulos de tecnologías mobile-->
    <article>
        <div class="panel-group" id="accordionMobile" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="page-header" role="tab" id="mobile">
                    <h2>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#listMobile" aria-expanded="false" aria-controls="listMobile" class="collapsed">
                            Mobile <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                    </h2>
                </div>
                <div class="panel-collapse collapse" id="listMobile" role="tabpanel" aria-labelledby="listMobile">
                    <div class="panel-body">
                        <div class="row">
                            <?php 
                                $args = array(
                                    'post_type' => 'certificaciones',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'category_name' => 'mobile' 
                                );
                                $mobile = new WP_Query( $args );
                                while($mobile->have_posts()): $mobile->the_post();
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                </div>
                            </div>
                        
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--Fin de los títulos de tecnologías mobile-->

    <!--Inicio de los títulos de tecnologías CMS-->
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
                        <div class="row">
                            <?php 
                                $args = array(
                                    'post_type' => 'certificaciones',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    'category_name' => 'cms' 
                                );
                                $cms = new WP_Query( $args );
                                while($cms->have_posts()): $cms->the_post();
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                </div>
                            </div>
                        
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--Inicio de los títulos de tecnologías CMS-->

</section>

<?php get_footer(); ?>