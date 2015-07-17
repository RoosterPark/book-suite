<?php
/**
 * Template Name: WebDirect Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive' ) ); ?>
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
<section id="noRisk" class="sub-section white-alt">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'no-risk'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
		</div>
	
	<?php if( get_field('no_risk_image') ): ?>
	<div class="row">
		<div class="col-lg-12">
			<img class="img-responsive wp-post-image" src="<?php the_field('no_risk_image'); ?>" />
		</div>
	</div>
	<?php endif; ?>
	</div>
</section>
<section id="syncListing" class="sub-section synced lt-blue">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'synced-listing'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
		</div>
	
	<?php if( get_field('synced_image') ): ?>
	<div class="row">
		<div class="col-lg-12">
			<img class="img-responsive wp-post-image" src="<?php the_field('synced_image'); ?>" />
		</div>
	</div>
	<?php endif; ?>
	</div>
</section>
<section id="modernWebDesign" class="sub-section client-services md-grey">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'modern-web-design'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
		</div>
	
	<?php if( get_field('modern_web_image') ): ?>
	<div class="row">
		<div class="col-lg-12">
			<img class="img-responsive wp-post-image" src="<?php the_field('modern_web_image'); ?>" />
		</div>
	</div>
	<?php endif; ?>
	</div>
</section>
<section id="clientComm" class="sub-section solutions lt-blue" >
<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-md-6 link-cta text-left">
				<?php	
	            $args = array( 
	                'name' => 'web-collection-post'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php //the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<header><h1><?php the_title(); ?></h1></header>
				<?php the_content(); ?>		
				
				<footer>
					<a class="btn btn-default btn-lg clear" title="<?php the_title(); ?>" href="/webcollection/" role="button">Learn More</a>
					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
				</footer>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
       		<div class="col-sm-6 col-md-6 link-cta text-left">
				<?php	
	            $args = array( 
	                'name' => 'web-complete-post'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php //the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<header><h1><?php the_title(); ?></h1></header>
				<?php the_content(); ?>		
				
				<footer>
					<a class="btn btn-default btn-lg clear" title="<?php the_title(); ?>" href="/webcomplete/" role="button">Learn More</a>
					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
				</footer>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>	    
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
