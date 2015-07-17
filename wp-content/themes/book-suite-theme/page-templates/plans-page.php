<?php
/**
 * Template Name: Plans Page
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
<section id="propertyWebsites" class="sub-section white solutions">
	<div class="container-fluid">
		<div class="row">
		<?php 		$catName =  get_cat_ID("Property Websites");	
		            $args = array( 
		                'post_type' => 'post',
		                'posts_per_page' =>3,
		                'orderby' => 'post_date',
		                'order' => 'date' ,
		                'cat' => $catName,
		                'post_status' => 'publish',
		            );
		          
		            
		            $my_query = new WP_Query($args);
		            
		            while($my_query->have_posts()) :
		            	$my_query->the_post();
		            ?>
				
		        <div class="col-xs-12 col-sm-4 col-md-4 properties">
		        	<?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				<div class="h3"><?php the_title(); ?></div>
				<?php the_content(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
				<footer>
					<a class="btn btn-info btn-lg" title="<?php the_title(); ?>" href="/<?php the_title(); ?>" role="button">Learn More</a>
				</footer>
		        </div>
					<?php endwhile; ?>			
		<?php  wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<section id="productDesign" class="sub-section prod-features lt-grey">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Included in all website plans</h1>
			</div>	
		</div>
		<div class='row odd'>
		<?php 
				
		$args = array( 
			'post_type' => 'post',
			'category_name' => 'product-features',
			'tag' => 'featured', //must use tag id for this field
			'posts_per_page' => -1, //get all posts
		 	'order'   => 'DESC'
		);
			$loop = new WP_Query( $args );
				
			$postx_counter = 0;

			while ( $loop->have_posts() ) : $loop->the_post();
				$postx_counter++;  
				

				?>
				<div class="col-xs-12 col-md-6 col-md-4 features-box" data-post="<?php echo $postx_counter ?>">
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
		<div class="row">
	    	<div class="col-md-12 text-center">
	        	<p><a class="btn btn-default btn-lg" role="button" href="/product-features/" title="Product Features">See All Product Features</a></p>
	    	</div>
		</div>
	</div>
</section>
<section id="designChoicesGalore" class="section-hero md-grey">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<h1 class="text-center">Predictive Analytics</h1>
			</div>
		</div>
		<div class="row">
				<?php	
	            $args = array( 
	                'name' => 'ratecast'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
	            <div class="col-lg-2">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?></a>
				</div>
				<div class="col-lg-7">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>		
					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
				</div>
				<div class="col-lg-3">
					<a class="btn btn-info btn-lg" title="<?php the_title(); ?>" href="/<?php the_title(); ?>" role="button">Learn More</a>
				</div>
				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>

<?php get_footer(); ?>
