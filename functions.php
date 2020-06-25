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
	wp_register_script('jquery-3.2.1',get_template_directory_uri().'/plugin-frameworks/jquery-3.2.1.min.js',array(),false,false);
	wp_enqueue_script('jquery-3.2.1');

	wp_register_script('bootstrap',get_template_directory_uri().'/plugin-frameworks/bootstrap.min.js',array(),false,false);
	wp_enqueue_script('bootstrap');

	wp_register_script('swiper',get_template_directory_uri().'/plugin-frameworks/swiper.js',array(),false,false);
	wp_enqueue_script('swiper');

	wp_register_script('common-scripts',get_template_directory_uri().'/common/scripts.js',array(),false,false);
	wp_enqueue_script('common-scripts');

	wp_register_script('customjs',get_template_directory_uri().'/custom.js',array(),false,false);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','load_scripts');