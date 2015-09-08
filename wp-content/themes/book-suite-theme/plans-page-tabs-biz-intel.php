<!-- Plans Page Biz Intel Tab Content -->
<section id="Biz-Intel" class="sub-section prod-features white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Business Intelligence</h1>
			</div>	
		</div>
		<div class="row">
			
				<?php	
	            $args = array( 
	                'name' => 'ratecast-post'
	            );
	            $my_ff_query = new WP_Query($args);
	            while($my_ff_query->have_posts()) :
	            	$my_ff_query->the_post();
	            ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('bizIntel'); ?>>
				<div class="col-md-offset-2 col-lg-2">
				<?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				</div>
				<div class="col-lg-4">
					<header class="page-header"><h1 class="text-left"><?php the_title(); ?></h1></header>
					<?php the_content(); ?>		
					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</div>
				<?php endwhile; ?>	
				<div class="col-lg-4 text-center">
					<p><a class="btn btn-info btn-lg btn-block" role="button" href="/ratecast" title="RateCast">Learn More</a></p>
					<p><a class="btn btn-default btn-lg btn-block" role="button" href="/product-features/" title="Product Features">See All Plan Features</a></p>
				</div>	
				</article>	
				<?php  wp_reset_postdata(); ?>
       		
		</div>
	</div>
</section>