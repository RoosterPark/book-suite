<?php
/**
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */

 
// Register Script
function func_custom_admin_script() {

	wp_register_script( 'bspp_admin_decorator', 'http://suite.booking.com/wp-content/themes/book-suite-theme/js/bspp-admin.002.js', false, '1', true );
   // wp_register_script( 'bspp_admin_decorator', 'http://dev.beinspired/booking/book-suite-theme/bspp-admin.js', false, '1', true );
	wp_enqueue_script( 'bspp_admin_decorator' );

}
add_action( 'admin_enqueue_scripts', 'func_custom_admin_script' ); 
 
 
// Add Shortcode
function func_incentives() {
   return implode('', array(
      '<div id="incentivewrapper"><div class="incentives"><div class="incentive"><span class="incentive">',
      get_field('incentive-topleft'),
      '</span><br /><span class="incentivetext">',
      get_field('incentive-text-topleft'),
      '</span></div><div class="incentive"><span class="incentive">',
      get_field('incentive-topright'),
      '</span><br /><span class="incentivetext">',
      get_field('incentive-text-topright'),
      '</span></div><div class="incentive"><span class="incentive">',
      get_field('incentive-bottomleft'),
      '</span><br /><span class="incentivetext">',
      get_field('incentive-text-bottomleft'),
      '</span></div><div class="incentive"><span class="incentive">',
      get_field('incentive-bottomright'),
      '</span><br /><span class="incentivetext">',
      get_field('incentive-text-bottomright'),
      '</span></div></div></div>'
   ));
}
add_shortcode('incentives', 'func_incentives');

 
 
 


add_action( 'init', 'BookingSuitesPreferredPartners' );

add_filter( 'post_updated_messages', 'BookingSuitesPreferredPartners_messages' );

add_action( 'admin_head', 'BookingSuitesPreferredPartners_help' );



function BookingSuitesPreferredPartners() {

	$labels = array(

		'name'               => 'BSPPs',

		'singular_name'      => 'BSPP',

		'menu_name'          => 'BSPPs',

		'name_admin_bar'     => 'BSPP',

		'add_new'            => 'Add New',

		'add_new_item'       => 'Add New BSPP',

		'new_item'           => 'New BSPP',

		'edit_item'          => 'Edit BSPP',

		'view_item'          => 'View BSPP',

		'all_items'          => 'All BSPPs',

		'search_items'       => 'Search BSPPs',

		'parent_item_colon'  => 'Parent BSPPs:',

		'not_found'          => 'No BSPPs found.',

		'not_found_in_trash' => 'No BSPPs found in Trash.'

	);



	$args = array( 

		'labels'		=> $labels,

		'public'		=> true,

		'rewrite'		=> array( 'slug' => 'BSPP' ),

		'has_archive'   => true,

		'menu_position' => 20,

		'menu_icon'     => 'dashicons-admin-site',

   		'show_in_rest'       => true,

		'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )

	);

	register_post_type( 'my_BSPP', $args );

}



function BookingSuitesPreferredPartners_messages( $messages ) {

	$post = get_post();



	$messages['BSPP'] = array(

		0  => '',

		1  => 'BSPP updated.',

		2  => 'Custom field updated.',

		3  => 'Custom field deleted.',

		4  => 'BSPP updated.',

		5  => isset( $_GET['revision'] ) ? sprintf( 'BSPP restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,

		6  => 'BSPP published.',

		7  => 'BSPP saved.',

		8  => 'BSPP submitted.',

		9  => sprintf(

			'BSPP scheduled for: <strong>%1$s</strong>.',

			date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )

		),

		10 => 'BSPP draft updated.'

	);



	return $messages;

}



