<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?>                
		<?php get_header(); ?>
		

		<?php if ( have_posts() ) : ?>
		    
		    <?php if( is_home() ) { ?>
				<section id="welcome" class="sub-section white">
					<?php get_template_part('index-welcome'); ?>
				</section>
				<section id="intro-about" class="sub-section lt-blue">
					<?php get_template_part('index-about-site'); ?>
				</section>
				<section id="intro-about-mp" class="sub-section white">
					<?php get_template_part('index-about-mp'); ?>
				</section>
				<section id="intro-about" class="sub-section lt-blue">
					<?php get_template_part('index-about-site'); ?>
				</section>
				<section id="intro-about-mp" class="sub-section md-grey">
					<?php get_template_part('index-about-mp'); ?>
				</section>
			
			<?php } else { ?>
				
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('content', get_post_format()); ?>
					<section id="intro-about" class="content-area container-fluid white">
		  				<?php get_sidebar('mp-footer'); ?>
					</section>
				<?php endwhile; ?>
				<?php upbootwp_content_nav('nav-below'); ?>
    
			<?php } ?>
			
		<?php else : ?>
			<?php get_template_part( 'no-results', 'index' ); ?>
		<?php endif; ?>
<?php get_footer(); ?>