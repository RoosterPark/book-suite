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
	
	<div class="row">
		<div class="col-lg-12">
			<h2>BookingSuite Partner Success</h2>
		</div>
	</div>
	<div class="row">	
        <div class="col-lg-12">
	        	<div class="grid">
					<div class="gutter-sizer"></div>
	
			        <?php 
			//        $out = get_taxonomies(); 
			//        print_r($out); 
			
			       $args = array( 
			       		'post_type' => 'success_stories',
			       		'posts_per_page' => -1,
// 			       		'tax_query' => array(
// 			       				array(
// 			       						'taxonomy' => 'success_stories',
// 			       						'field'    => 'slug',
// 			       						'terms'    => 'video',
// 			       				),
// 			       		),
			       		'order'   => 'DESC',
			       );
			      $loop = new WP_Query( $args );
			       	
			       	$postx_counter = -1;
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
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
						<div class="grid-item" data-post="<?php echo $postx_counter ?>">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php if (has_tag('case-study')) { ?>
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
									

									

									
									
									<?php //echo get_the_category_list(); ?>	
									<?php the_tags( '<ul class="tag-list"><li>Tags: </li><li rel="tag">', ', </li><li>', '</li></ul>' ); ?>
									<footer>
										<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<span>', '</span>' ); ?>
									</footer>		
								
			                    
			                	</div>
							</article>
						</div>
						<?php
					endwhile;  
			        ?>
			        <?php wp_reset_postdata(); ?>
		        </div> 
		        <div class="grid-menu">
				<div class="inner-grid-menu">
					<h5>Grid Filter Menu w = 312px</h5>
<?php 
//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

$taxonomy     = 'success_stories';
$orderby      = 'name'; 
$show_count   = 1;      // 1 for yes, 0 for no
$pad_counts   = 1;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no
$title        = 'Category filter';

$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title
);
?>

<ul>
<?php wp_list_categories( $args ); ?>
</ul>
					
				</div>
			</div>		       	
        	</div>
      	</div>
     <div class="row">
		<div class="col-lg-12">
			<h1>Isotope - packery layout mode w= 1024px</h1>
		</div>
	</div>
      <div class="row">
		<div class="col-lg-12">
			<div class="grid">
				<div class="gutter-sizer"></div>
				<div class="grid-item">
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x200-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
				<div class="grid-item grid-item-height2">
					<div class="featured"><span>Read the Case Study!</span></div>
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x250-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
				<div class="grid-item">
					<div class="featured"><span>Read the Case Study!</span></div>
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x180-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
				<div class="grid-item">
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x200-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
				<div class="grid-item grid-item-height2">
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x360-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
				<div class="grid-item">
					<div class="featured"><span>Read the Case Study!</span></div>
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x150-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
				<div class="grid-item grid-item-height2">
					<div class="featured"><span>Read the Case Study!</span></div>
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x360-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
				<div class="grid-item">
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x250-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
				<div class="grid-item grid-item-height2">
					<div class="featured"><span>Read the Case Study!</span></div>
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x250-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
				<div class="grid-item">
					<img class="img-responsive" src="/wp-content/uploads/2015/07/360x250-placeholder-img.png" />
					<div class="inner-grid">
						<p class="title"><strong>Tile Tittle</strong></p>
						<p class="location">Thessaloniki, Greece</p>
						<p class="description">Donec a leo laoreet massa fringilla sodales. Vestibulum at enim elit. Aenean sed vulputate urna.</p>
						<ul class="tag-list">
							<li>Tags:</li>
							<li><a rel="tag" href="#">Europe</a>,</li>
							<li><a rel="tag" href="#">hotel</a>,</li>
							<li><a rel="tag" href="#">luxury</a>,</li>
							<li><a rel="tag" href="#">urban </a>,</li>
						</ul>		
					</div>
				</div>
			</div>
			<div class="grid-menu">
				<div class="inner-grid-menu">
					<h5>Grid Filter Menu w = 312px</h5>
				</div>
			</div>			
		</div>
	</div> 
	</div>
</section>

<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
