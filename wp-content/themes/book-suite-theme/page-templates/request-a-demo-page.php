<?php
/*
 * Template Name: Request-a-Demo Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<section id="conectivityIntro" class="sub-section lt-blue request-hero">
	<div class="container-fluid">
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>	
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php the_content(); ?>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'upbootwp' ),
					'after'  => '</div>',
				));
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
	<?php endwhile; // end of the loop. ?>
	</div>
</section>
<section id="connectivityPartners" class="sub-section white request-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-12">
						<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=550%C3%97175&w=550&h=175" class="img-responsive" />
					</div>						
				</div>	
				<div class="row">
					<div class="col-lg-12 prod-features">
						<?php	
				            $args = array( 
				                'name' => 'premium-services'
				            );
				            $my_ff_query = new WP_Query($args);
				            while($my_ff_query->have_posts()) :
				            	$my_ff_query->the_post();
				            ?>
				            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="icon">
									<?php if ( has_post_thumbnail() ) {  ?>
									<?php the_post_thumbnail('post-thumbnails', array('class' => 'svg')); ?>
									<?php  } ?>
								</div>
								<div class="content">
									<header class="title">
											<h4><?php echo the_title(); ?></h4>	
									</header>
										<?php echo the_excerpt(); ?>
										<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
								</div>
							</article>
						<?php endwhile; ?>			
						<?php  wp_reset_postdata(); ?>
					</div>			
				</div>
				<div class="row">
					<div class="col-lg-12 prod-features">
						<?php	
				            $args = array( 
				                'name' => 'premium-services'
				            );
				            $my_ff_query = new WP_Query($args);
				            while($my_ff_query->have_posts()) :
				            	$my_ff_query->the_post();
				            ?>
				            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="icon">
									<?php if ( has_post_thumbnail() ) {  ?>
									<?php the_post_thumbnail('post-thumbnails', array('class' => 'svg')); ?>
									<?php  } ?>
								</div>
								<div class="content">
									<header class="title">
											<h4><?php echo the_title(); ?></h4>	
									</header>
										<?php echo the_excerpt(); ?>
										<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
								</div>
							</article>
						<?php endwhile; ?>			
						<?php  wp_reset_postdata(); ?>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-12 prod-features">
					<?php	
			            $args = array( 
			                'name' => 'premium-services'
			            );
			            $my_ff_query = new WP_Query($args);
			            while($my_ff_query->have_posts()) :
			            	$my_ff_query->the_post();
			            ?>
			            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="icon">
								<?php if ( has_post_thumbnail() ) {  ?>
								<?php the_post_thumbnail('post-thumbnails', array('class' => 'svg')); ?>
								<?php  } ?>
							</div>
							<div class="content">
								<header class="title">
										<h4><?php echo the_title(); ?></h4>	
								</header>
									<?php echo the_excerpt(); ?>
									<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
							</div>
						</article>
					<?php endwhile; ?>			
					<?php  wp_reset_postdata(); ?>
					</div>				
				</div>
			</div>
			<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<p class="panel-title">Is your brand interested in becoming a BookingSuite Connectivity Partner?</p>
							</div>
							<div class="panel-body">
								<p>Submit your inquiry here!</p>
								<form>
									<div class="form-group">
								    	<label for="bookingHotelId">Booking.com Hotel ID</label>
								    	<input type="text" class="form-control" id="bookingHotelId" placeholder="Name">
									</div>
									<div class="form-group">
								    	<label for="firstName">First Name</label>
								    	<input type="text" class="form-control" id="FirstName" placeholder="First Name">
									</div>
									<div class="form-group">
								    	<label for="lastName">Last Name</label>
								    	<input type="text" class="form-control" id="LastName" placeholder="last Name">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Phone Number</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
									</div>
									<div class="form-group">
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox1" value="PropertyWebsites"> Property Websites
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox2" value="PredictiveAnalytics"> Predictive Analytics
										</label>
									</div>
							
							
									<button type="submit" class="btn btn-info btn-md pull-right">REQUEST DEMO</button>
								</form>				   
							</div>
							<div class="panel-footer">
								<p>Not a Booking.com property partner?</p>
								<p><a href="#" title="Sign Up">Sign Up For Free</a></p>
							</div>
						</div>			
			</div>		
		</div>					
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>