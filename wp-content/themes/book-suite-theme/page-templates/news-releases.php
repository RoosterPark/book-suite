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
				<h1 class="text-left">News Releases</h1>
			</div>
       	</div>
		<div class="row">
       			
				<?php
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				query_posts( array( 
					'post_type' => 'pr-news',
					'posts_per_page' => 10,
					'caller_get_posts' => 1,
					'tax_query' => array(
							array(
									'taxonomy' => 'pr-news',
									'field'    => 'slug',
									'terms'    => 'news'
							)
					),
					'paged' => $paged	
					)
				);
				
				if (have_posts()) :
				
					while (have_posts()) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<?php the_date('F Y', '<span class="post-date">', '</span>'); ?>
					</div>
					<div class="col-sm-10 col-md-10 col-lg-10">
						<span class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
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
