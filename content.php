<?php 
/**
*
* The General Content. This has been fixed. Page content is different.
*
**/

?>
<?php	if ( ! is_single() ) :	?>




		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<?php get_template_part( 'content', 'meta'); ?>
	
		
		<figure class="u-pull-right thumbnail">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		<?php endif; ?>
		</figure>

		<p><?php the_excerpt(); ?></p>
		<p>
			<a class="button button-primary" href="<?php the_permalink(); ?>">READ MORE</a>
		</p>


<?php  else : ?>


		<h3><?php the_title(); ?></h3>
		
		<?php if ( has_post_thumbnail() ) : ?>
			<figure class="post-banner u-pull-left"><?php the_post_thumbnail(); ?></figure>
		<?php endif; ?>

		<p><?php the_content(); ?></p>

		<aside class="single-content-meta">
			<?php get_template_part( 'content', 'meta'); ?>
		</aside>


<?php endif; ?>





































