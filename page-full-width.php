<?php 
/**
*
* Template Name: Full Width Template
*
**/
get_header();
?>
<section class="row">

	<article class="page twelve columns">

		<?php get_template_part( 'content', 'page' ); ?>

		<footer class="site-footer">
			<nav class="footer-nav">
			<ul>
				<?php //wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
			</ul>
			</nav>
		</footer>

		<nav class="site-nav children-links clearfix">

			<ul>
				<?php


				$args = array(
					'child_of' => get_top_ancestor_id(),
					'title_li' => ''
				);

				?>

				<?php wp_list_pages($args); ?>
			</ul>
		</nav>
	
	</article>

</section>
<hr>
<?php get_footer(); ?>