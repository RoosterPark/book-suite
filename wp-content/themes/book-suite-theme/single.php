<?php
/**
 * The Template for displaying all single posts.
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section class="sub-section white ">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php 
                $PostTypeName =  get_post_type( get_the_ID() ); 
                
                if ($PostTypeName == "careers") {
                    get_template_part('content', 'single-career');
                } else {
                    get_template_part( 'content', 'single' );
                    //get_template_part( 'content', get_post_format() );
                } 
        
                ?>
	<div class="row">
		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				//comments_template();
		?>
	</div>
	<?php endwhile; // end of the loop. ?>			
	<?php upbootwp_content_nav( 'nav-below' ); ?>
</section><!-- .container -->

<?php get_footer(); ?>