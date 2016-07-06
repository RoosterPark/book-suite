<?php
/**
 * Template Name: RateIntelligence Page
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
                    <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<div class="btn-group edit-post">', '</div>'); ?>
                    <div class="jumbo-btn-group">
                        <a class="btn btn-primary btn-lg" role="button" target="_blank" href="https://admin.booking.com/"><?php echo $btn_text = _e('Sign up', 'upbootwp'); ?></a>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; // end of the loop.  ?>
</section>
<section id="planRatesAdvance" class="sub-section white-alt">    
    <div class="plan-rates-in-advance">
        <?php
        $args = array(
            'name' => 'plan-rates-in-advance'
        );
        $my_ff_query = new WP_Query($args);
        while ($my_ff_query->have_posts()) :
            $my_ff_query->the_post();
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>		
                    <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<div class="btn-group edit-post">', '</div>'); ?>
                </div>
            </div>		
            <div class="row">
                <div class="col-lg-12">
                    <?php $img_b = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', false)[0] ?>
                    <img class="img-responsive wp-post-image" src="<?php echo $img_b; ?>"/>
                </div>
            </div>
        <?php endwhile; ?>			
        <?php wp_reset_postdata(); ?>
    </div>
</section>
<section id="trackPriceEvolution" class="sub-section lt-grey">
    <div class="container-fluid">
        <?php
        $args = array(
            'name' => 'track-price-evolution'
        );
        $my_ff_query = new WP_Query($args);
        while ($my_ff_query->have_posts()) :
            $my_ff_query->the_post();
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>		
                    <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<div class="btn-group edit-post">', '</div>'); ?>
                </div>
            </div>		
            <div class="row">
                <div class="col-lg-12">
                    <?php $img_b = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', false)[0] ?>
                    <img class="img-responsive wp-post-image" src="<?php echo $img_b; ?>"/>
                </div>
            </div>
        <?php endwhile; ?>			
        <?php wp_reset_postdata(); ?>
    </div>
</section>
<section id="exportSpreadsheet" class="sub-section white-alt">
    <div class="container-fluid">
        <?php
        $args_z = array(
            'name' => 'export-spreadsheet-to-do-your-own-analysis'
        );
        $my_fff_query = new WP_Query($args_z);
        while ($my_fff_query->have_posts()) :
            $my_fff_query->the_post();
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>		
                    <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<div class="btn-group edit-post">', '</div>'); ?>
                </div>
            </div>		
            <div class="row">
                <div class="col-lg-12">
                    <?php $img_c = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', false)[0] ?>
                    <img class="img-responsive wp-post-image" src="<?php echo $img_c; ?>"/>
                </div>
            </div>
        <?php endwhile; ?>			
        <?php wp_reset_postdata(); ?>
    </div>
</section>
<section id="compRateInfo" class="sub-section solutions lt-blue alt" role="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $argsx = array(
                    'name' => 'quickaccurate-competitor-rate-information-instantly'
                );
                $my_cs_query = new WP_Query($argsx);
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
                $argsa = array(
                    'name' => 'calendar-view'
                );
                $my_cs_querya = new WP_Query($argsa);
                while ($my_cs_querya->have_posts()) :
                    $my_cs_querya->the_post();
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
                $argsb = array(
                    'name' => 'cloud-software'
                );
                $my_cs_queryb = new WP_Query($argsb);
                while ($my_cs_queryb->have_posts()) :
                    $my_cs_queryb->the_post();
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
                $argsc = array(
                    'name' => 'rate-shopping'
                );
                $my_cs_queryc = new WP_Query($argsc);
                while ($my_cs_queryc->have_posts()) :
                    $my_cs_queryc->the_post();
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
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <a class="btn btn-primary btn-lg" role="button" href="https://admin.booking.com/" target="_blank" title="<?php echo $btn_text = _e('Sign up', 'upbootwp'); ?>"><?php echo $btn_text = _e('Sign up', 'upbootwp'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="productDesign" class="sub-section prod-features  gry">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><?php echo $cbtn_text = _e('Not Sure Which Plan is Right for Your Property?', 'upbootwp'); ?></h1>
            </div>	
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="bgroup"><a class="btn btn-default btn-lg" role="button" href="/product-features/#RevenueManagement<?php echo $lang_par; ?>" title="<?php echo $btn_text = _e('See All Features', 'upbootwp'); ?>"><?php echo $btn_text = _e('See All Features', 'upbootwp'); ?></a></div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('index-request-demo'); ?>
<?php get_footer(); ?>
