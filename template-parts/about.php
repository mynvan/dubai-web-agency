<?php
/**
 * Who builds the site: portrait, short intro, facts.
 * Renders only when the portrait file exists, so the section never shows an empty frame.
 */
$hg_portrait = get_template_directory() . '/assets/img/philipp-gebhart.jpg';
if ( ! file_exists( $hg_portrait ) ) {
	return;
}
?>
<section id="about" class="section about">
	<figure class="about__figure">
		<img
			class="about__photo"
			src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/philipp-gebhart.jpg' ); ?>"
			alt="<?php echo esc_attr( hg( 'about_alt' ) ); ?>"
			width="800"
			height="1000"
			loading="lazy"
			decoding="async"
		>
		<figcaption class="about__caption mono"><?php hg_e( 'about_caption' ); ?></figcaption>
	</figure>
	<div class="about__body">
		<p class="eyebrow mono"><?php hg_e( 'about_eyebrow' ); ?></p>
		<h2 class="about__title"><?php hg_e( 'about_title' ); ?></h2>
		<p class="about__text"><?php hg_e( 'about_text' ); ?></p>
		<dl class="about__facts mono">
			<div><dt><?php hg_e( 'pass_languages' ); ?></dt><dd>EN / DE</dd></div>
			<div><dt><?php hg_e( 'about_based' ); ?></dt><dd><?php hg_e( 'footer_location' ); ?></dd></div>
			<div><dt><?php hg_e( 'nav_services' ); ?></dt><dd><?php hg_e( 'about_services' ); ?></dd></div>
		</dl>
		<div class="about__actions">
			<a class="btn btn--accent" href="<?php echo esc_url( hg_cta_url() ); ?>"><?php hg_e( 'hero_cta' ); ?> &rarr;</a>
			<a class="link-plain" href="<?php echo esc_url( HG_REFERENCES_URL ); ?>"><?php hg_e( 'about_more' ); ?> &rarr;</a>
		</div>
	</div>
</section>
