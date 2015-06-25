<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @author mattpeternell / http://mattpeternel.net
 * @package upBootWP 0.1
 */
?>
</main>
<!-- End: main .content-area -->
	<footer id="colophon" class="site-footer blog-footer" role="contentinfo">
	 	<section id="welcome" class="sub-section drk-grey">
	 		<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
				<?php 
					$args = array(
							'theme_location' => 'footer',
							'container_class' => 'navbar-footer', 
							'menu_class' => 'nav nav-pills',
							'fallback_cb' => '',
							'menu_id' => 'footer-menu',
							'walker' => new Upbootwp_Walker_Nav_Menu()
					); 
					wp_nav_menu($args);
				?>
				<?php 
					$args = array(
							'theme_location' => 'footer',
							'container_class' => 'navbar-aux-footer', 
							'menu_class' => 'nav nav-pills',
							'fallback_cb' => '',
							'menu_id' => 'footer-menu-aux',
							'walker' => new Upbootwp_Walker_Nav_Menu()
					); 
					wp_nav_menu($args);
				?>
					</div>
		    		<div class="col-md-6">
						<?php do_action( 'upbootwp_credits' ); ?>
						&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>
						<span class="sep"> | </span>
						<?php printf(__('Theme: %1$s by %2$s.', 'IXXmpTheme 3.0' ), 'ImpTheme 3.0', '<a href="'.get_site_url().'" rel="designer">mPeternell.net</a>'); ?>
					</div>
				</div>
			</div>
		</section>
	</footer>

	<div class="scroll-to-top">
		<i class="fa fa-angle-up"></i>
	</div>
	<!-- .scroll-to-top -->
	
	<?php wp_footer(); ?>
</body>
</html>