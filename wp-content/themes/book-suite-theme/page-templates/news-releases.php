<?php
/**
 * Template Name: News Releases
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
<section id="booking-solutions" class="sub-section white press-releases">		
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-left">More Booking In The News</h1>
			</div>
       	</div>
		<div class="row">
       			
				<?php
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				query_posts( array( 
					'post_type' => 'news',
					'posts_per_page' => 15,
					'caller_get_posts' => 1,
					'tax_query' => array(
						'relation' => 'AND',
            			array(
            				'taxonomy' => 'news_category',
            					'field'    => 'slug',
            					'terms'    => array ('interwebs', 'press-releases')
            			)
					),
					'paged' => $paged	
					)
				);
				
				if (have_posts()) :
				
					while (have_posts()) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('pr-list'); ?>>
					<div class="col-sm-2 col-md-2 col-lg-2 pr-list-item">
						<?php the_date('F Y', '<span class="post-date">', '</span>'); ?>
					</div>
					<div class="col-sm-10 col-md-10 col-lg-10 pr-list-item">
						<ul>
	        				<?php if( get_field('pr_news_url') ) { ?>
	        					<li><a href="<?php the_field('pr_news_url'); ?>" target="_blank" title="<?php the_field('pr_news_vanity_name'); ?>" class="btn btn-link clearfix"><?php the_title(); ?><i class="fa fa-external-link"></i></a></li>
								<li><?php the_field('pr_news_vanity_name'); ?></li>
							<?php } else { ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php } ?>
	        				<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<li>', '</li>' ); ?>
	        				</ul>
					</div>
					</article>
				
				
					<?php endwhile;  ?>
					
					
				  
				  <?php 
				
					// No posts
				
				endif;
				?>

			</div>
				<div class="row">
				<nav class="navigation col-lg-12">
				  	<ul class="pager">
				    	<li><?php previous_posts_link('&laquo; Previous') ?></li>
				    	<li><?php next_posts_link('More &raquo;') ?></li>
				  	</ul>
				</nav>
			</div>	
	</div>
</section>
	<?php get_template_part('index-request-demo'); ?>

<?php get_footer(); ?>
