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
				<a class="btn btn-primary btn-lg" role="button" target="_blank" href="https://admin.booking.com/" onclick="trackOutboundLink('https://admin.booking.com/'); return false;" title="<?php  echo $btn_text =  _e( 'Sign up', 'upbootwp' );?>"><?php  echo $btn_text =  _e( 'Sign up', 'upbootwp' );?></a>
				</div>
		</div>
	</div>
	</article>
<?php endwhile; // end of the loop. ?>
</section>
<section id="noRisk" class="sub-section client-services" role="banner">	
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
	            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
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
	            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article><?php endwhile; ?>			
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
	            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
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
<section id="qualityLaunch" class="sub-section white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'quick-quality-assured-launch'
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
		<div class="row">
	    	<div class="col-md-12">
	        	<div class="text-center">
					<a class="btn btn-primary btn-lg" role="button" href="https://admin.booking.com/" target="_blank" title="<?php  echo $btn_text =  _e( 'Sign up', 'upbootwp' );?>"><?php  echo $btn_text =  _e( 'Sign up', 'upbootwp' );?></a>
				</div>
	    	</div>
	    </div>
	</div>
</section>
<!--<section id="clientComm" class="sub-section solutions lt-blue" >
<div class="container-fluid">
		<div class="row">
			<?php //when more products are available use this file
				//get_template_part('product-page-cta');
				//get_template_part('product-page-cta-complete-alt');
			?>
		</div>
	</div>
</section>-->
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
