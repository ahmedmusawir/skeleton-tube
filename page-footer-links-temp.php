<?php 
/**
*
* Template Name: Info Box Template
*
**/
get_header();
?>
<section class="row">

	<article class="two-thirds column">



		<section class="">

			<aside class="info-box u-pull-right">
				<h5>Disclaimer</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</aside>


			<?php get_template_part( 'content', 'page' ); ?>
		

		</section>
		
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