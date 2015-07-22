<?php 
/**
*
* This is the index file.
*
**/
get_header();
?>
<section class="row">

	<article class="two-thirds column">


		<h4>
			<?php 
				if ( is_category() ) {
					echo single_cat_title() . ' Archive ...';
				} elseif ( is_tag() ) {
					single_tag_title();
				} elseif ( is_author() ) {
					the_post();
					echo 'Author Archive: ' . get_the_author();
					rewind_posts();

				} elseif ( is_search() ) { //THIS DOES NOT WORK
					echo 'Search Result for: ' . get_search_query();
				} elseif ( is_day() ) {
					echo 'Day Archive: ' . get_the_date();
				} elseif ( is_month() ) {
					echo 'Monthy Archive: ' . get_the_date( 'F Y' );
				} elseif ( is_year() ) {
					echo 'Yearly Archive: ' . get_the_date( 'Y' );
				} else {
					echo 'Archives';
				}
			?>
		</h4>

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

			
				<?php get_template_part( 'content', get_post_format() ); ?>
			
			<?php endwhile; ?>
				<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts &rarr;' ); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( '&larr; Newer posts' ); ?></div>
			<?php else : ?>

				<h3>No Content found ...</h3>

		<?php endif; ?>	

	</article>
	
	<?php get_sidebar(); ?>

</section>
<hr>
<?php get_footer(); ?>