<!-- Plans Page Biz Intel Tab Content -->
<section class="sub-section prod-features white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Property Pricing</h1>
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
				<div class="col-xs-2 col-sm-1 col-md-2 col-lg-2">
				<?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
				</div>
				<div class="col-xs-10 col-sm-7 col-md-6 col-lg-6">
					<header class="page-header"><h1 class="text-left"><?php the_title(); ?></h1></header>
					<?php the_content(); ?>		
					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p class="text-center">', '</p>' ); ?>
				</div>
				<?php endwhile; ?>	
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
					<p><a class="btn btn-info btn-lg" role="button" href="/ratemanager" title="RateCast">Learn More</a></p>
				</div>	
				</article>	
				<?php  wp_reset_postdata(); ?>
       		
		</div>
	</div>
</section>
<section id="productDesign" class="sub-section prod-features">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Not Sure Which Plan is Right for Your Property?</h1>
			</div>	
		</div>

		<div class="row">
	    	<div class="col-md-12 text-center">
	        	<div class="bgroup"><a class="btn btn-default btn-lg" role="button" href="/product-features/" title="Product Features">See All Features</a></div>
	    	</div>
		</div>
	</div>
</section>