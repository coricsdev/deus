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
								<a href="#"><span>1</span></a>
								<a href="#"><span>2</span></a>
								<a href="#"><span>3</span></a>
								<a href="#"><span class="fa fa-arrow-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4-lg col-12-md">
					<aside class="sidebar">
						<!-- Latest Post Section-->
						<section class="latest-post">
							<a href="#" class="text-md text-dark">Latest Post</a>
							<div class="flex flex-column">
								<article class="new-post">
									<div class="row">
									<!-- Two Columns -->
									<div class="col-4-lg post-image">
										<img src="./assets/images/feature_image/11.png" class="fluid" alt="latest Post">
									</div>
									<div class="col-8-lg post-title">
										<div class="cat">
											<a href="#" class="text-sm text-gray categpry">People</a>
											<a href="#" class="text-sm text-gray categpry">Commercial</a>
										</div>
										<a href="#" class="text-md text-dark">Post Title 11</a>	
									</div>
									</div>
								</article>
								<article class="new-post">
									<div class="row">
									<!-- Two Columns -->
									<div class="col-4-lg post-image">
										<img src="./assets/images/feature_image/10.png" class="fluid" alt="latest Post">
									</div>
									<div class="col-8-lg post-title">
										<div class="cat">
											<a href="#" class="text-sm text-gray categpry">Nature</a>
											<a href="#" class="text-sm text-gray categpry">People</a>
											<a href="#" class="text-sm text-gray categpry">Travel</a>
										</div>
										<a href="#" class="text-md text-dark">Post Title 10</a>	
									</div>
									</div>
								</article>
								<article class="new-post">
									<div class="row">
									<!-- Two Columns -->
									<div class="col-4-lg post-image">
										<img src="./assets/images/feature_image/9.png" class="fluid" alt="latest Post">
									</div>
									<div class="col-8-lg post-title">
										<div class="cat">
											<a href="#" class="text-sm text-gray categpry">Commercial</a>
										</div>
										<a href="#" class="text-md text-dark">Post Title 9</a>	
									</div>
									</div>
								</article>
								<article class="new-post">
									<div class="row">
									<!-- Two Columns -->
									<div class="col-4-lg post-image">
										<img src="./assets/images/feature_image/8.png" class="fluid" alt="latest Post">
									</div>
									<div class="col-8-lg post-title">
										<div class="cat">
											<a href="#" class="text-sm text-gray categpry">People</a>
										</div>
										<a href="#" class="text-md text-dark">Post Title 8</a>	
									</div>
									</div>
								</article>
							</div>
						</section>
						<!-- End Latest Post Section-->
						<!-- Search Area Section-->
						<section class="search-area">
							<div class="search">
								<h3 class="text-md text-dark">Search</h3>
								<form class="form-group">
									<input type="search" class="input-control mr-sm-2" placeholder="Search">
									<button class="btn btn-submit" type="submit"><i class="fas fa-search"></i></button>
								</form>
							</div>
						</section>
						<!-- End Search Area Section-->
						<!-- Popular Tags Area Section-->
						<section class="popular-tags">
							<h1 class="text-md">Popular Tags</h1>
							<div class="tags flex flex-row flex-wrap">
								<a href="#"><span>Camera</span></a>
								<a href="#"><span>Bike</span></a>
								<a href="#"><span>Craft</span></a>
								<a href="#"><span>Photography</span></a>
								<a href="#"><span>Articles</span></a>
								<a href="#"><span>Events</span></a>
								<a href="#"><span>Driving</span></a>
								<a href="#"><span>WordPress</span></a>
							</div>
						</section>
						<!-- End Popular Tags Area Section-->
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!-- End Post Area-->

<?php get_footer(); ?>

