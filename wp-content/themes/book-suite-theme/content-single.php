<?php
/**
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?>


<section id="pageMasthead" class="page-hero" role="banner">
			<?php if ( has_post_thumbnail() ) {  ?>
			<?php the_post_thumbnail('featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive' )); ?>
			<?php  } ?>
</section>
<section class="sub-section white ">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 entry-content">
					<header class="entry-header page-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php upbootwp_posted_on_date(); ?>
					</header><!-- .entry-header -->
					<?php the_content(); ?>
					<footer class="entry-meta">
					
					
					<?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'upbootwp' ),'after'  => '</div>',) ); ?>
			
					<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
					</footer><!-- .entry-meta -->	
				</div>
				<div class="col-md-offset-1 col-md-3 recent-cposts">
					<?php if(has_term( 'case-study', 'success_category' ) ) { ?>
					<h2>More Case Studies</h2>
					<?php } else { ?>
					<h2>Recent Posts</h2>
					<?php } ?>
					<?php 
						if(has_term( 'case-study', 'success_category' ) ) { 
							$query_args = array(
								'post_type' => 'success',
								'posts_per_page' => 5,
								'tax_query' => array(
									array(
										'taxonomy' => 'success_category',
										'field'    => 'slug',
										'terms'    => array( 'case-study' ),
									),
								),
								'order'   => 'DESC',
								'orderby' => 'date'
						  	);
						}
						if(has_term( 'press-releases', 'news_category' )) {
							$query_args = array(
									'post_type' => 'news',
									'posts_per_page' => 5,
									'tax_query' => array(
											array(
													'taxonomy' => 'news_category',
													'field'    => 'slug',
													'terms'    => array( 'press-releases' ),
											),
									),
									'order'   => 'DESC',
									'orderby' => 'date'
							);
						}
					  	// create a new instance of WP_Query
					  	$the_query = new WP_Query( $query_args );
					  	
					  	$postx_counter = -1;
					  	
					  	if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
					  		
					  		<?php 					 	
						 	$postx_counter++; 
						 	if (($postx_counter % 3 == 0)) {
						 		$tileImageSize = "360";
						 	} elseif (($postx_counter % 3 ==1)) {
						 		$tileImageSize = "270";
						 	}else {
						 		$tileImageSize = "180";	
						 	}
						 	?>
						
					  		<div class="inner-grid-list" data-post-count="<?php echo $postx_counter ?>">
					  			<?php if(has_term( 'case-study', 'success_category' ) ) { ?>
						  			<?php if ( has_post_thumbnail() ) {  ?>
				                    	<?php the_post_thumbnail('stories-tile-'.$tileImageSize, array('class' => 'img-responsive')); ?>
				                    <?php  } ?>
				                 <?php  } ?>
								<header>
									<p class="title-list"><a href="<?php echo the_permalink(); ?>"><strong><?php echo the_title(); ?></strong></a></p>

										<?php
										if(get_field('city')) {
											echo '<p class="location-list">';
											if(get_field('city')) {
												echo get_field('city');
											}
											if(get_field('state')) {
												echo ', '.get_field('state');
											}
											if(get_field('country')) {
												echo ', '.get_field('country');
											}
											echo '</p>';
										}
										?>
								</header>
							</div>
					  	<?php endwhile; ?>
					  	<?php  wp_reset_postdata(); ?>
					  	<?php endif; ?>
				</div>
			</div>
			<?php if(has_term( 'case-study', 'success_category' ) ) { ?>
			<div class="row">
				<div class="col-md-12 text-center">
					<div><a class="btn btn-default btn-lg" title="Success Stories" href="/stories/" role="button">See All Success Stories</a></div>
				</div>
			</div>	
			<?php } ?>
			
			<?php if(has_term( 'press-releases', 'news_category' ) ) { ?>
				 <div class="row">
					<div class="col-md-12 text-center">
						<div><a class="btn btn-default btn-lg" title="Product Features" href="/news/" role="button">See All News</a></div>
					</div>
				</div>	
			<?php } ?>
		</div>
	</article><!-- #post-## -->
</section>

