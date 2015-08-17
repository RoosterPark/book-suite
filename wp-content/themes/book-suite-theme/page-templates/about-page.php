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
<section id="jobListings" class="sub-section white job-link" role="Jobs">		
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-md-8 col-lg-8">
				<h2 class="text-left">And we're all around the world.</h2>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<a class="btn btn-info btn-lg" title="#####" href="#" role="button">View Job Openings</a>
			</div>
		</div>
	</div><!--  .container-fluid -->
</section>
<section id="ourPeople" class="sub-section dark-grey request-demo" role="ourPeople">		
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-left">Our People Tiles</h2>
			</div>
		</div>
	</div><!--  .container-fluid -->
</section>
<section id="bookingLocations" class="sub-section regional-hq white" >		
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-left">And We're All Around The World.</h2>
				<h3 class="text-left">Regional Headquarters</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
				<?php 
				$args = array( 
					'post_type' 		=> 'location',
					'posts_per_page' 	=>-1,
					'tax_query' => array(
						array(
							'taxonomy'  	=> 'location_category',
							'field'     	=> 'slug',
							'terms'	=> 'regional-hq',
						),
					),
					'order'             => 'ASC',
					'post_status' 		=> 'publish',
            	);
          
            
            	$my_query = new WP_Query($args);
				$postx_counter = -1;
				while($my_query->have_posts()) :
		        	$my_query->the_post();
					$postx_counter++;
		        ?>
		
						<div class="col-xs-12 col-sm-6 col-md-6" data-post="<?php echo $postx_counter ?>">
							 <article id="post-<?php the_ID(); ?>" <?php post_class('panel panel-default'); ?>>
								<?php if ( has_post_thumbnail() ) {  ?>
								<div class="hq-image">
								<?php the_post_thumbnail('stories-tile-360', array('class' => "img-responsive", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
					
								<div class="h3"><?php echo the_title(); ?></div>
								</div>
								<?php  } ?>
								<div class="panel-body">

								<?php echo the_content(); ?>	
								<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>'); ?>
								</div>
							</article>
							
						</div>

					<?php 
					if( $postx_counter % 2) {
						echo '</div><div class="row">';
					}
					
					 endwhile; ?>	
				<?php  wp_reset_postdata(); ?>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title">We would like to hear from you.</p>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
						    	<label for="firstName">Full Name:</label>
						    	<input type="text" class="form-control" id="FirstName" >
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address:</label>
								<input type="email" class="form-control" id="exampleInputEmail1" >
							</div>
							<div class="form-group">
								<label for="firstName">Questions/Comments:</label>
								<textarea class="form-control" rows="6"></textarea>
							</div>
							<div class="form-group">
								<label for="firstName">Captcha Here:</label>
							</div>
					
							<button type="submit" class="btn btn-info btn-md center-block">Submit</button>
						</form>				   
					</div>

				</div>			
			</div>
		</div>
	</div><!--  .container-fluid -->
</section>



<section id="dbookingNews" class="sub-section press-releases" role="News">
	<div class="container-fluid">
		<div class="row">
       		<div class="col-lg-12">
       			<h2 class="text-left">BookingSuite in the News</h2>
       		</div>
       	</div>
       	<div class="row">
				<div class="col-lg-12">
	       			<h3 class="text-left">Latest News</h3>
	       		</div>
       		</div>
       		<div class="row pr-list">
					<?php 	
		            $args = array( 
		                'post_type' => 'news',
		                'posts_per_page' =>10,
		                'order'             => 'DESC',
		                'post_status' => 'publish',
		            	'tax_query' => array(
		            			'relation' => 'AND',
		            			array(
		            				'taxonomy' => 'news_category',
		            					'field'    => 'slug',
		            					'terms'    => array ('interwebs', 'press-releases')
		            			)
		            	)
		            );
		          
		            
		            $my_query = new WP_Query($args);
		            
		            while($my_query->have_posts()) : $my_query->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        			<div class="pr-list-item col-sm-2 col-md-2 col-lg-2"><?php the_date('F Y', '<span class="post-date">', '</span>'); ?></div>
	        			<div class="pr-list-item col-sm-10 col-md-10 col-lg-10">
	        				<ul>
	        				<?php if( get_field('pr_news_url') ) { ?>
	        					<li><a href="<?php the_field('pr_news_url'); ?>" target="_blank" title="<?php the_field('pr_news_vanity_name'); ?>" class="btn btn-link clearfix"><?php the_title(); ?><i class="fa fa-external-link"></i></a></li>
								<li><?php the_field('pr_news_vanity_name'); ?></li>
							<?php } else { ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php } ?>
	        				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<li>', '</li>' ); ?>
	        				</ul>
	        			</div>
	       				</article>
					<?php endwhile; ?>			
					<?php  wp_reset_postdata(); ?>
					
       		</div>
       		<div class="row">
				<div class="col-md-12 text-center">
					<div><a class="btn btn-default btn-lg" title="Product Features" href="/news/" role="button">See All News</a></div>
				</div>
			</div>		
			
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
