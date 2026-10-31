<?php
/**
 * Site-wide settings. Change them here, not in the templates.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Brand name shown in logo, hero and footer.
if ( ! defined( 'HG_BRAND' ) ) {
	define( 'HG_BRAND', 'Isar Creek' );
}

// Public contact e-mail. Leave empty until it exists; it is then not shown.
if ( ! defined( 'HG_EMAIL' ) ) {
	define( 'HG_EMAIL', 'hello@isarcreek.com' );
}

// Optional booking link (calendar). Leave empty until one exists.
if ( ! defined( 'HG_BOOKING_URL' ) ) {
	define( 'HG_BOOKING_URL', '' );
}

// CCM19 consent manager script (cookie banner). Empty = no banner.
if ( ! defined( 'HG_CCM19_SRC' ) ) {
	define( 'HG_CCM19_SRC', 'https://cloud.ccm19.de/app.js?apiKey=e5a1491d732cc9d1c224c925a5b1ec58eef51455a8c834a6&domain=6ae1ad5f02b42b9fdd060bd2' );
}

// Google Analytics 4 measurement ID. Empty = no tracking code at all.
if ( ! defined( 'HG_GA_ID' ) ) {
	define( 'HG_GA_ID', 'G-DGFE8WXR9V' );
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
	return hg_template_url( 'contact' );
}

/**
 * Link to a section of the front page, valid from any page.
 */
function hg_home_anchor( string $id ): string {
	$home = function_exists( 'pll_home_url' ) ? pll_home_url() : home_url( '/' );
	return trailingslashit( $home ) . '#' . $id;
}

/**
 * Recipient of the contact form: the public address if set, otherwise the
 * WordPress admin address (so the form works before a public address exists).
 */
function hg_form_to(): string {
	return HG_EMAIL ? HG_EMAIL : (string) get_option( 'admin_email' );
}
