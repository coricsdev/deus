<aside class="sidebar">
    <!-- Latest Post Section-->
    <section class="latest-post">
		<a href="#" class="text-md text-dark">Latest Post</a>
		<div class="flex flex-column">
			<!-- Get Template File using get template part -->
            <?php
                get_template_part( 'templates/temp/sidebar', 'latest-post' );
            ?>
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