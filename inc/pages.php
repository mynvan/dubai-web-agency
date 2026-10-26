<?php
/**
 * Inner pages: template URLs, shared hero, contact form handler.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * URL of the page that uses a page template, in the current language.
 * Falls back to the matching front-page anchor, so menus never break.
 *
 * @param string $slug One of: services, websites, hosting, gdpr, process, contact.
 */
function hg_template_url( string $slug ): string {
	static $cache = [];
	$lang = hg_lang();
	$key  = $slug . '|' . $lang;
	if ( isset( $cache[ $key ] ) ) {
		return $cache[ $key ];
	}

	$files = [
		'services' => 'page-templates/services.php',
		'websites' => 'page-templates/service-websites.php',
		'process'  => 'page-templates/process.php',
		'contact'  => 'page-templates/contact.php',
	];
	$url = '';
	if ( isset( $files[ $slug ] ) ) {
		$ids = get_posts( [
			'post_type'        => 'page',
			'post_status'      => 'publish',
			'posts_per_page'   => 1,
			'fields'           => 'ids',
			'meta_key'         => '_wp_page_template', // phpcs:ignore WordPress.DB.SlowDBQuery
			'meta_value'       => $files[ $slug ], // phpcs:ignore WordPress.DB.SlowDBQuery
			'lang'             => '', // All languages, then pick the right one below.
			'suppress_filters' => false,
		] );
		if ( $ids ) {
			$id = (int) $ids[0];
			if ( function_exists( 'pll_get_post' ) ) {
				$translated = pll_get_post( $id, $lang );
				if ( $translated ) {
					$id = (int) $translated;
				}
			}
			$url = get_permalink( $id );
		}
	}
	if ( ! $url ) {
		$anchors = [ 'services' => 'services', 'websites' => 'services', 'hosting' => 'services', 'gdpr' => 'services', 'process' => 'process', 'contact' => 'contact' ];
		$url     = hg_home_anchor( $anchors[ $slug ] ?? 'contact' );
	}
	$cache[ $key ] = $url;
	return $url;
}

/**
 * Hero used on inner pages. Image, texts and credit come from the template.
 *
 * @param array $args image (file in assets/img), alt, credit, eyebrow, title_html, lead, crumb (optional).
 */
function hg_page_hero( array $args ): void {
	$file = $args['image'];
	$path = get_template_directory() . '/assets/img/' . $file;
	$size = is_readable( $path ) ? getimagesize( $path ) : false;
	$w    = $size ? (int) $size[0] : 2000;
	$h    = $size ? (int) $size[1] : 1500;
	?>
<section class="page-hero">
	<img class="page-hero__img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/' . $file ); ?>" width="<?php echo (int) $w; ?>" height="<?php echo (int) $h; ?>" alt="<?php echo esc_attr( hg( $args['alt'] ) ); ?>" fetchpriority="high" decoding="async">
	<div class="page-hero__shade"></div>
	<div class="page-hero__body">
		<?php if ( ! empty( $args['crumb'] ) ) : ?>
			<p class="crumb mono"><a href="<?php echo esc_url( hg_template_url( 'services' ) ); ?>"><?php hg_e( 'pg_crumb_home' ); ?></a> &nbsp;/&nbsp; <?php echo esc_html( $args['crumb'] ); ?></p>
		<?php else : ?>
			<p class="eyebrow mono"><?php hg_e( $args['eyebrow'] ); ?></p>
		<?php endif; ?>
		<h1 class="page-hero__title"><?php echo $args['title_html']; // phpcs:ignore WordPress.Security.EscapeOutput -- built from escaped parts by the template. ?></h1>
		<p class="page-hero__lead"><?php hg_e( $args['lead'] ); ?></p>
		<?php if ( ! empty( $args['cta'] ) ) : ?>
			<a class="btn btn--accent" href="<?php echo esc_url( hg_cta_url() ); ?>"><?php hg_e( 'hero_cta' ); ?> &rarr;</a>
		<?php endif; ?>
	</div>
	<p class="hero__credit mono"><?php hg_e( $args['credit'] ); ?></p>
</section>
	<?php
}

/**
 * Complete detail page of a service. Texts come from the keys with the given prefix.
 *
 * @param string $p      Key prefix (hd, gd).
 * @param string $image  Hero file in assets/img.
 * @param string $crumb  String key of the service title (breadcrumb).
 * @param array  $others Two other services as [ string key of title, template slug ] each.
 */