function BookingSuitesPreferredPartners_help() {



	$screen = get_current_screen();



	if ( 'BSPP' != $screen->post_type ) {

		return;

	}



	$basics = array(

		'id'      => 'BSPP_basics',

		'title'   => 'BSPP Basics',

		'content' => 'Content for help tab here'

	);



	$formatting = array(

		'id'      => 'BSPP_formatting',

		'title'   => 'BSPP Formatting',

		'content' => 'Content for help tab here'

	);



	$screen->add_help_tab( $basics );

	$screen->add_help_tab( $formatting );




}




 
 
 
 
 
 
 
 
 
 
if (!isset($content_width)) $content_width = 770;

/**
 * upbootwp_setup function.
 * 
 * @access public
 * @return void
 */

/** Add SVG Support to media library
 */
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
// Add SVG Thumbnails to media library grid

function custom_admin_head() {
	$css = '';
	$css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';
	echo '<style type="text/css">'.$css.'</style>';
}

//Add class to edit button
function custom_edit_post_link($output) {
	$output = str_replace('class="post-edit-link"', 'class="post-edit-link btn btn-link"', $output);
	return $output;
}
add_filter('edit_post_link', 'custom_edit_post_link');

function upbootwp_setup() {

	require 'inc/general/class-Upbootwp_Walker_Nav_Menu.php';
	require 'inc/general/class-Upbootwp_Walker_Nav_Footer_Menu.php';

	load_theme_textdomain('upbootwp', get_template_directory().'/languages');

	add_theme_support( 'automatic-feed-links' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */

	function admin_theme_style() {
		wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/css/wp-admin-editor-style.css');
	}
	add_action('admin_enqueue_scripts', 'admin_theme_style');
	
	
	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
	add_theme_support( 'post-thumbnails', array( 'page' ) );
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'stories-tile-360', 360, 360, true);
	add_image_size( 'stories-tile-270', 360, 270, true);
	add_image_size( 'stories-tile-180', 360, 180, true);
	
	add_image_size( 'featured-image-landscape', 1920, 600, true );
    add_image_size( 'location-featured-land', 450, 250, array( 'left', 'top' ) );
	//add_image_size( 'homepage-thumb', 300, 200, array( 'left', 'top' )  ); // Hard crop left top
	add_image_size( 'success-stories-land-1024', 1024, 510,  array( 'left', 'center' ));
	add_image_size( 'success-stories-land', 776, 381,  array( 'left', 'center' ));
	add_image_size( 'success-stories-port', 574, 596,  array( 'left', 'top' ));
	
	register_nav_menus( array(
		'primary' => __( 'Primary - Mobile - Menu - Global', 'Bootstrap WP Primary' ),
 		'primary-desktop' => __( 'Primary - Desktop - Global', 'Desktop Navigation' ),
	));
	
	register_nav_menu('footer_navigation', 'Footer navigation');
	register_nav_menu('footer_aux_navigation', 'Footer aux navigation');

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support(
		'custom-background', 
		apply_filters ( 
			'upbootwp_custom_background_args', 
			array(
			'default-color' => 'ffffff',
			'default-image' => ''
			)
		)
	);
}

/*******************
 *
 * Add classes to prev and next post
 *
 ********************/

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
	return 'class="prev-post btn btn-info btn-lg text-center"';
}
function posts_link_attributes_2() {
	return 'class="next-post btn btn-info btn-lg text-center"';
}

/*******************
 *
 * Add bootstrap img-responsive css class to all images uploaded via media button in WP post admin area.
 *
 ********************/

function image_tag_class($class) {
	$class .= ' img-responsive';
	return $class;
}
add_filter('get_image_tag_class', 'image_tag_class' );


/*******************
 * 
 * Success Stories Custom Post Type
 * 
 ********************/
//flush_rewrite_rules();

// Show posts of 'post', 'page' and 'movie' post types on home page
//add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

// function add_my_post_types_to_query( $query ) {
// 	if ( is_home() && $query->is_main_query() )
// 		$query->set( 'post_type', array( 'post', 'page', 'success_stories', 'locations' ) );
// 	return $query;
// }

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
	if(is_category() || is_tag()) {
		$post_type = get_query_var('post_type');
		if($post_type)
			$post_type = $post_type;
		else
			$post_type = array('post','articles','success', 'success_category','nav_menu_item');
		$query->set('post_type',$post_type);
		return $query;
	}
}

