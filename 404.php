<?php
get_header();
?>
<section class="page-content">
	<h1><?php hg_e( '404_title' ); ?></h1>
	<p class="prose"><?php hg_e( '404_text' ); ?></p>
	<p><a class="btn btn--accent" href="<?php echo esc_url( function_exists( 'pll_home_url' ) ? pll_home_url() : home_url( '/' ) ); ?>"><?php hg_e( '404_back' ); ?> &rarr;</a></p>
</section>
<?php
get_footer();
