<?php
/**
 * Texts and language handling.
 *
 * Every visible theme text lives in hg_strings() as [ english, german ].
 * With Polylang active, the strings appear under Languages > Translations,
 * where a saved translation overrides the German default shipped here.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hg_strings(): array {
	$base = [
		'meta_description' => [
			'Web studio from Bavaria for German-speaking businesses in the UAE. Websites, hosting and care, GDPR and SEO. English and German, one contact person, clear scope.',
			'Web-Studio aus Bayern für deutschsprachige Unternehmen in den VAE. Websites, Hosting und Betreuung, DSGVO und SEO. Englisch und Deutsch, ein Ansprechpartner, klarer Umfang.',
		],
		'skip'             => [ 'Skip to content', 'Zum Inhalt springen' ],
		'nav_services'     => [ 'Services', 'Leistungen' ],
		'nav_process'      => [ 'Process', 'Ablauf' ],
		'nav_work'         => [ 'Work', 'Referenzen' ],
		'nav_contact'      => [ 'Contact', 'Kontakt' ],
		'nav_label'        => [ 'Main navigation', 'Hauptnavigation' ],

		'hero_kicker'      => [ 'Web studio — Bavaria → Dubai', 'Web-Studio — Bayern → Dubai' ],
		'hero_lead'        => [ 'Websites for German-speaking businesses in the UAE.', 'Websites für deutschsprachige Unternehmen in den VAE.' ],
		'hero_mark'        => [ 'Delivered as agreed.', 'Geliefert wie vereinbart.' ],
		'hero_cta'         => [ 'Book a 30-minute call', '30-Minuten-Gespräch buchen' ],
		'hero_refs'        => [ 'See references', 'Referenzen ansehen' ],
		'hero_alt'         => [ 'Dubai skyline with the Burj Khalifa under storm clouds', 'Skyline von Dubai mit dem Burj Khalifa unter Gewitterwolken' ],
		'hero_credit'      => [ 'Photo: Ahmed Aldaie / Unsplash', 'Foto: Ahmed Aldaie / Unsplash' ],

		'ticker'           => [
			'MUC → DXB • Websites • Hosting & care • GDPR • SEO • EN / DE •',
			'MUC → DXB • Websites • Hosting & Betreuung • DSGVO • SEO • EN / DE •',
		],

		'services_eyebrow' => [ '01 — Services', '01 — Leistungen' ],
		'services_title'   => [ 'Three things, done properly.', 'Drei Dinge, sauber gemacht.' ],
		'svc_a_title'      => [ 'Websites', 'Websites' ],
		'svc_a_text'       => [
			'Custom theme, designed and built from scratch. English first, German alongside.',
			'Individuelles Theme, von Grund auf gestaltet und gebaut. Englisch zuerst, Deutsch gleichberechtigt.',
		],
		'svc_b_title'      => [ 'Hosting & care', 'Hosting & Betreuung' ],
		'svc_b_text'       => [
			'Updates, backups and security, handled for you.',
			'Updates, Backups und Sicherheit — wir kümmern uns darum.',
		],
		'svc_c_title'      => [ 'GDPR & SEO', 'DSGVO & SEO' ],
		'svc_c_text'       => [
			'Imprint, privacy, consent and a clean technical base for search.',
			'Impressum, Datenschutz, Einwilligung und eine saubere technische Basis für die Suche.',
		],

		'process_eyebrow'  => [ '02 — Process', '02 — Ablauf' ],
		'process_title'    => [ 'You approve the design before the build starts.', 'Sie geben das Design frei, bevor gebaut wird.' ],
		'col_step'         => [ 'Step', 'Schritt' ],
		'col_stage'        => [ 'Stage', 'Phase' ],
		'col_what'         => [ 'What happens', 'Was passiert' ],
		'col_status'       => [ 'Status', 'Status' ],
		'step_1_title'     => [ 'Call', 'Gespräch' ],
		'step_1_text'      => [ 'Thirty minutes in English or German. Goals, scope, price.', 'Dreißig Minuten auf Englisch oder Deutsch. Ziele, Umfang, Preis.' ],
		'step_1_status'    => [ 'Boarding', 'Boarding' ],
		'step_2_title'     => [ 'Design approval', 'Design-Freigabe' ],
		'step_2_text'      => [ 'Visual direction first. Nothing is built before you sign it off.', 'Erst die visuelle Richtung. Nichts wird gebaut, bevor Sie freigeben.' ],
		'step_2_status'    => [ 'Gate open', 'Gate offen' ],
		'step_3_title'     => [ 'Build & launch', 'Umsetzung & Livegang' ],
		'step_3_text'      => [ 'Go live, then care and hosting — or a clean handover.', 'Livegang, danach Betreuung und Hosting — oder eine saubere Übergabe.' ],
		'step_3_status'    => [ 'Departure', 'Abflug' ],

		'work_eyebrow'     => [ '03 — Work', '03 — Referenzen' ],
		'work_title'       => [ 'Selected projects.', 'Ausgewählte Projekte.' ],
		'work_more'        => [ 'More references on philippgebhart.de', 'Weitere Referenzen auf philippgebhart.de' ],
		'work_empty'       => [ 'Our references are collected on philippgebhart.de.', 'Unsere Referenzen finden Sie gesammelt auf philippgebhart.de.' ],

		'contact_eyebrow'  => [ 'Boarding pass — 04 Contact', 'Bordkarte — 04 Kontakt' ],
		'contact_title'    => [ 'Planning a website for your business in Dubai?', 'Planen Sie eine Website für Ihr Unternehmen in Dubai?' ],
		'pass_passenger'   => [ 'Passenger', 'Passagier' ],
		'pass_you'         => [ 'You', 'Sie' ],
		'pass_languages'   => [ 'Languages', 'Sprachen' ],
		'pass_gate'        => [ 'Gate', 'Gate' ],
		'pass_gate_value'  => [ 'Design approval', 'Design-Freigabe' ],
		'pass_seat'        => [ 'Seat', 'Sitz' ],
		'pass_seat_value'  => [ 'Your project', 'Ihr Projekt' ],

		'footer_location'  => [ 'Bavaria, Germany', 'Bayern, Deutschland' ],

		'404_title'        => [ 'Page not found', 'Seite nicht gefunden' ],
		'404_text'         => [ 'This gate does not exist. Back to the start?', 'Dieses Gate gibt es nicht. Zurück zum Start?' ],
		'404_back'         => [ 'Back to home', 'Zur Startseite' ],
	];

	return array_merge( $base, require get_template_directory() . '/inc/strings-pages.php' );
}

/**
 * Current language code. Falls back to the WordPress locale without Polylang.
 */
