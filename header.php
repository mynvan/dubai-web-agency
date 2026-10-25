<?php
/**
 * Site header. On the front page it sits on top of the hero image.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php hg_e( 'skip' ); ?></a>

<header class="site-header">
	<a class="logo" href="<?php echo esc_url( function_exists( 'pll_home_url' ) ? pll_home_url() : home_url( '/' ) ); ?>">
		<span class="logo__mark" aria-hidden="true"><span></span></span><?php echo esc_html( HG_BRAND ); ?>
	</a>
	<nav class="site-nav mono" aria-label="<?php echo esc_attr( hg( 'nav_label' ) ); ?>">
		<a href="<?php echo esc_url( hg_home_anchor( 'services' ) ); ?>"><?php hg_e( 'nav_services' ); ?></a>
		<a href="<?php echo esc_url( hg_home_anchor( 'process' ) ); ?>"><?php hg_e( 'nav_process' ); ?></a>
		<a href="<?php echo esc_url( hg_home_anchor( 'work' ) ); ?>"><?php hg_e( 'nav_work' ); ?></a>
		<a href="<?php echo esc_url( hg_home_anchor( 'contact' ) ); ?>"><?php hg_e( 'nav_contact' ); ?></a>
	</nav>
	<div class="mono"><?php hg_lang_switcher(); ?></div>
</header>
<main id="main">
