<!-- Plans Page Biz Intel Tab Content -->
<?php
global $lang_par;
if ($_GET['lang']) {
    $lang_par = "?lang=" . $_GET['lang'];
}
?>
<section class="sub-section white-alt">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-offset-2 col-sm-6 col-md-4 col-lg-4 compare-plans">
                <section class="text-center">
                    <?php
                    $my_query = new WP_Query('name=web-direct-post');
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php the_post_thumbnail('homepage-thumb', array('class' => "icon svg", 'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt)))); ?>
                            <header>
                                <h2><?php the_title() ?></h2>
                            </header>
                            <div class="content">
                                <?php the_excerpt(); ?>
                                <?php $ebtn_text = __('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'); ?>	
                                <?php edit_post_link($ebtn_text, '<p>', '</p>'); ?>
                            </div>
                            <footer>
                                <a class="btn btn-info btn-lg" title="<?php the_title(); ?>" href="/<?php the_title(); ?><?php echo $lang_par; ?>" role="button"><?php echo $btn_text = _e('Learn More', 'upbootwp'); ?></a>
                            </footer>
                        </article>
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                    <ul class="options">
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Price', 'upbootwp'); ?></h3>
                            <p><?php echo $title_text = _e('10% Commission', 'upbootwp'); ?></p>
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Website Pages', 'upbootwp'); ?></h3>
                            <p><?php echo $title_text = _e('Homepage, Rooms, Photos, Location, Amenities, & Reviews', 'upbootwp'); ?></p>
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Analytics', 'upbootwp'); ?></h3>
                            <p><?php echo $title_text = _e('Basic', 'upbootwp'); ?></p>
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Mobile Friendly Design', 'upbootwp'); ?></h3>
                            <img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Translation Support', 'upbootwp'); ?></h3>
                            <img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
                        </li>							
                    </ul>
                </section>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 compare-plans">
                <section class="text-center">
                    <?php
                    $my_query = new WP_Query('name=web-complete-post');
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php the_post_thumbnail('homepage-thumb', array('class' => "icon svg", 'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt)))); ?>
                            <header>
                                <h2><?php the_title() ?></h2>
                            </header>
                            <div class="content">
                                <?php the_excerpt(); ?>
                                <?php $ebtn_text = __('<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp'); ?>	
                                <?php edit_post_link($ebtn_text, '<p>', '</p>'); ?>
                            </div>
                            <footer>
                                <a class="btn btn-info btn-lg" title="<?php the_title(); ?>" href="/<?php the_title(); ?><?php echo $lang_par; ?>" role="button"><?php echo $btn_text = _e('Learn More', 'upbootwp'); ?></a>
                            </footer>
                        </article>
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                    <ul class="options">
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Price', 'upbootwp'); ?></h3>
                            <p><?php echo $title_text = _e('Monthly Subscription', 'upbootwp'); ?></p>
                            <small><a href="http://info.suite.booking.com/request-demo/<?php echo $link_text = _e('en-us', 'upbootwp'); ?>" target="_blank"><?php echo $title_text = _e('Contact us to learn more', 'upbootwp'); ?></a></small>
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Website Pages', 'upbootwp'); ?></h3>
                            <p><?php echo $title_text = _e('Unlimited', 'upbootwp'); ?></p>
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Analytics', 'upbootwp'); ?></h3>
                            <p><?php echo $title_text = _e('Advanced', 'upbootwp'); ?></p>
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Mobile Friendly Design', 'upbootwp'); ?></h3>
                            <img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Translation Support', 'upbootwp'); ?></h3>
                            <img class="icon svg check" src="/wp-content/uploads/2015/09/check.svg" />
                        </li>					
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>
<section id="productDesign" class="sub-section prod-features">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><?php echo $btn_text = _e('Not Sure Which Plan is Right for Your Property?', 'upbootwp'); ?></h1>
            </div>	
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="bgroup"><a class="btn btn-default btn-lg" role="button" href="/product-features/<?php echo $lang_par; ?>" title="<?php echo $btn_text = _e('See All Features', 'upbootwp'); ?>"><?php echo $btn_text = _e('See All Features', 'upbootwp'); ?></a></div>
            </div>
        </div>
    </div>
</section>