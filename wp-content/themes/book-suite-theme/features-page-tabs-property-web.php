<section id="productDesign" class="sub-section prod-features white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Design</h1>
			</div>	
		</div>
		<?php 
				
		$args = array( 
			'post_type' => 'post',
			'category_name' => 'product-features',
			'tag' => 'design', //must use tag id for this field
			'posts_per_page' => -1, //get all posts
		 	'order'   => 'DESC'
		);
			$loop = new WP_Query( $args );
				
			$postx_counter = 0;

			while ( $loop->have_posts() ) : $loop->the_post();
				$postx_counter++;  
				if ($postx_counter == 1 ) {
					echo "<div class='row'>";
				} 
				?>
				<div class="col-md-4 features-box" data-post="<?php echo $postx_counter ?>">
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

				if ($postx_counter % 3 == 0 ) {
					echo "</div>";
					$postx_counter = 0;
				} 
			endwhile;  
			
			wp_reset_postdata();
					
			?>   
	</div>
</section>
<section id="cloudTechnology" class="sub-section prod-features lt-grey">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Cloud Technology</h1>
			</div>
		</div>
			<?php 
					
			$args = array( 
				'post_type' => 'post',
				'category_name' => 'product-features',
				'tag' => 'cloud-technology', //must use tag id for this field
				'posts_per_page' => -1, //get all posts
			 	'order'   => 'DESC'
			);
			$loop = new WP_Query( $args );
				
			$postx_counter = 0;

			while ( $loop->have_posts() ) : $loop->the_post();
				$postx_counter++;  
				if ($postx_counter == 1 ) {
					echo "<div class='row'>";
				} 
				?>
				<div class="col-md-4 features-box" data-post="<?php echo $postx_counter ?>">
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

				if ($postx_counter % 3 == 0 ) {
					echo "</div>";
					$postx_counter = 0;
				} 
			endwhile;  
			
			wp_reset_postdata();
					
			?> 
	</div>
</section>
<section id="measuringSuccess" class="sub-section prod-features white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Measuring Success</h1>
			</div>
		</div>
			<?php 
					
			$args = array( 
				'post_type' => 'post',
				'category_name' => 'product-features',
				'tag' => 'measuring-success', //must use tag id for this field
				'posts_per_page' => -1, //get all posts
			 	'order'   => 'DESC'
			);
			$loop = new WP_Query( $args );
				
			$postx_counter = 0;

			while ( $loop->have_posts() ) : $loop->the_post();
				$postx_counter++;  
				if ($postx_counter == 1 ) {
					echo "<div class='row'>";
				} 
				?>
				<div class="col-md-4 features-box" data-post="<?php echo $postx_counter ?>">
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

				if ($postx_counter % 3 == 0 ) {
					echo "</div>";
					$postx_counter = 0;
				} 
			endwhile;  
			
			wp_reset_postdata();
					
			?>  
	</div>
</section>
<section id="bookingIntergrations" class="sub-section prod-features lt-grey">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Booking &amp; Intergrations</h1>
			</div>
		</div>

			<?php 
					
			$args = array( 
				'post_type' => 'post',
				'category_name' => 'product-features',
				'tag' => 'booking-intergrations', //must use tag id for this field
				'posts_per_page' => -1, //get all posts
			 	'order'   => 'DESC'
			);
			$loop = new WP_Query( $args );
				
			$postx_counter = 0;

			while ( $loop->have_posts() ) : $loop->the_post();
				$postx_counter++;  
				if ($postx_counter == 1 ) {
					echo "<div class='row'>";
				} 
				?>
				<div class="col-md-4 features-box" data-post="<?php echo $postx_counter ?>">
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

				if ($postx_counter % 3 == 0 ) {
					echo "</div>";
					$postx_counter = 0;
				} 
			endwhile;  
			
			wp_reset_postdata();
					
			?>   	
	</div>
</section>
<section id="support" class="sub-section prod-features white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Support</h1>
			</div>
		</div>
			<?php 
					
			$args = array( 
				'post_type' => 'post',
				'category_name' => 'product-features',
				'tag' => 'support', //must use tag id for this field
				'posts_per_page' => -1, //get all posts
			 	'order'   => 'DESC'
			);
			$loop = new WP_Query( $args );
				
			$postx_counter = 0;

			while ( $loop->have_posts() ) : $loop->the_post();
				$postx_counter++;  
				if ($postx_counter == 1 ) {
					echo "<div class='row'>";
				} 
				?>
				<div class="col-md-4 features-box" data-post="<?php echo $postx_counter ?>">
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

				if ($postx_counter % 3 == 0 ) {
					echo "</div>";
					$postx_counter = 0;
				} 
			endwhile;  
			
			wp_reset_postdata();
					
			?>    
	</div>
</section>