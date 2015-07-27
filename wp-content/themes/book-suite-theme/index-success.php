
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<h2>BookingSuite Partner Success</h2>
		</div>
	</div>
	<div class="row">	
        <div class="col-sm-12 col-md-6">
        	<div class="row">
		        <?php 
		//        $out = get_taxonomies(); 
		//        print_r($out); 
		
		       $args = array( 
		       		'post_type' => 'success_stories',
		       		'posts_per_page' => 2,
		       		'tax_query' => array(
		       				array(
		       						'taxonomy' => 'success_stories',
		       						'field'    => 'slug',
		       						'terms'    => 'video',
		       				),
		       		),
		       		'order'   => 'DESC',
		       );
		      $loop = new WP_Query( $args );
		       	
		       	$postx_counter = -1;
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				 	<?php 
				 	$postx_counter++;  
				 	if (($postx_counter == 1) || ($postx_counter == 7)) {
						echo "</div><div class=\"row inner\">";
				 	}
				 	?>
					<div class="col-md-12" data-post="<?php echo $postx_counter ?>">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="success-content video">
							<header>
								<div class="title">
									<p class="h5"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></p>
									<?php echo the_excerpt(); ?>
								</div>
							</header>
							<div class="play"><img src="/wp-content/uploads/2015/07/play-btn.png" alt="Play"/></div>
							<div class="filter"></div>
							<?php if ( has_post_thumbnail() ) {  ?>
		                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('success-stories-land', array('class' => 'img-responsive')); ?></a>
		                    <?php  } ?>
		                    <?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
		                </div>
						</article>
					</div>
					<?php
				endwhile;  
		//         echo "<pre>";
		//         print_r($loop);
		//         echo "</pre>";
		        ?>
		        <?php wp_reset_postdata(); ?>        	
        	</div>

      </div> 
      <div class="col-sm-12 col-md-6">
      	<div class="row">
        <?php 
//        $out = get_taxonomies(); 
//        print_r($out); 

       $args = array( 
       		'post_type' => 'success_stories',
       		'posts_per_page' => 4,
       		'tax_query' => array(
       				array(
       						'taxonomy' => 'success_stories',
       						'field'    => 'slug',
       						'terms'    => 'story',
       				),
       		)
       	);
       	$loop = new WP_Query( $args );
       	
       	$postx_counter = -1;
		while ( $loop->have_posts() ) : $loop->the_post();
		?>
		 	<?php 
		 	$postx_counter++;  
		 	if (($postx_counter == 2) || ($postx_counter == 7)) {
				echo "</div><div class=\"row inner\">";
		 	}
		 	?>
			<div class="col-xs-6 col-sm-6 col-md-6" data-post="<?php echo $postx_counter ?>">
				<div class="success-content story">
					<header>
						<div class="title">
							<p class="h5"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></p>
							<?php echo the_excerpt(); ?>
						</div>
					</header>
					<div class="filter"></div>
					<?php if ( has_post_thumbnail() ) {  ?>
	                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('success-stories-port', array('class' => 'img-responsive')); ?></a>
	                    <?php  } ?>
	                    <?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
				</div>
			</div>
			<?php
		endwhile; 
        ?>
        <?php wp_reset_postdata(); ?>
		</div>
	</div> 
</div>
      
	<div class="row">
		<div class="col-md-12 cta-link">
			<a class="btn btn-info btn-lg" role="button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">VIEW MORE PARTNER STORIES</a>		
		</div>
	</div>
</div>