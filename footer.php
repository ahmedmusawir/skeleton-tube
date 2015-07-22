<footer class="site-footer">
	<nav class="footer-nav">
		<?php    /**
			* Displays a navigation menu
			* @param array $args Arguments
			*/
			$args = array(
				'theme_location' => 'footer',
			);
		
			wp_nav_menu( $args ); ?>
	</nav>
	<p class"fuck"><?php bloginfo( 'name' ); ?> - &copy; <?php echo date('Y') ?></p> 
	<?php wp_footer(); ?>
</footer>
</section> <!-- End Main Wrapper -->
</body>
</html>