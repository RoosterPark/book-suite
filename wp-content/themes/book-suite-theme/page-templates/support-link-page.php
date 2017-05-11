<?php
/**
 * Template Name: Support Link Page
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header();
?>
<section id="pageMasthead" class="page-hero" role="banner">
    <?php if (get_field('responsive_hero_img')): ?>
        <img class="jumbotron-img img-responsive visible-xs-block" src="<?php the_field('responsive_hero_img'); ?>" />
    <?php endif; ?>
    <?php the_post_thumbnail('featured-image-landscape', array('class' => 'jumbotron-img img-responsive small-screen')); ?>
    <div id="hero" class="jumbotron filter">
        <div class="caption">
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="page-title text-center" ><?php the_title(); ?></h1>	
                <?php edit_post_link(__('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'), '<div class="btn-group edit-post">', '</div>'); ?>
            <?php endwhile; // end of the loop.  ?>
        </div>
    </div>
</section>
<section id="booking-solutions" class="sub-section white press-releases">		
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="row">
            <style>
                .page-template-support-link-page .caption {
                    left: 50%;
                    position: absolute;
                    top: 50%;
                    transform: translate(-50%, -50%);
                }
                .fade {
                    width: 100%;
                    height: auto;
                    opacity: 1;
                    background-color: #000;
                }
                .fade:hover {
                    opacity: .80;
                    transition: opacity .2s ease-in;
                    -moz-transition: opacity .2s ease-in;
                    -webkit-transition: opacity .2s ease-in;
                    -o-transition: opacity .2s ease-in;
                }
                .page-template-support-link-page .page-hero h1 {
                    margin: 0;
                    font-size: 50px;
                }
                .link-wrapper { 
                    overflow: auto;
                    display: table;
                    text-align: center;
                    width: 100%;
                }
                .col-link-25 {
                    background-color: #193868;
                    display: inline-block;
                    margin-bottom: 2.25556%;
                    margin-right: 2.25556%;
                    width: 23.25%;
                }
                .col-link-25 {
                    position: relative;
                }
                .col-link-25 a {
                    color: #fff;
                    display: block;
                    font-size: 3rem;
                    font-weight: bold;
                }
                .col-link-25 a:hover .link-title {
                    color: #b2b2b2;
                }
                .col-link-25:last-child {
                    margin-right: 0;
                }
                .col-link-25 .link-title {
                    left: 0;
                    position: absolute;
                    right: 0;
                    text-align: center;
                    top: 50%;
                    transform: translateY(-50%);
                }
                @media (max-width: 1280px) {
                    .col-link-25 a {
                        font-size: 2rem;
                    }
                }
                @media (max-width: 768px) {

                    .link-wrapper {
                        overflow: auto;
                        max-width: 480px;
                        margin: 0px auto;
                    }
                    .col-link-25 {
                        width: 47%;
                    }
                    .col-link-25 a {
                        font-size: 1.65rem;
                    }
                }
                @media (max-width: 480px) {
                    .col-link-25 a {
                        font-size: 1.65rem;
                    }
                }
            </style>
            <div class="link-wrapper">
                <?php
                $link1 = "";
                $link1_url = "";
                $link1_url_title = "";
                $link2 = "";
                $link3 = "";
                $link4 = "";

                if (get_field('link_1_image')) {
                    $link1 = get_field('link_1_image');
                } else {
                    $link1 = "/wp-content/themes/book-suite-theme/img/support-links-fallback.png";
                }
                if (get_field('link_1_url')) {
                    $link1_url = get_field('link_1_url');
                } else {
                    $link1_url = "javascript:void(0)";
                }
                if (get_field('link_1_url_title')) {
                    $link1_url_title = get_field('link_1_url_title');
                } else {
                    $link1_url_title = "Learn More";
                }


                if (get_field('link_2_image')) {
                    $link2 = get_field('link_2_image');
                } else {
                    $link2 = "/wp-content/themes/book-suite-theme/img/support-links-fallback.png";
                }
                if (get_field('link_2_url')) {
                    $link2_url = get_field('link_2_url');
                } else {
                    $link2_url = "javascript:void(0)";
                }
                if (get_field('link_2_url_title')) {
                    $link2_url_title = get_field('link_2_url_title');
                } else {
                    $link2_url_title = "Learn More";
                }

                if (get_field('link_3_image')) {
                    $link3 = get_field('link_3_image');
                } else {
                    $link3 = "/wp-content/themes/book-suite-theme/img/support-links-fallback.png";
                }
                if (get_field('link_3_url')) {
                    $link3_url = get_field('link_3_url');
                } else {
                    $link3_url = "javascript:void(0)";
                }
                if (get_field('link_3_url_title')) {
                    $link3_url_title = get_field('link_3_url_title');
                } else {
                    $link3_url_title = "Learn More";
                }


                if (get_field('link_4_image')) {
                    $link4 = get_field('link_4_image');
                }
                if (get_field('link_4_url')) {
                    $link4_url = get_field('link_4_url');
                }
                if (get_field('link_4_url_title')) {
                    $link4_url_title = get_field('link_4_url_title');
                }
                ?>
                <?php if (get_field('link_1_image')) { ?>
                    <div class="col-link-25 fade"><a href="<?php echo $link1_url; ?>" title="<?php echo $lfadeink1_url_title; ?>" target="_blank"><img src="<?php echo $link1; ?>" class="img-responsive link-img" /><span class="link-title"><?php echo $link1_url_title; ?></span></a></div>
                <?php } ?>
                <?php if (get_field('link_2_image')) { ?>
                    <div class="col-link-25 fade"><a href="<?php echo $link2_url; ?>" title="<?php echo $link2_url_title; ?>" target="_blank"><img src="<?php echo $link2; ?>" class="img-responsive link-img" /><span class="link-title"><?php echo $link2_url_title; ?></span></a></div>
                <?php } ?>
                <?php if (get_field('link_3_image')) { ?>
                    <div class="col-link-25 fade"><a href="<?php echo $link3_url; ?>" title="<?php echo $link3_url_title; ?>" target="_blank"><img src="<?php echo $link3; ?>" class="img-responsive link-img" /><span class="link-title"><?php echo $link3_url_title; ?></span></a></div>
                <?php } ?>
                <?php if (get_field('link_4_image')) { ?>
                    <div class="col-link-25 fade"><a href="<?php echo $link4_url; ?>" title="<?php echo $link4_url_title; ?>" target="_blank"><img src="<?php echo $link4; ?>" class="img-responsive link-img" /><span class="link-title"><?php echo $link4_url_title; ?></span></a></div>
                <?php } ?>
            </div>
        </div>
</section>
<?php get_template_part('index-request-demo'); ?>

<?php get_footer(); ?>
