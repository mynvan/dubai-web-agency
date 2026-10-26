<?php
/**
 * Template Name: Process
 */
get_header();
hg_set_page_meta( 'pp_meta' );

hg_page_hero( [
	'image'      => 'hero-process.jpg',
	'alt'        => 'pp_hero_alt',
	'credit'     => 'pp_hero_credit',
	'eyebrow'    => 'pp_eyebrow',
	'title_html' => esc_html( hg( 'pp_title_a' ) ) . ' <span class="accent">' . esc_html( hg( 'pp_title_b' ) ) . '</span>',
	'lead'       => 'pp_lead',
] );
?>
<section class="section section--tight">
	<div class="board mono" role="table">
		<div class="board__head" role="row">
			<span role="columnheader" class="c-step"><?php hg_e( 'col_step' ); ?></span>
			<span role="columnheader" class="c-stage"><?php hg_e( 'col_stage' ); ?></span>
			<span role="columnheader" class="c-what"><?php hg_e( 'col_what' ); ?></span>
			<span role="columnheader" class="c-status"><?php hg_e( 'col_status' ); ?></span>
		</div>
		<?php for ( $n = 1; $n <= 5; $n++ ) : ?>
			<div class="board__row<?php echo 3 === $n ? ' board__row--gate' : ''; ?>" role="row">
				<span role="cell" class="c-step board__num">0<?php echo (int) $n; ?></span>
				<h2 role="cell" class="c-stage board__stage"><?php hg_e( "pp_s{$n}_title" ); ?></h2>
				<span role="cell" class="c-what board__what"><?php hg_e( "pp_s{$n}_text" ); ?></span>
				<span role="cell" class="c-status board__status"><?php hg_e( "pp_s{$n}_status" ); ?></span>
			</div>
		<?php endfor; ?>
	</div>

	<div class="two-lists">
		<div>
			<h2 class="two-lists__title"><?php hg_e( 'pp_need_title' ); ?></h2>
			<ul class="ticks mono">
				<?php for ( $i = 1; $i <= 4; $i++ ) : ?><li><?php hg_e( "pp_need_{$i}" ); ?></li><?php endfor; ?>
			</ul>
		</div>
		<div>
			<h2 class="two-lists__title"><?php hg_e( 'pp_get_title' ); ?></h2>
			<ul class="ticks mono">
				<?php for ( $i = 1; $i <= 4; $i++ ) : ?><li><?php hg_e( "pp_get_{$i}" ); ?></li><?php endfor; ?>
			</ul>
		</div>
	</div>
</section>
<?php
hg_cta_band( 'pp_cta_title' );
get_footer();
