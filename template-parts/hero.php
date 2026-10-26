<?php
/**
 * Full-screen hero. The header is positioned on top of it via CSS.
 */
$hero = get_template_directory_uri() . '/assets/img/hero-dubai.jpg';
?>
<section class="hero">
	<img class="hero__img" src="<?php echo esc_url( $hero ); ?>" width="2400" height="1560" alt="<?php echo esc_attr( hg( 'hero_alt' ) ); ?>" fetchpriority="high" decoding="async">
	<div class="hero__shade"></div>
	<div class="hero__body">
		<p class="eyebrow mono"><?php hg_e( 'hero_kicker' ); ?></p>
		<h1 class="hero__title"><?php echo esc_html( HG_BRAND ); ?><span class="accent">.</span></h1>
		<div class="hero__foot">
			<div class="hero__text">
				<p class="hero__lead"><?php hg_e( 'hero_lead' ); ?> <mark><?php hg_e( 'hero_mark' ); ?></mark></p>
				<div class="hero__actions">
					<a class="btn btn--accent" href="<?php echo esc_url( hg_cta_url() ); ?>"><?php hg_e( 'hero_cta' ); ?> &rarr;</a>
					<a class="link-plain" href="#work"><?php hg_e( 'hero_refs' ); ?></a>
				</div>
			</div>
			<p class="route mono" aria-hidden="true">
				<span class="route__code">MUC</span><span class="route__line"></span><span class="route__code route__code--dest">DXB</span>
			</p>
		</div>
	</div>
	<p class="hero__credit mono"><?php hg_e( 'hero_credit' ); ?></p>
</section>
