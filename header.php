<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontentcontainer">
 *
 * @package Quark
 * @since Quark 1.0
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta http-equiv="cleartype" content="on">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed site">

	<div class="visuallyhidden skip-link"><a href="#primary" title="<?php esc_attr_e( 'Skip to main content', 'quark' ); ?>"><?php esc_html_e( 'Skip to main content', 'quark' ); ?></a></div>

	<div id="headercontainer">
		
		<header id="masthead" class="site-header eccla_wrapper row" role="banner">
		<div class="row">
			<div class="col grid-4 site-title">
				<h1>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
						<?php 
						$headerImg = get_header_image();
						if( !empty( $headerImg ) ) { ?>
							<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
						<?php } 
						else {
							echo get_bloginfo( 'name' );
						} ?>
					</a>
				</h1>
			</div> <!-- /.col.grid_5_of_12 -->	
			<div class="col grid-8">
				<form role="search" method="get" id="search-form" action="http://eccla.codisattva.com/">
    				<div class="pad-3-vert">
    					<div class="search-wrap">
        				<input type="search" name="s" id="search-input" value="">
        				<button class="screen-reader-text" type="submit" id="search-submit"><i class="fa fa-search"></i></button>
    					</div>
    				</div>
				</form>
				<div class="pad-3-top">
				<p class="tagline"><?php bloginfo( 'description' ); ?></p>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col grid-4 m-grid-none">&nbsp;</div>
			<div class="col grid-8 pad-3-left m-grid-12 s-grid-12"><?php ubermenu( 'main' , array( 'theme_location' => 'primary' ) ); ?> </div>
		</div>	
				
				
					<h3 class="menu-toggle assistive-text"><?php esc_html_e( 'Menu', 'quark' ); ?></h3>
					<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'quark' ); ?>"><?php esc_html_e( 'Skip to content', 'quark' ); ?></a></div>
					
					
				 <!-- /.site-navigation.main-navigation -->
			
			
		
		</header> <!-- /#masthead.site-header.row -->
		
	</div> <!-- /#headercontainer -->
	

	<div id="maincontentcontainer">
		<?php	do_action( 'quark_before_woocommerce' ); ?>