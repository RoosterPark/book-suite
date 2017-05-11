<?php
/**
 * Template Name: RateCast Page
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
				<div class="jumbo-btn-group">
				<a class="btn btn-primary btn-lg" role="button" target="_blank" href=" https://admin.booking.com/" onclick="trackOutboundLink(' https://admin.booking.com/'); return false;"><?php  echo $btn_text =  _e( 'Sign up using Booking.com', 'upbootwp' );?></a>
				</div>
		</div>
	</div>
	</article>
	<?php endwhile; // end of the loop. ?>
</section>
<section id="dataBasedRate" class="sub-section white-alt">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'data-based-rate-recommendations'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
		</div>
	
	<?php if( get_field('data_based_rate_image') ): ?>
	<div class="row">
		<div class="col-lg-12">
			<img class="img-responsive wp-post-image" src="<?php the_field('data_based_rate_image'); ?>" />
		</div>
	</div>
	<?php endif; ?>
	</div>
</section>
<section id="automatedWorkflow" class="sub-section lt-grey">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'automated-workflows'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
		</div>
	
	<?php if( get_field('automated_workflow_image') ): ?>
	<div class="row">
		<div class="col-lg-12">
			<img class="img-responsive wp-post-image" src="<?php the_field('automated_workflow_image'); ?>" />
		</div>
	</div>
	<?php endif; ?>
	</div>
</section>
<section id="clientComm" class="sub-section solutions lt-blue alt"" role="banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
	
	            <article>
				<header class="page-header"><h1 class="text-center"><?php echo $cbtn_text = _e( 'Intuitive Data Tools to Boost Your Property\'s Revenue', 'upbootwp' );?></h1></header>
				</article>
       		</div>
		</div>

		<div class="row">
			<div class="col-sm-4 col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'cloud-based-hosting'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class('RateManager'); ?>>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<!--  <header><p class="h3"><?php //the_title(); ?></p></header> -->
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
       		<div class="col-sm-4 col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'one-click-uploading'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class('RateManager'); ?>>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<!--  <header><p class="h3"><?php //the_title(); ?></p></header> -->
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>	
       		<div class="col-sm-4 col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'chanel-manager-intergration'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class('RateManager'); ?>>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<!--  <header><p class="h3"><?php //the_title(); ?></p></header> -->
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>			    
		</div>
		
		
		<div class="row">
			<div class="col-sm-4 col-md-4">
				<?php	
	            $args = array( 
	                'name' => '360-day-outlook'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class('RateManager'); ?>>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<!--  <header><p class="h3"><?php //the_title(); ?></p></header> -->
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
       		<div class="col-sm-4 col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'daily-and-weekly-rate-shopping'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class('RateManager'); ?>>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<!--  <header><p class="h3"><?php //the_title(); ?></p></header> -->
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>	
       		<div class="col-sm-4 col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'precise-data-recommendation'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class('RateManager'); ?>>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<!--  <header><p class="h3"><?php //the_title(); ?></p></header> -->
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>			    
		</div>
		
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
