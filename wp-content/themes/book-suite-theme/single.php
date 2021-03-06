<?php
/**
 * The Template for displaying all single posts.
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'single' ); ?>
		<div class="row">
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					//comments_template();
			?>
		</div>
	<?php endwhile; // end of the loop. ?>		
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>