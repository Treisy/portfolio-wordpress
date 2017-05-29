<?php
    /*
    * Template Name: Certifications
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

   <section class="certifications-list">
      <div class="container">
          <!--Inicio de los títulos universitarios-->
        <article class="">
            <div class="page-header">
                <h2>Títulos Universitarios</h2>
            </div>
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
                    <div class="thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="caption">
                            <span class="text-center"><?php the_title() ?></span>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; wp_reset_postdata();?>
            </div>
        </article>
        <!--Fin de los títulos universitarios-->

        <!--Inicio de los títulos de herramientas web-->
        <article class="">
            <div class="page-header">
                <h2>Herramientas Web</h2>
            </div>
            <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'certificaciones',
                        'posts_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'category_name' => 'herramientas-web' 
                    );
                    $herramientasWeb = new WP_Query( $args );
                    while($herramientasWeb->have_posts()): $herramientasWeb->the_post();
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="caption">
                            <h3 class="text-center"><?php the_title() ?></h3>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; wp_reset_postdata();?>
          </div>
        </article>
        <!--Fin de los títulos de herramientas web-->

        <!--Inicio de los títulos de herramientas de diseño-->
        <article class="">
          <div class="page-header">
            <h2>Diseño</h2>
          </div>
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
                    <div class="thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="caption">
                            <h3 class="text-center"><?php the_title() ?></h3>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; wp_reset_postdata();?>
          </div>
        </article>
        <!--Fin de los títulos de herramientas de diseño-->

        <!--Inicio de los títulos de tecnologías frontend-->
        <article class="">
          <div class="page-header">
            <h2>Frontend</h2>
          </div>
          <div class="row">
            <?php 
                    $args = array(
                        'post_type' => 'certificaciones',
                        'posts_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'category_name' => 'tecnologias-frontend' 
                    );
                    $tecnologiasFrontend = new WP_Query( $args );
                    while($tecnologiasFrontend->have_posts()): $tecnologiasFrontend->the_post();
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="caption">
                            <h3 class="text-center"><?php the_title() ?></h3>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; wp_reset_postdata();?>
          </div>
        </article>
        <!--Fin de los títulos de tecnologías frontend-->

        <!--Inicio de los títulos de tecnologías backend-->
        <article class="">
          <div class="page-header">
            <h2>Backend</h2>
          </div>
          <div class="row">
            <?php 
                    $args = array(
                        'post_type' => 'certificaciones',
                        'posts_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'category_name' => 'tecnologias-backend' 
                    );
                    $tecnologiasBackend = new WP_Query( $args );
                    while($tecnologiasBackend->have_posts()): $tecnologiasBackend->the_post();
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="caption">
                            <h3 class="text-center"><?php the_title() ?></h3>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; wp_reset_postdata();?>
          </div>
        </article>
         <!--Fin de los títulos de tecnologías backend-->


        <!--Inicio de los títulos de tecnologías mobile-->
        <article class="">
          <div class="page-header">
            <h2>Mobile</h2>
          </div>
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
                    <div class="thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="caption">
                            <h3 class="text-center"><?php the_title() ?></h3>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; wp_reset_postdata();?>
          </div>
        </article>
        <!--Fin de los títulos de tecnologías mobile-->

        <!--Inicio de los títulos de tecnologías CMS-->
        <article class="">
          <div class="page-header">
            <h2>CMS</h2>
          </div>
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
                    <div class="thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="caption">
                            <h3 class="text-center"><?php the_title() ?></h3>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; wp_reset_postdata();?>
          </div>
        </article>
        <!--Inicio de los títulos de tecnologías CMS-->

      </div>
    </section>

<?php get_footer(); ?>