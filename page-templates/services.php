<?php
/**
 * Template Name: Services overview
 */
get_header();
hg_set_page_meta( 'svp_meta' );

hg_page_hero( [
	'image'      => 'hero-services.jpg',
	'alt'        => 'svp_hero_alt',
	'credit'     => 'svp_hero_credit',
	'eyebrow'    => 'svp_eyebrow',
	'title_html' => esc_html( hg( 'services_title' ) ),
	'lead'       => 'svp_lead',
] );

$services = [
	'a' => [ 'svc_a_title', 'svc_a_text', [ 'svc_a1', 'svc_a2', 'svc_a3', 'svc_a4' ], hg_template_url( 'websites' ) ],
	'b' => [ 'svc_b_title', 'svc_b_text', [ 'svc_b1', 'svc_b2', 'svc_b3', 'svc_b4' ], hg_template_url( 'hosting' ) ],
	'c' => [ 'svc_c_title', 'svc_c_text', [ 'svc_c1', 'svc_c2', 'svc_c3', 'svc_c4' ], hg_template_url( 'gdpr' ) ],
];
?>
<div class="service-list">
	<?php foreach ( $services as $letter => [ $title, $text, $points, $url ] ) : ?>
		<section class="service<?php echo 'b' === $letter ? ' service--band' : ''; ?>">
			<div class="service__inner">
				<span class="service__letter mono" aria-hidden="true"><?php echo esc_html( strtoupper( $letter ) ); ?></span>
				<div class="service__main">
					<h2 class="service__title"><?php hg_e( $title ); ?></h2>
					<p class="service__text"><?php hg_e( $text ); ?></p>
					<?php if ( $url ) : ?>
						<a class="btn btn--outline mono" href="<?php echo esc_url( $url ); ?>"><?php hg_e( 'pg_details' ); ?> &rarr;</a>
					<?php endif; ?>
				</div>
				<ul class="ticks mono">
					<?php foreach ( $points as $point ) : ?>
						<li><?php hg_e( $point ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
	<?php endforeach; ?>
</div>
<?php
hg_cta_band( 'pg_cta_title' );
get_footer();
