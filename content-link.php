<?php 
/**
*
* This is Aside Content.
*
**/

?>
<section class="post-link">
	
	<?php 

		$content = get_the_content();
		$link = strip_tags( $content );  

	?>
	<h3><a href="<?php echo $link; ?>" target="_blank"><?php the_title(); ?></a></h3>

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


	
</section>


