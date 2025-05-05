<?php
/**
 * Kurintar Retreat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kurintar_Retreat
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
function theme_for_kurintar_retreat_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Kurintar Retreat, use a find and replace
		* to change 'theme-for-kurintar-retreat' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'theme-for-kurintar-retreat', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'theme-for-kurintar-retreat' ),
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
			'theme_for_kurintar_retreat_custom_background_args',
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
add_action( 'after_setup_theme', 'theme_for_kurintar_retreat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_for_kurintar_retreat_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theme_for_kurintar_retreat_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_for_kurintar_retreat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_for_kurintar_retreat_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theme-for-kurintar-retreat' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theme-for-kurintar-retreat' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'theme_for_kurintar_retreat_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_for_kurintar_retreat_scripts() {
	wp_enqueue_style( 'theme-for-kurintar-retreat-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'theme-for-kurintar-retreat-style', 'rtl', 'replace' );

	wp_enqueue_script( 'theme-for-kurintar-retreat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_for_kurintar_retreat_scripts' );

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


function team_members_post() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Team Member', 'Post Type General Name', 'kurintarretreat' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'kurintarretreat' ),
		'menu_name'           => __( 'Team Members', 'kurintarretreat' ),
		'parent_item_colon'   => __( 'Parent Team Member', 'kurintarretreat' ),
		'all_items'           => __( 'All Team Members', 'kurintarretreat' ),
		'view_item'           => __( 'View Team Member', 'kurintarretreat' ),
		'add_new_item'        => __( 'Add Team Member', 'kurintarretreat' ),
		'add_new'             => __( 'Add Team Member', 'kurintarretreat' ),
		'edit_item'           => __( 'Edit Team Member', 'kurintarretreat' ),
		'update_item'         => __( 'Update Team Member', 'kurintarretreat' ),
		'search_items'        => __( 'Search Team Member', 'kurintarretreat' ),
		'not_found'           => __( 'Not Found', 'kurintarretreat' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'kurintarretreat' ),
	);
	
	
	// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Team Members', 'kurintarretreat' ),
		'description'         => __( 'Team Member news and reviews', 'kurintarretreat' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes' ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'department' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-universal-access-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		// This is where we add taxonomies to our CPT
		'taxonomies'          => array( 'post_tag','department' ),
		); 
	
	// Registering your Custom Post Type
	register_post_type( 'team-members', $args );
	
	}
		
	add_action( 'init', 'team_members_post', 0 );


/* create custom post team members */


function video_post() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Video', 'Post Type General Name', 'kurintarretreat' ),
		'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'kurintarretreat' ),
		'menu_name'           => __( 'Videos', 'kurintarretreat' ),
		'parent_item_colon'   => __( 'Parent Video', 'kurintarretreat' ),
		'all_items'           => __( 'All Videos', 'kurintarretreat' ),
		'view_item'           => __( 'View Video', 'kurintarretreat' ),
		'add_new_item'        => __( 'Add Video', 'kurintarretreat' ),
		'add_new'             => __( 'Add Video', 'kurintarretreat' ),
		'edit_item'           => __( 'Edit Video', 'kurintarretreat' ),
		'update_item'         => __( 'Update Video', 'kurintarretreat' ),
		'search_items'        => __( 'Search Video', 'kurintarretreat' ),
		'not_found'           => __( 'Not Found', 'kurintarretreat' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'kurintarretreat' ),
	);
	
	
	// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Videos', 'kurintarretreat' ),
		'description'         => __( 'Video news and reviews', 'kurintarretreat' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes' ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'department' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-controls-play',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		// This is where we add taxonomies to our CPT
		'taxonomies'          => array( 'post_tag','department' ),
		); 
	
	// Registering your Custom Post Type
	register_post_type( 'video_post', $args );
	
	}
		
	add_action( 'init', 'video_post', 0 );

	function theme_stylescript() {
		$theme_uri = get_template_directory_uri();
	
		// Enqueue Styles
		wp_enqueue_style( 'bootstrap', $theme_uri . '/assets/vendor/css/bootstrap.min.css' );
		wp_enqueue_style( 'owl_theme_css', $theme_uri . '/assets/vendor/css/owl.theme.default.css' );
		wp_enqueue_style( 'owlcarousel_css', $theme_uri . '/assets/vendor/css/owl.carousel.min.css' );
		wp_enqueue_style( 'animate_css', $theme_uri . '/assets/vendor/css/animate.css' );
		wp_enqueue_style( 'magnific-popup', $theme_uri . '/assets/vendor/css/magnific-popup.css' );
		wp_enqueue_style( 'niceselect', $theme_uri . '/assets/vendor/css/nice-select.css' );
		wp_enqueue_style( 'slicknav', $theme_uri . '/assets/vendor/css/slicknav.css' );
		wp_enqueue_style( 'bootstrap_icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css' );
		wp_enqueue_style( 'styles', $theme_uri . '/assets/vendor/css/style.css', array(), '0.9.9' );
		wp_enqueue_style( 'kurintarretreat_css', $theme_uri . '/assets/css/theme.css', array(), '0.7.4' );
		//lity code
		wp_enqueue_style('lity-css', 'https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css');
	
		// Deregister WordPress default jQuery
		wp_deregister_script('jquery');
		
		// Register and Enqueue Your Own jQuery
		wp_register_script('jquery', $theme_uri . '/assets/vendor/js/jquery.min.js', array(), null, true);
		wp_enqueue_script('jquery');
		
		// Enqueue Scripts
		wp_enqueue_script( 'bootstrap_js', $theme_uri . '/assets/vendor/js/bootstrap.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'owlcarousel', $theme_uri . '/assets/vendor/js/owl.carousel.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'main_js', $theme_uri . '/assets/vendor/js/main.js', array('jquery'), '0.0.1', true );
		wp_enqueue_script( 'theme_js', $theme_uri . '/assets/js/theme.js', array('jquery'), '2.3.0', true );
		wp_enqueue_script('lity-js', 'https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js', array('jquery'), null, true);

	}
	add_action('wp_enqueue_scripts', 'theme_stylescript');
	
	