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
	
	<div class="panel-group" id="certifications" role="tablist" aria-multiselectable="false">
		<!--Inicio de los títulos universitarios-->
		<div class="panel">
			<div class="page-header" role="tab" id="universidad">
				<h2>
					<a role="button" data-toggle="collapse" data-parent="#certifications" href="#listTitulos" aria-expanded="false" aria-controls="listTitulos" class="collapsed">
						Títulos Universitarios <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
				</h2>
			</div>
			<div class="panel-collapse collapse" id="listTitulos" role="tabpanel" aria-labelledby="universidad">
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
		<!--Fin de los títulos universitarios-->


		<!--Inicio de los títulos de herramientas web-->
		<div class="panel">
			<div class="page-header" role="tab" id="tools">
				<h2>
					<a role="button" data-toggle="collapse" data-parent="#certifications" href="#listTools" aria-expanded="false" aria-controls="listTools" class="collapsed">
						Herramientas Web <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
				</h2>
			</div>
			<div class="panel-collapse collapse" id="listTools" role="tabpanel" aria-labelledby="tools">
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
		<!--Fin de los títulos de herramientas web-->


		<!--Inicio de los títulos de herramientas de diseño-->
		<div class="panel">
			<div class="page-header" role="tab" id="diseno">
				<h2>
					<a role="button" data-toggle="collapse" data-parent="#certifications" href="#listDiseno" aria-expanded="false" aria-controls="listDiseno" class="collapsed">
						Diseño <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
				</h2>
			</div>
			<div class="panel-collapse collapse" id="listDiseno" role="tabpanel" aria-labelledby="diseno">
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
		<!--Fin de los títulos de herramientas de diseño-->

		<!--Inicio de los títulos de tecnologías frontend-->
		<div class="panel">
			<div class="page-header" role="tab" id="FE">
				<h2>
					<a role="button" data-toggle="collapse" data-parent="#certifications" href="#listFE" aria-expanded="false" aria-controls="listFE" class="collapsed">
						Tecnologías FrontEnd <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
				</h2>
			</div>
			<div class="panel-collapse collapse" id="listFE" role="tabpanel" aria-labelledby="FE">
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
		<!--Fin de los títulos de tecnologías frontend-->


		<!--Inicio de los títulos de tecnologías backend-->
		<div class="panel">
			<div class="page-header" role="tab" id="BE">
				<h2>
					<a role="button" data-toggle="collapse" data-parent="#certifications" href="#listBE" aria-expanded="false" aria-controls="listBE" class="collapsed">
						Tecnologías BackEnd <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
				</h2>
			</div>
			<div class="panel-collapse collapse" id="listBE" role="tabpanel" aria-labelledby="BE">
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
		<!--Fin de los títulos de tecnologías backend-->

		<!--Inicio de los títulos de tecnologías mobile-->
		<div class="panel">
			<div class="page-header" role="tab" id="mobile">
				<h2>
					<a role="button" data-toggle="collapse" data-parent="#certifications" href="#listMobile" aria-expanded="false" aria-controls="listMobile" class="collapsed">
						Mobile <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
				</h2>
			</div>
			<div class="panel-collapse collapse" id="listMobile" role="tabpanel" aria-labelledby="mobile">
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
		<!--Fin de los títulos de tecnologías mobile-->

		
		<!--Inicio de los títulos de tecnologías CMS-->
		<div class="panel">
			<div class="page-header" role="tab" id="cms">
				<h2>
					<a role="button" data-toggle="collapse" data-parent="#certifications" href="#listCMS" aria-expanded="false" aria-controls="listCMS" class="collapsed">
						CMS <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
				</h2>
			</div>
			<div class="panel-collapse collapse" id="listCMS" role="tabpanel" aria-labelledby="cms">
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
		<!--Inicio de los títulos de tecnologías CMS-->
		
	</div>
    

</section>

<?php get_footer(); ?>