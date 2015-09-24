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
					
					<?php
					if(get_field('success_quote')) {
						echo '<div class="quote-title"><p><i class="fa fa-quote-left"></i>' . get_field('success_quote') . '<i class="fa fa-quote-right"></i></p></div>';
					}
					if(get_field('success_quote_orgin')) {
						echo '<div class="quote-subtitle"><p><i class="fa fa-minus"></i><span>' . get_field('success_quote_orgin') . '</span></p></div>';
					}
					if(get_field('success_story_link')) {
						
						?>
						<div class="quote-link"><a class="btn btn-info btn-lg" title="Read the Story" href="<?php get_field('success_story_link'); ?>" role="button"><?php echo $title_text = _e( 'Read The Story', 'upbootwp' ); ?></a></div>';
					<?php 
					}
					?>
					
				<?php //the_content(); ?>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</section>
<section id="successStories" class="success-stories">

<div class="container-fluid">
	
	<div id="storiesSection" class="row">
		<div class="col-xs-8 col-sm-8 col-md-8 success-header success-hdr">
			<h2><?php echo $title_text = _e( 'Partner Success', 'upbootwp' ); ?></h2>
			
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 success-hdr text-right">
			
			<button id="mobileFilterBtn" class="btn btn-default btn-sm" role="button" title="<?php echo $title_text = _e( 'Filter', 'upbootwp' ); ?>"><?php echo $title_text = _e( 'Filter', 'upbootwp' ); ?></button>
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
		'posts_per_page' => -1,
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
							//unset($term);
						}
						$termsCartImplode =  implode(" ",$termsCart);
						
						?>			
						<div class="grid-item isotope-item <?php echo $termsCartImplode;  ?>" data-post="<?php echo $postx_counter ?>" >
	
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php 
								if( has_term( 'case-study', 'success_category' ) ) { ?>
									<?php if ( has_term( 'story', 'success_category' ) && has_term( 'video', 'success_category' )) { ?>
										<a href="<?php the_permalink(); ?>"><div class="case-study"><span>Watch the Video</span><i class="fa fa-book"></i><i class="fa fa-play-circle-o"></i></div></a>
									<?php } elseif( has_term( 'story', 'success_category' )) { ?>
										<a href="<?php the_permalink(); ?>"><div class="case-study"><span>Read the Case Study</span><i class="fa fa-book"></i></div></a>
									<?php } elseif(has_term( 'video', 'success_category' ) ) { ?>
										<a href="<?php the_permalink(); ?>"><div class="case-study"><span>Watch the Video</span><i class="fa fa-play-circle-o"></i></div></a>
									<?php } else {?>
										<a href="<?php the_permalink(); ?>"><div class="case-study"><span>Read the Case Study</span><i class="fa fa-book"></i></div></a>	
									<?php }?>				
								<?php } ?>
								<?php if ( has_post_thumbnail() ) {  ?>
			                    	<?php 
			                    	$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'stories-tile-'.$tileImageSize ); 
			                    	//$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'stories-tile-360' ); // returns an array// returns an array
			                    	?>
			                    	<?php 
										if( has_term( 'case-study', 'success_category' ) ) { ?>
										<a href="<?php  the_permalink() ?>">		
			                    			<img class="lazy img-responsive" data-original="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>"/>
			                    		</a>
			                    		<?php } else { ?>
			                    		<a href="<?php echo get_field('partner_success_url'); ?>" target="_blank">		
			                    			<img class="lazy img-responsive" data-original="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>"/>
			                    		</a>
			                    		<?php } ?>
			                     	<noscript>
								 		<?php if ( has_post_thumbnail() ) {  ?>
			                    			<?php the_post_thumbnail('stories-tile-'.$tileImageSize, array('class' => 'img-responsive')); ?>
			                    		<?php  } ?>
									</noscript>
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
									<?php //echo the_excerpt(); ?>
	
									<ul id="gridItemFilter" class="cat-item-set tag-list">
										<li class="cat-item">Categories:</li>
									<?php
									$taxonomy = 'success_category';
									// get the term IDs assigned to post.
									$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
			
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
										$catPostCart = array();
										foreach ($cat_terms as $ccc) { ?>
											<li class="cat-item cat-item-<?php echo $ccc->term_id; ?>"><a data-filter=".<?php echo $ccc->slug ;?>" href="#filter"><?php echo $ccc->name; ?></a></li>
										<?php } 
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
				<div id="filterMenu" class="grid-menu">
					<div class="inner-grid-menu">
						
						<ul id="filters" class="option-set sidebar-list">
               				<li class="reset"><a id="reset-btn" class="btn btn-info btn-sm" role="button" data-filter="*" title="<?php echo $title_text = _e( 'Show All', 'upbootwp' ); ?>" href="#filter"><?php echo $title_text = _e( 'Show All', 'upbootwp' ); ?></a></li>
		                <?php 
		                //get only parents
		                $argsz = array('taxonomy'  => 'success_category','orderby' => 'name','order' => 'DESC','parent' => 0, 'hide_empty' => 1);
		                $Parent_categories = get_categories($argsz);
		                
		                foreach($Parent_categories as $category) {
		                	echo '<li class="cat-parent"><h5><span>'.$category->name.'</span></h5>';
		                	//get all children of this category
		                	$argsX = array('taxonomy' => 'success_category','orderby' => 'name', 'pad_counts' => 1, 'order' => 'ASC','parent' => $category->term_id);
		                	$Child_categories = get_categories($argsX);
		                	echo '<ul class="inner-option-set">';
		                	foreach ($Child_categories as $c){
		                		if ($c->name != 'Story') { 
		                			echo '<li class="cat-child"><a href="#filter" data-filter=".'.$c->slug.'"><span>'.$c->name.'</span></a><span class="count">('.$c->category_count.')</span></li>';
		                		}
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
<?php 

// echo "<pre>";
// print_r($cats);
// echo "</pre>";
?>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>

