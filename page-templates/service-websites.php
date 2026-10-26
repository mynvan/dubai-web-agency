<?php
/**
 * Template Name: Service: Websites
 */
get_header();
hg_set_page_meta( 'wd_meta' );

hg_page_hero( [
	'image'      => 'hero-websites.jpg',
	'alt'        => 'wd_hero_alt',
	'credit'     => 'wd_hero_credit',
	'crumb'      => hg( 'svc_a_title' ),
	'title_html' => esc_html( hg( 'wd_title_a' ) ) . ' <span class="accent">' . esc_html( hg( 'wd_title_b' ) ) . '</span>',
	'lead'       => 'wd_lead',
	'cta'        => true,
] );
?>
<section class="split">
	<div class="split__head">
		<p class="eyebrow mono"><?php hg_e( 'wd_get_eyebrow' ); ?></p>
		<h2 class="split__title"><?php hg_e( 'wd_get_title' ); ?></h2>
	</div>
	<ol class="numbered">
		<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
			<li><span class="numbered__n mono" aria-hidden="true">0<?php echo (int) $i; ?></span><span><?php hg_html( "wd_get_{$i}" ); ?></span></li>
		<?php endfor; ?>
	</ol>
</section>

<section class="split split--band">
	<div class="split__head">
		<p class="eyebrow mono"><?php hg_e( 'wd_for_eyebrow' ); ?></p>
		<h2 class="split__title"><?php hg_e( 'wd_for_title' ); ?></h2>
	</div>
	<div class="split__body">
		<p><?php hg_e( 'wd_for_1' ); ?></p>
		<p><?php hg_e( 'wd_for_2' ); ?></p>
		<p class="mono split__refs"><?php hg_e( 'wd_for_refs' ); ?> <a href="<?php echo esc_url( HG_REFERENCES_URL ); ?>"><?php echo esc_html( 'philippgebhart.de' ); ?> &rarr;</a></p>
	</div>
</section>

<section class="split">
	<div class="split__head">
		<p class="eyebrow mono"><?php hg_e( 'wd_faq_eyebrow' ); ?></p>
		<h2 class="split__title"><?php hg_e( 'wd_faq_title' ); ?></h2>
	</div>
	<div class="faq">
		<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
			<div class="faq__item">
				<h3><?php hg_e( "wd_q{$i}" ); ?></h3>
				<p><?php hg_e( "wd_a{$i}" ); ?></p>
			</div>
		<?php endfor; ?>
	</div>
</section>

<section class="next-links">
	<a class="next-link" href="<?php echo esc_url( hg_template_url( 'hosting' ) ); ?>">
		<span class="mono"><?php hg_e( 'wd_next_label' ); ?></span>
		<strong><?php hg_e( 'wd_next_b' ); ?> &rarr;</strong>
	</a>
	<a class="next-link" href="<?php echo esc_url( hg_template_url( 'gdpr' ) ); ?>">
		<span class="mono"><?php hg_e( 'wd_next_label' ); ?></span>
		<strong><?php hg_e( 'wd_next_c' ); ?> &rarr;</strong>
	</a>
	<a class="next-link next-link--accent" href="<?php echo esc_url( hg_template_url( 'process' ) ); ?>">
		<span class="mono"><?php hg_e( 'wd_next_proc_l' ); ?></span>
		<strong><?php hg_e( 'wd_next_proc' ); ?> &rarr;</strong>
	</a>
</section>
<?php
get_footer();
