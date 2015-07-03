<?php
/**
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?>
<header id="masthead" class="page-header" role="banner">
	<img src="/wp-content/uploads/2015/06/wildsee-pizol3.jpg" class="jumbotron-img img-responsive"/>
	<div id="hero" class="jumbotron">
		<div class="container-fluid">
			<h1>Hello, world!</h1>
			<p>This is a template for a simple marketing or informational website.
				It includes a large callout called a jumbotron and three supporting
				pieces of content. Use it as a starting point to create something
				more unique.</p>
			<div class="jumbo-btn-group">
				<a class="btn btn-default btn-lg clear" href="#" role="button">View Our Plans</a>
				<a class="btn btn-primary btn-lg" href="#" role="button">Request A Demo</a>
			</div>
		</div>
	</div>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>	
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'upbootwp' ),
				'after'  => '</div>',
			));
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
