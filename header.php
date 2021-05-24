<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="">
    <?php 
    	if( has_nav_menu( 'header-menu' ) ){
    		wp_nav_menu( [
    			'theme_location'  => 'header-menu',
    		] );
    	}
     ?>
</nav>
<header class="header-area">
	<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<h3><?php bloginfo( 'description' ); ?></h3>
</header>

<main id="main">