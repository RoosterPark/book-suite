<?php
/*
 * Template Name: Contact Us Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="contactUsIntro" class="sub-section white contact-hero">
	<div class="container-fluid">
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>	
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php the_content(); ?>
			<?php 
			$ebtn_text =  __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' );
			edit_post_link($ebtn_text,'<p>','</p>' );
			?>
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
<?php  wp_reset_postdata(); ?>
<section id="connectWithBooking" class="sub-section white contact-content">
	<div class="container-fluid">

		<div class="row panel contact-items">
			<div class="col-sm-8 col-md-8 col-lg-8"><h4><?php echo $title_text = _e( 'I want to get started with BookingSuite', 'upbootwp' ); ?></h4></div>
			<div class="col-sm-4 col-md-4 col-lg-4 text-center"><a href="https://admin.booking.com/" onclick="trackOutboundLink('https://admin.booking.com/'); return false;" target="_blank" class="btn btn-info btn-md" title="<?php echo $btn_text = _e( 'Sign up', 'upbootwp' ); ?>"><?php echo $btn_text = _e( 'Sign up', 'upbootwp' ); ?></a></div>
		</div>
		<div class="row panel contact-items">
			<div class="col-sm-8 col-md-8 col-lg-8"><h4><?php echo $title_text = _e( 'I want to log in to my BookingSuite account', 'upbootwp' ); ?></h4></div>
			<div class="col-sm-4 col-md-4 col-lg-4 text-center"><a href="http://suite.booking.com/login/<?php echo $lang_par;?>" class="btn btn-info btn-md " title="<?php echo $btn_text = _e( 'Log In', 'upbootwp' ); ?>"><?php echo $btn_text = _e( 'Log In', 'upbootwp' ); ?></a></div>
		</div>
		<div class="row panel contact-items">
			<div class="col-sm-8 col-md-8 col-lg-8"><h4><?php echo $title_text = _e( 'I need to become a Booking.com partner', 'upbootwp' ); ?></h4></div>
			<div class="col-sm-4 col-md-4 col-lg-4 text-center "><a href="https://join.booking.com/" target="_blank" class="btn btn-info btn-md" title="<?php echo $btn_text = _e( 'Join Booking', 'upbootwp' ); ?>"><?php echo $btn_text = _e( 'Join Booking', 'upbootwp' ); ?></a></div>
		</div>				
	</div>
</section>
<section id="speakWithBooking" class="sub-section white contact-content">
	<div class="container-fluid">
<!--		<div class="row">
			<div class="col-md-12">
				<h2><?php echo $title_text = _e( 'Speak With a Partner Success Representative', 'upbootwp' ); ?></h2>
			</div>
		</div>	-->
<!--		<div class="row">
			<div class="col-md-3"><p><?php echo $title_text = _e( 'Regional Partner Support Offices:', 'upbootwp' ); ?></p></div>
			<div class="col-md-9">
				<div class="row">
				<?php $catName =  get_cat_ID("regional contact");	
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
            
            while($my_query->have_posts()) :
            	$my_query->the_post();
            ?>
		
        <div class="col-xs-12 col-sm-6 col-md-6 regional-contacts">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="h5"><?php the_title(); ?></div>
			<?php if(! is_page('solutions')) {
				the_content();
			}
			?>	
		<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
        </article>
        </div>
       
			<?php endwhile; ?>			
<?php  wp_reset_postdata(); ?>
				</div>
			</div>
		</div>-->
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>