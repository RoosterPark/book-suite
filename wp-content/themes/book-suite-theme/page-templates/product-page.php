<?php
/**
 * Template Name: Product Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header();
?>
<section id="pageMasthead" class="page-hero" role="banner">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if (get_field('responsive_hero_img')): ?>
                <img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
            <?php endif; ?>
            <?php the_post_thumbnail('featured-image-landscape', array('class' => 'jumbotron-img img-responsive small-screen')); ?>
            <div id="hero" class="jumbotron filter">
                <div class="container-fluid">
                    <h1 class="page-title"><?php the_title(); ?></h1>	
                    <?php the_content(); ?>
                    <?php
                    $ebtn_text = __('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp');
                    edit_post_link($ebtn_text, '<p>', '</p>');
                    ?>

                    <div class="jumbo-btn-group">
                        <a class="btn btn-primary btn-lg" href="https://admin.booking.com/" onclick="trackOutboundLink('https://admin.booking.com/'); return false;" target="_blank" role="button" title="<?php echo $btn_text = _e('Sign up using Booking.com', 'upbootwp'); ?>"><?php echo $btn_text = _e('Sign up using Booking.com', 'upbootwp'); ?></a>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; // end of the loop.  ?>
</section>
<div id="scroller-anchor"></div> 
<!--<section id="booking-solutions" class="sub-section white solutions-menu">			
    <div class="container-fluid">
        <div class="row">
<?php //get_template_part('index-solutions'); ?>
        </div>
    </div>
</section>-->
<section id="booking-solutions" class="sub-section white solutions-menu stick">			
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <article id="post-86" class="jumpTo">
                    <a href="#Property-Websites"><img src="http://suite.booking.com/wp-content/uploads/2015/07/155_smartphone.svg" class="svg wp-post-image" alt=""></a>
                    <div class="h3">
                        <a href="#Property-Websites">WebDirect</a>
                    </div>
            </div>	
            <div class="col-xs-4 col-sm-4 col-md-4">
                <article id="post-87" class="jumpTo">
                    <a href="#RateManager"><img src="http://suite.booking.com/wp-content/uploads/2015/07/189_graph.svg" class="svg wp-post-image" alt=""></a>
                    <div class="h3">
                        <a href="#RateManager">RateManager</a>
                    </div>
            </div>	
            <div class="col-xs-4 col-sm-4 col-md-4">
                <article id="post-88" class="jumpTo">
                    <a href="#RateIntelligence"><img src="http://suite.booking.com/wp-content/uploads/2015/06/tags1.svg" class="svg wp-post-image" alt=""></a>
                    <div class="h3">
                        <a href="#RateIntelligence">RateIntelligence</a>
                    </div>
            </div>	


        </div>
    </div>
</section>
<section id="<?php echo $btn_text = _e('Property-Websites', 'upbootwp'); ?>" class="section-hero" role="banner">	
    <div id="hero" class="jumbotron filter">
        <div class="jumbo-caption opt-2">
            <h1><?php echo $btn_text = _e('Property Websites', 'upbootwp'); ?></h1>
            <div class="jumbo-btn-group">
                <a class="btn btn-default btn-lg clear" href="/product-features/<?php echo $lang_par; ?>" role="button" title="<?php echo $btn_text = _e('See Product Features', 'upbootwp'); ?>"><?php echo $btn_text = _e('See Product Features', 'upbootwp'); ?></a>
            </div>
        </div>
    </div>
    <?php if (get_field('property_websites_header')): ?>
        <img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('property_websites_header'); ?>" />
    <?php endif; ?>	
</section>
<section id="mobileFriendly" class="section-hero lt-grey" role="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="center-block">
                    <?php
                    $args = array(
                        'name' => 'mobile-friendly'
                    );
                    $my_mob_query = new WP_Query($args);
                    while ($my_mob_query->have_posts()) :
                        $my_mob_query->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
                            <?php the_excerpt(); ?>		
                            <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                        <?php endwhile; ?>			
                        <?php wp_reset_postdata(); ?>
                </div>
                </article>
            </div>	
            <div class="col-sm-6 col-md-6 col-lg-6">
                <?php if (get_field('mobile_friendly_header')): ?>
                    <img class=" img-responsive wp-post-image mobile-img" src="<?php the_field('mobile_friendly_header'); ?>" />
                <?php endif; ?>	
            </div>			    
        </div>
    </div>
</section>
<section id="multiLanguageSupport" class="section-hero map" role="banner">
    <?php if (get_field('multi_lanquage_support')): ?>
        <img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('multi_lanquage_support'); ?>" />
    <?php endif; ?>
    <div id="hero" class="jumbotron">
        <div class="jumbo-caption opt-2 black">
            <?php
            $args = array(
                'name' => 'multi-language-support'
            );
            $my_ml_query = new WP_Query($args);
            while ($my_ml_query->have_posts()) :
                $my_ml_query->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="page-header"><h1><?php the_title(); ?></h1></header>
                    <?php the_excerpt(); ?>		
                    <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>

                </article>
            <?php endwhile; ?>			
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section id="contentManagement" class="section-hero" role="banner">
    <div id="hero" class="jumbotron">
        <div class="jumbo-caption opt-4 black">
            <?php
            $args = array(
                'name' => 'content-management-solution'
            );
            $my_ml_query = new WP_Query($args);
            while ($my_ml_query->have_posts()) :
                $my_ml_query->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="page-header"><h1><?php the_title(); ?></h1></header>
                    <?php the_excerpt(); ?>		
                    <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                </article>
            <?php endwhile; ?>			
            <?php wp_reset_postdata(); ?>
        </div>		</div>
</div>
<?php if (get_field('content_management_header')): ?>
    <img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('content_management_header'); ?>" />
<?php endif; ?>		
</section>
<section id="ctaArea" class="sub-section white solutions">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <?php
                $args = array(
                    'name' => 'interactive-maps'
                );
                $my_cs_query = new WP_Query($args);
                while ($my_cs_query->have_posts()) :
                    $my_cs_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt)))); ?>
                        <p class="h3"><?php the_title(); ?></p>
                        <?php the_excerpt(); ?>		
                        <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                    </article>
                <?php endwhile; ?>			
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="col-sm-4 col-md-4">
                <?php
                $args = array(
                    'name' => 'booking-engine'
                );
                $my_cs_query = new WP_Query($args);
                while ($my_cs_query->have_posts()) :
                    $my_cs_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt)))); ?>
                        <p class="h3"><?php the_title(); ?></p>
                        <?php the_excerpt(); ?>		
                        <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                    </article>
                <?php endwhile; ?>			
                <?php wp_reset_postdata(); ?>
            </div>	
            <div class="col-sm-4 col-md-4">
                <?php
                $args = array(
                    'name' => 'analytics-reporting'
                );
                $my_cs_query = new WP_Query($args);
                while ($my_cs_query->have_posts()) :
                    $my_cs_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt)))); ?>
                        <p class="h3"><?php the_title(); ?></p>
                        <?php the_excerpt(); ?>		
                        <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                    </article>
                <?php endwhile; ?>			
                <?php wp_reset_postdata(); ?>
            </div>			    
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="jumbo-btn-group">
                    <a class="btn btn-default btn-lg" href="/product-features/<?php echo $lang_par; ?>" role="button" title="<?php echo $btn_text = _e('See Product Features', 'upbootwp'); ?>"><?php echo $btn_text = _e('See Product Features', 'upbootwp'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="<?php echo $btn_text = _e('RateManager', 'upbootwp'); ?>" class="section-hero" role="banner">
    <?php if (get_field('predictive_analytics_header')): ?>
        <img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('predictive_analytics_header'); ?>" />
    <?php endif; ?>
    <div id="hero" class="jumbotron filter">
        <div class="jumbo-caption opt-2">
            <h1><?php echo $title_text = _e('RateManager', 'upbootwp'); ?></h1>
            <div class="jumbo-btn-group">
                <a class="btn btn-info btn-lg" href="/ratemanager<?php echo $lang_par; ?>" role="button" title="<?php echo $btn_text = _e('Learn More', 'upbootwp'); ?>"><?php echo $btn_text = _e('Learn More', 'upbootwp'); ?></a>
                <a class="btn btn-default btn-lg clear" href="/product-features/<?php echo $lang_par; ?>#RevenueManagement" role="button" title="<?php echo $btn_text = _e('See Product Features', 'upbootwp'); ?>"><?php echo $btn_text = _e('See Product Features', 'upbootwp'); ?></a>
            </div>
        </div>
    </div>
</section>
<section id="forcastFuture" class="sub-section white-alt">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $args = array(
                    'name' => 'forecast-the-future'
                );
                $my_ff_query = new WP_Query($args);
                while ($my_ff_query->have_posts()) :
                    $my_ff_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
                        <?php the_excerpt(); ?>		
                        <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                    </article>
                <?php endwhile; ?>			
                <?php wp_reset_postdata(); ?>
            </div>
        </div>

        <?php if (get_field('forcast_the_future_header')): ?>
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive wp-post-image" src="<?php the_field('forcast_the_future_header'); ?>" />
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<section id="dataDriven" class="section-hero lt-grey" role="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="center-block">
                    <?php
                    $args = array(
                        'name' => 'data-driven'
                    );
                    $my_mob_query = new WP_Query($args);
                    while ($my_mob_query->have_posts()) :
                        $my_mob_query->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
                            <?php the_excerpt(); ?>		
                            <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                        </article>
                    <?php endwhile; ?>			
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>	
            <div class="col-sm-6 col-lg-6">
                <?php if (get_field('data_driven_header')): ?>
                    <img class="img-responsive wp-post-image mobile-img" src="<?php the_field('data_driven_header'); ?>" />
                <?php endif; ?>
            </div>			    
        </div>
    </div>
</section>
<section id="revPar" class="sub-section white repar" role="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $args = array(
                    'name' => 'increase-revpar'
                );
                $my_rev_query = new WP_Query($args);
                while ($my_rev_query->have_posts()) :
                    $my_rev_query->the_post();
                    ?>
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>	
                    <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                <?php endwhile; ?>			
                <?php wp_reset_postdata(); ?>
                <div class="jumbo-btn-group">
                    <a class="btn btn-info btn-lg" href="/ratemanager/" role="button" title="<?php echo $btn_text = _e('Learn More', 'upbootwp'); ?>"><?php echo $btn_text = _e('Learn More', 'upbootwp'); ?></a>
                    <a class="btn btn-default btn-lg" href="/product-features/" role="button" title="<?php echo $btn_text = _e('See Product Features', 'upbootwp'); ?>"><?php echo $btn_text = _e('See Product Features', 'upbootwp'); ?></a>
                </div>      			
            </div>
       	</div>
        <?php if (get_field('increase_RevPar_header')): ?>
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive wp-post-image" src="<?php the_field('increase_RevPar_header'); ?>" />
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<section id="<?php echo $btn_text = _e('RateIntelligence', 'upbootwp'); ?>" class="section-hero" role="banner">
    <?php if (get_field('premium_services_header')): ?>
        <img class="jumbotron-img img-responsive wp-post-image" src="<?php the_field('premium_services_header'); ?>" />
    <?php endif; ?>
    <div id="hero" class="jumbotron filter">
        <div class="jumbo-caption opt-1">
            <h1><?php echo $btn_text = _e('RateIntelligence', 'upbootwp'); ?></h1>
        </div>
    </div>
</section>
<section id="clientServices" class="sub-section client-services white-alt" role="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $args = array(
                    'name' => 'partner-services'
                );
                $my_cs_query = new WP_Query($args);
                while ($my_cs_query->have_posts()) :
                    $my_cs_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
                        <?php the_excerpt(); ?>		
                        <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                    </article>
                <?php endwhile; ?>			
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <?php if (get_field('client_services_header')): ?>
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive wp-post-image" src="<?php the_field('client_services_header'); ?>" />
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<section id="clientComm" class="sub-section solutions lt-blue alt"" role="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $args = array(
                    'name' => 'client-communication-reporting'
                );
                $my_cs_query = new WP_Query($args);
                while ($my_cs_query->have_posts()) :
                    $my_cs_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="page-header"><h1 class="text-center"><?php the_title(); ?></h1></header>
                        <?php the_excerpt(); ?>		
                        <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                    </article>
                <?php endwhile; ?>			
                <?php wp_reset_postdata(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-md-4">
                <?php
                $args = array(
                    'name' => 'consulting'
                );
                $my_cs_query = new WP_Query($args);
                while ($my_cs_query->have_posts()) :
                    $my_cs_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt)))); ?>
                        <header><p class="h3"><?php the_title(); ?></p></header>
                        <?php the_excerpt(); ?>		
                        <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                    </article>
                <?php endwhile; ?>			
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="col-sm-4 col-md-4">
                <?php
                $args = array(
                    'name' => 'check-ins'
                );
                $my_cs_query = new WP_Query($args);
                while ($my_cs_query->have_posts()) :
                    $my_cs_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt)))); ?>
                        <header><p class="h3"><?php the_title(); ?></p></header>
                        <?php the_excerpt(); ?>		
                        <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                    <?php endwhile; ?>			
                    <?php wp_reset_postdata(); ?>
            </div>	
            <div class="col-sm-4 col-md-4">
                <?php
                $args = array(
                    'name' => 'reports'
                );
                $my_cs_query = new WP_Query($args);
                while ($my_cs_query->have_posts()) :
                    $my_cs_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_post_thumbnail('homepage-thumb', array('class' => "svg", 'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt)))); ?>
                        <header><p class="h3"><?php the_title(); ?></p></header>
                            <?php the_excerpt(); ?>		
                            <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<p class="text-center">', '</p>'); ?>
                    </article>
                <?php endwhile; ?>			
                <?php wp_reset_postdata(); ?>
            </div>			    
        </div>
    </div>
</section>
<?php get_template_part('index-request-demo'); ?>

<?php get_footer(); ?>
