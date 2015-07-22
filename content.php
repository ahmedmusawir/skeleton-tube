<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<p class="post-info">
			<?php the_time( 'F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
			| Posted in 

			<?php 

				$categories = get_the_category();
				$separator = ", ";
				$output = '';

				if ( $categories ) {

					foreach ($categories as $category ) {
						
						$output .= '<a href="' . get_category_link( $category->term_id ) .'">' . $category->cat_name . '</a>' . $separator;	
					}

					echo trim( $output, $separator );
				}

			?>
		</p>

		
		<figure class="u-pull-right thumbnail">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		<?php endif; ?>
		</figure>

		<p><?php the_excerpt(); ?></p>
		<p>
			<a class="button button-primary" href="<?php the_permalink(); ?>">READ MORE</a>
		</p>



	<?php endwhile; ?>
		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts &rarr;' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( '&larr; Newer posts' ); ?></div>
	<?php else : ?>

		<h3>No Content found ...</h3>

<?php endif; ?>	