<?php 
/**
*
* Template Name: Home Full Width Template
*
**/
get_header();
?>
<section class="row home-block-1">

	<article class="page twelve columns">

		<?php get_template_part( 'content', 'page' ); ?>

	</article>

</section>

<section class="row">
	<article class="home-block-2">
		
	<?php query_posts('p=6'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<h4><?php the_title(); ?></h4>
		<?php the_content(); ?>
	<?php endwhile;?>

	</article>
</section>

<section class="row">
	<article class="home-block-3">

	<?php

		$args = array(

			'cat' => 15,
			'posts_per_page' => 4,
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			echo '<ul class="car-video">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<li class="three columns">' ;
				echo '<p>' . the_content() . '</p>';
				echo '</li>';
			}
			echo '</ul>';
		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
	?>
	</article>
</section>

<section class="row odd-even-box">
<?php 
//I will use WP_Query class instance
$args = array( 
	'post_type' => 'post', 
	'category__in' => array( 6 ),
	'posts_per_page' => 6 

	);

//Set up a counter
$counter = 0;

//Preparing the Loop
$query = new WP_Query( $args );

//In while loop counter increments by one $counter++
if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); $counter++;

    

    //We are in loop so we can check if counter is odd or even
    if( $counter % 2 == 0 ) : //It's even

    echo '<ul class="">';

	    echo '<li class="odd">';
			?>

			<div class="odd-content">
				
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					
					<figure class="u-pull-right thumbnail">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
					<?php endif; ?>
					</figure>

					<p><?php the_excerpt(); ?></p>
					<p>
						<a class="button button-primary" href="<?php the_permalink(); ?>">READ MORE</a>
					</p>
					
			</div>

			<?php 
	    echo '</li>';

    echo '</ul>';


    else : //It's odd

    echo '<ul class="">';

	    echo '<li class="even">';
	    	
		?>
			<div class="even-content">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				
				<figure class="u-pull-right thumbnail">
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
				<?php endif; ?>
				</figure>

				<p><?php the_excerpt(); ?></p>
				<p>
					<a class="button button-primary" href="<?php the_permalink(); ?>">READ MORE</a>
				</p>
			</div>
				
		<?php 

	    echo '</li>';

    echo '</ul>';


    endif;



endwhile; wp_reset_postdata(); endif;

?>

</section>
<hr>
<?php get_footer(); ?>







































