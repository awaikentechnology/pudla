<?php

/**
 * Define Constants
 * ================
 */
define( 'PUDLA_CONFIG_ID', 'pudla' );
define( 'PUDLA_THEME_PATH', get_template_directory() );
define( 'PUDLA_THEME_URL', esc_url( get_template_directory_uri() ) );


/**
 * Global content width
 *
 * @param $content_width
 *
 * @since 1.0
 * @return void
 */
if ( ! isset( $content_width ) )
	$content_width = 1170;

/**
 * Theme setup
 * Hook to action after_setup_theme
 *
 * @since 1.0
 */
if ( ! function_exists( 'pudla_theme_setup' ) ) {
	function pudla_theme_setup() {
		
		load_theme_textdomain( 'pudla', get_template_directory() . '/languages' );
		
		// Feed Links
		add_theme_support( 'automatic-feed-links' );
		
		// Title tag
		add_theme_support( 'title-tag' );
		
		// Post Formats
		add_theme_support( 'post-formats', array(
		  'image', 'video', 'link', 'gallery',
		) );
		
		// Default custom header.
		add_theme_support( 'custom-header' );
		
		// Default custom backgrounds.
		add_theme_support( 'custom-background' );
		
		// Post thumbnails
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'pudla-thumb', 359, 438, true );
		add_image_size( 'pudla-blog-thumb', 370, 250, true );
		
		// Register navigation menu
		register_nav_menus( array(
			'main-menu'   => 'Primary Menu'
		) );
		
		// Adds the support for the Custom Logo introduced in WordPress 4.5
		add_theme_support( 'custom-logo',
			array(
					'height'      => 95,
					'width'       => 224,
					'flex-height' => true,
					'flex-width'  => true,
			)
		);
		
	  add_theme_support( 'align-wide' );

	}
}
add_action( 'after_setup_theme', 'pudla_theme_setup' );

/**
 * Register widget area.
 */
