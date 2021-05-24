<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name=description content="ie-edge">
	<?php wp_head(); ?>
</head>
<body>
<!-- Start Header Area -->
<header class="header-area">
	<div class="container">
		<nav class="nav">
			<a href="#" class="link nav-brand text-light">
				<?php 
				if( function_exists( 'the_custom_logo' ) ){
					the_custom_logo();
				}else{
					bloginfo( 'name' ); 
				}
				?>
			</a>

			<!-- Toggle Menu -->
			<button class="toggle-button">
				<span class="fas fa-bars"></span>
			</button>

			<!-- Navigation Items -->
			<div class="collapse" id="toggle-collapse">
				<?php 
					//display primary menu
					if( has_nav_menu( 'header-menu' ) ){
						wp_nav_menu([
							'theme_location' => 'header-menu',
							'container' => '',
							'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>'
						]);
					}
				?>
				<div class="search">
					<?php 
						//get the searchform.php template file
						get_search_form(); 
					?>
				</div>
			</div>
		</nav>
	</div>
</header>
<!-- End Header Area -->
<!-- Start Main Area Site -->
<main class="main-area">
