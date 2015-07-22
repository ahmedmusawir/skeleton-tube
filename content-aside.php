<?php 
/**
*
* This is Aside Content.
*
**/

?>
<section class="post-aside">
	
	

	<p class="post-info">
		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>@<?php the_time( 'F j, Y g:i a'); ?> 
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

	<?php 

		$content = get_the_content();
		$link = strip_tags( $content );  

	?>
	<h5>
	<i class="fa fa-quote-left"></i> <span class="aside-text"><?php echo $content; ?></span><i class="fa fa-quote-right"></i>
	</h5>

</section>


