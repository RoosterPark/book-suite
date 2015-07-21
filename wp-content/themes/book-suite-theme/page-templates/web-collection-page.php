<?php
/**
 * Template Name: WebCollection Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<img src="/wp-content/uploads/2015/07/webcollectionshero-mobile.jpg" class="jumbotron-img img-responsive visible-xs-block" />
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
<section id="interactiveHotelFinder" class="sub-section white-alt">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'interactive-hotel-finder'
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
	
	<?php if( get_field('interactive_hotel_image') ): ?>
	<div class="row">
		<div class="col-lg-12">
			<img class="img-responsive wp-post-image" src="<?php the_field('interactive_hotel_image'); ?>" />
		</div>
	</div>
	<?php endif; ?>
	</div>
</section>
<section id="modernWebAndBooking" class="sub-section prod-features lt-blue">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Modern Website Design & Seamless Booking</h1>
			</div>	
		</div>
		<div class='row odd'>
		<?php 
				
		$args = array( 
			'post_type' => 'post',
			'category_name' => 'webcollection',
			//'tag' => 'featured', //must use tag id for this field
			'posts_per_page' => -1, //get all posts
		 	'order'   => 'DESC'
		);
			$loop = new WP_Query( $args );
				
			$postx_counter = 0;

			while ( $loop->have_posts() ) : $loop->the_post();
				$postx_counter++;  
				

				?>
				<div class="col-md-4 features-box" data-post="<?php echo $postx_counter ?>">
					<div class="icon">
						<?php if ( has_post_thumbnail() ) {  ?>
						<?php the_post_thumbnail('post-thumbnails', array('class' => 'svg')); ?>
						<?php  } ?>
					</div>
					<div class="content">
						<header>
							<div class="title">
								<p class="h5"><?php echo the_title(); ?></p>	
							</div>
							<?php echo the_excerpt(); ?>
							
							<?php
								if(get_field('product_associations')) :
									echo "<p>";
									$field = get_field_object('product_associations');
									$value = get_field('product_associations');
									//print_r($value);
								
									foreach ($value as $val) :
									    echo "<span class=\"badge\">".$val."</span>"; 
									endforeach;
									echo "</p>";
								endif; 
							?>
							
							<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
						</header>
					</div>
				</div>
				<?php
				if ($postx_counter % 3 ==0 ) {
					echo "</div><div class='row even'>";
				}

				
			endwhile;  
				
			wp_reset_postdata();
					
			?>  
		</div>	
	</div>
</section>
<section id="premiumServices" class="sub-section premium lt-grey">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php	
	            $args = array( 
	                'name' => 'booking-com-premium-services'
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
	
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 text-left">
			<p><strong>Dedicated Performance ManagerDedicated </strong></p>
			<p><strong>Monthly performance and strategy consultation</strong></p>
			<p><strong>Quarterly business reviews</strong></p>
			<p><strong>SEO & IT support from our digital marketing product experts</strong></p>
			<p><strong>TripAdvisor TripConnect support</strong></p>
			<p><strong>Content creation</strong></p>
			<p><strong>Translation Support</strong></p>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
		<?php if( get_field('premium_service_image') ): ?>
			<img class="img-responsive wp-post-image" src="<?php the_field('premium_service_image'); ?>" />
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 request-demo">
			<a class="btn btn-primary btn-lg" role="button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Request a Demo</a>
		</div>
	</div>

	</div>
</section>
<section id="clientComm" class="sub-section solutions lt-blue" >
<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-md-6 link-cta text-left">
				<?php	
	            $args = array( 
	                'name' => 'web-direct-post'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <?php //the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<header><h1><?php the_title(); ?></h1></header>
				<?php the_content(); ?>		
				
				<footer>
					<a class="btn btn-default btn-lg clear" title="<?php the_title(); ?>" href="/webdirect/" role="button">Learn More</a>
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
					<a class="btn btn-default btn-lg clear" title="<?php the_title(); ?>" href="/webcollection/" role="button">Learn More</a>
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
