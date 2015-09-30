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
				<section id="booking-solutions" class="sub-section white solutions">
					<div class="container-fluid">
						
						<?php if(is_home()) { ?>
							<?php $my_query = new WP_Query('name=booking-suite-tagline');
							while($my_query->have_posts()){
							        $my_query->the_post();
							?>
							<div class="row">
								<div class="col-md-12">
									<h1 class="text-center"><?php the_title() ?></h1>
									<?php  
									$ebtn_text =  __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' );
									edit_post_link($ebtn_text,'<p class="text-center">','</p>' );
									?>
								</div>
							</div>
							<?php } ?>
							
						<?php }?>
							
						<div class="row">
							<?php get_template_part('index-solutions'); ?>
						</div>
						<div class="row">
							<div class="col-md-12 cta-link">
							
								<a class="btn btn-info btn-lg" role="button" href="/solutions<?php echo $lang_par;?>" title="<?php echo $btn_text =  _e( 'View Our Solutions', 'upbootwp' );?>"><?php echo $btn_text =  _e( 'View Our Solutions', 'upbootwp' );?></a>		
							</div>
							
						</div>
					</div>
				</section>
				<section class="img-divider">
					<img src="/wp-content/uploads/2015/06/Laptop1920px.png" class="img-responsive bground-img"/>
				</section>
				<section id="booking-success" class="sub-section lt-grey success">
					<?php get_template_part('index-success'); ?>
				</section>
				<section id="booking-mentions" class="sub-section white mentions">
					<?php get_template_part('index-mentions'); ?>
				</section>
				<?php //get_template_part('index-commitment'); ?>
				<?php get_template_part('index-request-demo'); ?>	
			<?php } else { ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('content', get_post_format()); ?>
					<section id="intro-about" class="content-area container-fluid white">
		  				<?php get_sidebar('mp-footer'); ?>
					</section>
				<?php endwhile; ?>
				<?php //upbootwp_content_nav('nav-below'); ?>
			<?php } ?>
			
		<?php else : ?>
			<?php get_template_part( 'no-results', 'index' ); ?>
			
		<?php endif; ?>

<?php get_footer(); ?>