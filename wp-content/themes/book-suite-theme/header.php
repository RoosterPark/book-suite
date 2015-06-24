<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('&raquo;', true, 'left'); ?> </title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,600' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/apple-touch-icon-57-precomposed.png">

<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/favicon.png">
</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>
<header id="masthead" role="banner">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="mp-row row">
				<div class="col-md-12 col-lg-12">
			        <div class="navbar-header">
			        	<aside id="polylang-3" class="col-lg-4 center-block widget widget_polylang"></aside>
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
						</button>
					<?php if( get_header_image() != '' ) : ?>
					
					<div id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
					</div><!-- end of #logo -->
					
					<?php endif; // header image was removed ?>
					
					<?php if( !get_header_image() ) : ?>
					
					<div id="logo">
						<span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
					</div><!-- end of #logo -->
					
					<?php endif; // header image was removed (again) ?>
					</div>
					
					<?php 
					$args = array('theme_location' => 'primary', 
								  'container_class' => 'navbar-collapse collapse', 
								  'menu_class' => 'nav navbar-nav navbar-right',
								  'fallback_cb' => '',
		                          'menu_id' => 'main-menu',
		                          'walker' => new Upbootwp_Walker_Nav_Menu()); 
					wp_nav_menu($args);
					?>
				</div><!-- .col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</nav>
</header><!-- #masthead -->
<div id="page" class="hfeed site">
	
<!-- 	<div id="content" class="site-content"> -->