function my_custom_post_success() {
	$labels = array(
			'name'               => _x( 'Success', 'post type general name' ),
			'singular_name'      => _x( 'Success', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'Success' ),
			'add_new_item'       => __( 'Add New Success' ),
			'edit_item'          => __( 'Edit Success' ),
			'new_item'           => __( 'New Success' ),
			'all_items'          => __( 'All Success' ),
			'view_item'          => __( 'View Success' ),
			'search_items'       => __( 'Search Success' ),
			'not_found'          => __( 'No Success found' ),
			'not_found_in_trash' => __( 'No Success found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Success'
	);
	$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our products and product specific data',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
			'taxonomies'        => array('post_tag') // this is IMPORTANT
	);
	register_post_type( 'success', $args );
}
add_action( 'init', 'my_custom_post_success' );


function my_taxonomies_success() {
	$labels = array(
			'name'              => _x( 'Success Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Product Success', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Success Categories' ),
			'all_items'         => __( 'All Success Categories' ),
			'parent_item'       => __( 'Parent Success Category' ),
			'parent_item_colon' => __( 'Parent Success Category:' ),
			'edit_item'         => __( 'Edit Success Category' ),
			'update_item'       => __( 'Update Success Category' ),
			'add_new_item'      => __( 'Add New Success Category' ),
			'new_item_name'     => __( 'New Success Category' ),
			'menu_name'         => __( 'Success Categories' ),
	);
	$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			
	);
	register_taxonomy( 'success_category', 'success', $args );
}
add_action( 'init', 'my_taxonomies_success', 0 );


/*******************
 *
 * News Custom Post Type
 *
 ********************/


function my_custom_post_news() {
	$labels = array(
			'name'               => _x( 'News', 'post type general name' ),
			'singular_name'      => _x( 'News', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'News' ),
			'add_new_item'       => __( 'Add New News' ),
			'edit_item'          => __( 'Edit News' ),
			'new_item'           => __( 'New News' ),
			'all_items'          => __( 'All News' ),
			'view_item'          => __( 'View News' ),
			'search_items'       => __( 'Search News' ),
			'not_found'          => __( 'No News found' ),
			'not_found_in_trash' => __( 'No News found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'News'
	);
	$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our products and product specific data',
			'public'        => true,
			'menu_position' => 6,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
			'taxonomies'        => array('post_tag') // this is IMPORTANT
	);
	register_post_type( 'news', $args );
}
add_action( 'init', 'my_custom_post_news' );


function my_taxonomies_news() {
	$labels = array(
			'name'              => _x( 'News Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'News', 'taxonomy singular name' ),
			'search_items'      => __( 'Search News Categories' ),
			'all_items'         => __( 'All News Categories' ),
			'parent_item'       => __( 'Parent News Category' ),
			'parent_item_colon' => __( 'Parent News Category:' ),
			'edit_item'         => __( 'Edit News Category' ),
			'update_item'       => __( 'Update News Category' ),
			'add_new_item'      => __( 'Add New News Category' ),
			'new_item_name'     => __( 'New News Category' ),
			'menu_name'         => __( 'News Categories' ),
	);
	$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'show_ui'           => true,
			'show_admin_column' => true,
				
	);
	register_taxonomy( 'news_category', 'news', $args );
}
add_action( 'init', 'my_taxonomies_news', 0 );


/*******************
 *
 * Locations Custom Post Type
 *
 ********************/


