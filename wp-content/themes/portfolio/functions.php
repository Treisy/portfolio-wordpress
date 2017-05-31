<?php

// Agregar imágenes destacadas
function portfolio_setup() {
    add_theme_support('post-thumbnails');

    add_image_size('portfolio', 437, 291, true);
	// add_image_size('espcialidades', 768, 515, true);
}

add_action('after_setup_theme', 'portfolio_setup');

// Adding styles
function portfolio_styles(){
    // Register styles
    wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '7.0.0');
    wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.7.0');
    wp_register_style('main', get_template_directory_uri(). '/css/main.css', array('normalize'), '1.0');

    // Call styles
    wp_enqueue_style('normalize');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('main');

	// Register JS
	wp_register_script('scripts', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);

	// Call JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'portfolio_styles');

// Adding menus
function portfolio_menus() {
    register_nav_menus(array(
        'header-menu' => _('Header Menu', portfolio),
        'social-menu' => _('Social Menu', portfolio)
    ));
}

add_action('init', portfolio_menus);

// Custom fields
add_action( 'init', 'portfolio_certificaciones' );
function portfolio_certificaciones() {
	$labels = array(
		'name'               => _x( 'Certificaciones', 'portfolio' ),
		'singular_name'      => _x( 'Certificacion', 'post type singular name', 'portfolio' ),
		'menu_name'          => _x( 'Certificaciones', 'admin menu', 'portfolio' ),
		'name_admin_bar'     => _x( 'Certificaciones', 'add new on admin bar', 'portfolio' ),
		'add_new'            => _x( 'Add New', 'book', 'portfolio' ),
		'add_new_item'       => __( 'Add New Certificacion', 'portfolio' ),
		'new_item'           => __( 'New Certificacion', 'portfolio' ),
		'edit_item'          => __( 'Edit Certificacion', 'portfolio' ),
		'view_item'          => __( 'View Certificaciones', 'portfolio' ),
		'all_items'          => __( 'All Certificaciones', 'portfolio' ),
		'search_items'       => __( 'Search Certificaciones', 'portfolio' ),
		'parent_item_colon'  => __( 'Parent Certificaciones:', 'portfolio' ),
		'not_found'          => __( 'No Certificaciones found.', 'portfolio' ),
		'not_found_in_trash' => __( 'No Certificaciones found in Trash.', 'portfolio' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'portfolio' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'certificaciones' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'certificaciones', $args );
}

add_action( 'init', 'portfolio_experiencia' );
function portfolio_experiencia() {
	$labels = array(
		'name'               => _x( 'Experiencia', 'portfolio' ),
		'singular_name'      => _x( 'Experiencia', 'post type singular name', 'portfolio' ),
		'menu_name'          => _x( 'Experiencia', 'admin menu', 'portfolio' ),
		'name_admin_bar'     => _x( 'Experiencia', 'add new on admin bar', 'portfolio' ),
		'add_new'            => _x( 'Add New', 'book', 'portfolio' ),
		'add_new_item'       => __( 'Add New Experiencia', 'portfolio' ),
		'new_item'           => __( 'New Experiencia', 'portfolio' ),
		'edit_item'          => __( 'Edit Experiencia', 'portfolio' ),
		'view_item'          => __( 'View Experiencia', 'portfolio' ),
		'all_items'          => __( 'All Experiencia', 'portfolio' ),
		'search_items'       => __( 'Search Experiencia', 'portfolio' ),
		'parent_item_colon'  => __( 'Parent Experiencia:', 'portfolio' ),
		'not_found'          => __( 'No Experiencia found.', 'portfolio' ),
		'not_found_in_trash' => __( 'No Experiencia found in Trash.', 'portfolio' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'portfolio' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'experiencia' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'experiencia', $args );
}

add_action( 'init', 'portfolio_habilidades' );
function portfolio_habilidades() {
	$labels = array(
		'name'               => _x( 'Habilidades', 'portfolio' ),
		'singular_name'      => _x( 'Habilidades', 'post type singular name', 'portfolio' ),
		'menu_name'          => _x( 'Habilidades', 'admin menu', 'portfolio' ),
		'name_admin_bar'     => _x( 'Habilidades', 'add new on admin bar', 'portfolio' ),
		'add_new'            => _x( 'Add New', 'book', 'portfolio' ),
		'add_new_item'       => __( 'Add New Habilidades', 'portfolio' ),
		'new_item'           => __( 'New Habilidades', 'portfolio' ),
		'edit_item'          => __( 'Edit Habilidades', 'portfolio' ),
		'view_item'          => __( 'View Habilidades', 'portfolio' ),
		'all_items'          => __( 'All Habilidades', 'portfolio' ),
		'search_items'       => __( 'Search Habilidades', 'portfolio' ),
		'parent_item_colon'  => __( 'Parent Habilidades:', 'portfolio' ),
		'not_found'          => __( 'No Habilidades found.', 'portfolio' ),
		'not_found_in_trash' => __( 'No Habilidades found in Trash.', 'portfolio' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'portfolio' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'experiencia' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'Habilidades', $args );
}

add_action('init', 'portfolio_remove_textarea',100);
function portfolio_remove_textarea(){
    $post_type_certificaciones = 'certificaciones';
    remove_post_type_support( $post_type_certificaciones, 'editor');
	$post_type_experiencia = 'experiencia';
    remove_post_type_support( $post_type_experiencia, 'editor');
	$post_type_habilidades = 'habilidades';
    remove_post_type_support( $post_type_habilidades, 'editor');
}

?>