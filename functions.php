<?php 

/*
*Template Name: Function
*
*/

function deus_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );		
}

add_action( 'after_setup_theme', 'deus_theme_setup' );

//Register CSS and JS file

function register_script() {
	//Regiter Style
	wp_register_style( 'main-stylesheet', get_stylesheet_uri() );
	wp_register_style( 'margin-stylesheet', get_template_directory_uri(). '/css/margin.css'  );
	//Enqueue Style
	wp_enqueue_style( 'main-stylesheet' );
	wp_enqueue_style( 'margin-stylesheet' );

	//Register Script
	wp_register_script( 'main-js', get_template_directory_uri(). '/js/main.js' );

	//Enqueue Script
	wp_enqueue_script( 'main-js' );
}
add_action( 'wp_enqueue_scripts', 'register_script' );

//Register Menu in Theme

function deus_menus() {

	register_nav_menus(
		[
    		'header-menu' => __('Header Menu'),
    		'footer-menu' => __('Footer Menu'),  
  		]
  	);
}

add_action( 'init', 'deus_menus' );

//Register Widgets - Sidebar
function deus_register_widgets(){
	register_sidebar(
		[
			'id'   		  => 'blog_sidebar',
			'name' 		  => __('Blog Sidebar'),
			'description' => __('A Sidebar for Blogs')
		]
	);

	register_sidebar(
		[
			'id'   		  => 'page_sidebar',
			'name' 		  => __('Page Sidebar'),
			'description' => __('A Sidebar for Page')
		]
	);

	register_sidebar(
		[
			'id'   		  => 'footer_sidebar',
			'name' 		  => __('Footer Sidebar'),
			'description' => __('A Sidebar for Footer Section')
		]
	);
}

add_action( 'widgets_init', 'deus_register_widgets' );