function hg_service_detail( string $p, string $image, string $crumb, array $others ): void {
	hg_set_page_meta( "{$p}_meta" );
	hg_page_hero( [
		'image'      => $image,
		'alt'        => "{$p}_hero_alt",
		'credit'     => "{$p}_hero_credit",
		'crumb'      => hg( $crumb ),
		'title_html' => esc_html( hg( "{$p}_title_a" ) ) . ' <span class="accent">' . esc_html( hg( "{$p}_title_b" ) ) . '</span>',
		'lead'       => "{$p}_lead",
		'cta'        => true,
	] );
	?>
<section class="split">
	<div class="split__head">
		<p class="eyebrow mono"><?php hg_e( "{$p}_get_eyebrow" ); ?></p>
		<h2 class="split__title"><?php hg_e( "{$p}_get_title" ); ?></h2>
	</div>
	<ol class="numbered">
		<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
			<li><span class="numbered__n mono" aria-hidden="true">0<?php echo (int) $i; ?></span><span><?php hg_html( "{$p}_get_{$i}" ); ?></span></li>
		<?php endfor; ?>
	</ol>
</section>

<section class="split split--band">
	<div class="split__head">
		<p class="eyebrow mono"><?php hg_e( "{$p}_for_eyebrow" ); ?></p>
		<h2 class="split__title"><?php hg_e( "{$p}_for_title" ); ?></h2>
	</div>
	<div class="split__body">
		<p><?php hg_e( "{$p}_for_1" ); ?></p>
		<p><?php hg_e( "{$p}_for_2" ); ?></p>
	</div>
</section>

<section class="split">
	<div class="split__head">
		<p class="eyebrow mono"><?php hg_e( "{$p}_faq_eyebrow" ); ?></p>
		<h2 class="split__title"><?php hg_e( "{$p}_faq_title" ); ?></h2>
	</div>
	<div class="faq">
		<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
			<div class="faq__item">
				<h3><?php hg_e( "{$p}_q{$i}" ); ?></h3>
				<p><?php hg_e( "{$p}_a{$i}" ); ?></p>
			</div>
		<?php endfor; ?>
	</div>
</section>

<section class="next-links">
	<?php foreach ( $others as [ $title_key, $slug ] ) : ?>
		<a class="next-link" href="<?php echo esc_url( hg_template_url( $slug ) ); ?>">
			<span class="mono"><?php hg_e( 'dt_next_label' ); ?></span>
			<strong><?php hg_e( $title_key ); ?> &rarr;</strong>
		</a>
	<?php endforeach; ?>
	<a class="next-link next-link--accent" href="<?php echo esc_url( hg_template_url( 'process' ) ); ?>">
		<span class="mono"><?php hg_e( 'wd_next_proc_l' ); ?></span>
		<strong><?php hg_e( 'wd_next_proc' ); ?> &rarr;</strong>
	</a>
</section>
	<?php
}

/**
 * Closing call-to-action band.
 */
function hg_cta_band( string $title_key ): void {
	?>
<section class="cta-band">
	<h2 class="cta-band__title"><?php hg_e( $title_key ); ?></h2>
	<a class="btn btn--dark" href="<?php echo esc_url( hg_cta_url() ); ?>"><?php hg_e( 'hero_cta' ); ?> &rarr;</a>
</section>
	<?php
}

/**
 * Meta description for inner pages, set by the page template.
 */
function hg_set_page_meta( string $key ): void {
	add_action( 'wp_head', function () use ( $key ) {
		printf( '<meta name="description" content="%s">' . "\n", esc_attr( hg( $key ) ) );
	}, 2 );
}

// ---- Contact form ----

add_action( 'admin_post_nopriv_hg_contact', 'hg_handle_contact' );
add_action( 'admin_post_hg_contact', 'hg_handle_contact' );

function hg_handle_contact(): void {
	$back = isset( $_POST['hg_back'] ) ? esc_url_raw( wp_unslash( $_POST['hg_back'] ) ) : home_url( '/' );
	$back = wp_validate_redirect( $back, home_url( '/' ) );

	$ok = isset( $_POST['hg_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['hg_nonce'] ) ), 'hg_contact' );
	// Honeypot field and minimum fill-in time catch simple bots.
	if ( ! empty( $_POST['hg_website'] ) ) {
		$ok = false;
	}
	$started = isset( $_POST['hg_t'] ) ? (int) $_POST['hg_t'] : 0;
	if ( $started && ( time() - $started ) < 3 ) {
		$ok = false;
	}

	$name    = isset( $_POST['hg_name'] ) ? sanitize_text_field( wp_unslash( $_POST['hg_name'] ) ) : '';
	$company = isset( $_POST['hg_company'] ) ? sanitize_text_field( wp_unslash( $_POST['hg_company'] ) ) : '';
	$email   = isset( $_POST['hg_email'] ) ? sanitize_email( wp_unslash( $_POST['hg_email'] ) ) : '';
	$lang    = isset( $_POST['hg_lang'] ) && 'Deutsch' === $_POST['hg_lang'] ? 'Deutsch' : 'English';
	$message = isset( $_POST['hg_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['hg_message'] ) ) : '';
	$consent = ! empty( $_POST['hg_consent'] );

	if ( ! $ok || ! HG_EMAIL || '' === $name || ! is_email( $email ) || '' === $message || ! $consent ) {
		wp_safe_redirect( add_query_arg( 'hg_sent', '0', $back ) . '#form' );
		exit;
	}

	$body  = "Name: {$name}\nCompany: {$company}\nE-mail: {$email}\nLanguage: {$lang}\n\n{$message}\n";
	$sent  = wp_mail(
		HG_EMAIL,
		'[' . HG_BRAND . '] ' . $name,
		$body,
		[ 'Reply-To: ' . $name . ' <' . $email . '>' ]
	);
	wp_safe_redirect( add_query_arg( 'hg_sent', $sent ? '1' : '0', $back ) . '#form' );
	exit;
}
