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
		<?php get_template_part( 'content' ); ?>
	</article>

	<?php get_sidebar(); ?>

</section>
<hr>
<?php get_footer(); ?>