<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</main>
<footer class="site-footer mono">
	<span>
		<?php echo esc_html( HG_BRAND ); ?> &bull; <?php hg_e( 'footer_location' ); ?>
		<?php if ( HG_EMAIL ) : ?>
			&bull; <a href="mailto:<?php echo esc_attr( antispambot( HG_EMAIL ) ); ?>"><?php echo esc_html( antispambot( HG_EMAIL ) ); ?></a>
		<?php endif; ?>
	</span>
	<?php
	wp_nav_menu( [
		'theme_location' => 'footer',
		'container'      => false,
		'menu_class'     => 'footer-menu',
		'depth'          => 1,
		'fallback_cb'    => false,
	] );
	?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
