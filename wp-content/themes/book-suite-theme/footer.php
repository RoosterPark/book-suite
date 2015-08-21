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
					<div class="col-sm-12 col-md-8 col-lg-8">
				<?
				$wp_query = NULL;
				$wp_query = new WP_Query(array('post_type' => 'post'));
				?> 
				<?php 
				$footer_argsx = array(
					'theme_location'  => 'footer_navigation',
					'container'       => 'nav',
					'container_id'    => 'footerNav',
					'menu_class' => 'footer-nav-main',
					'depth' => '1',
					'walker' => new Footernav_Walker
				);
				wp_nav_menu($footer_argsx);
				
				$footer_args = array(
						'theme_location'  => 'footer_aux_navigation',
						'container'       => 'nav',
						'container_id'    => 'footerAuxNav',
						'menu_class' => 'footer-nav-aux',
						'depth' => '1',
						'walker' => new Footernav_Walker
				);
				 wp_nav_menu($footer_args);
				?>
				
					</div>
		    		<div class="col-sm-12 col-md-4 col-lg-4">
						<!-- #footer-widgets -->	
						<?php
						/* Global footer sidebar */
						if ( ! is_404() ) : ?>
						<div id="footer-widgets" class="footer-widgets four">
							<?php if ( is_active_sidebar( 'sidebar-6') ) : ?>
								<?php dynamic_sidebar( 'sidebar-6' ); ?>
							<?php endif; ?>
						</div>
						
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	</footer>
	<?php wp_reset_query(); ?>

	<div class="scroll-to-top">
		<i class="fa fa-angle-up"></i>
	</div>
	<!-- .scroll-to-top -->
	<?php wp_footer(); ?>
<?php if (is_page('stories')) { ?>
	<script src="/wp-content/themes/book-suite-theme/js/isotope.pkgd.js"></script>
	<script src="/wp-content/themes/book-suite-theme/js/packery-mode.pkgd.min.js"></script>
	<script src="/wp-content/themes/book-suite-theme/js/success-story-isotope.js"></script>
<?php } ?>
<?php if (is_page('solutions')) { ?>
<script type="text/javascript">
jQuery(document).ready(function() { 

	if (!Modernizr.touch) {
		// Cache selectors for faster performance.
	    var $window = jQuery(window),
	        $mainMenuBar = jQuery('#booking-solutions'),
	        $mainMenuBarAnchor = jQuery('#scroller-anchor');
	    var div_to = null;
	    // Run this on scroll events.
	    $window.scroll(function() {
	        var window_top = $window.scrollTop();
	         div_top = $mainMenuBarAnchor.offset().top;
	        if (window_top > div_top) {
	            // Make the div sticky.
	            $mainMenuBar.addClass('stick');
	            $mainMenuBarAnchor.height($mainMenuBar.height());
	        }
	        else {
	            // Unstick the div.
	            $mainMenuBar.removeClass('stick');
	            $mainMenuBarAnchor.height(0);
	        }
	    });
	}
});
</script>
<?php } ?>

</body>
</html>