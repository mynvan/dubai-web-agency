<?php
/**
 * Guide articles: table of contents built from the H2 headings of the page content.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Give every H2 an id and collect them for the table of contents.
 * An id already set in the editor is kept.
 *
 * @param string $html Filtered page content.
 * @return array{html:string,toc:array<int,array{id:string,text:string}>}
 */
function hg_guide_prepare( string $html ): array {
	$toc  = [];
	$used = [];

	$html = preg_replace_callback(
		'/<h2([^>]*)>(.*?)<\/h2>/is',
		function ( array $m ) use ( &$toc, &$used ): string {
			$attrs = $m[1];
			$inner = $m[2];
			$text  = trim( wp_strip_all_tags( $inner ) );
			if ( '' === $text ) {
				return $m[0];
			}

			if ( preg_match( '/\sid=(["\'])(.*?)\1/i', $attrs, $idm ) ) {
				$id = $idm[2];
			} else {
				$base = sanitize_title( $text );
				$id   = '' !== $base ? $base : 'abschnitt';
				$n    = 2;
				while ( isset( $used[ $id ] ) ) {
					$id = $base . '-' . $n++;
				}
				$attrs .= ' id="' . esc_attr( $id ) . '"';
			}
			$used[ $id ] = true;
			$toc[]       = [ 'id' => $id, 'text' => $text ];

			return '<h2' . $attrs . '>' . $inner . '</h2>';
		},
		$html
	);

	return [
		'html' => (string) $html,
		'toc'  => $toc,
	];
}

// Pages get a short description (excerpt) field; the guide template prints it as meta description.
add_action( 'init', function () {
	add_post_type_support( 'page', 'excerpt' );
} );
