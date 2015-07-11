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
	<div id="hero" class="jumbotron filter">
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
<section id="productLinks" class="sub-section white solutions">		
	<div class="container-fluid">
		<div class="row">
		<?php $catName =  get_cat_ID("solutions");	
		            $args = array( 
		                'post_type' => 'post',
		                'posts_per_page' =>6,
		                'orderby' => 'post_date',
		                'order' => 'date' ,
		                'cat' => $catName,
		                'post_status' => 'publish',
		            );
		          
		            
		            $my_query = new WP_Query($args);
		            
		            while($my_query->have_posts()) :
		            	$my_query->the_post();
		            ?>
				
		        <div class="col-xs-4 col-sm-4 col-md-4">
		        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?></a>
				<div class="section-title"><?php the_title(); ?></div>
				<?php //the_content(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="btn-group" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
		        </div>
		       
					<?php endwhile; ?>			
		<?php  wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<section id="propertyWebsites" class="section-hero" role="banner">
	<?php if( get_field('property_websites_header') ): ?>
	<img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('property_websites_header'); ?>" />
	<?php endif; ?>		
	<div id="hero" class="jumbotron filter">
		<div class="jumbo-caption opt-2">
			<h1>Property Websites</h1>
			<div class="jumbo-btn-group">
				<a class="btn btn-info btn-lg" href="#" role="button">View Our Plans</a>
				<a class="btn btn-default btn-lg clear" href="#" role="button">See Product Features</a>
			</div>
		</div>
	</div>
</section>
<section id="mobileFriendly" class="product-section lt-grey" role="banner">
	<div class="container-fluid">
		<div class="row">
       		<div class="col-lg-6">
       			<div class="center-block">
       			<?php	
	            $args = array( 
	                'name' => 'mobile-friendly'
	            );
	            $my_mob_query = new WP_Query($args);
	            while($my_mob_query->have_posts()) :
	            	$my_mob_query->the_post();
	            ?>
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       			</div>
				
       		</div>	
       		<div class="col-lg-6">
			<?php if( get_field('mobile_friendly_header') ): ?>
				<img class=" img-responsive wp-post-image mobile-img" src="<?php the_field('mobile_friendly_header'); ?>" />
			<?php endif; ?>	
       		</div>			    
		</div>
	</div>
</section>
<section id="multiLanguageSupport" class="section-hero" role="banner">
	<?php if( get_field('multi_lanquage_support') ): ?>
	<img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('multi_lanquage_support'); ?>" />
	<?php endif; ?>
	<div id="hero" class="jumbotron">
		<div class="jumbo-caption opt-2 black">
			<?php	
            $args = array( 
                'name' => 'multi-language-support'
            );
            $my_ml_query = new WP_Query($args);
            while($my_ml_query->have_posts()) :
            	$my_ml_query->the_post();
            ?>
			<h1><?php the_title(); ?></h1>
			<?php the_excerpt(); ?>		
			<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
			<?php endwhile; ?>			
			<?php  wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<section id="contentManagement" class="section-hero" role="banner">
	<?php if( get_field('content_management_header') ): ?>
	<img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('content_management_header'); ?>" />
	<?php endif; ?>		
	<div id="hero" class="jumbotron">
		<div class="jumbo-caption">
			<h1>Content Management</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo sem nunc, eu varius diam rhoncus sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
		</div>
	</div>
</section>
<section id="ctaArea" class="sub-section white solutions">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'interactive-maps'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<p class="section-title"><?php the_title(); ?></p>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
       		<div class="col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'booking-engine'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<p class="section-title"><?php the_title(); ?></p>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>	
       		<div class="col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'analytic-reporting'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<p class="section-title"><?php the_title(); ?></p>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>			    
		</div>
	</div>
</section>
<section id="predictiveAnalytics" class="section-hero" role="banner">
<?php if( get_field('predictive_analytics_header') ): ?>
	<img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('predictive_analytics_header'); ?>" />
