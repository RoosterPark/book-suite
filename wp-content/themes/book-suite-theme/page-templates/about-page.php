<?php
/**
 * Template Name: About Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<img src="/wp-content/uploads/2015/07/aboutushero-mobile.jpg" class="jumbotron-img img-responsive visible-xs-block" />
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive small-screen' ) ); ?>
	<div id="hero" class="jumbotron filter">
		<div class="container-fluid">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>	
				<?php the_content(); ?>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
			<?php endwhile; // end of the loop. ?>
<!-- 			<div class="jumbo-btn-group"> -->
<!-- 				<a class="btn btn-default btn-lg clear" href="#" role="button">View Our Plans</a> -->
<!-- 				<a class="btn btn-primary btn-lg" href="#" role="button">Request A Demo</a> -->
<!-- 			</div> -->
		</div>
	</div>
</section>
<section id="bookingLocations" class="sub-section white solutions" role="Locations">		
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2>And we're all around the world.</h2>
			</div>
		</div>
	</div>
</section>
<section id="dbookingNews" class="sub-section lt-grey" role="News">
	<div class="container-fluid">
		<div class="row">
       		<div class="col-lg-12">
       			<h2>BookingSuite in the News</h2>
       		</div>		    
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
