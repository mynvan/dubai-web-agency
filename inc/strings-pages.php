<?php
/**
 * Texts of the inner pages (services, website detail page, process, contact).
 * Format as in hg_strings(): key => [ english, german ].
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return [
	// ---- Shared ----
	'pg_crumb_home'     => [ 'Services', 'Leistungen' ],
	'pg_cta_title'      => [ 'Not sure what you need? Start with a call.', 'Unsicher, was Sie brauchen? Starten Sie mit einem Gespräch.' ],
	'pg_details'        => [ 'Details', 'Details' ],

	// ---- Services overview ----
	'svp_meta'          => [
		'Websites, hosting and care, GDPR and SEO for German-speaking businesses in the UAE. One contact person, English and German, clear scope.',
		'Websites, Hosting und Betreuung, DSGVO und SEO für deutschsprachige Unternehmen in den VAE. Ein Ansprechpartner, Englisch und Deutsch, klarer Umfang.',
	],
	'svp_eyebrow'       => [ '02 — Services', '02 — Leistungen' ],
	'svp_lead'          => [
		'One contact person, English and German, a clear scope before anything is built. You get a website that is yours, hosted and looked after, and legally in order for the UAE and the German-speaking market.',
		'Ein Ansprechpartner, Englisch und Deutsch, ein klarer Umfang, bevor etwas gebaut wird. Sie erhalten eine Website, die Ihnen gehört, gehostet und betreut, und rechtlich sauber für die VAE und den deutschsprachigen Markt.',
	],
	'svp_hero_alt'      => [ 'Dubai skyline at sunset with high-rise buildings', 'Skyline von Dubai bei Sonnenuntergang mit Hochhäusern' ],
	'svp_hero_credit'   => [ 'Photo: Nejc Soklič / Unsplash', 'Foto: Nejc Soklič / Unsplash' ],

	'svc_a1'            => [ 'Design approval before the build starts', 'Design-Freigabe, bevor gebaut wird' ],
	'svc_a2'            => [ 'Bilingual EN / DE, one site, one place to edit', 'Zweisprachig EN / DE, eine Website, ein Ort zum Bearbeiten' ],
	'svc_a3'            => [ 'Fast, accessible, mobile first', 'Schnell, barrierearm, mobil zuerst' ],
	'svc_a4'            => [ 'Technical SEO base from day one', 'Technische SEO-Basis von Anfang an' ],
	'svc_b1'            => [ 'Regular updates and tested backups', 'Regelmäßige Updates und getestete Backups' ],
	'svc_b2'            => [ 'Security and uptime monitoring', 'Sicherheits- und Erreichbarkeits-Überwachung' ],
	'svc_b3'            => [ 'Small changes included, scope agreed in writing', 'Kleine Änderungen inklusive, Umfang schriftlich vereinbart' ],
	'svc_b4'            => [ 'Monthly plan, price on request', 'Monatspaket, Preis auf Anfrage' ],
	'svc_c1'            => [ 'Imprint and privacy policy for the German market', 'Impressum und Datenschutzerklärung für den deutschen Markt' ],
	'svc_c2'            => [ 'Consent management without dark patterns', 'Einwilligungsverwaltung ohne Tricks' ],
	'svc_c3'            => [ 'Titles, descriptions, structure, speed', 'Titel, Beschreibungen, Struktur, Geschwindigkeit' ],
	'svc_c4'            => [ 'Google Business Profile and local search', 'Google-Unternehmensprofil und lokale Suche' ],

	// ---- Website detail page ----
	'wd_meta'           => [
		'Custom WordPress websites for German-speaking businesses in Dubai and the UAE. Bilingual English and German, fast, editable, GDPR-ready. Design approval before the build.',
		'Individuelle WordPress-Websites für deutschsprachige Unternehmen in Dubai und den VAE. Zweisprachig Englisch und Deutsch, schnell, editierbar, DSGVO-bereit. Design-Freigabe vor dem Bau.',
	],
	'wd_title_a'        => [ 'Websites for German-speaking businesses in', 'Websites für deutschsprachige Unternehmen in' ],
	'wd_title_b'        => [ 'Dubai.', 'Dubai.' ],
	'wd_lead'           => [
		'Your customers read English, German or both. Your website should too, without two separate sites to maintain. Built as a custom WordPress theme: fast, accessible and easy to edit.',
		'Ihre Kunden lesen Englisch, Deutsch oder beides. Ihre Website sollte das auch können, ohne zwei getrennte Seiten pflegen zu müssen. Gebaut als individuelles WordPress-Theme: schnell, barrierearm und einfach zu bearbeiten.',
	],
	'wd_hero_alt'       => [ 'Dubai skyline at night with illuminated boats on the water', 'Skyline von Dubai bei Nacht mit beleuchteten Booten auf dem Wasser' ],
	'wd_hero_credit'    => [ 'Photo: Matthias / Unsplash', 'Foto: Matthias / Unsplash' ],
	'wd_get_eyebrow'    => [ 'What you get', 'Was Sie bekommen' ],
	'wd_get_title'      => [ 'Scope, in plain words.', 'Der Umfang, in einfachen Worten.' ],
	'wd_get_1'          => [ '<strong>Design first.</strong> You see the visual direction and approve it before anything is built.', '<strong>Erst das Design.</strong> Sie sehen die visuelle Richtung und geben sie frei, bevor gebaut wird.' ],
	'wd_get_2'          => [ '<strong>Bilingual by design.</strong> English and German versions with their own URLs, linked to each other for search engines.', '<strong>Zweisprachig von Anfang an.</strong> Englische und deutsche Version mit eigenen URLs, für Suchmaschinen miteinander verknüpft.' ],
	'wd_get_3'          => [ '<strong>Custom theme, no page builder.</strong> Less code, faster pages, no template look.', '<strong>Eigenes Theme, kein Page-Builder.</strong> Weniger Code, schnellere Seiten, kein Vorlagen-Look.' ],
	'wd_get_4'          => [ '<strong>Editable by you.</strong> Texts, images and references are changed in WordPress, no developer needed.', '<strong>Von Ihnen bearbeitbar.</strong> Texte, Bilder und Referenzen ändern Sie in WordPress, ohne Entwickler.' ],
	'wd_get_5'          => [ '<strong>Legally in order.</strong> Imprint, privacy policy and consent for the German-speaking market.', '<strong>Rechtlich sauber.</strong> Impressum, Datenschutzerklärung und Einwilligung für den deutschsprachigen Markt.' ],
	'wd_for_eyebrow'    => [ 'Who it is for', 'Für wen das ist' ],
	'wd_for_title'      => [ 'German-speaking, UAE-based.', 'Deutschsprachig, in den VAE.' ],
	'wd_for_1'          => [
		'German entrepreneurs, consultants, craftspeople and small companies who run a business in Dubai or the UAE and want to be found by clients on both sides.',
		'Deutsche Unternehmer, Berater, Handwerker und kleine Firmen, die in Dubai oder den VAE ein Geschäft führen und auf beiden Seiten gefunden werden wollen.',
	],
	'wd_for_2'          => [
		'You get one contact person in Bavaria who writes and speaks both languages, works to a written scope and keeps the site running after launch.',
		'Sie haben einen Ansprechpartner in Bayern, der beide Sprachen schreibt und spricht, nach schriftlichem Umfang arbeitet und die Website nach dem Start am Laufen hält.',
	],
	'wd_for_refs'       => [ 'Looking at the work first?', 'Erst die Arbeiten ansehen?' ],
	'wd_faq_eyebrow'    => [ 'Questions', 'Fragen' ],
	'wd_faq_title'      => [ 'Asked before booking.', 'Vor der Buchung gefragt.' ],
	'wd_q1'             => [ 'How much does a website cost?', 'Was kostet eine Website?' ],
	'wd_a1'             => [ 'It depends on pages and content. After the call you receive a fixed quote before any work starts.', 'Das hängt von Seiten und Inhalten ab. Nach dem Gespräch erhalten Sie ein Festpreis-Angebot, bevor Arbeit beginnt.' ],
	'wd_q2'             => [ 'How long does it take?', 'Wie lange dauert es?' ],
	'wd_a2'             => [ 'It depends on scope and on how quickly content arrives. A timeline is part of the quote.', 'Das hängt vom Umfang ab und davon, wie schnell die Inhalte vorliegen. Ein Zeitplan ist Teil des Angebots.' ],
	'wd_q3'             => [ 'Do I need a UAE domain?', 'Brauche ich eine VAE-Domain?' ],
	'wd_a3'             => [ 'No. A .com works well for a bilingual audience. We discuss the options during the call.', 'Nein. Eine .com funktioniert für ein zweisprachiges Publikum gut. Die Möglichkeiten besprechen wir im Gespräch.' ],
	'wd_q4'             => [ 'Who owns the site?', 'Wem gehört die Website?' ],
	'wd_a4'             => [ 'You do. Hosting and care are optional, and a clean handover is always possible.', 'Ihnen. Hosting und Betreuung sind optional, und eine saubere Übergabe ist immer möglich.' ],
	'wd_next_label'     => [ 'Next service', 'Nächste Leistung' ],
	'wd_next_b'         => [ 'Hosting & care', 'Hosting & Betreuung' ],
	'wd_next_c'         => [ 'GDPR & SEO', 'DSGVO & SEO' ],
	'wd_next_proc_l'    => [ 'How it works', 'So läuft es ab' ],
	'wd_next_proc'      => [ 'The process', 'Der Ablauf' ],

	// ---- Process page ----
	'pp_meta'           => [
		'How a website project with Hello Gelb works: call, quote, design approval, build and review, launch and care. Nothing is built before you approve the design.',
		'So läuft ein Website-Projekt mit Hello Gelb ab: Gespräch, Angebot, Design-Freigabe, Umsetzung und Abnahme, Livegang und Betreuung. Nichts wird gebaut, bevor Sie das Design freigeben.',
	],
	'pp_eyebrow'        => [ '03 — Process', '03 — Ablauf' ],
	'pp_title_a'        => [ 'You approve the design', 'Sie geben das Design frei,' ],
	'pp_title_b'        => [ 'before the build starts.', 'bevor gebaut wird.' ],
	'pp_lead'           => [ 'Five stages, each with a clear result. Nothing is built before you sign off the visual direction.', 'Fünf Phasen, jede mit einem klaren Ergebnis. Nichts wird gebaut, bevor Sie die visuelle Richtung freigegeben haben.' ],
	'pp_hero_alt'       => [ 'Sand dunes in the Dubai desert at sunset', 'Sanddünen in der Wüste bei Dubai bei Sonnenuntergang' ],
	'pp_hero_credit'    => [ 'Photo: K T / Unsplash', 'Foto: K T / Unsplash' ],
	'pp_s1_title'       => [ 'Call', 'Gespräch' ],
	'pp_s1_text'        => [ 'Thirty minutes in English or German. Goals, scope, rough budget. You leave with a clear idea of what is possible, without obligation.', 'Dreißig Minuten auf Englisch oder Deutsch. Ziele, Umfang, grobes Budget. Sie gehen mit einer klaren Vorstellung, was möglich ist, ohne Verpflichtung.' ],
	'pp_s1_status'      => [ 'Boarding', 'Boarding' ],
	'pp_s2_title'       => [ 'Quote', 'Angebot' ],
	'pp_s2_text'        => [ 'A written scope with pages, languages, features and a fixed price. Changes are agreed before they happen.', 'Ein schriftlicher Umfang mit Seiten, Sprachen, Funktionen und Festpreis. Änderungen werden vereinbart, bevor sie passieren.' ],
	'pp_s2_status'      => [ 'Check-in', 'Check-in' ],
	'pp_s3_title'       => [ 'Design approval', 'Design-Freigabe' ],
	'pp_s3_text'        => [ 'Three different visual directions as clickable mockups. You choose one and give feedback. Only then does the build start.', 'Drei unterschiedliche visuelle Richtungen als klickbare Entwürfe. Sie wählen eine und geben Feedback. Erst dann beginnt der Bau.' ],
	'pp_s3_status'      => [ 'Gate open', 'Gate offen' ],
	'pp_s4_title'       => [ 'Build & review', 'Umsetzung & Abnahme' ],
	'pp_s4_text'        => [ 'The approved design is built on a private test site. You review it on desktop and phone and send corrections. Texts in both languages are filled in.', 'Das freigegebene Design wird auf einer privaten Testseite gebaut. Sie prüfen es am Desktop und Handy und senden Korrekturen. Die Texte beider Sprachen werden eingepflegt.' ],
	'pp_s4_status'      => [ 'Taxiing', 'Rollfeld' ],
	'pp_s5_title'       => [ 'Launch & care', 'Livegang & Betreuung' ],
	'pp_s5_text'        => [ 'Backup first, then go live. Afterwards hosting and care, or a clean handover with documentation.', 'Erst ein Backup, dann der Livegang. Danach Hosting und Betreuung oder eine saubere Übergabe mit Dokumentation.' ],
	'pp_s5_status'      => [ 'Departure', 'Abflug' ],
	'pp_need_title'     => [ 'What I need from you', 'Was ich von Ihnen brauche' ],
	'pp_need_1'         => [ 'Your business goals and target clients', 'Ihre Geschäftsziele und Zielkunden' ],
	'pp_need_2'         => [ 'Logo, photos and texts, or a brief for them', 'Logo, Fotos und Texte, oder ein Briefing dafür' ],
	'pp_need_3'         => [ 'Company details for imprint and privacy', 'Firmendaten für Impressum und Datenschutz' ],
	'pp_need_4'         => [ 'Feedback within agreed time frames', 'Feedback in den vereinbarten Zeiträumen' ],
	'pp_get_title'      => [ 'What you get', 'Was Sie bekommen' ],
	'pp_get_1'          => [ 'A fixed quote before work starts', 'Ein Festpreis-Angebot, bevor Arbeit beginnt' ],
	'pp_get_2'          => [ 'One contact person, EN and DE', 'Einen Ansprechpartner, EN und DE' ],
	'pp_get_3'          => [ 'A test site to review before launch', 'Eine Testseite zur Prüfung vor dem Livegang' ],
	'pp_get_4'          => [ 'Backup before go-live, handover on request', 'Backup vor dem Livegang, Übergabe auf Wunsch' ],
	'pp_cta_title'      => [ 'Ready for step one?', 'Bereit für Schritt eins?' ],

	// ---- Contact page ----
	'cp_meta'           => [
		'Contact Hello Gelb: book a 30-minute call or send a request. English or German, answer within one working day.',
		'Kontakt zu Hello Gelb: 30-Minuten-Gespräch buchen oder Anfrage senden. Englisch oder Deutsch, Antwort innerhalb eines Werktags.',
	],
	'cp_eyebrow'        => [ '04 — Contact', '04 — Kontakt' ],
	'cp_lead'           => [ 'Tell me a little about your project. You get an answer within one working day, in English or German.', 'Erzählen Sie mir kurz von Ihrem Projekt. Sie erhalten innerhalb eines Werktags eine Antwort, auf Englisch oder Deutsch.' ],
	'cp_hero_alt'       => [ 'Aerial view of Downtown Dubai at night with illuminated skyscrapers', 'Luftaufnahme von Downtown Dubai bei Nacht mit beleuchteten Hochhäusern' ],
	'cp_hero_credit'    => [ 'Photo: Nejc Soklič / Unsplash', 'Foto: Nejc Soklič / Unsplash' ],
	'cp_form_eyebrow'   => [ 'Boarding pass — your details', 'Bordkarte — Ihre Angaben' ],
	'cp_name'           => [ 'Name', 'Name' ],
	'cp_company'        => [ 'Company', 'Unternehmen' ],
	'cp_email'          => [ 'E-mail', 'E-Mail' ],
	'cp_language'       => [ 'Language', 'Sprache' ],
	'cp_message'        => [ 'Your project', 'Ihr Projekt' ],
	'cp_consent'        => [ 'I agree that my details are used to answer my request.', 'Ich bin einverstanden, dass meine Angaben zur Beantwortung meiner Anfrage verwendet werden.' ],
	'cp_privacy'        => [ 'Privacy policy', 'Datenschutzerklärung' ],
	'cp_send'           => [ 'Send request', 'Anfrage senden' ],
	'cp_sent'           => [ 'Thank you. Your request has arrived, you will hear from me within one working day.', 'Vielen Dank. Ihre Anfrage ist angekommen, Sie hören innerhalb eines Werktags von mir.' ],
	'cp_error'          => [ 'The request could not be sent. Please check your details and try again.', 'Die Anfrage konnte nicht gesendet werden. Bitte prüfen Sie Ihre Angaben und versuchen Sie es erneut.' ],
	'cp_talk'           => [ 'Prefer to talk first?', 'Lieber erst sprechen?' ],
];
