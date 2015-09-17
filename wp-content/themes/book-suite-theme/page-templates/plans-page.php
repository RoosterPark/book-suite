<?php
/**
 * Template Name: Plans Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( get_field('responsive_hero_img') ): ?>
		<img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
	<?php endif; ?>
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive small-screen' ) ); ?>
	<div id="hero" class="jumbotron filter">
		<div class="container-fluid">
				<h1 class="page-title"><?php the_title(); ?></h1>	
				<?php the_content(); ?>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
		</div>
	</div>
	</article>
	<?php endwhile; // end of the loop. ?>
</section>
<!-- <section id="booking-solutions" class="sub-section white solutions-menu">		 -->
<!-- 	<div class="container-fluid"> -->
<!-- 		<div class="row"> -->
			<?php //get_template_part('index-solutions'); ?>
<!-- 		</div> -->
<!-- 	</div> -->
<!-- </section> -->
	<div id="featureLinks" class="tab-wrapper">
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#Property-Websites" aria-controls="Property-Websites" role="tab" data-toggle="tab">Property Websites</a></li>
	    <li role="presentation"><a href="#property-pricing" aria-controls="property-pricing" role="tab" data-toggle="tab">Property Pricing</a></li>
	  </ul>
	</div>
	<div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="Property-Websites">
			<?php get_template_part('plans-page-tabs-prop-web'); ?>
	    </div>
	    <div role="tabpanel" class="tab-pane" id="property-pricing">
	    	<?php get_template_part('plans-page-tabs-biz-intel'); ?>    
	    </div>
	    
	</div>
<?php get_template_part('index-request-demo'); ?>

<?php get_footer(); ?>
