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
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive' ) ); ?>
	<div id="hero" class="jumbotron">
		<div class="container-fluid">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>	
				<?php the_content(); ?>
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="btn btn-link edit-btn"><i class="fa fa-pencil-square-o"></i>', '</div>' ); ?>
			<?php endwhile; // end of the loop. ?>
			<div class="jumbo-btn-group">
				<a class="btn btn-default btn-lg clear" href="#" role="button">View Our Plans</a>
				<a class="btn btn-primary btn-lg" href="#" role="button">Request A Demo</a>
			</div>
		</div>
	</div>
</section>




<?php //if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
<section id="productLinks" class="sub-section white solutions">		
	<div class="container-fluid">
		<div class="row">
			<?php get_template_part('index-solutions'); ?>
		</div>
	</div>
</section>
<section id="propertyWebsites" class="section-hero" role="banner">
	<?php 
	$image = get_field('property_websites_header');
	// echo "<pre>";
	// print_r($image);
	// echo "</pre>";
	$size = 'featured-image-landscape'; // (thumbnail, medium, large, full or custom size)
	
	$default_attr = array(
			'class'	=> "img-responsive",
	);
	
	if( $image ) {
		echo wp_get_attachment_image( $image, $size, $default_attr);
	}
	?>
	<div id="hero" class="jumbotron">
		<div class="container-fluid">
			<h1>Property Websites</h1>

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
	<?php 
	$image = get_field('predictive_analytics_header');
	$size = 'featured-image-landscape'; // (thumbnail, medium, large, full or custom size)
	$default_attr = array(
			'class'	=> "img-responsive",
	);
	if( $imagex ) {
		echo wp_get_attachment_image( $imagex, $sizex, $default_attr);
	}
	?>
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
<section id="index-request-demo" class="sub-section md-grey request-demo">
	<?php get_template_part('index-request-demo'); ?>
</section>
<?php get_footer(); ?>
