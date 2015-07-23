<?php 
/**
*
* This is Function.php
*
**/
// echo get_stylesheet_uri();

function SkeletonTube_Resources() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_script( '$handle', '$src', array( 'jquery' ), false, false);
		
}
add_action( 'wp_enqueue_scripts', 'SkeletonTube_Resources' );

/**
*
* THEME SETUP
*
**/
function SkeletonTube_Setup() {

	/**
	*
	* Navigation Menu
	*
	**/
	register_nav_menus( array(
		'primary' 	=> __( 'Primary Menu' ),
		'footer' 	=> __( 'Footer Menu' )  

		)
	);

	/**
	*
	* Add featured image support
	*
	**/
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'banner-image', 950, 350, true );

	/**
	*
	* Search Form
	*
	**/
	add_theme_support( 'html5', array( 'search-form' ) );

	/**
	*
	* Add Post Format Support
	*
	**/
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );
	

}

add_action( 'after_setup_theme', 'SkeletonTube_Setup' );

/**
*
* Customize Excerpt
*
**/
function custom_excerpt_length() {
	return 25;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );

/**
*
* Add Widgets Locations
*
**/
function SkeletonTube_Widgets() {

	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			'name'          => __( 'Sidebar Main', 'SkeletonTube' ),
			'id'            => 'sidebar-main',
			'description'   => '',
			'class'         => 'sidebar-widget-main',
			'before_widget' => '<li id="%1" class="widget %2">',
			'after_widget'  => '</li>',
			'before_title'  => '<h5 class="widgettitle">',
			'after_title'   => '</h5>'
		);
	
		register_sidebar( $args );
	
} 

add_action( 'widgets_init', 'SkeletonTube_Widgets' );

/**
*
* Get top ancestor DID NOT WORK HERE
*
**/
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
		
	}
	
	return $post->ID;
	
}

// Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}