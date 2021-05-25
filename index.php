<?php get_header(); ?>
	<!-- Banner Area -->
	<section class="banner-area">
		<div class="container-fluid">
			<div class="banner">
				<?php if( get_theme_mod( 'header_image' ) ) :?>
					<img src="<?php echo esc_url( get_theme_mod( 'header_image' ) ); ?>" alt="banner area" class="fluid">
				<?php Endif; ?>
			</div>
			<div class="banner-title text-center">
				<?php if( get_theme_mod( 'header_text_field' ) ) :?>
					<h1 class="text-lg text-light"><?php echo get_theme_mod( 'header_text_field' ); ?></h1>
				<?php Endif; ?>
				<?php if( get_theme_mod( 'header_desc_field' ) ) :?>
					<span class="description text-sm text-light"><?php echo get_theme_mod( 'header_desc_field' ); ?></span>
				<?php Endif; ?>
			</div>
		</div>
	</section>
	<!-- End Banner Area-->

	<!-- Categories Section-->
	<section class="categories">
		<div class="container">
			<div class="flex flex-row flex-wrap">
				<?php
					//get the template part in categories content
					get_template_part( 'templates/temp/categories', 'content' );
				?>
			</div>
		</div>
	</section>
	<!-- End Categories Section-->

	<!-- Post Area-->
	<section class="post-area">
		<div class="wrapper">
			<!-- 2 Column Layout -->
			<div class="row">
				<div class="col-8-lg col-12-md">
				<!-- 2 columns -->
					<div class="grid">
						<?php 
							//Load template post-content.php in index.php
							get_template_part( 'templates/temp/post', 'content' );
						?>
					</div>
					<!--Pagination Area-->
					<div class="row">
						<div class="col-12-lg text-center">
							<div class="pagination">
							<?php
								echo paginate_links([
									'mid_size' => 2,
									'prev_text' => __('<span class="fa fa-arrow-left"></span>'),
									'next_text' => __('<span class="fa fa-arrow-right"></span>')
								]);
							?>
								<!-- <a href="#"><span>1</span></a>
								<a href="#"><span>2</span></a>
								<a href="#"><span>3</span></a>
								<a href="#"><span class="fa fa-arrow-right"></span></a> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-4-lg col-12-md">
					<!-- Get the sidebar template -->
					<?php
						get_sidebar();
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Post Area-->

<?php get_footer(); ?>

