<?php
/**
 * Template Name: WebConectivity Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="conectivityIntro" class="sub-section white default-page">
	<div class="container-fluid">
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>	
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php the_content(); ?>
			<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'upbootwp' ),
					'after'  => '</div>',
				));
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
	<?php endwhile; // end of the loop. ?>
	</div>
</section>
<section id="connectivityPartners" class="sub-section white connect">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8"><h4>Conectivity Partner Area</h4></div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title">Is your brand interested in becoming a BookingSuite Connectivity Partner?</p>
				</div>
				<div class="panel-body">
					<p> SEE MOCKUP 8-27 - Delete Form  </p>
					<form>
						<div class="form-group">
							<textarea class="form-control" rows="8"></textarea>
						</div>
						<button type="submit" class="btn btn-info btn-md pull-right">Submit</button>
					</form>				   
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
