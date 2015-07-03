<?php
/**
 * Template Name: Product Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<img src="/wp-content/uploads/2015/06/wildsee-pizol3.jpg" class="jumbotron-img img-responsive"/>
	<div id="hero" class="jumbotron">
		<div class="container-fluid">
			<h1>Hello, world!</h1>
			<p>This is a template for a simple marketing or informational website.
				It includes a large callout called a jumbotron and three supporting
				pieces of content. Use it as a starting point to create something
				more unique.</p>
			<div class="jumbo-btn-group">
				<a class="btn btn-default btn-lg clear" href="#" role="button">View Our Plans</a>
				<a class="btn btn-primary btn-lg" href="#" role="button">Request A Demo</a>
			</div>
		</div>
	</div>
</section>
<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
<section id="productLinks" class="sub-section white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<h2>Property Websites</h2>
       		</div>
       		<div class="col-lg-4">
				<h2>Predictive Analytics</h2>
       		</div>	
       		<div class="col-lg-4">
				<h2>Premium Services</h2>
       		</div>			    
		</div>
	</div>
</section>
<section id="propertyWebsites" class="section-hero" role="banner">
	<img src="/wp-content/uploads/2015/06/wildsee-pizol3.jpg" class="jumbotron-img img-responsive"/>
	<div id="hero" class="jumbotron">
		<div class="container-fluid">
			<h1>Property Websites</h1>
<!-- 			<p>This is a template for a simple marketing or informational website. -->
<!-- 				It includes a large callout called a jumbotron and three supporting -->
<!-- 				pieces of content. Use it as a starting point to create something -->
<!-- 				more unique.</p> -->
<!-- 			<div class="jumbo-btn-group"> -->
<!-- 				<a class="btn btn-default btn-lg clear" href="#" role="button">View Our Plans</a> -->
<!-- 				<a class="btn btn-primary btn-lg" href="#" role="button">Request A Demo</a> -->
<!-- 			</div> -->

		</div>
	</div>
</section>
<section id="productLinks" class="sub-section white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<h2>Property Websites</h2>
       		</div>
       		<div class="col-lg-4">
				<h2>Predictive Analytics</h2>
       		</div>	
       		<div class="col-lg-4">
				<h2>Premium Services</h2>
       		</div>			    
		</div>
	</div>
</section>
<section id="predictiveAnalytics" class="section-hero" role="banner">
	<img src="/wp-content/uploads/2015/06/wildsee-pizol3.jpg" class="jumbotron-img img-responsive"/>
	<div id="hero" class="jumbotron">
		<div class="container-fluid">
			<h1>Predictive Analytics</h1>
<!-- 			<p>This is a template for a simple marketing or informational website. -->
<!-- 				It includes a large callout called a jumbotron and three supporting -->
<!-- 				pieces of content. Use it as a starting point to create something -->
<!-- 				more unique.</p> -->
<!-- 			<div class="jumbo-btn-group"> -->
<!-- 				<a class="btn btn-default btn-lg clear" href="#" role="button">View Our Plans</a> -->
<!-- 				<a class="btn btn-primary btn-lg" href="#" role="button">Request A Demo</a> -->
<!-- 			</div> -->
		</div>
	</div>
</section>
<section id="productLinks" class="sub-section white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<h2>Property Websites</h2>
       		</div>
       		<div class="col-lg-4">
				<h2>Predictive Analytics</h2>
       		</div>	
       		<div class="col-lg-4">
				<h2>Premium Services</h2>
       		</div>			    
		</div>
	</div>
</section>
<section id="predictiveAnalytics" class="section-hero" role="banner">
	<img src="/wp-content/uploads/2015/06/wildsee-pizol3.jpg" class="jumbotron-img img-responsive"/>
	<div id="hero" class="jumbotron">
		<div class="container-fluid">
			<h1>Premium Services</h1>
<!-- 			<p>This is a template for a simple marketing or informational website. -->
<!-- 				It includes a large callout called a jumbotron and three supporting -->
<!-- 				pieces of content. Use it as a starting point to create something -->
<!-- 				more unique.</p> -->
<!-- 			<div class="jumbo-btn-group"> -->
<!-- 				<a class="btn btn-default btn-lg clear" href="#" role="button">View Our Plans</a> -->
<!-- 				<a class="btn btn-primary btn-lg" href="#" role="button">Request A Demo</a> -->
<!-- 			</div> -->
		</div>
	</div>
</section>
<section id="productLinks" class="sub-section white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<h2>Property Websites</h2>
       		</div>
       		<div class="col-lg-4">
				<h2>Predictive Analytics</h2>
       		</div>	
       		<div class="col-lg-4">
				<h2>Premium Services</h2>
       		</div>			    
		</div>
	</div>
</section>
<?php while (have_posts()) : the_post(); ?>
<section class="container-fluid sub_page">
	<div class="row">
		<div class="col-lg-12">	
			
			<?php the_post_thumbnail( 'careers-featured', array( 'class' => 'single-featured' )); ?>
			<header class="entry-header page-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php //if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				<?php
					wp_link_pages(array(
						'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
						'after'  => '</div>',
					));
				?>
			</div><!-- .entry-content -->
			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class=""><span class="edit-link">', '</span></div>' ); ?>
			</footer>
		</div><!-- .col-md-12 -->
	</div><!-- .row -->
</section>
<section id="index-request-demo" class="sub-section md-grey request-demo">
	<?php get_template_part('index-request-demo'); ?>
</section>
<?php get_footer(); ?>
