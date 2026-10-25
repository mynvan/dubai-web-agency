# Hello Gelb

Custom WordPress theme for the Hello Gelb web studio (Bavaria / Dubai). No page builder, no build step. The repository **is** the theme and is deployed to `wp-content/themes/hellogelb` (Hostinger Git, branch `main`).

Design: variant 6 "Fullscreen Boarding", approved on 2026-10-20.

## Setup on a fresh WordPress

1. Install and activate the **Hello Gelb** theme (deployed from this repo).
2. Install **Polylang** (free). Add English (default, no URL prefix) and German (`/de/`). Create the language set via the setup wizard.
3. Settings > Reading: choose a static page as front page, create it in English and German and link both as translations.
4. Create the pages Imprint / Impressum and Privacy / Datenschutz, then a menu per language and assign it to the location **Footer**.
5. Languages > Translations: all theme texts appear in the group "Hello Gelb". German defaults ship in `inc/i18n.php`; a saved translation overrides them.
6. Under References, add real projects (title, featured image, project link). Until at least one exists, the work section shows a link to philippgebhart.de instead of tiles.

## Settings in `inc/config.php`

- `HG_BRAND`: name in logo and hero. Final brand decision pending.
- `HG_EMAIL`: public contact address. Empty means it is not shown.
- `HG_BOOKING_URL`: calendar link for the "Book a call" buttons. Empty falls back to the e-mail, then to the contact section.
- `HG_REFERENCES_URL`: link to the real references.

## Structure

- `front-page.php` assembles the sections from `template-parts/`.
- `inc/i18n.php`: all visible texts as `[english, german]`, language helper, switcher.
- `inc/references.php`: custom post type for references.
- `assets/`: CSS, local fonts (Archivo, IBM Plex Mono), images.

## Still open before launch

- Real contact e-mail, imprint and privacy texts, calendar link.
- Real references (none are invented).
- Staging review on a mobile device, QA checklist.
