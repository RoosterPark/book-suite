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
                    $footer_argsx = array(
                        'theme_location' => 'footer_navigation',
                        'container' => 'nav',
                        'container_id' => 'footerNav',
                        'menu_class' => 'footer-nav-main',
                        'depth' => '1',
                        'walker' => new Footernav_Walker ()
                    );
                    wp_nav_menu($footer_argsx);

                    $footer_args = array(
                        'theme_location' => 'footer_aux_navigation',
                        'container' => 'nav',
                        'container_id' => 'footerAuxNav',
                        'menu_class' => 'footer-nav-aux',
                        'depth' => '1',
                        'walker' => new Footernav_Walker ()
                    );
                    wp_nav_menu($footer_args);
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
                                    <p>&copy; <?php echo date("Y") ?></p>
                                </div>
                                Rembrandt Square, <br>Herengracht 597, 1017 CE<br>Amsterdam, Netherlands <br>
                                <?php $email_address = "&#115;&#117;&#105;&#116;&#101;&#104;&#101;&#108;&#112;&#64;&#98;&#111;&#111;&#107;&#105;&#110;&#103;&#46;&#99;&#111;&#109;" ?>
                                <br><?php echo $title_text = _e('1 (800) 734-1769', 'upbootwp'); ?><br> <a href="<?php echo "mailto:" . $email_address; ?>" class="help-addr"><?php echo $email_address; ?></a>
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
<script>
    jQuery(document).ready(function () {
        var hash = document.location.hash;
        //console.log(hash);
        var prefix = "tab_";
        if (hash) {
            jQuery('.nav-tabs a[href=' + hash.replace(prefix, "") + ']').tab('show');
        }

        // Change hash for page-reload
        jQuery('.nav-tabs a').on('shown', function (e) {
            window.location.hash = e.target.hash.replace("#", "#" + prefix);
        });
    });
</script>
<?php if (is_page('solutions')) { ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {

            if (!Modernizr.touch) {
                // Cache selectors for faster performance.
                var $window = jQuery(window),
                        $mainMenuBar = jQuery('#booking-solutions'),
                        $mainMenuBarAnchor = jQuery('#scroller-anchor');
                var div_to = null;
                // Run this on scroll events.
                $window.scroll(function () {
                    var window_top = $window.scrollTop();
                    div_top = $mainMenuBarAnchor.offset().top;
                    if (window_top > div_top) {
                        // Make the div sticky.
                        $mainMenuBar.addClass('stick');
                        $mainMenuBarAnchor.height($mainMenuBar.height());
                    } else {
                        // Unstick the div.
                        $mainMenuBar.removeClass('stick');
                        $mainMenuBarAnchor.height(0);
                    }
                });
            }
        });
    </script>
<?php } ?>

<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 989142432;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script>
    /**
     * Function that tracks a click on an outbound link in Analytics.
     * This function takes a valid URL string as an argument, and uses that URL string
     * as the event label. Setting the transport method to 'beacon' lets the hit be sent
     * using 'navigator.sendBeacon' in browser that support it.
     */
    var trackOutboundLink = function (url) {
        ga('send', 'event', 'outbound', 'click', url, {
            'transport': 'beacon',
            'hitCallback': function () {
                document.location = url;
            }
        });
    }
</script> 
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/989142432/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Google Code for HS_Non Booking Partner_signup Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 862776813;
    w.google_conversion_label = "qcwYCOvfrG4Q7duzmwM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>

<!-- Google Code for HS_Booking Partner_signup Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 862776813;
    w.google_conversion_label = "WL1eCISYrXAQ7duzmwM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>


</body>
</html>