if ( ! function_exists( 'pudla_widgets_init' ) ) {
	function pudla_widgets_init() {
		
		register_sidebar( array(
			'name'          => esc_html__( 'Main Sidebar', 'pudla' ),
			'id'            => 'main-sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in your main sidebar.', 'pudla' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		
		
		register_sidebar( array(
			'name'          => esc_html__( 'Recipe Sidebar', 'pudla' ),
			'id'            => 'recipe-sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in your recipe sidebar.', 'pudla' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Instagram', 'pudla' ),
			'id'            => 'footer-instagram',
			'before_widget' => '<div id="%1$s" class="instagram-feeds-container %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="instagram-title"><h4 class="footer-instagram-title"><a><i class="fab fa-instagram"></i>',
			'after_title'   => '</a></h4></div>',
			'description'   => esc_html__( 'Only use for Instagram feed. Display instagram images on your website footer. Required plugin: https://wordpress.org/plugins/instagram-feed/. Simply add a Custom HTML Widget by dragging it into this box, then write "[instagram-feed]" code into it.', 'pudla' ),
		) );
		
		//Register footer sidebar
		for ( $i = 1; $i <= 3; $i ++ ) {
			register_sidebar( array(
				'name'          => sprintf( esc_html__( 'Footer Column %s', 'pudla' ), $i ),
				'id'            => 'footer-column-' . $i,
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
		}
	}
}
add_action( 'widgets_init', 'pudla_widgets_init' );

/**
 * Enqueue styles
 */
if ( ! function_exists( 'pudla_load_styles' ) ) {
	function pudla_load_styles() {
		
		// Google css
		wp_enqueue_style( 'asap-condensed-font', 'https://fonts.googleapis.com/css?family=Asap+Condensed:400,500,600,700|Poppins:300,400,500,600,700,800,900', false, null );
		wp_enqueue_style( 'bootstrap', PUDLA_THEME_URL .'/css/bootstrap.min.css', false, null );
		if ( is_singular() ) {
			wp_enqueue_style( 'swiper', PUDLA_THEME_URL .'/css/swiper.min.css', false, null );
		}
		wp_enqueue_style( 'font-awesome', PUDLA_THEME_URL .'/css/fontawesome-all.css', false, null );
		wp_enqueue_style( 'pudla-flaticon', PUDLA_THEME_URL .'/css/flaticon.css', false, null );
		wp_enqueue_style( 'slicknav', PUDLA_THEME_URL .'/css/slicknav.css', false, null );
		// Load our main stylesheet.
		wp_enqueue_style( 'pudla-style', get_template_directory_uri() . '/style.css', false , null );
		if ( is_singular() ) {
			wp_enqueue_style( 'print', PUDLA_THEME_URL .'/css/print.css', false, null, 'print' );
		}
		
		
		// js for comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'pudla_load_styles' );


/**
 * Enqueue scripts
 */
if ( ! function_exists( 'pudla_load_scripts' ) ) {
	function pudla_load_scripts() {
		
		wp_enqueue_script( 'bootstrap', PUDLA_THEME_URL . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
		if ( is_singular() ) {
			wp_enqueue_script( 'swiper', PUDLA_THEME_URL . '/js/swiper.min.js', '', '', true );	
		}
		if ( true == get_theme_mod( 'smooth_scrolling', false ) ) {
		wp_enqueue_script( 'SmoothScroll', PUDLA_THEME_URL . '/js/SmoothScroll.js', array( 'jquery' ), '', true );
		}
		wp_enqueue_script( 'slicknav', PUDLA_THEME_URL . '/js/jquery.slicknav.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'responsive-tabs', PUDLA_THEME_URL . '/js/responsive-tabs.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'pudla-js', PUDLA_THEME_URL . '/js/function.js', array( 'jquery' ), '', true );
		
		wp_enqueue_script( 'html5shiv', PUDLA_THEME_URL . '/js/html5shiv.min.js','', null);
		wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

		wp_enqueue_script( 'respond', PUDLA_THEME_URL . '/js/respond.min.js','', null );
		wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
    
	}
}
add_action( 'wp_enqueue_scripts', 'pudla_load_scripts' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function pudla_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'pudla_pingback_header' );

/**
 * Allowed HTM for wp_kses
 */

if ( ! function_exists( 'pudla_wp_kses_allowed_html' ) ) {
	function pudla_wp_kses_allowed_html() {
		
		$allowed_tags = wp_kses_allowed_html( 'post' );
		$allowed_tags['iframe'] = array(
			'src'=> true,
			'width'=> true,
			'height'=> true,
			'frameborder'=> true,
			'allowfullscreen'=> true,
			'webkitallowfullscreen'=> true,
			'mozallowfullscreen'=> true,
			'scrolling'=> true,
		);
		return $allowed_tags;
	}
}

/**
 * Registers an editor stylesheet for the theme.
 */
function pudla_editor_styles() {
    add_editor_style( array('editor-style.css','css/fontawesome-all.css') );
}
add_action( 'admin_init', 'pudla_editor_styles' );

/**
 * Pudla functions
 */
require_once PUDLA_THEME_PATH . '/inc/pudla-functions.php';

/**
 * Toolkit for Customizer 
 */

require_once PUDLA_THEME_PATH . '/inc/include-kirki.php';
require_once PUDLA_THEME_PATH . '/inc/class-pudla-kirki.php';
require_once PUDLA_THEME_PATH . '/inc/customizer/customizer.php';

/**
 * Rcommend plugins notice
 */
require_once PUDLA_THEME_PATH . '/inc/required-plugins.php';


/**
 * One Click Demo Import
 */
function pudla_ocdi_import_files() {
  return array(
    array(
      'import_file_name'           => 'Demo',
      'import_file_url'            => 'http://demo.awaikenthemes.com/pudla/dummy-data/pudla.wordpress.xml',
      'import_widget_file_url'     => 'http://demo.awaikenthemes.com/pudla/dummy-data/pudla-widgets.wie',
      'import_customizer_file_url' => 'http://demo.awaikenthemes.com/pudla/dummy-data/pudla-export.dat',
      'preview_url'                => 'http://demo.awaikenthemes.com/pudla/',
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'pudla_ocdi_import_files' );


function pudla_ocdi_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $main_menu->term_id,
		)
	);
	
	// Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
	
}
add_action( 'pt-ocdi/after_import', 'pudla_ocdi_after_import_setup' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );