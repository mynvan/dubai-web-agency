<?php
/**
 * Consent manager (CCM19) and Google Analytics 4.
 *
 * CCM19 is printed first in <head>. The GA4 tag is printed in CCM19's script
 * loader format (type="text/x-ccm-loader"), so the browser does NOT run it until
 * the visitor has accepted the "Statistics" group. If CCM19 is missing or the
 * group is not accepted, nothing is sent to Google.
 *
 * In the CCM19 backend, the Google Analytics integration needs the loader
 * group "statistics" (field "Gruppe fuer den Script-Loader").
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_head', function () {
	if ( HG_CCM19_SRC ) {
		echo '<script src="' . esc_attr( HG_CCM19_SRC ) . '" referrerpolicy="origin"></script>' . "\n"; // phpcs:ignore WordPress.WP.EnqueuedResources
	}
}, 1 );

add_action( 'wp_head', function () {
	if ( ! HG_GA_ID || is_user_logged_in() ) {
		return;
	}
	?>
<!-- Google tag (gtag.js), released by CCM19 after consent -->
<script type="text/x-ccm-loader" data-ccm-loader-group="statistics" data-ccm-loader-src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr( HG_GA_ID ); ?>"></script>
<script type="text/x-ccm-loader" data-ccm-loader-group="statistics">
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', '<?php echo esc_js( HG_GA_ID ); ?>');
</script>
	<?php
}, 20 );
