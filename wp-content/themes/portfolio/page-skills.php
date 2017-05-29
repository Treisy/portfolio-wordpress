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
    <div class="container">
        <article>
            <div class="page-header">
                <h2>Diseño</h2>
            </div>
            <div class="row">
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
                <div class="col-xs-12 col-sm-3 col-lg-2">
                    <span><?php the_title() ?></span>
                </div>

                <div class="col-xs-12 col-sm-9 col-lg-10">
                    <div class="progress-bar">
                        <div class="progress" data-attribute="<?php the_field('porcentaje_de_conocimiento'); ?>%">
                            <div class="progress-animation">
                                <span><?php the_field('porcentaje_de_conocimiento'); ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile; wp_reset_postdata();?>

                <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>UX/UI</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-30pct" >
                  <div class="progress-animation">
                      <span>30%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>