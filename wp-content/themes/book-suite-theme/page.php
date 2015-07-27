<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @author MattPeternell | http://mpeternell.com
 * @package MPBootstrap3WP 3.0
 */

get_header(); ?>
<section id="defaultPage" class="sub-section white default-page">
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-12">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- .col-md-8 -->
		</div><!-- .row -->
	</div><!-- .container -->
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
