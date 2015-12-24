<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wandervale' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
			<?php
			    $siteLogo_desktop = get_field('logo_desktop', 2); // 1476 is post id                               
			    $siteLogo_mobile = get_field('logo_mobile', 2); // 1476 is post id                               
			    $size = 'full'; // (thumbnail, medium, large, full or custom size)
			?>

<!-- 		<nav id="site-navigation" class="main-navigation" role="navigation">
		</nav> --><!-- #site-navigation -->

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  		  <div class="container">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		    <a class="navbar-brand hidden-lg" href="#"><img src="<?php echo $siteLogo_mobile;  ?>" alt=""></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-ex1-collapse">

		    	<div class="logo hidden-sm hidden-xs hidden-md">
		        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $siteLogo_desktop;  ?>" alt=""></a>
		      	</div>
		        <?php
			        wp_nav_menu( array(
			            'theme_location' => 'primary',
			            'depth' => 2,
			            'container' => false,
			            'menu_class' => 'nav navbar-nav navbar-right',
			            'fallback_cb' => 'wp_page_menu',
			            //Process nav menu using our custom nav walker
			            'walker' => new wp_bootstrap_navwalker())
			        );
		        ?>
		    </div><!-- /.navbar-collapse --> 
  		  </div><!-- /.container-fluid -->

		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">



























	
