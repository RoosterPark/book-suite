<?php	
            $args = array(
            		'post_type' => 'post',
                	'category_name' => 'homepage-slider'
            );
            $my_mob_query = new WP_Query($args);
            while($my_mob_query->have_posts()) :
            	$my_mob_query->the_post();
            ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<header id="masthead" class="site-hero" role="banner">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    <!-- Carousel
	    ================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="7000">
	      <!-- Indicators -->
<!-- 	      <ol class="carousel-indicators"> -->
<!-- 	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
<!-- 	        <li data-target="#myCarousel" data-slide-to="1"></li> -->
<!-- 	        <li data-target="#myCarousel" data-slide-to="2"></li> -->
<!-- 	      </ol> -->
	    <div id="hero" class="jumbotron">
		<div class="container-fluid">
			
				<h1 class="text-center"><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>		
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>

				<div class="jumbo-btn-group">
				<a class="btn btn-primary btn-lg" href="http://info.suite.booking.com/request-demo/en-us" target="_blank" role="button">Request A Demo</a>
				</div>
		</div>
	</div>
	      <div class="carousel-inner" role="listbox">
	       <div class="item active">
				<?php 
				$image = get_field('slide_one_image');
				
				if( !empty($image) ): ?>
				
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="jumbotron-img img-responsive small-screen" />
				
				<?php endif; ?>
				<?php 
				$image = get_field('slide_one_image_mobile');
				
				if( !empty($image) ): ?>
				
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="jumbotron-img img-responsive visible-xs-block" />
				
				<?php endif; ?>
	          <div class="container-fluid">
	            <div class="carousel-caption filter">
					<?php if( get_field('slide_one_title') ): ?>
						<h1 class="text-center"><?php the_field('slide_one_title'); ?></h1>
					<?php endif; ?>
					<?php if( get_field('slide_one_caption') ): ?>
						<p><?php the_field('slide_one_caption'); ?></p>
					<?php endif; ?>
	            </div>
	          </div>
	        </div>
	        <div class="item">
			<?php 
			$image = get_field('slide_two_image');
					
			if( !empty($image) ): ?>
		
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="jumbotron-img img-responsive small-screen" />
		
			<?php endif; ?>
			<?php 
				$image = get_field('slide_two_image_mobile');
				
				if( !empty($image) ): ?>
				
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="jumbotron-img img-responsive visible-xs-block" />
				
				<?php endif; ?>
	          <div class="container-fluid">
	            <div class="carousel-caption filter">
	            </div>
	          </div>
	        </div>
	        <div class="item">
			<?php 
			$image = get_field('slide_three_image');
					
			if( !empty($image) ): ?>
		
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="jumbotron-img img-responsive small-screen" />
		
			<?php endif; ?>
			<?php 
				$image = get_field('slide_three_image_mobile');
				
				if( !empty($image) ): ?>
				
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="jumbotron-img img-responsive visible-xs-block" />
				
				<?php endif; ?>
	          <div class="container-fluid">
	            <div class="carousel-caption filter">

	            </div>
	          </div>
	        </div>
	      </div>
<!-- 	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> -->
<!-- 	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
<!-- 	        <span class="sr-only">Previous</span> -->
<!-- 	      </a> -->
<!-- 	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> -->
<!-- 	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
<!-- 	        <span class="sr-only">Next</span> -->
<!-- 	      </a> -->
	    </div><!-- /.carousel -->
	</article>
</header>

				<?php endwhile; ?>			
				<?php  wp_reset_postdata(); ?>
<!-- #masthead -->