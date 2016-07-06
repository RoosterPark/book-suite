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
                    $mys_query = new WP_Query('name=web-direct-post');
                    while ($mys_query->have_posts()) {
                        $mys_query->the_post();
                    }
                    wp_reset_postdata();
                    ?>
                    <article>
                        <?php if (get_field('icon_left')) { ?>
                            <img src="<?php echo get_field('icon_left'); ?>" class="icon svg wp-post-image" alt="Icon"/>
                            <?php
                        }
                        ?>
                        <?php if (get_field('column_title_left')) { ?>
                            <h2><?php echo get_field('column_title_left'); ?></h2>
                            <?php
                        }
                        if (get_field('column_copy_left')) {
                            ?>
                            <p class="excerpt"><?php echo get_field('column_copy_left'); ?></p>
                            <?php
                        }
                        if (get_field('learn_more_btn_label_left')) { ?>
                            <footer>
                                <a class="btn btn-info btn-lg" title="WebComplete" href="<?php echo get_field('learn_more_btn_link_left'); ?>" role="button"><?php echo get_field('learn_more_btn_label_left'); ?></a>
                            </footer>
                        <?php     
                        }
                        ?>
                    </article>  


                   

                    <ul class="options">
                        <li class="opt-items">
                            <?php if (get_field('option_1_title_left')) { ?>
                                <h3><?php echo get_field('option_1_title_left'); ?></h3>
                            <?php } ?>
                                
                            <?php if (get_field('option_1_copy_left')) { ?>
                                <p><?php echo get_field('option_1_copy_left'); ?></p>
                            <?php } ?>
                            
                            <?php if (get_field('option_1_link_left')) { ?>
                                <small><?php echo get_field('option_1_link_left'); ?></small>
                            <?php } ?>
                            
                            <?php if (get_field('option_1_icon_left')) { ?>
                                <p><img src="<?php echo get_field('option_1_icon_left'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php } ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_2_title_left')) { ?>
                                <h3><?php echo get_field('option_2_title_left'); ?></h3>
                                <?php
                            }
                            if (get_field('option_2_copy_left')) {
                                ?>
                                <p><?php echo get_field('option_2_copy_left'); ?></p>
                                <?php
                            }
                            ?>
                            <?php
                            if (get_field('option_2_icon_left')) {
                                ?>
                                <p><img src="<?php echo get_field('option_2_icon_left'); ?>" class="icon svg check" alt="Icon"/></p>
                                <?php
                            } ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_3_title_left')) { ?>
                                <h3><?php echo get_field('option_3_title_left'); ?></h3>
                                <?php
                            }
                            if (get_field('option_3_copy_left')) {
                                ?>
                                <p><?php echo get_field('option_3_copy_left'); ?></p>
                                <?php
                            }
                            ?>
                            <?php
                            if (get_field('option_3_icon_left')) {
                                ?>
                                <p><img src="<?php echo get_field('option_3_icon_left'); ?>" class="icon svg check" alt="Icon"/></p>
                                <?php
                            } ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_4_title_left')) { ?>
                                <h3><?php echo get_field('option_4_title_left'); ?></h3>
                                <?php
                            }
                            if (get_field('option_4_copy_left')) {
                                ?>
                                <p><?php echo get_field('option_4_copy_left'); ?></p>
                                <?php
                            }
                            ?>
                            <?php
                            if (get_field('option_4_icon_left')) {
                                ?>
                                <p><img src="<?php echo get_field('option_4_icon_left'); ?>" class="icon svg check" alt="Icon"/></p>
                                <?php
                            } ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_5_title_left')) { ?>
                                <h3><?php echo get_field('option_5_title_left'); ?></h3>
                                <?php
                            }
                            if (get_field('option_5_copy_left')) {
                                ?>
                                <p><?php echo get_field('option_5_copy_left'); ?></p>
                                <?php
                            }
                            ?>
                             <?php
                            if (get_field('option_5_icon_left')) {
                                ?>
                                <p><img src="<?php echo get_field('option_5_icon_left'); ?>" class="icon svg check" alt="Icon"/></p>
                                <?php
                            } ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_6_title_left')) { ?>
                                <h3><?php echo get_field('option_6_title_left'); ?></h3>
                                <?php
                            }
                            if (get_field('option_6_copy_left')) {
                                ?>
                                <p><?php echo get_field('option_6_copy_left'); ?></p>
                                <?php
                            }
                            ?>
                            <?php
                            if (get_field('option_6_icon_left')) {
                                ?>
                                <p><img src="<?php echo get_field('option_6_icon_left'); ?>" class="icon svg check" alt="Icon"/></p>
                                <?php
                            } ?>
                        </li>			
                    </ul>
                </section>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 compare-plans">
                <section class="text-center">
                    <article>
                     <?php if (get_field('icon_right')) { ?>
                                <img src="<?php echo get_field('icon_right'); ?>" class="icon svg wp-post-image" alt="Icon"/>
                                <?php
                            }
                            ?>
                            <?php if (get_field('column_title_right')) { ?>
                                <h2><?php echo get_field('column_title_right'); ?></h2>
                                <?php
                            }
                            if (get_field('column_copy_right')) {
                                ?>
                                <p class="excerpt"><?php echo get_field('column_copy_right'); ?></p>
                                <?php
                            }
                            ?>
                            <?php if (get_field('learn_more_btn_label_right')) { ?>
                            <footer>
                                <a class="btn btn-info btn-lg" title="WebComplete" href="<?php echo get_field('learn_more_btn_link_url_right'); ?>" role="button"><?php echo get_field('learn_more_btn_label_right'); ?></a>
                            </footer>
                            <?php     
                            }
                            ?>
                    </article>
                    <ul class="options">
                        <li class="opt-items">
                            <?php if (get_field('option_1_title_right')) { ?>
                                <h3><?php echo get_field('option_1_title_right'); ?></h3>
                            <?php } ?>
                                
                            <?php if (get_field('option_1_copy_left')) { ?>
                                <p><?php echo get_field('option_1_copy_right'); ?></p>
                            <?php } ?>
                            
                            <?php if (get_field('option_1_link_left')) { ?>
                                <small><?php echo get_field('option_1_link_right'); ?></small>
                            <?php } ?>
                            
                            <?php if (get_field('option_1_icon_left')) { ?>
                                <p><img src="<?php echo get_field('option_1_icon_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php } ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_2_title_right')) { ?>
                                <h3><?php echo get_field('option_2_title_right'); ?></h3>
                                <?php
                            }
                            if (get_field('option_2_copy_right')) {
                                ?>
                                <p><?php echo get_field('option_2_copy_right'); ?></p>
                                <?php
                            }
                            ?>
                                <?php
                            if (get_field('option_2_icon_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_2_icon_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_3_title_right')) { ?>
                                <h3><?php echo get_field('option_3_title_right'); ?></h3>
                                <?php
                            }
                            if (get_field('option_3_copy_right')) {
                                ?>
                                <p><?php echo get_field('option_3_copy_right'); ?></p>
                                <?php
                            }
                            ?>
                                <?php
                            if (get_field('option_3_icon_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_3_icon_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_4_title_right')) { ?>
                                <h3><?php echo get_field('option_4_title_right'); ?></h3>
                                <?php
                            }
                            if (get_field('option_4_copy_right')) {
                                ?>
                                <p><?php echo get_field('option_4_copy_right'); ?></p>
                                <?php
                            }
                            ?>
                                <?php
                            if (get_field('option_4_icon_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_4_icon_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_5_title_right')) { ?>
                                <h3><?php echo get_field('option_5_title_right'); ?></h3>
                                <?php
                            }
                            if (get_field('option_5_copy_right')) {
                                ?>
                                <p><?php echo get_field('option_5_copy_right'); ?></p>
                                <?php
                            }
                            ?>
                            <?php
                            if (get_field('option_5_icon_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_5_icon_right'); ?>" class="icon svg check" alt="Icon"/></p>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="opt-items">
                            <?php if (get_field('option_6_title_right')) { ?>
                                <h3><?php echo get_field('option_6_title_right'); ?></h3>
                                <?php
                            }
                            if (get_field('option_6_copy_left')) {
                                ?>
                                <p><?php echo get_field('option_6_copy_right'); ?></p>
                                <?php
                            }
                            ?>
                            <?php
                            if (get_field('option_6_icon_right')) {
                                ?>
                                <p><img src="<?php echo get_field('option_6_icon_right'); ?>" class="icon svg check" alt="Icon"/></p>
                                <?php
                            } ?>
                        </li>	
                    </ul>
                </section>
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