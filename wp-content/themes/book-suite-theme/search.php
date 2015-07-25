<?php
/**
 * The template for displaying Search Results pages.
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */

get_header(); ?>


				<?php if ( have_posts() ) : ?>
<section class="sub-section error-404 not-found white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">				
								<header class="page-header">
									<h1 class="page-title text-left"><?php printf( __( 'Search Results for: %s', 'upbootwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
								</header><!-- .page-header -->

		
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
		
						<?php get_template_part( 'content', 'search' ); ?>
			
					<?php endwhile; ?>
					<?php //upbootwp_content_nav( 'nav-below' ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>	
				<?php else : ?>
					<section class="sub-section error-404 not-found white">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-12">
								<?php get_template_part( 'no-results', 'search' ); ?>
								</div><!-- .col-md-12 -->
							</div>
							<div class="row">
								<div class="col-md-12">
									<?php get_search_form(); ?>
								</div>
							</div>
						</div>
					</section><!-- .container -->
				<?php endif; ?>

<?php get_footer(); ?>