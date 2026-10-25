<?php
/**
 * Site-wide settings. Change them here, not in the templates.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Brand name shown in logo, hero and footer. Pending final decision.
if ( ! defined( 'HG_BRAND' ) ) {
	define( 'HG_BRAND', 'Hello Gelb' );
}

// Public contact e-mail. Leave empty until it exists; it is then not shown.
if ( ! defined( 'HG_EMAIL' ) ) {
	define( 'HG_EMAIL', '' );
}

// Optional booking link (calendar). Leave empty until one exists.
if ( ! defined( 'HG_BOOKING_URL' ) ) {
	define( 'HG_BOOKING_URL', '' );
}

// Link to the German main site with the real references.
if ( ! defined( 'HG_REFERENCES_URL' ) ) {
	define( 'HG_REFERENCES_URL', 'https://philippgebhart.de/' );
}

/**
 * Where the "Book a call" buttons point.
 */
function hg_cta_url(): string {
	if ( HG_BOOKING_URL ) {
		return HG_BOOKING_URL;
	}
	if ( HG_EMAIL ) {
		return 'mailto:' . antispambot( HG_EMAIL );
	}
	return hg_home_anchor( 'contact' );
}

/**
 * Link to a section of the front page, valid from any page.
 */
function hg_home_anchor( string $id ): string {
	$home = function_exists( 'pll_home_url' ) ? pll_home_url() : home_url( '/' );
	return trailingslashit( $home ) . '#' . $id;
}
