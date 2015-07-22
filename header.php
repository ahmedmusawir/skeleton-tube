<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- site-header -->
<section class="wrapper container">
<header class="site-header">

	<section class="header-text-block eight columns">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<h5>
		<?php if (is_page( 'portfolio' )) : ?>
			Thanx For Viewing Our Awesome Work!
		<?php elseif ( is_home() ) : ?>
			Our Blog is the Best in da World!
		<?php elseif ( is_page( 'about' ) ) : ?>
			Why We are dee Best in da World!
		<?php elseif ( is_page( 'contact' ) ) : ?>
			Don't Be a Stranger Yo!
		<?php else : ?>
			<?php bloginfo( 'description' ); ?>
		<?php endif; ?>
		</h5>
	</section>

	<aside class="header-search four columns">

		<div class="u-pull-right"><?php get_search_form(); ?></div>
		
	</aside>
	

	

</header>

<section class="nav-holder row">
	<nav class="site-nav twelve columns">
	<?php    /**
		* Displays a navigation menu
		* @param array $args Arguments
		*/
		$args = array(
			'theme_location' => 'primary',
		);
	
		wp_nav_menu( $args ); ?>
</nav>
</section>

<hr>

























