<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		
		<?php if ( has_post_thumbnail() ) : ?>
			<figure class="post-banner u-pull-left"><?php the_post_thumbnail(); ?></figure>
		<?php endif; ?>

		<p><?php the_content(); ?></p>

	<?php endwhile; ?>
	<?php else : ?>

		<h3>No Content found ...</h3>

<?php endif; ?>	