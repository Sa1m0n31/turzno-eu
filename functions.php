<?php
/**
 * Turzno functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Turzno
 */

// Theme support
function turzno_theme_support() {
    // Add theme support
    add_post_type_support( 'post', 'excerpt' );
}

add_action("init", "turzno_theme_support");

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'turzno_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function turzno_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Turzno, use a find and replace
		 * to change 'turzno' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'turzno', get_template_directory() . '/languages' );

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
        add_post_type_support( 'post', 'excerpt' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'turzno' ),
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
				'turzno_custom_background_args',
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
add_action( 'after_setup_theme', 'turzno_setup' );

function turzno_add_komitet_honorowy_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Komitet honrowy'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'events' ),
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-awards'
    );

    register_post_type("komitet_honorowy", $args);
}

add_action("init", "turzno_add_komitet_honorowy_post_type");

function turzno_add_sponsorzy_spoleczni_post_type() {
    $supports = array(
        'title',
    );

    $labels = array(
        'name' => 'Sponsorzy społeczni'
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'events' ),
        'has_archive'          => true,
        'menu_position'        => 31,
        'menu_icon'            => 'dashicons-admin-users'
    );

    register_post_type("sponsorzy_spoleczni", $args);
}

add_action("init", "turzno_add_sponsorzy_spoleczni_post_type");



/**
 * Enqueue scripts and styles.
 */
function turzno_scripts() {
	wp_enqueue_style( 'turzno-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style("turzno-mobile", get_template_directory_uri() . "/mobile.css", array(), _S_VERSION);

	wp_enqueue_script( 'turzno-js', get_template_directory_uri() . '/js/main.js', array('siema-js'), _S_VERSION, true );
	wp_enqueue_script( 'siema-js', get_template_directory_uri() . '/js/siema.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'turzno_scripts' );

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

