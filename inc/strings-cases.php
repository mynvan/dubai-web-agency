<?php
/**
 * Texts of the case study pages and their tiles on the front page.
 * Format as in hg_strings(): key => [ english, german ].
 * Prefix cs = cleansolution, ic = Isar Creek.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return [
	// ---- Shared ----
	'case_l_client'    => [ 'Client', 'Kunde' ],
	'case_l_industry'  => [ 'Industry', 'Branche' ],
	'case_l_year'      => [ 'Year', 'Jahr' ],
	'case_l_stack'     => [ 'Built with', 'Umsetzung' ],
	'case_start'       => [ 'Starting point', 'Ausgangslage' ],
	'case_do_eyebrow'  => [ 'Approach', 'Vorgehen' ],
	'case_do_title'    => [ 'Five things, in short.', 'Fünf Punkte, kurz gefasst.' ],
	'case_res_eyebrow' => [ 'Result', 'Ergebnis' ],
	'case_other_label' => [ 'The other route', 'Der andere Weg' ],
	'case_shot_alt'    => [ 'Screenshot of the cleansolution website', 'Screenshot der Website von cleansolution' ],
	'work_tile_more'   => [ 'Read the case study', 'Case Study lesen' ],

	// ---- cleansolution ----
	'cs_crumb'         => [ 'cleansolution GmbH', 'cleansolution GmbH' ],
	'cs_title'         => [ 'Case Study: Website Care Since 2018, cleansolution', 'Case Study: Website-Betreuung seit 2018, cleansolution' ],
	'cs_meta'          => [
		'How the website of a building cleaning consultancy was rebuilt in 2018 and has been maintained and developed ever since: WordPress with Elementor Pro, consent, schema and reporting.',
		'Wie die Website einer Beratung für Gebäudereinigung 2018 neu aufgebaut und seitdem betreut und weiterentwickelt wurde: WordPress mit Elementor Pro, Consent, Schema und Reporting.',
	],
	'cs_title_a'       => [ 'Website care since 2018:', 'Website-Betreuung seit 2018:' ],
	'cs_title_b'       => [ 'cleansolution.', 'cleansolution.' ],
	'cs_lead'          => [
		'A consultancy for building cleaning and a website that grew with the company. Rebuilt in 2018, looked after and developed ever since.',
		'Eine Beratung für Gebäudereinigung und eine Website, die mit dem Unternehmen gewachsen ist. 2018 neu aufgebaut, seitdem betreut und weiterentwickelt.',
	],
	'cs_v_client'      => [ 'cleansolution GmbH', 'cleansolution GmbH' ],
	'cs_v_industry'    => [ 'Consulting and tendering for building cleaning', 'Beratung und Ausschreibung für die Gebäudereinigung' ],
	'cs_v_year'        => [ 'Since 2018', 'Seit 2018' ],
	'cs_v_stack'       => [ 'WordPress, Elementor Pro, JetEngine (Crocoblock)', 'WordPress, Elementor Pro, JetEngine (Crocoblock)' ],
	'cs_start_text'    => [
		'In 2018 the existing website was to move to a new system and be found better on Google. A consulting-heavy offer had to be explained clearly and credibly.',
		'2018 sollte die bestehende Website in ein neues System umziehen und bei Google besser gefunden werden. Ein beratungsintensives Angebot musste verständlich und vertrauenswürdig erklärt werden.',
	],
	'cs_do_1'          => [
		'<strong>Analysis and rebuild (2018).</strong> I reviewed the old site, rebuilt it in the new system and prepared and supported the move to new hosting.',
		'<strong>Analyse und Neuaufbau (2018).</strong> Ich habe die alte Seite geprüft, im neuen System neu aufgebaut und den Umzug zum neuen Hosting vorbereitet und begleitet.',
	],
	'cs_do_2'          => [
		'<strong>Design refresh.</strong> The current look is mine, with revisions in 2023 and 2024.',
		'<strong>Design-Refresh.</strong> Das heutige Erscheinungsbild stammt von mir, mit Überarbeitungen 2023 und 2024.',
	],
	'cs_do_3'          => [
		'<strong>Easy editing.</strong> Team, references and services are custom content types (JetEngine). New entries are created through fixed fields instead of hand-built pages.',
		'<strong>Einfache Pflege.</strong> Team, Referenzen und Leistungen sind eigene Inhaltstypen (JetEngine). Neue Einträge entstehen über feste Felder statt über individuell gebaute Seiten.',
	],
	'cs_do_4'          => [
		'<strong>Operation and legal.</strong> Updates, a contact form with SMTP delivery and spam protection, consent management and up-to-date privacy information.',
		'<strong>Betrieb und Recht.</strong> Updates, Kontaktformular mit SMTP-Versand und Spam-Schutz, Consent-Management und aktuelle Datenschutzinformationen.',
	],
	'cs_do_5'          => [
		'<strong>Search and reporting.</strong> Schema markup, new service pages with process and FAQ, and analytics with reporting in Looker Studio.',
		'<strong>Suche und Auswertung.</strong> Schema-Markup, neue Leistungsseiten mit Ablauf und FAQ sowie Analytics mit Reporting in Looker Studio.',
	],
	'cs_res_text'      => [
		'The move in 2018 became a collaboration that continues today. The website is not rebuilt every few years but grows with the company: technically current, easy to maintain and with a service presentation that is being expanded step by step.',
		'Aus dem Umzug 2018 ist eine Zusammenarbeit geworden, die bis heute läuft. Die Website wird nicht alle paar Jahre neu gebaut, sondern wächst mit dem Unternehmen: technisch aktuell, leicht zu pflegen und mit einer Leistungsdarstellung, die Schritt für Schritt ausgebaut wird.',
	],
	'cs_other_text'    => [
		'A project from Germany, built with a page builder. The route with a custom theme and no page builder is this very website:',
		'Ein Projekt aus Deutschland, umgesetzt mit Page-Builder. Der Weg mit eigenem Theme und ohne Page-Builder ist diese Website:',
	],
	'cs_ext_text'      => [ 'Full case study on philippgebhart.de', 'Ausführliche Case Study auf philippgebhart.de' ],
	'cs_tile'          => [ 'Website care since 2018. With a page builder.', 'Website-Betreuung seit 2018. Mit Page-Builder.' ],

	// ---- Isar Creek ----
	'ic_crumb'         => [ 'Isar Creek', 'Isar Creek' ],
	'ic_title'         => [ 'Case Study: This Website, Built Without a Page Builder', 'Case Study: Diese Website, gebaut ohne Page-Builder' ],
	'ic_meta'          => [
		'How the Isar Creek website was built: a custom WordPress theme without a page builder, bilingual EN/DE, with consent, structured data and automatic deployment.',
		'Wie die Isar-Creek-Website gebaut wurde: individuelles WordPress-Theme ohne Page-Builder, zweisprachig EN/DE, mit Consent, strukturierten Daten und automatischem Deployment.',
	],
	'ic_title_a'       => [ 'This website:', 'Diese Website:' ],
	'ic_title_b'       => [ 'Isar Creek.', 'Isar Creek.' ],
	'ic_lead'          => [
		'The first project for the Dubai market: bilingual, built without a page builder, prepared legally and for search.',
		'Das erste Projekt für den Dubai-Markt: zweisprachig, ohne Page-Builder gebaut, rechtlich und für die Suche vorbereitet.',
	],
	'ic_v_client'      => [ 'Isar Creek (own project)', 'Isar Creek (eigenes Projekt)' ],
	'ic_v_industry'    => [ 'Web studio for German-speaking businesses in the UAE', 'Web-Studio für deutschsprachige Unternehmen in den VAE' ],
	'ic_v_year'        => [ '2026', '2026' ],
	'ic_v_stack'       => [ 'WordPress, custom theme, no page builder', 'WordPress, eigenes Theme, ohne Page-Builder' ],
	'ic_start_text'    => [
		'A studio for German-speaking businesses in the UAE needs a website that serves English and German equally and runs without maintenance ballast.',
		'Ein Studio für deutschsprachige Unternehmen in den VAE braucht eine Website, die Englisch und Deutsch gleichwertig bedient und ohne Wartungsballast läuft.',
	],
	'ic_do_1'          => [
		'<strong>Custom theme, no page builder.</strong> Design directions first, then approval, then the build.',
		'<strong>Eigenes Theme, kein Page-Builder.</strong> Erst Design-Richtungen, dann Freigabe, dann der Bau.',
	],
	'ic_do_2'          => [
		'<strong>Bilingual.</strong> English and German with Polylang, linked to each other with hreflang and x-default.',
		'<strong>Zweisprachig.</strong> Englisch und Deutsch mit Polylang, über hreflang und x-default miteinander verknüpft.',
	],
	'ic_do_3'          => [
		'<strong>Legal and consent.</strong> Imprint, privacy policy and cookie consent (CCM19). Analytics runs through the consent tool.',
		'<strong>Recht und Consent.</strong> Impressum, Datenschutzerklärung und Cookie-Einwilligung (CCM19). Analytics läuft über das Consent-Tool.',
	],
	'ic_do_4'          => [
		'<strong>Search.</strong> Its own title and description for every page, a sitemap, structured data and Search Console.',
		'<strong>Suche.</strong> Eigener Titel und eigene Beschreibung für jede Seite, Sitemap, strukturierte Daten und Search Console.',
	],
	'ic_do_5'          => [
		'<strong>Operation.</strong> Hosting at Hostinger, automatic deployment from GitHub, and a contact form with SMTP and e-mail authentication (SPF, DKIM, DMARC).',
		'<strong>Betrieb.</strong> Hosting bei Hostinger, automatisches Deployment aus GitHub und ein Kontaktformular mit SMTP und E-Mail-Authentifizierung (SPF, DKIM, DMARC).',
	],
	'ic_res_text'      => [
		'Live since the end of October 2026. I will publish results on visibility and enquiries once the numbers are reliable.',
		'Seit Ende Oktober 2026 live. Ergebnisse zu Sichtbarkeit und Anfragen veröffentliche ich, sobald belastbare Zahlen vorliegen.',
	],
	'ic_other_text'    => [
		'The route with a page builder, over many years:',
		'Der Weg mit Page-Builder, über viele Jahre:',
	],
	'ic_tile'          => [ 'This website. Without a page builder.', 'Diese Website. Ohne Page-Builder.' ],
];
