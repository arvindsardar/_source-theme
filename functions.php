<?php
/**
 * _source functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package _source
 */

/* --------------------------------------------- */
/* THEME SETUP
/* Sets up theme defaults and registers support 
/* for various WordPress features.
/* --------------------------------------------- */
if ( ! function_exists( '_source_setup' ) ) :

function _source_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', '_source' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_source_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', '_source_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 */
function _source_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_source_content_width', 640 );
}
add_action( 'after_setup_theme', '_source_content_width', 0 );


/* --------------------------------------------- */
/* ENQUEUE ADDITIONAL SCRIPTS & STYLES
/* --------------------------------------------- */
function _source_scripts() {
    wp_enqueue_script( 'desq-custom-scripts', get_stylesheet_directory_uri() . '/js/custom.js');
	wp_enqueue_style( '_source-style', get_stylesheet_uri() );
	wp_enqueue_script( '_source-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( '_source-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_source_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/*	--------------------------------------------------- */
/*	REGISTER ADDITIONAL WIDGET AREAS
/*	--------------------------------------------------- */
	add_action( 'widgets_init', '_source_widgets_init' );

	function _source_widgets_init() {
		register_sidebar( array(
			'name'          => 'Page Top',
			'id'            => 'page_top_widgets',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	
		register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_source' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', '_source' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Page Banner', '_source' ),
		'id'            => 'page_banner_widgets',
		'description'   => esc_html__( 'Add banners here.', '_source' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}

