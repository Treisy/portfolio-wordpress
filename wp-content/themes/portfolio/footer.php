	</div>
	<footer>
		<section class="contact">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<h2>Contáctame en:</h2>
					</div>
                    <?php 
                        $args = array(
                            'theme_location' => 'social-menu',
                            'container' => 'ul',
                            'menu_class' => '',
                            'link_before' => '<span class="sr-text">',
                            'link_after' => '</span>'
                        );
                        wp_nav_menu( $args );
                    ?>
				</div>
			</div>
		</section>
		<div class="container-fluid copyright text-center">
        <span><?php echo date('Y'); ?> ®Copyright</span>
		</div>
	</footer>
	<!--<script src="scripts/vendors/jquery-3.1.0.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>