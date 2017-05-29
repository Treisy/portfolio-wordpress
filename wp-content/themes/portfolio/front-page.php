<?php get_header(); ?>

    <?php 
        $imagen = get_the_post_thumbnail_url();
    ?>
    <div class="hero-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>

    <section>
		<div class="container">
			<div class="row">
                <?php 
                    $args = array(
                        'sort_order' => 'asc',
                        'sort_column' => 'post_title',
                        'hierarchical' => 1,
                        'exclude' => 24,
                        'include' => '',
                        'meta_key' => '',
                        'meta_value' => '',
                        'authors' => '',
                        'child_of' => 0,
                        'parent' => -1,
                        'exclude_tree' => '',
                        'number' => '',
                        'offset' => 0,
                        'post_type' => 'page',
                        'post_status' => 'publish'
                    ); 
                    $pages = get_pages($args); 

                    foreach($pages as $page) {
                    ?>

                    <div class="col-xs-12 col-md-6 text-center">
                        <article class="articles">
                            <?php 
                                $imageID = get_post_thumbnail_id($page->ID);
                                $image = wp_get_attachment_image_src( $imageID, 'thumbnail' );
                            ?>
                            <img src="<?php echo $image[0] ?>" alt="" class="img-responsive img-circle img-section">
                            <h2 class="text-center"><?php echo $page->post_title; ?></h2>
                            <p class="hidden-xs text-center"><?php echo $page->post_content; ?></p>
                            <a href="<?php echo get_page_link( $page->ID ); ?>" target="_self" class="btn btn-default btn-ver">Ver más</a>
                        </article>
                    </div>

                <?php 
                    } 
                ?>
            
			</div>
		</div>
	</section>

<?php get_footer(); ?>