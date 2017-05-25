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
        <div class="text-wrappe">
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
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Diseño de interfaces</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-50pct" >
                  <div class="progress-animation">
                    <span>50%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article>
          <div class="page-header">
            <h2>Frontend</h2>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>HTML5</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-90pct" >
                  <div class="progress-animation">
                      <span>90%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>CSS3</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-90pct" >
                  <div class="progress-animation">
                      <span>90%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>SCSS</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-80pct" >
                  <div class="progress-animation">
                      <span>80%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Stylus</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-70pct" >
                  <div class="progress-animation">
                      <span>70%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>JavaScript</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-60pct" >
                  <div class="progress-animation">
                      <span>60%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>jQuery</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-70pct" >
                  <div class="progress-animation">
                      <span>70%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Bootstrap</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-80pct" >
                  <div class="progress-animation">
                      <span>80%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Foundation 6</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-60pct" >
                  <div class="progress-animation">
                      <span>60%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>AngularJS 1.x</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-80pct" >
                  <div class="progress-animation">
                      <span>80%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>AngularJS 2</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-50pct" >
                  <div class="progress-animation">
                      <span>50%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Responsive Design</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-90pct" >
                  <div class="progress-animation">
                      <span>90%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </article>
        <article>
          <div class="page-header">
            <h2>Backend</h2>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Python</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-50pct" >
                  <div class="progress-animation">
                      <span>50%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Django</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-50pct" >
                  <div class="progress-animation">
                      <span>50%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Laravel</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-60pct" >
                  <div class="progress-animation">
                      <span>60%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>PHP</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-60pct" >
                  <div class="progress-animation">
                      <span>60%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article>
          <div class="page-header">
            <h2>Bases de Datos</h2>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>SQL</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-70pct" >
                  <div class="progress-animation">
                      <span>70%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>MySQL</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-70pct" >
                  <div class="progress-animation">
                      <span>70%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>MongoDB</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-50pct" >
                  <div class="progress-animation">
                      <span>50%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article>
          <div class="page-header">
            <h2>CMS</h2>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>WordPress</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-50pct" >
                  <div class="progress-animation">
                      <span>50%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article>
          <div class="page-header">
            <h2>Otros</h2>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Gulp</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-80pct" >
                  <div class="progress-animation">
                      <span>80%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Bower</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-80pct" >
                  <div class="progress-animation">
                      <span>80%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Grunt</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-50pct" >
                  <div class="progress-animation">
                      <span>50%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Yeoman</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-40pct" >
                  <div class="progress-animation">
                      <span>40%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
              <span>Git</span>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-10">
              <div class="progress-bar">
                <div class="progress width-90pct" >
                  <div class="progress-animation">
                    <span>90%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>

<?php get_footer(); ?>