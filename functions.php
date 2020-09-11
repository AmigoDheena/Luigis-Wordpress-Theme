<?php

function load_stylesheets(){
	wp_register_style('font',get_template_directory_uri().'/fonts/beyond_the_mountains-webfont.css',array(),1,'all');
	wp_enqueue_style('font');

	wp_register_style('bootstrap',get_template_directory_uri().'/plugin-frameworks/bootstrap.min.css',array(),1,'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('swiper',get_template_directory_uri().'/plugin-frameworks/swiper.css',array(),1,'all');
	wp_enqueue_style('swiper');

	wp_register_style('ionicons',get_template_directory_uri().'/fonts/ionicons.css',array(),1,'all');
	wp_enqueue_style('ionicons');

	wp_register_style('common-styles',get_template_directory_uri().'/common/styles.css',array(),1,'all');
	wp_enqueue_style('common-styles');

	wp_register_style('custom',get_template_directory_uri().'/custom.css',array(),1,'all');
	wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts','load_stylesheets');

function load_scripts(){
	wp_register_script('jquery-3.2.1',get_template_directory_uri().'/plugin-frameworks/jquery-3.2.1.min.js',array(),false,true);
	wp_enqueue_script('jquery-3.2.1');

	wp_register_script('bootstrap',get_template_directory_uri().'/plugin-frameworks/bootstrap.min.js',array(),false,true);
	wp_enqueue_script('bootstrap');

	wp_register_script('swiper',get_template_directory_uri().'/plugin-frameworks/swiper.js',array(),false,true);
	wp_enqueue_script('swiper');

	wp_register_script('common-scripts',get_template_directory_uri().'/common/scripts.js',array(),false,true);
	wp_enqueue_script('common-scripts');

	wp_register_script('customjs',get_template_directory_uri().'/custom.js',array(),false,true);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','load_scripts');

//Theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
	array(
		'top-menu'=> 'Top Menu',
	)
);


/*
* Creating a function to create our CPT
*/
 /*
function custom_post_type() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Movies', 'Post Type General Name', 'twentytwenty' ),
			'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentytwenty' ),
			'menu_name'           => __( 'Movies', 'twentytwenty' ),
			'parent_item_colon'   => __( 'Parent Movie', 'twentytwenty' ),
			'all_items'           => __( 'All Movies', 'twentytwenty' ),
			'view_item'           => __( 'View Movie', 'twentytwenty' ),
			'add_new_item'        => __( 'Add New Movie', 'twentytwenty' ),
			'add_new'             => __( 'Add New', 'twentytwenty' ),
			'edit_item'           => __( 'Edit Movie', 'twentytwenty' ),
			'update_item'         => __( 'Update Movie', 'twentytwenty' ),
			'search_items'        => __( 'Search Movie', 'twentytwenty' ),
			'not_found'           => __( 'Not Found', 'twentytwenty' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'movies', 'twentytwenty' ),
			'description'         => __( 'Movie news and reviews', 'twentytwenty' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	 
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'movies', $args );
	 
	}
	 
	add_action( 'init', 'custom_post_type', 0 );
*/