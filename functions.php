<?php
/**
 * SOU Works Original Theme functions and definitions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 */
function souworks_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'souworks' ),
		)
	);
}
add_action( 'after_setup_theme', 'souworks_setup' );

/**
 * Enqueue theme styles and scripts.
 */
function souworks_enqueue_assets() {
	wp_enqueue_style(
		'souworks-google-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'souworks-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		filemtime( get_template_directory() . '/assets/css/style.css' )
	);

	wp_enqueue_script(
		'souworks-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/main.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'souworks_enqueue_assets' );

/**
 * Resolve the permalink for a top-level page by slug, falling back to
 * "/<slug>/" when the page has not been created yet (fresh installs).
 */
function souworks_page_url( $slug ) {
	$page = get_page_by_path( $slug );

	if ( $page ) {
		return get_permalink( $page );
	}

	return home_url( '/' . $slug . '/' );
}

/**
 * Whether the current request is the TOP page (static front page, or the
 * default blog index on a fresh install that has no front page configured).
 */
function souworks_is_top() {
	return is_front_page() || is_home();
}
