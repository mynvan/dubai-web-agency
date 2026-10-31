<?php
/**
 * Isar Creek theme bootstrap.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'HG_VERSION', '0.3.6' );

require_once get_template_directory() . '/inc/config.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/references.php';
require_once get_template_directory() . '/inc/pages.php';
require_once get_template_directory() . '/inc/analytics.php';

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
	register_nav_menus( [
		'footer' => __( 'Footer (Imprint, Privacy)', 'hellogelb' ),
	] );
} );

add_action( 'wp_enqueue_scripts', function () {
	$uri = get_template_directory_uri();
	wp_enqueue_style( 'hellogelb', $uri . '/assets/css/main.css', [], HG_VERSION );
	wp_enqueue_style( 'hellogelb-style', get_stylesheet_uri(), [ 'hellogelb' ], HG_VERSION );
} );

// Preload the main font so the hero does not flash a fallback face.
add_action( 'wp_head', function () {
	printf(
		'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
		esc_url( get_template_directory_uri() . '/assets/fonts/archivo-latin-wght-normal.woff2' )
	);
}, 1 );

// Meta description for the front page, translated.
add_action( 'wp_head', function () {
	if ( is_front_page() ) {
		printf( '<meta name="description" content="%s">' . "\n", esc_attr( hg( 'meta_description' ) ) );
	}
}, 2 );

// Remove emoji and embed scripts the site does not use.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_generator' );

// Inner pages with a hero image: let the header sit on top of it, like on the front page.
add_filter( 'body_class', function ( array $classes ): array {
	if ( is_page_template( [
		'page-templates/services.php',
		'page-templates/service-websites.php',
		'page-templates/service-hosting.php',
		'page-templates/service-gdpr-seo.php',
		'page-templates/process.php',
		'page-templates/contact.php',
	] ) ) {
		$classes[] = 'has-hero';
	}
	return $classes;
} );

/**
 * One public address: requests on any other host (e.g. the old dev subdomain)
 * are redirected to the canonical site URL. wp-admin and login are left alone.
 */
add_action( 'template_redirect', function () {
	$canonical = wp_parse_url( home_url(), PHP_URL_HOST );
	$host      = isset( $_SERVER['HTTP_HOST'] ) ? strtolower( sanitize_text_field( wp_unslash( $_SERVER['HTTP_HOST'] ) ) ) : '';
	if ( ! $canonical || ! $host || $host === $canonical || is_admin() || is_customize_preview() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
		return;
	}
	$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '/'; // phpcs:ignore WordPress.Security.ValidatedSanitizedInput
	wp_redirect( esc_url_raw( home_url( $uri ) ), 301 ); // phpcs:ignore WordPress.Security.SafeRedirect
	exit;
} );

/**
 * The contact page carries a nonce and a time token, so it must never come
 * from a page cache (LiteSpeed would serve an expired nonce -> form fails).
 */
add_action( 'template_redirect', function () {
	if ( is_page_template( 'page-templates/contact.php' ) ) {
		if ( ! defined( 'DONOTCACHEPAGE' ) ) {
			define( 'DONOTCACHEPAGE', true );
		}
		do_action( 'litespeed_control_set_nocache', 'contact form nonce' );
		header( 'X-LiteSpeed-Cache-Control: no-cache' );
		nocache_headers();
	}
}, 5 );

/**
 * Sitemap: pages only. No author archives (leak usernames), no empty post/category lists.
 */
add_filter( 'wp_sitemaps_add_provider', function ( $provider, $name ) {
	return in_array( $name, [ 'users', 'taxonomies' ], true ) ? false : $provider;
}, 10, 2 );
add_filter( 'wp_sitemaps_post_types', function ( array $types ): array {
	unset( $types['post'] );
	return $types;
} );
