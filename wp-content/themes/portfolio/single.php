<?php get_header(); ?>
<h3>single</h3>
    <?php while(have_posts()): the_post(); ?>

        <?php the_title('<h1 class="text-center title-section">', '</h1>'); ?>
        <div class="hero-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>


        <!--<?php 
            $id_imagen = get_field('imagen_1');
            // $id_imagen = get_post_thumbnail_id();
            // $imagen = wp_get_attachment_image_src($id_imagen);
            $imagen = wp_get_attachment_image($id_imagen);

            
        ?>-->

        <?php
        $post_id = get_the_ID();
        $post_fields = get_meta_values();
    echo $post_id;
    echo $post_fields;
//   $mykey_values = get_post_custom_values( 'my_key' );
//   foreach ( $mykey_values as $key => $value ) {
//     echo "$key  => $value ( 'my_key' )<br />"; 
//   }

?>

<?php get_post_custom_values('portfolio'); ?> 

                <!--<img src="<?php echo $id_imagen ?>" class="imagen-caja">
                <img src="<?php echo $imagen[0] ?>" class="imagen-caja">
                <div>
                    <?php the_field('imagen_1'); ?>
                </div>-->

     <?php endwhile; ?>
<?php get_footer(); ?>