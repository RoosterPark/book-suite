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
			<br><?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
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
			<div class="col-lg-12">
				<div class="panel panel-default interest">
					<div class="panel-heading">
						<p class="panel-title"><?php echo $title_text = _e( 'Is your brand interested in becoming a BookingSuite Connectivity Partner?', 'upbootwp' ); ?></p>
				</div>
				<div class="panel-body">
					<p><?php echo $title_text = _e( 'Send us an email at:', 'upbootwp' ); ?> <a href="mailto:contact@suite.booking.com">contact@suite.booking.com</a></p>		   
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
