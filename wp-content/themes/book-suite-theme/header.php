<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php
    global $lang_par;
    if ($_GET['lang']) {
        $lang_par = "?lang=" . $_GET['lang'];
    }
    ?>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('&raquo;', 'true', 'right'); ?><?php if (is_single()) { ?> Blog Archive &raquo; <?php } ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,600' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>

        <link rel="apple-touch-icon" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-32x32.png">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-touch-icon-180x180.png">
        <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/apple-icon-precomposed.png">

        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/android-icon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/android-icon-144x144.png" sizes="144x144">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/android-icon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/android-icon-72x72.png" sizes="72x72">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/android-icon-48x48.png" sizes="48x48">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/android-icon-36x36.png" sizes="36x36">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/android-icon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/manifest.json">
        <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/ico/favicon.ico">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="msapplication-TileImage" content="<?php echo esc_url(get_template_directory_uri()); ?>/ico/mstile-144x144.png">
        <meta name="msapplication-config" content="<?php echo esc_url(get_template_directory_uri()); ?>/ico/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <style>
            .request-content {
                background:  url("/wp-content/themes/book-suite-theme/img/lt-blue-background-slice.png") repeat-x scroll 0 -70px rgba(0, 0, 0, 0);
            }</style>
    </head>

    <body <?php body_class(); ?>>
        <?php do_action('before'); ?>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="language-bar">
                <div class="container-fluid">
                    <div class="language-menu">
                        <?php //do_action('wpml_add_language_selector'); ?>

                        <div id="lang_sel_click" class="lang_sel_click" onclick="wpml_language_selector_click.toggle(this);">
                            <ul>
                                <li>
                                    <a class="lang_sel_sel icl-en" href="javascript:;">Select Language</a>
                                    <ul>
                                        <li class="icl-de">
                                            <a href="http://suite.booking.com/?lang=de" rel="alternate">
                                                <span class="icl_lang_sel_native">Deutsch</span>
                                                <span class="icl_lang_sel_translated">
                                                    <span class="icl_lang_sel_bracket"> (</span>
                                                    German
                                                    <span class="icl_lang_sel_bracket">)</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="icl-de">
                                            <a href="http://suite.booking.com" rel="alternate">
                                                <span class="icl_lang_sel_native">English</span>
                                                <span class="icl_lang_sel_translated">
                                                    <span class="icl_lang_sel_bracket"> (</span>
                                                    English
                                                    <span class="icl_lang_sel_bracket">)</span>
                                                </span>
                                            </a>
                                        <li class="icl-de">
                                            <a href="http://suite.booking.com/?lang=es" rel="alternate">
                                                <span class="icl_lang_sel_native">Español</span>
                                                <span class="icl_lang_sel_translated">
                                                    <span class="icl_lang_sel_bracket"> (</span>
                                                    Spanish
                                                    <span class="icl_lang_sel_bracket">)</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="icl-it">
                                            <a href="http://suite.booking.com/?lang=it" rel="alternate">
                                                <span class="icl_lang_sel_native">Italiano</span>
                                                <span class="icl_lang_sel_translated">
                                                    <span class="icl_lang_sel_bracket"> (</span>
                                                    Italian
                                                    <span class="icl_lang_sel_bracket">)</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="icl-pt">
                                            <a href="http://suite.booking.com/?lang=pt-pt" rel="alternate">
                                                <span class="icl_lang_sel_native">Português</span>
                                                <span class="icl_lang_sel_translated">
                                                    <span class="icl_lang_sel_bracket"> (</span>Portugese<span class="icl_lang_sel_bracket">)</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="icl-pt-br">
                                            <a href="http://suite.booking.com?lang=pt-br" rel="alternate">
                                                <span class="icl_lang_sel_native">Português</span>
                                                <span class="icl_lang_sel_translated">
                                                    <span class="icl_lang_sel_bracket"> (</span>
                                                    Portuguese (Brazil)
                                                    <span class="icl_lang_sel_bracket">)</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if (get_header_image() != '') : ?>

                        <div id="logo" class="company-logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img class="img-logo img-responsive" src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>"/></a>
                        </div><!-- end of #logo -->

                    <?php endif; // header image was removed ?>

                    <?php if (!get_header_image()) : ?>

                        <div id="logo">
                            <span class="site-name"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></span>
                        </div><!-- end of #logo -->

                    <?php endif; // header image was removed (again) ?>
                </div>

                <?php
                $args = array('theme_location' => 'primary-desktop',
                    'container_class' => 'navbar-desktop',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'fallback_cb' => '',
                    'menu_id' => 'main-desktop-menu',
                    'walker' => new Upbootwp_Walker_Nav_Menu()
                );
                wp_nav_menu($args);
                ?>
                <?php
                $args = array('theme_location' => 'primary',
                    'container_class' => 'navbar-collapse collapse mobile',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'walker' => new Upbootwp_Walker_Nav_Menu()
                );
                wp_nav_menu($args);
                ?>

            </div><!-- container -->
        </nav>
        <?php if (is_home()) { ?> 
            <?php //get_template_part('index-featured-image'); ?>
            <?php get_template_part('index-rotating-hero-banner'); ?>
        <?php } ?>
        <!-- Start: main .content-area -->
        <main id="main" class="content-area site-main" role="main">