<?php endif; ?>
	<div id="hero" class="jumbotron filter">
		<div class="jumbo-caption opt-2">
			<h1>Predictive Analytics</h1>
			<div class="jumbo-btn-group">
				<a class="btn btn-info btn-lg" href="#" role="button">Leran More</a>
				<a class="btn btn-default btn-lg clear" href="#" role="button">See Product Features</a>
			</div>
		</div>
	</div>
</section>
<section id="forcastFuture" class="product-section white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'forecast-the-future'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
		</div>
	</div>
	<?php if( get_field('forcast_the_future_header') ): ?>
		<img class="img-responsive wp-post-image" src="<?php the_field('forcast_the_future_header'); ?>" />
	<?php endif; ?>
	
</section>
<section id="dataDriven" class="product-section lt-grey" role="banner">
	<div class="container-fluid">
		<div class="row">
       		<div class="col-lg-6">
       			<div class="center-block">
       			<?php	
	            $args = array( 
	                'name' => 'data-driven'
	            );
	            $my_mob_query = new WP_Query($args);
	            while($my_mob_query->have_posts()) :
	            	$my_mob_query->the_post();
	            ?>
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       			</div>
				
       		</div>	
       		<div class="col-lg-6">
			<?php if( get_field('data_driven_header') ): ?>
				<img class="img-responsive wp-post-image mobile-img" src="<?php the_field('data_driven_header'); ?>" />
			<?php endif; ?>
       		</div>			    
		</div>
	</div>
</section>
<section id="increaseRevPar" class="section-hero" role="banner">
<?php if( get_field('increase_RevPar_header') ): ?>
	<img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('increase_RevPar_header'); ?>" />
<?php endif; ?>
	<div id="hero" class="jumbotron">
		<div class="jumbo-caption opt-3 black">
				<?php	
	            $args = array( 
	                'name' => 'increase-revpar'
	            );
	            $my_rev_query = new WP_Query($args);
	            while($my_rev_query->have_posts()) :
	            	$my_rev_query->the_post();
	            ?>
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>	
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
			<div class="jumbo-btn-group">
				<a class="btn btn-info btn-lg" href="#" role="button">Lean More</a>
				<a class="btn btn-primary btn-lg" href="#" role="button">See Product Features</a>
			</div>
		</div>
	</div>
</section>
<section id="premiumServices" class="section-hero" role="banner">
<?php if( get_field('premium_services_header') ): ?>
	<img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('premium_services_header'); ?>" />
<?php endif; ?>
	<div id="hero" class="jumbotron filter">
		<div class="jumbo-caption opt-1">
			<h1>Premium Services</h1>
		</div>
	</div>
</section>
<section id="clientServices" class="product-section white-alt" role="banner">
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'client-services'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
		</div>
	</div>
	<?php if( get_field('client_services_header') ): ?>
		<img class="img-responsive wp-post-image" src="<?php the_field('client_services_header'); ?>" />
	<?php endif; ?>
</section>
<section id="clientComm" class="product-section lt-blue" role="banner">
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'client-communication-reporting'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
		</div>
	</div>
</section>
<section id="clientComm2" class="product-section solutions lt-blue alt" role="banner">
<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'consulting'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<p class="section-title"><?php the_title(); ?></p>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
       		<div class="col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'check-ins'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<p class="section-title"><?php the_title(); ?></p>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>	
       		<div class="col-md-4">
				<?php	
	            $args = array( 
	                'name' => 'reports'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<p class="section-title"><?php the_title(); ?></p>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<div class="jumbo-btn-group edit" role="group" ><div class="btn btn-link"><i class="fa fa-pencil-square-o"></i>', '</div></div>' ); ?>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>			    
		</div>
	</div>
</section>
<section id="index-request-demo" class="sub-section md-grey request-demo">
	<?php get_template_part('index-request-demo'); ?>
</section>
<?php get_footer(); ?>
