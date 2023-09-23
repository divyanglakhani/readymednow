<?php
/**
 * Ready Med functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ready_Med
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function readymednow_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Ready Med, use a find and replace
		* to change 'readymednow' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'readymednow', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'readymednow' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'readymednow_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'readymednow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function readymednow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'readymednow_content_width', 640 );
}
add_action( 'after_setup_theme', 'readymednow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function readymednow_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'readymednow' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'readymednow' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'readymednow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function readymednow_scripts() {
	wp_enqueue_style( 'readymednow-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'readymednow-style', 'rtl', 'replace' );

	wp_enqueue_script( 'readymednow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'readymednow_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/*--=====================================--*/
/*---Create Theme Panel with Header & Footer Settings---*/
/*--=====================================--*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	/*acf_add_options_sub_page(array(
		'page_title' 	=> 'Service Settings',
		'menu_title'	=> 'Services',
		'parent_slug'	=> 'theme-general-settings',
	));*/

    acf_add_options_sub_page(array(
        'page_title'    => 'Company Facts',
        'menu_title'    => 'Company Facts',
        'parent_slug'   => 'theme-general-settings',
    ));
	
}


/*--=====================================--*/
/*--------Add Icon in Parent Menu----------*/
/*--=====================================--*/


add_filter( 'walker_nav_menu_start_el', 'add_arrow',10,4);
function add_arrow( $output, $item, $depth, $args ){
  if ( in_array( 'menu-item-has-children', $item->classes ) && in_array( 'menu-item-object-custom', $item->classes )) {
            $output .= '<i class="fa fa-angle-down menu_arrow" aria-hidden="true"></i>';
        }
        if ( in_array( 'menu-item-has-children', $item->classes ) && in_array( 'menu-item-object-services', $item->classes )) {
            $output .= '<i class="fa fa-angle-right menu_arrow" aria-hidden="true"></i>';
        }
    return $output;
}


/*--=====================================--*/
/*---Create Custom Menu Location---*/
/*--=====================================--*/


function wpb_custom_new_menu() {
  register_nav_menu('footer-left-menu',__( 'Footer Left Menu' ));
  register_nav_menu('footer-right-menu',__( 'Footer Right Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


function widget( $args, $instance ) {?>
	<div class="social_share_s">
	<?php
	echo $args['before_widget'];
	if ( !empty($instance['title']) ) {
		echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
	}

	global $post;
	$get_url = get_permalink($post->ID);
	$url = esc_url($get_url);
	$social_sharing = get_field('social_sharing', 'widget_' . $args['widget_id']);
	?>
	<ul class="social-list list-unstyled">
		<?php
		if( $social_sharing ): 
					foreach( $social_sharing as $social_share ): ?>
					<?php  
					if($social_share === 'Facebook'){ ?>
						<li class="social_s facebook"><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<?php 
					}
					if($social_share === 'Twitter'){ ?>
						<li class="social_s twitter"><a target='_blank' href='https://twitter.com/share?url=<?php echo $url; ?>'><i class="fa fa-twitter"></i></a></li>
					<?php 
					}
					if($social_share === 'Linkedin'){ ?>
						<li class="social_s linkedin"><a target='_blank' href='http://www.linkedin.com/shareArticle?url=<?php echo $url; ?>'><i class="fa fa-linkedin-in"></i></a></li>
					<?php 
					}
					if($social_share === 'Google Plus'){ ?>
						<li class="social_s g-plus"><a target='_blank' href='https://plus.google.com/share?url=<?php echo $url; ?>'><i class="fa fa-google-plus"></i></a></li>
					<?php 
					}
					if($social_share === 'Pinterest'){ ?>
						<li class="social_s pinterest"><a target='_blank' href='https://pinterest.com/pin/create/button/?url=<?php echo $url; ?>'><i class="fa fa-pinterest"></i></a></li>
					<?php 
					}
					endforeach; 
		endif; 
		?>
	</ul>
		<?php
	echo $args['after_widget'];
	?>
	</div>
	<?php
}

function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyCVMD_zKZBwBQbLas4Chb01L3p7QD4sKJE';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
	// woocommerce

// add_theme_support( 'woocommerce' );
function pmgarman_s_wrapper_start() {
	echo '<div id="primary" class="content-area">';}remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
add_action( 'woocommerce_before_main_content', 'pmgarman_s_wrapper_start', 10 );

function pmgarman_s_wrapper_end() {
	echo '</div>';
}
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_after_main_content', 'pmgarman_s_wrapper_end', 10 );