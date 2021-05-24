<?php 

/*
*	Template Name: Function
*	Description: Add Features to WP theme
*/

//Add Customizer.php file
require_once( 'templates/helpers/customizer.php' );

//Add Theme Support 
function deus_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );	
	add_theme_support( 'post-thumbnails' );	
	add_theme_support( 'html5', [ 'search-form' ] );
}

add_action( 'after_setup_theme', 'deus_theme_setup' );

//Register CSS and JS file

function deus_register_script() {
	//Regiter Style
	wp_register_style( 'main-stylesheet', get_stylesheet_uri() );
	wp_register_style( 'fontawesome', get_template_directory_uri(). '/vendor/css/all.min.css'  );
	//Media Queries
	wp_register_style( 'media_responsive', get_template_directory_uri(). '/assets/css/_media.css'  );

	//Enqueue Style
	wp_enqueue_style( 'main-stylesheet' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'media_responsive' );

	//Register Script
	wp_register_script( 'main-js', get_template_directory_uri(). '/assets/js/main.js',['jquery'],1.0, true );
	wp_register_script( 'jquery', get_template_directory_uri(). '/vendor/js/jquery-3.6.0.js',['jquery'], false, true );

	//Enqueue Script
	wp_enqueue_script( 'main-js' );
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'deus_register_script' );

//Register Menu in Theme
function deus_menus() {

	register_nav_menus(
		[
    		'header-menu' => __('Header Menu', 'deus'),
    		'footer-menu' => __('Footer Menu', 'deus'),  
  		]
  	);
}
add_action( 'init', 'deus_menus' );

function add_links_atts( $atts ){
	$atts[ 'class' ] = 'link text-light';
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_links_atts' );

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

//Change the excerpt length
function deus_custom_excerpt_length( $length ){
	return 15;
}
add_filter( 'excerpt_length', 'deus_custom_excerpt_length' );