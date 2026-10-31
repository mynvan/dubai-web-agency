<?php
/**
 * Consent manager (CCM19) and Google Analytics 4.
 *
 * CCM19 is printed first in <head> so it can block the Google tag until the
 * visitor accepts "Google Analytics 4" (service from the CCM19 catalog). The
 * GA4 tag itself is the standard gtag.js snippet.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_head', function () {
	if ( HG_CCM19_SRC ) {
		echo '<script src="' . esc_attr( HG_CCM19_SRC ) . '" referrerpolicy="origin" data-no-optimize="1" data-cfasync="false"></script>' . "\n"; // phpcs:ignore WordPress.WP.EnqueuedResources
	}
}, 1 );

add_action( 'wp_head', function () {
	if ( ! HG_GA_ID || is_user_logged_in() ) {
		return;
	}
	?>
<!-- Google tag (gtag.js) -->
<script async data-no-optimize="1" data-cfasync="false" src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr( HG_GA_ID ); ?>"></script>
<script data-no-optimize="1" data-cfasync="false">
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', '<?php echo esc_js( HG_GA_ID ); ?>');
</script>
	<?php
}, 20 );
