<?php get_header(); ?>

	<?php 
    	$pagina_blog = get_option( 'page_for_posts');
        $imagen = get_post_thumbnail_id( $pagina_blog );
        $imagen = wp_get_attachment_image_src( $imagen, full );
	?>

	<div class="hero-image" style="background-image:url(<?php echo $imagen[0] ?>)">
		<div class="text-wrappe">
			<h1 class="text-center title-section"><?php echo get_the_title( $pagina_blog ) ?></h1>
		</div>
	</div>


	<section class="portfolio-list">
		<div class="container">
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
						

<?php 
// Ruta de la imagen destacada (miniatura y otros tamaños)
global $post;
$thumbID = get_post_thumbnail_id( $post->ID );
$imgDestacada = wp_get_attachment_image_src( $thumbID, 'full' ); // Sustituir por thumbnail, medium, large o full
echo $imgDestacada[0];
?>
						<a href="<?php the_permalink(); ?>">
							<div class="thumbnail">
								<?php the_post_thumbnail( 'medium' ); ?>
								<div class="caption">
									<?php the_title( '<h3 class="text-center">', '</h3>' ); ?>
								</div>
							</div>
						</a>
					</div>

				<?php endwhile; ?>

			</div>
		</div>
	</section>
<?php get_footer(); ?>