function my_custom_post_location() {
	$labels = array(
			'name'               => _x( 'Location', 'post type general name' ),
			'singular_name'      => _x( 'Location', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'Location' ),
			'add_new_item'       => __( 'Add New Location' ),
			'edit_item'          => __( 'Edit Location' ),
			'new_item'           => __( 'New Location' ),
			'all_items'          => __( 'All Location' ),
			'view_item'          => __( 'View Location' ),
			'search_items'       => __( 'Search Location' ),
			'not_found'          => __( 'No Location found' ),
			'not_found_in_trash' => __( 'No Location found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Locations'
	);
	$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our products and product specific data',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
			'taxonomies'        => array('post_tag') // this is IMPORTANT
	);
	register_post_type( 'location', $args );
}
add_action( 'init', 'my_custom_post_location' );


function my_taxonomies_location() {
	$labels = array(
			'name'              => _x( 'Locations Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Location Categories' ),
			'all_items'         => __( 'All Location Categories' ),
			'parent_item'       => __( 'Parent Location Category' ),
			'parent_item_colon' => __( 'Parent Location Category:' ),
			'edit_item'         => __( 'Edit Location Category' ),
			'update_item'       => __( 'Update Location Category' ),
			'add_new_item'      => __( 'Add New Location Category' ),
			'new_item_name'     => __( 'New SLocation Category' ),
			'menu_name'         => __( 'Location Categories' ),
	);
	$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'show_ui'           => true,
			'show_admin_column' => true,
				
	);
	register_taxonomy( 'location_category', 'location', $args );
}
add_action( 'init', 'my_taxonomies_location', 0 );


/*******************
 *
 * Pepole Custom Post Type
 *
 ********************/


function my_custom_post_people() {
	$labels = array(
			'name'               => _x( 'People', 'post type general name' ),
			'singular_name'      => _x( 'People', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'people' ),
			'add_new_item'       => __( 'Add New People' ),
			'edit_item'          => __( 'Edit People' ),
			'new_item'           => __( 'New People' ),
			'all_items'          => __( 'All People' ),
			'view_item'          => __( 'View People' ),
			'search_items'       => __( 'Search People' ),
			'not_found'          => __( 'No People found' ),
			'not_found_in_trash' => __( 'No People found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'People'
	);
	$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our products and product specific data',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
			'taxonomies'        => array('post_tag') // this is IMPORTANT
	);
	register_post_type( 'people', $args );
}
add_action( 'init', 'my_custom_post_people' );


function my_taxonomies_people() {
	$labels = array(
			'name'              => _x( 'People Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'People', 'taxonomy singular name' ),
			'search_items'      => __( 'Search People Categories' ),
			'all_items'         => __( 'All People Categories' ),
			'parent_item'       => __( 'Parent People Category' ),
			'parent_item_colon' => __( 'Parent People Category:' ),
			'edit_item'         => __( 'Edit People Category' ),
			'update_item'       => __( 'Update People Category' ),
			'add_new_item'      => __( 'Add New People Category' ),
			'new_item_name'     => __( 'New People Category' ),
			'menu_name'         => __( 'People Categories' ),
	);
	$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'show_ui'           => true,
			'show_admin_column' => true,

	);
	register_taxonomy( 'people_category', 'people', $args );
}
add_action( 'init', 'my_taxonomies_people', 0 );






// Add Class to All Excerpts in WordPress 
add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
	return str_replace('<p', '<p class="excerpt"', $excerpt);
}

