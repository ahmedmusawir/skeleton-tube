<form action="/" method="get">
	<!-- <label for="search">Search in <?php echo home_url( '/' ); ?></label> -->
	<input class="search-box u-pull-left" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search"/>
	<!-- <input class="search-icon u-pull-right" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" /> -->
</form>