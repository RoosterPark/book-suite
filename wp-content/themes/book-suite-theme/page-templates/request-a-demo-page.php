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
			<div class="col-md-8 col-lg-8">
				<?php if ( has_post_thumbnail() ) {  ?>
				
				<div class="row">
					<div class="col-lg-12">
<!-- 						<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=880%C3%97250&w=880&h=250" class="img-responsive" /> -->
						<?php the_post_thumbnail('post-thumbnails', array('class' => 'img-responsive')); ?>
					</div>						
				</div>	
				<?php  } ?>
				
				<div class="row">
					<div class="col-lg-12 features-box">
						<?php	
				            $args = array( 
				                'name' => 'direct-channel-management'
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
					<div class="col-lg-12 features-box">
						<?php	
				            $args = array( 
				                'name' => 'predictive-analytics'
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
					<div class="col-lg-12 features-box">
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
			<div class="col-md-4 col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<p class="panel-title">Is your brand interested in becoming a BookingSuite Connectivity Partner?</p>
							</div>
							<div class="panel-body">
								<p>Submit your inquiry here!</p>
								<form>
									<div class="form-group">
								    	<label for="bookingHotelId">Booking.com Hotel ID<i class="fa fa-asterisk"></i></label>
								    	<input type="text" class="form-control" id="bookingHotelId">
									</div>
									<div class="form-group">
								    	<label for="firstName">First Name<i class="fa fa-asterisk"></i></label>
								    	<input type="text" class="form-control" id="FirstName" >
									</div>
									<div class="form-group">
								    	<label for="lastName">Last Name<i class="fa fa-asterisk"></i></label>
								    	<input type="text" class="form-control" id="LastName" >
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address<i class="fa fa-asterisk"></i></label>
										<input type="email" class="form-control" id="exampleInputEmail1" >
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Phone Number<i class="fa fa-asterisk"></i></label>
										<input type="text" class="form-control" id="exampleInputEmail1" >
									</div>
									<div class="checkbox">
										<label class="">
											<input type="checkbox" id="inlineCheckbox1" value="PropertyWebsites"> Property Websites
										</label>
										<label class="">
											<input type="checkbox" id="inlineCheckbox2" value="PredictiveAnalytics"> Predictive Analytics
										</label>
									</div>
							
							
									<button type="submit" class="btn btn-info btn-md center-block">REQUEST DEMO</button>
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