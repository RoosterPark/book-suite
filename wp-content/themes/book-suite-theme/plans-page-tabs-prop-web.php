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
<!--                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                        </article>-->
                        
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                    <article>
                        <?php if (get_field('pw_icon_left')) { ?>
                            <img src="<?php echo get_field('pw_icon_left'); ?>" class="icon svg wp-post-image" alt="Icon"/>
                            <?php
                        }
                        ?>
                        <?php if (get_field('pw_column_title_left')) { ?>
                            <h2><?php echo get_field('pw_column_title_left'); ?></h2>
                            <?php
                        }
                        if (get_field('pw_column_copy_left')) {
                            ?>
                            <p class="excerpt"><?php echo get_field('pw_column_copy_left'); ?></p>
                            <?php
                        }
                        if (get_field('pw_learn_more_btn_label_left')) { ?>
                            <footer>
                                <a class="btn btn-info btn-lg" title="WebComplete" href="<?php echo get_field('pw_left_learn_more_btn_url'); ?><?php echo $lang_par; ?>" role="button"><?php echo get_field('pw_learn_more_btn_label_left'); ?></a>
                            </footer>
                        <?php     
                        }
                        ?>
                    </article> 
                    <ul class="options">
                        <li class="opt-items">
                            <?php if (get_field('option_1_title_pw_left')) { ?>
                                <h3><?php echo get_field('option_1_title_pw_left'); ?></h3>
                            <?php } ?>
                                
                            <?php if (get_field('option_1_copy_left')) { ?>
                                <p><?php echo get_field('option_1_copy_pw_left'); ?></p>
                            <?php } ?>
                            
                            <?php if (get_field('option_1_link_left')) { ?>
                                <small><?php echo get_field('option_1_link_pw_left'); ?></small>
                            <?php } ?>
                            
                            <?php if (get_field('option_1_icon_left')) { ?>
                                <p><img src="<?php echo get_field('option_1_icon_pw_left'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php } ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_2_title_pw_left')) { ?>
                                <h3><?php echo get_field('option_2_title_pw_left'); ?></h3>
                                <?php
                            }
                            if (get_field('option_2_copy_pw_left')) {
                                ?>
                                <p><?php echo get_field('option_2_copy_pw_right'); ?></p>
                                <?php
                            }
                            ?>
                                <?php
                            if (get_field('option_2_icon_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_2_icon_pw_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_3_title_pw_left')) { ?>
                                <h3><?php echo get_field('option_3_title_pw_left'); ?></h3>
                                <?php
                            }
                            if (get_field('option_3_copy_left')) {
                                ?>
                                <p><?php echo get_field('option_3_copy_pw_left'); ?></p>
                                <?php
                            }
                            ?>
                                <?php
                            if (get_field('option_3_icon_pw_left')) {
                                ?>
                                <p><img src="<?php echo get_field('option_3_icon_pw_left'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_4_title_pw_left')) { ?>
                                <h3><?php echo get_field('option_4_title_pw_left'); ?></h3>
                                <?php
                            }
                            if (get_field('option_4_copy_left')) {
                                ?>
                                <p><?php echo get_field('option_4_copy_pw_left'); ?></p>
                                <?php
                            }
                            ?>
                                <?php
                            if (get_field('option_4_icon_pw_left')) {
                                ?>
                                <p><img src="<?php echo get_field('option_4_icon_pw_left'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_5_title_pw_left')) { ?>
                                <h3><?php echo get_field('option_5_title_pw_left'); ?></h3>
                                <?php
                            }
                            if (get_field('option_5_copy_pw_left')) {
                                ?>
                                <p><?php echo get_field('option_5_copy_pw_left'); ?></p>
                                <?php
                            }
                            ?>
                            <?php
                            if (get_field('option_5_icon_pw_left')) {
                                ?>
                                <p><img src="<?php echo get_field('option_5_icon_pw_left'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                    
<!--                    <ul class="options">
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
                            <img class="icon svg check" src="/wp-content/uploads/2015/06/check.svg" />
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Translation Support', 'upbootwp'); ?></h3>
                            <img class="icon svg check" src="/wp-content/uploads/2015/06/check.svg" />
                        </li>							
                    </ul>-->
                </section>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 compare-plans">
                <section class="text-center">
                    <?php
                    $my_query = new WP_Query('name=web-complete-post');
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        ?>
<!--                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                        </article>-->
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                    <article>
                        <?php if (get_field('pw_icon_right')) { ?>
                            <img src="<?php echo get_field('pw_icon_right'); ?>" class="icon svg wp-post-image" alt="Icon"/>
                            <?php
                        }
                        ?>
                        <?php if (get_field('pw_column_title_right')) { ?>
                            <h2><?php echo get_field('pw_column_title_right'); ?></h2>
                            <?php
                        }
                        if (get_field('pw_column_copy_right')) {
                            ?>
                            <p class="excerpt"><?php echo get_field('pw_column_copy_right'); ?></p>
                            <?php
                        }
                        if (get_field('pw_learn_more_btn_label_right')) { ?>
                            <footer>
                                <a class="btn btn-info btn-lg" title="WebComplete" href="<?php echo get_field('pw_right_learn_more_btn_url'); ?><?php echo $lang_par; ?>" role="button"><?php echo get_field('pw_learn_more_btn_label_right'); ?></a>
                            </footer>
                        <?php     
                        }
                        ?>
                    </article>
                    <ul class="options">
                        <li class="opt-items">
                            <?php if (get_field('option_1_title_pw_right')) { ?>
                                <h3><?php echo get_field('option_1_title_pw_right'); ?></h3>
                            <?php } ?>
                                
                            <?php if (get_field('option_1_copy_left')) { ?>
                                <p><?php echo get_field('option_1_copy_pw_right'); ?></p>
                            <?php } ?>
                            
                            <?php if (get_field('option_1_link_left')) { ?>
                                <small><?php echo get_field('option_1_link_pw_right'); ?></small>
                            <?php } ?>
                            
                            <?php if (get_field('option_1_icon_left')) { ?>
                                <p><img src="<?php echo get_field('option_1_icon_pw_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php } ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_2_title_right')) { ?>
                                <h3><?php echo get_field('option_2_title_pw_right'); ?></h3>
                                <?php
                            }
                            if (get_field('option_2_copy_right')) {
                                ?>
                                <p><?php echo get_field('option_2_copy_pw_right'); ?></p>
                                <?php
                            }
                            ?>
                                <?php
                            if (get_field('option_2_icon_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_2_icon_pw_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_3_title_right')) { ?>
                                <h3><?php echo get_field('option_3_title_pw_right'); ?></h3>
                                <?php
                            }
                            if (get_field('option_3_copy_right')) {
                                ?>
                                <p><?php echo get_field('option_3_copy_pw_right'); ?></p>
                                <?php
                            }
                            ?>
                                <?php
                            if (get_field('option_3_icon_pw_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_3_icon_pw_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_4_title_pw_right')) { ?>
                                <h3><?php echo get_field('option_4_title_pw_right'); ?></h3>
                                <?php
                            }
                            if (get_field('option_4_copy_right')) {
                                ?>
                                <p><?php echo get_field('option_4_copy_right'); ?></p>
                                <?php
                            }
                            ?>
                                <?php
                            if (get_field('option_4_icon_pw_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_4_icon_pw_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_5_title_pw_right')) { ?>
                                <h3><?php echo get_field('option_5_title_pw_right'); ?></h3>
                                <?php
                            }
                            if (get_field('option_5_copy_pw_right')) {
                                ?>
                                <p><?php echo get_field('option_5_copy_pw_right'); ?></p>
                                <?php
                            }
                            ?>
                            <?php
                            if (get_field('option_5_icon_pw_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_5_icon_pw_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
<!--                    <ul class="options">
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
                            <img class="icon svg check" src="/wp-content/uploads/2015/06/check.svg" />
                        </li>
                        <li class="opt-items">
                            <h3><?php echo $title_text = _e('Translation Support', 'upbootwp'); ?></h3>
                            <img class="icon svg check" src="/wp-content/uploads/2015/06/check.svg" />
                        </li>					
                    </ul>-->
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