<?php
/**
 * Template Name: Work overview
 */
get_header();

hg_page_hero( [
	'image'      => 'hero-process.jpg',
	'alt'        => 'pp_hero_alt',
	'credit'     => 'pp_hero_credit',
	'eyebrow'    => 'work_eyebrow',
	'title_html' => esc_html( hg( 'work_title' ) ),
	'lead'       => 'wk_lead',
] );

$cases = [
	'a' => [ 'cs', [ 'wk_cs_1', 'wk_cs_2', 'wk_cs_3' ] ],
	'b' => [ 'ic', [ 'wk_ic_1', 'wk_ic_2', 'wk_ic_3' ] ],
];
?>
<div class="service-list">
	<?php foreach ( $cases as $letter => [ $slug, $points ] ) : ?>
		<section class="service<?php echo 'b' === $letter ? ' service--band' : ''; ?>">
			<div class="service__inner">
				<span class="service__letter mono" aria-hidden="true"><?php echo esc_html( strtoupper( $letter ) ); ?></span>
				<div class="service__main">
					<h2 class="service__title"><?php hg_e( "{$slug}_crumb" ); ?></h2>
					<p class="service__text"><?php hg_e( "{$slug}_lead" ); ?></p>
					<a class="btn btn--outline mono" href="<?php echo esc_url( hg_template_url( $slug ) ); ?>"><?php hg_e( 'work_tile_more' ); ?> &rarr;</a>
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
<div class="work-more">
	<p class="more"><a href="<?php echo esc_url( HG_REFERENCES_URL ); ?>" rel="noopener"><?php hg_e( 'work_more' ); ?> &rarr;</a></p>
</div>
<?php
hg_cta_band( 'contact_title' );
get_footer();