function hg_lang(): string {
	if ( function_exists( 'pll_current_language' ) ) {
		$lang = pll_current_language();
		if ( $lang ) {
			return $lang;
		}
	}
	return substr( determine_locale(), 0, 2 );
}

/**
 * Translated string. Order: saved Polylang translation, shipped German default, English.
 */
function hg( string $key ): string {
	static $map = null;
	if ( null === $map ) {
		$map = hg_strings();
	}
	if ( ! isset( $map[ $key ] ) ) {
		return '';
	}
	[ $en, $de ] = $map[ $key ];

	$translated = function_exists( 'pll__' ) ? pll__( $en ) : $en;

	if ( 'de' === hg_lang() ) {
		return ( $translated !== $en ) ? $translated : $de;
	}
	return $translated;
}

function hg_e( string $key ): void {
	echo esc_html( hg( $key ) );
}

/**
 * Translated string that may contain <strong>. Output is filtered.
 */
function hg_html( string $key ): void {
	echo wp_kses( hg( $key ), [ 'strong' => [] ] );
}

// Register all strings with Polylang so they show up under Languages > Translations.
add_action( 'init', function () {
	if ( ! function_exists( 'pll_register_string' ) ) {
		return;
	}
	foreach ( hg_strings() as $key => [ $en ] ) {
		pll_register_string( $key, $en, 'Hello Gelb', strlen( $en ) > 70 );
	}
} );

/**
 * Language switcher: "EN / DE" with the active language plain and the other linked.
 */
function hg_lang_switcher(): void {
	if ( ! function_exists( 'pll_the_languages' ) ) {
		echo '<span class="lang-switch">EN / DE</span>';
		return;
	}
	$langs = pll_the_languages( [ 'raw' => 1, 'hide_if_no_translation' => 0 ] );
	if ( ! is_array( $langs ) ) {
		return;
	}
	$parts = [];
	foreach ( $langs as $lang ) {
		$label = strtoupper( $lang['slug'] );
		if ( $lang['current_lang'] ) {
			$parts[] = '<span aria-current="true">' . esc_html( $label ) . '</span>';
		} else {
			$parts[] = sprintf(
				'<a href="%s" hreflang="%s" lang="%s" class="muted">%s</a>',
				esc_url( $lang['url'] ),
				esc_attr( $lang['locale'] ?? $lang['slug'] ),
				esc_attr( $lang['slug'] ),
				esc_html( $label )
			);
		}
	}
	echo '<span class="lang-switch">' . implode( ' / ', $parts ) . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput -- parts are escaped above.
}
