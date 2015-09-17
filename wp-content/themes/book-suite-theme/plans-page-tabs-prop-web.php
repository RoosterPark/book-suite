<!-- Plans Page Biz Intel Tab Content -->

<section class="sub-section white-alt">
	<div class="container-fluid">
		<div class="row">
       		<div class="col-sm-offset-2 col-md-offset-2 col-sm-4 col-md-4 col-lg-4 compare-plans">
				<section class="text-center">
						<?php 
						$my_query = new WP_Query('name=web-direct-post');
						while($my_query->have_posts()){
						        $my_query->the_post();
						?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php the_post_thumbnail('homepage-thumb', array('class' => "icon svg", 'alt'  => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
								<header>
									<h2><?php the_title() ?></h2>
								</header>
		        				<div class="content">
		        					<?php the_excerpt(); ?>
		        					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
		        				</div>
		        				<footer>
									<a class="btn btn-info btn-lg" title="<?php the_title(); ?>" href="/<?php the_title(); ?>" role="button">Learn More</a>
								</footer>
		        			</article>
						<?php } ?>
						<?php  wp_reset_postdata(); ?>
					<ul class="options">
						<li class="opt-items">
							<h3>Price</h3>
							<p>10% Commission</p>
						</li>
						<li class="opt-items">
							<h3>Website Pages</h3>
							<p>Homepage, Rooms, Photos, Location, Amenities, & Reviews</p>
						</li>
						<li class="opt-items">
							<h3>Analytics</h3>
							<p>Basic</p>
						</li>
						<li class="opt-items">
							<h3>Mobile-friendly design</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>
						<li class="opt-items">
							<h3>Translation Support</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>							
					</ul>
				</section>
       		</div>
       		<div class="col-sm-4 col-md-4 col-lg-4 compare-plans">
				<section class="text-center">
					<?php 
					$my_query = new WP_Query('name=web-complete-post');
					while($my_query->have_posts()){
					        $my_query->the_post();
					?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_post_thumbnail('homepage-thumb', array('class' => "icon svg", 'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ))); ?>
							<header>
								<h2><?php the_title() ?></h2>
							</header>
	        				<div class="content">
	        					<?php the_excerpt(); ?>
	        					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
	        				</div>
	        				<footer>
								<a class="btn btn-info btn-lg" title="<?php the_title(); ?>" href="/<?php the_title(); ?>" role="button">Learn More</a>
							</footer>
	        			</article>
					<?php } ?>
					<?php  wp_reset_postdata(); ?>
					<ul class="options">
						<li class="opt-items">
							<h3>Price</h3>
							<p>Subscription</p>
							<small>Contact us to learn more</small>
						</li>
						<li class="opt-items">
							<h3>Website Pages</h3>
							<p>Unlimited</p>
						</li>
						<li class="opt-items">
							<h3>Analytics</h3>
							<p>Advanced</p>
						</li>
						<li class="opt-items">
							<h3>Mobile-friendly design</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>
						<li class="opt-items">
							<h3>Translation Support</h3>
							<img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
						</li>					
					</ul>
				</section>
       		</div>
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