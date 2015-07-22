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
				
				echo 'Search Result for: ' . get_search_query();
				
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