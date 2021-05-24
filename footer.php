</main>

	<?php 
    	if( has_nav_menu( 'footer-menu' ) ){
    		wp_nav_menu( [
    			'theme_location'  => 'footer-menu',
    		] );
    	}     
    ?>

	<?php dynamic_sidebar('footer_sidebar'); ?>

<footer>
	<p>&copy; Copyrights <a href="<?php bloginfo( 'url' ); ?>"> <?php bloginfo( 'name' ); ?></a> All Rights Reserved</p>
</footer>

<?php wp_footer(); ?>

</body>
</html>