function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//Control Excerpt Length using Filters
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action( 'after_setup_theme', 'upbootwp_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function upbootwp_widgets_init() {
	register_sidebar(array(
		'name'          => __('Sidebar','upbootwp'),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
}
add_action( 'widgets_init', 'upbootwp_widgets_init' );

function upbootwp_scripts() {
	// Deregister the built-in version of jQuery
	wp_deregister_script('jquery');
	// Register CSS Files
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, filemtime(get_stylesheet_directory(). '/bootstrap/css/bootstrap.css'));
	wp_enqueue_style( 'font-awesome-icons', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style('site_responsive', get_template_directory_uri() . '/css/book-suite-theme.css', false, filemtime(get_stylesheet_directory(). '/css/book-suite-theme.css'));
	
	// Register JS Files
	wp_enqueue_script('upbootwp-modernizr', get_template_directory_uri().'/js/modernizr.custom.82111.js' );
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, filemtime(get_stylesheet_directory().'/js/jquery.js' ), false);
	wp_enqueue_script('jquery');
	
	wp_enqueue_script( 'jQuery-ui', get_template_directory_uri().'/js/jquery-ui.js',array(),'2.0.3',false);	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js',array(),'20150624',false);
	wp_register_script('js_function', get_template_directory_uri() . '/js/function.js', false, filemtime(get_stylesheet_directory().'/js/function.js' ), false);
	wp_enqueue_script('js_function');	
}
add_action( 'wp_enqueue_scripts', 'upbootwp_scripts' );

function enqueue_isotope() {
	if (is_page('stories')) {
		wp_register_script('js_iso', get_template_directory_uri() . '/js/isotope.pkgd.js', false, filemtime(get_stylesheet_directory().'/js/isotope.pkgd.js' ), true);
		wp_enqueue_script('js_iso');
		
		wp_register_script('js_pack', get_template_directory_uri() . '/js/packery-mode.pkgd.min.js', false, filemtime(get_stylesheet_directory().'/js/packery-mode.pkgd.min.js' ), true);
		wp_enqueue_script('js_pack');
		
		wp_register_script('js_succes-iso', get_template_directory_uri() .'/js/success-story-isotope.js', array(), filemtime(get_stylesheet_directory().'/js/success-story-isotope.js' ), true);
		wp_enqueue_script('js_succes-iso');
	}
}
add_action('wp_footer', 'enqueue_isotope' );

function enqueue_lazyload() {
	wp_enqueue_script('jquery_lazy_load', get_template_directory_uri() . '/js/jquery.lazyload.min.js', array('jquery'), '1.9.3');
}
add_action('wp_footer', 'enqueue_lazyload');

if (is_page('stories')) {
	function filter_lazyload($content) {
		return preg_replace_callback('/(<\s*img[^>]+)(src\s*=\s*"[^"]+")([^>]+>)/i', 'preg_lazyload', $content);
	}
	add_filter('the_content', 'filter_lazyload');
	
	function preg_lazyload($img_match) {
		$img_replace = $img_match[1] . 'src="' . get_template_directory_uri() . '/img/grey.gif" data-original' . substr($img_match[2], 3) . $img_match[3];
		$img_replace = preg_replace('/class\s*=\s*"/i', 'class="lazy', $img_replace);
		$img_replace .= '<noscript>' . $img_match[0] . '</noscript>';
		return $img_replace;
	}
}

// function footer_lazyload() {
// 	echo '';
// }
// add_action('wp_footer', 'footer_lazyload');
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory().'/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory().'/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory().'/inc/jetpack.php';


/**
 * upbootwp_breadcrumbs function.
 * Edit the standart breadcrumbs to fit the bootstrap style without producing more css
 * @access public
 * @return void
 */
function upbootwp_breadcrumbs() {

	$delimiter = '&raquo;';
	$home = 'Home';
	$before = '<li class="active">';
	$after = '</li>';

	if (!is_home() && !is_front_page() || is_paged()) {
		echo '<ol class="breadcrumb">';
		global $post;
		//$homeLink = get_bloginfo('url');
		$homeLink = home_url('url');
		echo '<li><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . '</li> ';
		if (is_category()) {
			global $wp_query;
			$cat_obj = $wp_query->get_queried_object();
			$thisCat = $cat_obj->term_id;
			$thisCat = get_category($thisCat);
			$parentCat = get_category($thisCat->parent);
			if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
			echo $before . single_cat_title('', false) . $after;
		} elseif (is_day()) {
			echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;
		} elseif (is_month()) {
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;
		} elseif (is_year()) {
			echo $before . get_the_time('Y') . $after;
		} elseif (is_single() && !is_attachment()) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo $before . get_the_title() . $after;
			}
		} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;
		} elseif (is_attachment()) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;
		} elseif ( is_page() && !$post->post_parent ) {
			echo $before . get_the_title() . $after;
		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;
		} elseif ( is_search() ) {
			echo $before . 'Search results for "' . get_search_query() . '"' . $after;
		} elseif ( is_tag() ) {
			echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
		} elseif ( is_author() ) {
			global $author;
			$userdata = get_userdata($author);
			echo $before . 'Articles posted by ' . $userdata->display_name . $after;
		} elseif ( is_404() ) {
			echo $before . 'Error 404' . $after;
		}
		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo ': ' . __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}
		echo '</ol>';
	}
}

