<?php
/**
 * Google Analytics 4 (gtag.js).
 *
 * The tag is printed ONLY when consent exists. Until a consent tool (CCM19) is
 * set up, nothing is loaded and no data goes to Google. To switch it on, make
 * the filter return true once the visitor has agreed to statistics, e.g.:
 *
 *   add_filter( 'hg_analytics_consent', fn() => ! empty( $_COOKIE['your_consent_cookie'] ) );
 *
 * or let the consent tool load the script itself and return false here.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_head', function () {
	if ( ! HG_GA_ID || is_user_logged_in() || ! apply_filters( 'hg_analytics_consent', false ) ) {
		return;
	}
	$id = esc_attr( HG_GA_ID );
	?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $id; ?>"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', '<?php echo esc_js( HG_GA_ID ); ?>');
</script>
	<?php
}, 20 );
