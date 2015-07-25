<?php
/**
 * Template Name: Features Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<?php if( get_field('responsive_hero_img') ): ?>
		<img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
	<?php endif; ?>
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive small-screen' ) ); ?>
	<div id="hero" class="jumbotron filter">
		<div class="container-fluid">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>	
				<?php the_content(); ?>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</section>

	<div id="featureLinks" class="tab-wrapper">
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#PropertyWebsites" aria-controls="PropertyWebsites" role="tab" data-toggle="tab">Property Websites</a></li>
	    <li role="presentation"><a href="#PredictiveAnalytics" aria-controls="PredictiveAnalytics" role="tab" data-toggle="tab">Predictive Analytics</a></li>
	  </ul>
	</div>
	<div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="PropertyWebsites">
			<?php get_template_part('features-page-tabs-property-web'); ?>
	    </div>
	    <div role="tabpanel" class="tab-pane" id="PredictiveAnalytics">
	    	<?php get_template_part('features-page-tabs-predictive-analytics'); ?>    
	    </div>
	</div>


	<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
