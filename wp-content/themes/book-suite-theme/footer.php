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
				<?php
				// $wp_query = NULL;
				// $wp_query = new WP_Query(array('post_type' => 'post'));
				?> 
				<?php
				$footer_argsx = array (
						'theme_location' => 'footer_navigation',
						'container' => 'nav',
						'container_id' => 'footerNav',
						'menu_class' => 'footer-nav-main',
						'depth' => '1',
						'walker' => new Footernav_Walker () 
				);
				wp_nav_menu ( $footer_argsx );
				
				$footer_args = array (
						'theme_location' => 'footer_aux_navigation',
						'container' => 'nav',
						'container_id' => 'footerAuxNav',
						'menu_class' => 'footer-nav-aux',
						'depth' => '1',
						'walker' => new Footernav_Walker () 
				);
				wp_nav_menu ( $footer_args );
				?>
				
					</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div id="footer-widgets" class="footer-widgets four">
						<aside id="text-2" class="right widget widget_text">
							<div class="textwidget">
								<div class="social-icons">
									<a class="facebook" target="_blank" title="Follow us on Facebook" href="https://www.facebook.com/pages/BookingSuite/1002986753051566" target="_blank"><i class="social_icon fa fa-facebook"></i></a>
									<a class="twitter" target="_blank" title="Follow us on Twitter" href="https://twitter.com/BookingSuite" target="_blank"><i class="social_icon fa fa-twitter"></i></a>
									<a class="tumblr" target="_blank" title="Follow us on Tumblr" href="http://bookingsuite.tumblr.com" target="_blank"><i class="social_icon fa fa-tumblr"></i></a>
								</div>
								<div class="footer-logo">
									<img
										src="http://stagingsuitebookingcom.c.presscdn.com/wp-content/uploads/2015/07/BookingSuite_ReverseLogo_RGB_150x.png" />
									<p>© 2015</p>
								</div>
								Rembrandt Square, <br>Herengracht 597, 1017 CE<br>Amsterdam, Netherlands <br>
								<br><?php echo $title_text = _e( '1 (800) 734-1769', 'upbootwp' ); ?><br> <a href="suite@booking.com">suite@booking.com</a>
							</div>
						</aside>
					</div>

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