<?php
/**
 * daem_subsitios functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package daem_subsitios
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'daem_subsitios_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function daem_subsitios_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on daem_subsitios, use a find and replace
		 * to change 'daem_subsitios' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'daem_subsitios', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'daem_subsitios' ),
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
				'daem_subsitios_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'daem_subsitios_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function daem_subsitios_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'daem_subsitios_content_width', 640 );
}
add_action( 'after_setup_theme', 'daem_subsitios_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function daem_subsitios_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'daem_subsitios' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'daem_subsitios' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'daem_subsitios_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function daem_subsitios_scripts() {
	wp_enqueue_style('daem_subsitios-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'daem_subsitios-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'daem_subsitios-style', 'rtl', 'replace' );

	wp_enqueue_script( 'daem_subsitios-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('bootstrap-popper',  'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'));
	wp_enqueue_script('bootstrap-script',  'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'));
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'daem_subsitios_scripts' );

/** 
 * Include Archives
 */


require_once get_template_directory() . '/inc/includes.php';

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


add_filter('acf/settings/remove_wp_meta_box', '__return_false');




function wpb_list_child_pages() { 
 
	global $post; 
	 
	if ( is_page() && $post->post_parent )
	 
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	else
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	 
	if ( $childpages ) {
	 
		$string = '<ul class="wpb_page_list">' . $childpages . '</ul>';
	}
	 
	return $string;
	 
	}
	 
	add_shortcode('wpb_childpages', 'wpb_list_child_pages');


/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

/* Remove Yoast SEO Social Profiles From All Users
 * Credit: Yoast Developers
 * Last Tested: May 18 2019 using Yoast SEO 11.2.1 on WordPress 5.2
 */
 


add_action( 'plugins_loaded', 'remove_custom_user_contact_methods' );

function remove_custom_user_contact_methods()
{
    remove_filter( 'user_contactmethods', 'modify_contact_methods' );
}


add_filter( 'wp_dropdown_users_args', 'add_subscribers_to_dropdown', 10, 2 );
function add_subscribers_to_dropdown( $query_args, $r ) {
    $query_args['who'] = '';
    return $query_args;
}