// Register custom footer and sidbar widget widgets
register_sidebar( array(
	'name' => __( 'Global Footer 1  - Left', 'tto' ),
	'id' => 'sidebar-4',
	'description' => __( 'Found at the bottom of every page (except 404s, optional homepage and full width) as the footer. Left Side.', 'tto' ),
	'before_widget' => '<aside id="%1$s" class="col-md-4 col-lg-4 center-block widget %2$s"><div class="panel panel-default"><div class="panel-body">',
	'after_widget' => "</div></div></aside>",
	'before_title' => '<div class="panel-heading"><h3 class="panel-title">',
	'after_title' => '</div></h3>',
) );

register_sidebar( array(
	'name' => __( 'Global Footer 2  - Middle', 'tto' ),
	'id' => 'sidebar-5',
	'description' => __( 'Found at the bottom of every page (except 404s, optional homepage and full width) as the footer. Center.', 'tto' ),
	'before_widget' => '<aside id="%1$s" class="col-md-4 col-lg-4 center-block widget %2$s"><div class="panel panel-default"><div class="panel-body">',
	'after_widget' => "</div></div></aside>",
	'before_title' => '<div class="panel-heading"><h3 class="panel-title">',
	'after_title' => '</div></h3>',
) );

register_sidebar( array(
	'name' => __( 'Global Footer 3 - Right', 'tto' ),
	'id' => 'sidebar-6',
	'description' => __( 'Found at the bottom of every page (except 404s, optional homepage and full width) as the footer. Right Side.', 'tto' ),
	'before_widget' => '<aside id="%1$s" class="right widget %2$s">',
	'after_widget' => "</aside>",
	'before_title' => '<h3 class="panel-title">',
	'after_title' => '</h3>',
) );

// Post Attachment image function. Image URL for CSS Background.
function the_post_image_url($size=large) {
	global $post;
	$linkedimgurl = get_post_meta ($post->ID, 'image_url', true);
	if ( $images = get_children(array(
			'post_parent' => get_the_ID(),
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_image_src($image->ID, $size);
			$attachmenturl=$attachmenturl[0];
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );
			echo ''.$attachmenturl.'';
		}
	} elseif ( $linkedimgurl ) {
		echo $linkedimgurl;
	} elseif ( $linkedimgurl && $images = get_children(array(
			'post_parent' => get_the_ID(),
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_image_src($image->ID, $size);
			$attachmenturl=$attachmenturl[0];
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );
			echo ''.$attachmenturl.'';
		}
	} else {
		echo ''.esc_url( get_template_directory_uri() ).'/img/no-attachment.gif';
		//echo ''.get_bloginfo('template_url').'/img/no-attachment.gif';
	}
}

// Post Attachment image function. Direct link to file.
function the_post_image($size=thumbnail) {
	global $post;
	$linkedimgtag = get_post_meta ($post->ID, 'image_tag', true);
	if ( $images = get_children(array(
			'post_parent' => get_the_ID(),
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_url($image->ID);
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );
			echo ''.$attachmentimage.'';
		}
	} elseif ( $linkedimgtag ) {
		echo $linkedimgtag;
	} elseif ( $linkedimgtag && $images = get_children(array(
			'post_parent' => get_the_ID(),
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_url($image->ID);
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );
			echo ''.$attachmentimage.'';
		}
	} else {
		echo '<img src="'.get_bloginfo ('template_url').'/img/no-attachment-large.gif" />';
	}
}
?>