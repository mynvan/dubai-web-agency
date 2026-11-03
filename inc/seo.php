<?php
/**
 * Search signals: hreflang x-default and JSON-LD (schema.org).
 *
 * Only facts that are on the site are described. No address, no ratings,
 * no reviews: nothing is invented here.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * hreflang: Polylang prints one tag per language. Add x-default, pointing to the
 * default-language version of the same page, unless Polylang already set it.
 */
add_filter( 'pll_rel_hreflang_attributes', function ( $hreflangs ) {
	if ( ! is_array( $hreflangs ) || isset( $hreflangs['x-default'] ) || ! function_exists( 'pll_default_language' ) ) {
		return $hreflangs;
	}
	$default = pll_default_language();
	foreach ( $hreflangs as $code => $url ) {
		if ( substr( (string) $code, 0, 2 ) === $default ) {
			$hreflangs['x-default'] = $url;
			break;
		}
	}
	return $hreflangs;
} );

/**
 * Home URL in the current language.
 */
function hg_seo_home_url(): string {
	return function_exists( 'pll_home_url' ) ? pll_home_url() : home_url( '/' );
}

/**
 * The studio itself. Same @id on every page, so all pages point to one entity.
 */
function hg_schema_organization(): array {
	$home = trailingslashit( hg_seo_home_url() );
	$node = [
		'@type'             => 'ProfessionalService',
		'@id'               => trailingslashit( home_url( '/' ) ) . '#organization',
		'name'              => HG_BRAND,
		'url'               => $home,
		'description'       => hg( 'meta_description' ),
		'areaServed'        => [ '@type' => 'Country', 'name' => 'United Arab Emirates' ],
		'availableLanguage' => [ 'en', 'de' ],
		'knowsLanguage'     => [ 'en', 'de' ],
		'serviceType'       => [ 'Website design', 'WordPress hosting and maintenance', 'GDPR compliance for websites', 'Search engine optimisation' ],
	];
	if ( HG_EMAIL ) {
		$node['email'] = HG_EMAIL;
	}
	return $node;
}

/**
 * FAQ entries of a service page, read from the same strings the page shows.
 */
function hg_schema_faq( string $prefix ): array {
	$items = [];
	for ( $i = 1; $i <= 4; $i++ ) {
		$q = hg( "{$prefix}_q{$i}" );
		$a = hg( "{$prefix}_a{$i}" );
		if ( '' === $q || '' === $a ) {
			continue;
		}
		$items[] = [
			'@type'          => 'Question',
			'name'           => wp_strip_all_tags( $q ),
			'acceptedAnswer' => [ '@type' => 'Answer', 'text' => wp_strip_all_tags( $a ) ],
		];
	}
	return $items;
}

add_action( 'wp_head', function () {
	if ( is_admin() || is_feed() || is_404() ) {
		return;
	}

	$graph = [];
	$org   = hg_schema_organization();
	$lang  = hg_lang();

	if ( is_front_page() ) {
		$graph[] = $org;
		$graph[] = [
			'@type'      => 'WebSite',
			'@id'        => trailingslashit( home_url( '/' ) ) . '#website',
			'url'        => trailingslashit( hg_seo_home_url() ),
			'name'       => HG_BRAND,
			'inLanguage' => $lang,
			'publisher'  => [ '@id' => $org['@id'] ],
		];
	} elseif ( is_page() ) {
		// Service detail pages: FAQ + breadcrumb. Other pages only reference the studio.
		$services = [
			'page-templates/service-websites.php' => [ 'wd', 'svc_a_title' ],
			'page-templates/service-hosting.php'  => [ 'hd', 'svc_b_title' ],
			'page-templates/service-gdpr-seo.php' => [ 'gd', 'svc_c_title' ],
		];
		$url      = get_permalink();
		$page_tpl = null;
		foreach ( $services as $tpl => $info ) {
			if ( is_page_template( $tpl ) ) {
				$page_tpl = $info;
				break;
			}
		}

		if ( $page_tpl ) {
			[ $prefix, $title_key ] = $page_tpl;
			$graph[]                = [
				'@type'      => 'BreadcrumbList',
				'itemListElement' => [
					[ '@type' => 'ListItem', 'position' => 1, 'name' => HG_BRAND, 'item' => trailingslashit( hg_seo_home_url() ) ],
					[ '@type' => 'ListItem', 'position' => 2, 'name' => hg( 'nav_services' ), 'item' => hg_template_url( 'services' ) ],
					[ '@type' => 'ListItem', 'position' => 3, 'name' => hg( $title_key ), 'item' => $url ],
				],
			];
			$faq = hg_schema_faq( $prefix );
			if ( $faq ) {
				$graph[] = [
					'@type'      => 'FAQPage',
					'@id'        => $url . '#faq',
					'url'        => $url,
					'inLanguage' => $lang,
					'mainEntity' => $faq,
				];
			}
			$graph[] = [
				'@type'      => 'Service',
				'name'       => hg( $title_key ),
				'url'        => $url,
				'inLanguage' => $lang,
				'provider'   => [ '@id' => $org['@id'] ],
				'areaServed' => [ '@type' => 'Country', 'name' => 'United Arab Emirates' ],
			];
			// The studio entity itself is defined on the front page; repeat it so the page stands alone.
			$graph[] = $org;
		}
	}

	if ( ! $graph ) {
		return;
	}

	$json = wp_json_encode(
		[ '@context' => 'https://schema.org', '@graph' => $graph ],
		JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP
	);
	if ( $json ) {
		echo '<script type="application/ld+json">' . $json . "</script>\n"; // phpcs:ignore WordPress.Security.EscapeOutput -- JSON, tags hex-escaped.
	}
}, 3 );
