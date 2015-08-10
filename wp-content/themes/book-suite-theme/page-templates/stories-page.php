<?php
/**
 * Template Name: Stories Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<?php if( get_field('responsive_hero_img') ): ?>
		<img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
	<?php endif; ?>
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive small-screen' ) ); ?>
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
<!-- <section id="successNumbers" class="story-stats"> -->
<!-- 	<div class="container-fluid"> -->
<!-- 		<div class="row"> -->
<!-- 			<div class="col-md-3 col-lg-3 left-numbers"> -->
<!-- 				<div class="countries"> -->
<!-- 					<div class="inner-div"> -->
<!-- 						<div class="number-data">63</div> -->
<!-- 						<div class="number-title">Countries</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="col-md-6 col-lg-6 middle-numbers"> -->
<!-- 				<div class="row"> -->
<!-- 					<div class="col-md-12 daily-bookings"> -->
<!-- 						<div class="inner-div"> -->
<!-- 							<div class="number-title">Global Daily Bookings</div> -->
<!-- 							<div class="number-data">125k</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 					<div class="col-md-12 web-traffic"> -->
<!-- 						<div class="inner-div"> -->
<!-- 							<div class="number-data">+30%</div> -->
<!-- 							<div class="number-title">Avg. Website Traffic Increase</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="col-md-3 col-lg-3 right-numbers"> -->
<!-- 				<div class="visits"> -->
<!-- 					<div class="inner-div"> -->
<!-- 						<div class="number-title">Global Daily Visits</div> -->
<!-- 						<div class="number-data">63</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- </section> -->
<section id="successStories" class="success-stories">

<div class="container-fluid">
	
	<div id="storiesSection" class="row">
		<div class="col-md-12 success-hdr">
			<h2 class="pull-left">Partner Success</h2>
			<a id="mobileFilterBtn" class="btn btn-default btn-sm pull-right" href="#" role="button">Filter</a>
		</div>
	</div>
	<?php 
	$success_group_terms = get_terms( 'success_category' );
	$catCart = array();
	foreach ($success_group_terms as $termx ) {
		array_push($catCart, $termx->slug);
	}
	//echo "<pre>";
	//print_r($catCart);
	//echo "</pre>";
	?>	
	<div class="row">	
        <div class="col-lg-12 grid-container">
	        	
<?php
	// set up or arguments for our custom query
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$query_args = array(
		'post_type' => 'success',
		'posts_per_page' => 101,
		'tax_query' => array(
			array(
				'taxonomy' => 'success_category',
				'field'    => 'slug',
				'terms' => $catCart,
			),
		),
		'order'   => 'DESC',
		'paged' => $paged
  	);
  	// create a new instance of WP_Query
  	$the_query = new WP_Query( $query_args );
  	$postx_counter = -1;
?>	
	<div class="grid">
		<div class="gutter-sizer"></div>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>				
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
						<?php 
						
						$terms = get_the_terms( $the_query->ID , 'success_category' );
						$termsCart = array();
						// Loop over each item since it's an array
						foreach( $terms as $term ) {
							array_push($termsCart, $term->slug);
							unset($term);
						}
						$termsCartImplode =  implode(" ",$termsCart);
						
						?>			
						<div class="grid-item isotope-item <?php echo $termsCartImplode;  ?>" data-post="<?php echo $postx_counter ?>" >
	
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php 
								
								if( has_term( 'case-study', 'success_category' ) ) { ?>
									<div class="case-study"><a href="<?php the_permalink(); ?>"<span>Read the Case Study!</span></a></div>			
								<?php } ?>
								<?php if ( has_post_thumbnail() ) {  ?>
			                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('stories-tile-'.$tileImageSize, array('class' => 'img-responsive')); ?></a>
			                    <?php  } ?>
								<div class="inner-grid">
									<header>
										<?php 
										if(get_field('partner_success_url')) { ?>
										<p class="title"><a href="<?php echo get_field('partner_success_url'); ?>" target="_blank"><?php echo the_title(); ?></a></p>
										<?php } else { ?>
										<p class="title"><strong><?php echo the_title(); ?></strong></p>
										<?php } ?>
										
										<?php
										if(get_field('city')) {
											echo '<p class="location">';
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
									<?php echo the_excerpt(); ?>
	
									<ul id="gridItemFilter" class="cat-item-set tag-list">
										<li class="cat-item">Categories:</li>
									<?php
									$taxonomy = 'success_category';
									// get the term IDs assigned to post.
									$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
									// separator between links
									$separator = ', ';
			
									if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {
										
										$term_ids = implode( ',' , $post_terms );
										$terms_args = array(
												'taxonomy' => $taxonomy,
												'include' => $term_ids,
												'title_li' => "",
												'style' => 'list',
												'hierarchical' => 1,
												'echo' => 1,
												'use_desc_for_title' => 1

												);
										$cat_terms =  get_categories( $terms_args);
										
										foreach ($cat_terms as $ccc) { ?>
											<li class="cat-item cat-item-<?php echo $ccc->term_id; ?>"><a data-filter=".<?php echo $ccc->slug ;?>" href="#filter"><?php echo $ccc->name; ?></a></li>
										<?php } 
// 										echo '<pre>';
// 										print_r($cat_terms);
// 										echo '</pre>';
									}
									?>
									</ul>									
									<?php the_tags( '<ul class="tag-list"><li>Tags: </li><li rel="tag">', ', </li><li>', '</li></ul>' ); ?>
									<footer>
										<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<span>', '</span>' ); ?>
										
									</footer>		
			                	</div>
							</article>
						</div>
						<?php endwhile; ?>
						<?php  wp_reset_postdata(); ?>
					<?php else: ?>
				  <article>
				    <h1>Sorry...</h1>
				    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				  </article>
				<?php endif; ?>

		       </div>
				<div class="grid-menu">
					<div class="inner-grid-menu">
						
						<ul id="filters" class="option-set sidebar-list">
               				<li class="reset"><a data-filter="*" title="show all" href="#filter">Show All</a></li>
		                <?php 
		                //get only parents
		                $argsz = array('taxonomy'  => 'success_category','orderby' => 'name','order' => 'ASC','parent' => 0, 'hide_empty' => 1);
		                $Parent_categories = get_categories($argsz);
		                
		                foreach($Parent_categories as $category) {
		                	echo '<li class="cat-parent"><strong><span>'.$category->name.'</span></strong>';
		                	//get all children of this category
		                	$argsX = array('taxonomy' => 'success_category','orderby' => 'name', 'pad_counts' => 1, 'order' => 'ASC','parent' => $category->term_id);
		                	$Child_categories = get_categories($argsX);
		                	echo '<ul class="inner-option-set">';
		                	foreach ($Child_categories as $c){
		                		echo '<li class="cat-child"><a href="#filter" data-filter=".'.$c->slug.'"><span>'.$c->name.'</span></a><span class="count">('.$c->category_count.')</span></li>';
		                	}
		                	echo '</ul></li>';
		                	
		                }
		                ?>
		                </ul>
					</div>
				</div>		       	
        	</div>
      	</div>
		<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
			<div class="row">	
				<div class="col-lg-12">
				
					<nav class="prev-next-posts text-center">
					<?php echo get_next_posts_link( 'Older Stories', $the_query->max_num_pages ); // display older posts link ?>
					<?php echo get_previous_posts_link( 'Newer Stories' ); // display newer posts link ?>
						<div class="prev-posts-link">
							
				    	</div>
				    	<div class="next-posts-link">
				      		
				    	</div>
				  	</nav>
				  	</br>

				</div>
			</div>
		<?php } ?>
	</div>
	<?php wp_reset_query(); ?>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>

