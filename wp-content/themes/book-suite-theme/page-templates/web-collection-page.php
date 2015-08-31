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
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
		</div>
	</div>
	</article>
<?php endwhile; // end of the loop. ?>
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
	            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
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
<section id="modernWebAndBooking" class="sub-section solutions lt-blue alt">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<header class="page-header"><h1>Your Brand Is The Bottom Line</h1></header>
			</div>	
		</div>
		<div class='row more-features'>
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
				<div class="col-sm-4 col-md-4" data-post="<?php echo $postx_counter ?>">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( has_post_thumbnail() ) {  ?>
						<?php the_post_thumbnail('post-thumbnails', array('class' => 'svg')); ?>
						<?php  } ?>
						<!-- <p class="h5"><?php //echo the_title(); ?></p> -->	
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
							
							<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
						</article>
					</div>
				<?php
				if ($postx_counter % 3 ==0 ) {
					echo "</div><div class='row more-features'>";
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
		<div class="col-sm-6 col-md-6 col-lg-6 text-left entry-content">
			<?php	
	            $args = array( 
	                'name' => 'premium-services-key-points'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
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
			<div class="col-sm-12 col-md-6 col-lg-6 link-cta left-cta">
				<?php	
	            $args = array( 
	                'name' => 'web-direct-post'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	            <?php //the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<header><h1><?php the_title(); ?></h1></header>
				<?php the_content(); ?>	
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>	
				
				<footer>
					<a class="btn btn-default btn-lg clear" title="<?php the_title(); ?>" href="/webdirect/" role="button">Learn More</a>
					
				</footer>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>
       		<div class="col-sm-12 col-md-6 col-lg-6 link-cta right-cta">
				<?php	
	            $args = array( 
	                'name' => 'web-complete-post'
	            );
	            $my_cs_query = new WP_Query($args);
	            while($my_cs_query->have_posts()) :
	            	$my_cs_query->the_post();
	            ?>
	            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	            <?php //the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<header><h1><?php the_title(); ?></h1></header>
				<?php the_content(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
				<footer>
					<a class="btn btn-default btn-lg clear" title="<?php the_title(); ?>" href="/webcomplete/" role="button">Learn More</a>
					
				</footer>
				</article>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
       		</div>	    
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
