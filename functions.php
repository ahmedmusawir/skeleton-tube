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
	add_image_size( 'banner-image', 950, 300, true );

	/**
	*
	* Search Form
	*
	**/
	add_theme_support( 'html5', array( 'search-form' ) );
	

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
* Get top ancestor
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