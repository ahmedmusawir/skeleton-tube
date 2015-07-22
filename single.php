<?php 
/**
*
* This is the single Post file.
*
**/
get_header();
?>
<section class="row">

	<article class="two-thirds column">
		<?php get_template_part( 'content', 'single' ); ?>
	</article>
	
	<?php get_sidebar(); ?>

</section>
<hr>
<?php get_footer(); ?>