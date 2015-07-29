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
<title><?php wp_title('&raquo;','true','right'); ?><?php if ( is_single() ) { ?> Blog Archive &raquo; <?php } ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,600' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/apple-touch-icon-57-precomposed.png">

<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/favicon.png">
<style>
.request-content {
	background:  url("/wp-content/themes/book-suite-theme/img/lt-blue-background-slice.png") repeat-x scroll 0 -70px rgba(0, 0, 0, 0);
}</style>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="language-bar">
	<div class="container-fluid">
		<div class="language-menu navbar-right"><i class="fa fa-language"></i><span>Language Menu</span><i class="fa fa-angle-down"></i>
		</div>
	</div>
</div>	
	<div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
			</button>
		<?php if( get_header_image() != '' ) : ?>
		
		<div id="logo" class="company-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-logo img-responsive" src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
		</div><!-- end of #logo -->
		
		<?php endif; // header image was removed ?>
		
		<?php if( !get_header_image() ) : ?>
		
		<div id="logo">
			<span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
		</div><!-- end of #logo -->
		
		<?php endif; // header image was removed (again) ?>
		</div>
		
		<?php 
			$args = array('theme_location' => 'primary-desktop', 
						  'container_class' => 'navbar-desktop', 
						  'menu_class' => 'nav navbar-nav navbar-right',
						  'fallback_cb' => '',
                          'menu_id' => 'main-desktop-menu',
							'walker' => new Upbootwp_Walker_Nav_Menu()
			); 
			wp_nav_menu($args);
			?>
		<?php 
			$args = array('theme_location' => 'primary', 
						  'container_class' => 'navbar-collapse collapse mobile', 
						  'menu_class' => 'nav navbar-nav navbar-right',
						  'fallback_cb' => '',
                          'menu_id' => 'main-menu',
							'walker' => new Upbootwp_Walker_Nav_Menu()
			); 
			wp_nav_menu($args);
			?>
			
	</div><!-- container -->
</nav>
<?php if( is_home() ) { ?> 
	<?php get_template_part('index-featured-image'); ?>
<?php } ?>
<!-- Start: main .content-area -->
<main id="main" class="content-area site-main" role="main">
