<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<section id="dbookingNews" class="sub-section press-releases" role="News">
<div class="container-fluid sub_page ">
	<div class="blog-header">	
		<?php
			if ( is_category() ) :
				single_cat_title( '<h1 class="blog-title">Categorized: ', true, '</h1>');

			elseif ( is_tag() ) :
				single_tag_title( '<h1 class="blog-title">Tagged: ', true, '</h1>');
			
			elseif (is_tax() ):
                 single_tag_title();
        
			elseif ( is_author() ) :
				/* Queue the first post, that way we know
				 * what author we're dealing with (if that is the case).
				*/
				the_post();
				printf( __( '<h1 class="blog-title"> Author: %s', 'upbootwp' ), '<span class="vcard">' . get_the_author() . '</span></h1>' );
				/* Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
		
			elseif ( is_day() ) :
				printf( __( '<h1 class="blog-title">Day: %s', 'upbootwp' ), '<span>' . get_the_date() . '</span></h1>' );
			elseif ( is_month() ) :
				printf( __( '<h1 class="blog-title">Month: %s', 'upbootwp' ), '<span>' . get_the_date( 'F Y' ) . '</span></h1>' );
			elseif ( is_year() ) :
				printf( __( '<h1 class="blog-title">Year: %s', 'upbootwp' ), '<span>' . get_the_date( 'Y' ) . '</span></h1>' );
                
                	
			elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
				_e( 'Asides', 'upbootwp' );
		
			elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
				_e( 'Images', 'upbootwp');
		
			elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
				_e( 'Videos', 'upbootwp' );
		
			elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
				_e( 'Quotes', 'upbootwp' );
		
			elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
				_e( 'Links', 'upbootwp' );
		
			else :
				_e( '<h1 class="blog-title">Press Releases and Mentions', 'upbootwp' . '</h1>');
		
			endif;
		?>
		</h1>
		<?php
		// Show an optional term description.
		$term_description = term_description();
		if ( ! empty( $term_description ) ) :
			printf( '<div class="taxonomy-description">%s</div>', $term_description );
		endif;
		?>
		
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12 blog-main">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<ul>
				<li>
				<article id="post-<?php the_ID(); ?>" class="<?php if(is_category('featured')): ?>featured-post<?php endif; ?>">
					
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

							<?php if( function_exists( 'the_subtitle' ) ) the_subtitle( '<div class="slide-txt"><p class="lead">', '</p></div>' ); ?>
							<?php
							$posttags = get_the_tags();
							?>
							<?php
							if(get_the_tag_list()) {
							    echo get_the_tag_list('<div class="slide-txt"><ul class="tag_list"><li>',',</li><li>','</li></ul></div>');
							}
							?>
							<?php 
							if ( has_post_thumbnail() ) {
								?>
								<a href="<?php the_permalink(); ?>">
								<?php 
								the_post_thumbnail('homepage-thumb');
								?>
								</a><?php 
							}
							?>
							<?php edit_post_link( __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' ), '<p>', '</p>' ); ?>
				</article>
				</li>
			</ul>
				<?php endwhile; else: ?>
					<p>Sorry, this post does not exist</p>
				<?php endif; ?>

		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>