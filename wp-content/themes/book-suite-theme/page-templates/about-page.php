<?php
/**
 * Template Name: About Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="pageMasthead" class="page-hero" role="banner">
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( get_field('responsive_hero_img') ): ?>
		<img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
	<?php endif; ?>
	<?php the_post_thumbnail( 'featured-image-landscape', array( 'class' => 'jumbotron-img img-responsive small-screen' ) ); ?>
	<div id="hero" class="jumbotron filter">
		<div class="container-fluid">
				<h1 class="page-title"><?php the_title(); ?></h1>	
				<?php the_content(); ?>
				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<div class="btn-group edit-post">', '</div>' ); ?>
		</div>
	</div>
	</article>
	<?php endwhile; // end of the loop. ?>
</section>
<section id="jobListings" class="sub-section white" role="Jobs">		
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8">
				<h2 class="text-left">And we're all around the world.</h2>
			</div>
			<div class="col-lg-4">
				<a class="btn btn-info btn-lg" title="#####" href="#" role="button">View Job Openings</a>
			</div>
		</div>
	</div><!--  .container-fluid -->
</section>
<section id="ourPeople" class="sub-section dark-grey request-demo" role="ourPeople">		
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-left">Our People Tiles</h2>
			</div>
		</div>
	</div><!--  .container-fluid -->
</section>
<section id="bookingLocations" class="sub-section press-releases white" role="Locations">		
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-left">And We're All Around The World.</h2>
			</div>
		</div>
	</div><!--  .container-fluid -->
</section>
<?php
$member_group_terms = get_terms( 'locations' );
// echo "<pre>";
// print_r($member_group_terms);
// echo "</pre>";
?>
<div class="tab-wrapper about-tabs">
	<ul class="nav nav-tabs" role="tablist">
	 
	<?php
	$postx_counter = -1;
	foreach ( $member_group_terms as $member_group_term ) {
		$postx_counter++;
	    $member_group_query = new WP_Query( array(
	        'post_type' => 'locations',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'locations',
	                'field' => 'slug',
	                'terms' => array( $member_group_term->slug ),
	                'operator' => 'IN'
	            )
	        )
	    ) );
	    ?>
	    
	    <li role="presentation" <?php  if ($postx_counter == 0) { echo $active_panel = "class=\"active\""; } ?>   data-post="<?php echo $postx_counter ?>">
	    	<a href="<?php echo "#".$member_group_term->name; ?>" aria-controls="<?php echo $member_group_term->name; ?>" data-toggle="tab" role="tab">
	    		<?php echo $member_group_term->description ?>
	    	</a>
	    </li>
	    
	    <?php
	    // Reset things, for good measure
	    $member_group_query = null;
	    wp_reset_postdata();
	}
	?> 
	</ul>
</div>
<div class="tab-content about-tab-panels">

<?php
$tab_panel_counter = -1;
foreach ( $member_group_terms as $member_group_term ) {
	$tab_panel_counter++;
    $member_group_query = new WP_Query( array(
        'post_type' => 'locations',
    	'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'locations',
                'field' => 'slug',
                'terms' => array( $member_group_term->slug ),
                'operator' => 'IN'
            )
        )
    ) );
    ?>
    <div role="tabpanel" class="tab-pane fade <?php  if ($tab_panel_counter == 0) { echo $active_panel = " in active"; } ?>" id="<?php echo $member_group_term->name; ?>"  data-post="<?php echo $tab_panel_counter ?>">
		    <?php
		    
		    if ( $member_group_query->have_posts() ) : while ( $member_group_query->have_posts() ) : $member_group_query->the_post(); ?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 <?php if (has_tag("hq")) {echo "hq"; }?>">
						<div class="panel panel-default">
						<?php 
						if(the_post_thumbnail){
							the_post_thumbnail( 'location-featured-land', array( 'class' => 'img-responsive' ) );
						} 
						?>
						<p class="h5 text-left">  <?php echo the_title(); ?></p>
						<?php the_content();?>
						<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
						</div>
				</div>
		    <?php endwhile; endif; ?>
	</div><!-- Tab Pane -->
    <?php 
// 	echo "<pre style=\"text-align: left; font-size: 10px;\">";
// 	print_r($member_group_query);
// 	echo "</pre>";

    // Reset things, for good measure
    $member_group_query = null;
    wp_reset_postdata();
}
?> 
	
</div><!-- tab-content -->

<section id="dbookingNews" class="sub-section press-releases" role="News">
	<div class="container-fluid">
		<div class="row">
       		<div class="col-lg-12">
       			<h2 class="text-left">BookingSuite in the News</h2>
       		</div>
       	</div>
       	<div class="row">
				<div class="col-lg-12">
	       			<h3 class="text-left">Latest News</h3>
	       		</div>
       		</div>
       		<div class="row pr-list">
					<?php 	
		            $args = array( 
		                'post_type' => 'pr-news',
		                'posts_per_page' =>10,
		                'order'             => 'DESC',
		                'post_status' => 'publish',
		            	'tax_query' => array(
		            			array(
		            				'taxonomy' => 'pr-news',
		            					'field'    => 'slug',
		            					'terms'    => 'news',
		            					 
		            			)
		            	)
		            );
		          
		            
		            $my_query = new WP_Query($args);
		            
		            while($my_query->have_posts()) : $my_query->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        			<div class="pr-list-item col-sm-2 col-md-2 col-lg-2"><?php the_date('F Y', '<span class="post-date">', '</span>'); ?></div>
	        			<div class="pr-list-item col-sm-10 col-md-10 col-lg-10">
	        				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	        				<?php if( get_field('pr_news_url') ): ?>
								<a href="<?php the_field('pr_news_url'); ?>" target="_blank" title="<?php the_field('pr_news_vanity_name'); ?>" class="btn btn-link clearfix"><?php the_field('pr_news_vanity_name'); ?></a>
							<?php endif; ?>
	        				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<span>', '</span>' ); ?>
	        			</div>
	       				</article>
					<?php endwhile; ?>			
					<?php  wp_reset_postdata(); ?>
					
       		</div>
       		<div class="row">
				<div class="col-md-12 text-center">
					<div><a class="btn btn-default btn-lg" title="Product Features" href="/news/" role="button">See All News</a></div>
				</div>
			</div>		
			<div class="row">
				<div class="col-lg-12">
	       			<h3 class="text-left">Latest Press Releases</h3>
	       		</div>
       		</div>
       		<div class="row pr-list">
					<?php 	
		            $args = array( 
		                'post_type' => 'pr-news',
		                'posts_per_page' =>10,
		                'order'             => 'DESC',
		                'post_status' => 'publish',
		            	'tax_query' => array(
		            			array(
		            				'taxonomy' => 'pr-news',
		            					'field'    => 'slug',
		            					'terms'    => 'press-releases',
		            					 
		            			)
		            	)
		            );
		          
		            
		            $my_query = new WP_Query($args);
		            
		            while($my_query->have_posts()) : $my_query->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="pr-list-item col-sm-2 col-md-2 col-lg-2"><?php the_date('F Y', '<span class="post-date">', '</span>'); ?></div>
	        				<div class="pr-list-item col-sm-10 col-md-10 col-lg-10">
	        				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	        				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<span>', '</span>' ); ?>
	        			</div>
	       				</article>
					<?php endwhile; ?>			
					<?php  wp_reset_postdata(); ?>
					
       			</div>		
       		<div class="row">
				<div class="col-md-12 text-center">
					<div><a class="btn btn-default btn-lg" title="Product Features" href="/press-releases/" role="button">See All Press Releases</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
