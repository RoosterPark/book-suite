<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */

get_header(); ?>

<section class="sub-section error-404 not-found white">
	<div class="container-fluid">
		<header class="page-header"><h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'upbootwp' ); ?></h1></header>
		<div class="row">
			<div class="col-md-12">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'upbootwp' ); ?></p>
			</div>
			<div class="col-md-12">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div><!-- .page-content -->
</section><!-- .error-404 -->
<?php get_footer(); ?>