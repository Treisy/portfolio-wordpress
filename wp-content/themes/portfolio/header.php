<!DOCTYPE html>
<html lamg="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Proyecto Final del curso de Programacion Web">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no"/>
	<title>Portafolio</title>
	<meta name="keywords" content="html6 css3 proyecto programacion inicio">
	<meta name="author" content="Treisy Jimenez Vega">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
							<img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" height="30" width="62">
						</a>
					</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php 
							$args = array(
								'theme_location' => 'header-menu',
								'container' => 'ul',
								'menu_class' => 'nav navbar-nav navbar-right'
							);
							wp_nav_menu( $args );
						?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<div class="hero-image home" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/principal.jpg')"></div>
		</div>
	</header>