<?php
/**
 * Template Name: Guide
 *
 * Long-form article: title band, table of contents, text from the editor, contact card.
 * Table of contents is built from the H2 headings. The page excerpt is the meta description.
 */
get_header();

while ( have_posts() ) :
	the_post();
	$guide = hg_guide_prepare( (string) apply_filters( 'the_content', get_the_content() ) );
	?>
<article class="guide">
	<header class="guide__head">
		<div class="guide__head-inner">
			<p class="guide__label mono"><?php hg_e( 'guide_label' ); ?></p>
			<h1 class="guide__title"><?php the_title(); ?></h1>
			<p class="guide__meta mono">
				<span><?php hg_e( 'guide_updated' ); ?>: <?php echo esc_html( get_the_modified_date() ); ?></span>
				<span><?php hg_e( 'guide_author' ); ?></span>
			</p>
		</div>
	</header>

	<div class="guide__layout">
		<?php if ( count( $guide['toc'] ) > 1 ) : ?>
			<nav class="guide__toc" aria-label="<?php echo esc_attr( hg( 'guide_toc' ) ); ?>">
				<p class="guide__toc-title mono"><?php hg_e( 'guide_toc' ); ?></p>
				<ol class="guide__toc-list">
					<?php foreach ( $guide['toc'] as $i => $item ) : ?>
						<li><a href="#<?php echo esc_attr( $item['id'] ); ?>"><span class="guide__toc-num mono"><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span><?php echo esc_html( $item['text'] ); ?></a></li>
					<?php endforeach; ?>
				</ol>
			</nav>
		<?php else : ?>
			<div></div>
		<?php endif; ?>

		<div class="guide__main">
			<div class="guide__body prose">
				<?php echo $guide['html']; // phpcs:ignore WordPress.Security.EscapeOutput -- WordPress-filtered post content. ?>
			</div>

			<aside class="guide__pass">
				<div class="guide__pass-main">
					<p class="mono guide__pass-eyebrow"><?php hg_e( 'guide_cta_eyebrow' ); ?></p>
					<h2 class="guide__pass-title"><?php hg_e( 'guide_cta_title' ); ?></h2>
					<a class="btn btn--dark" href="<?php echo esc_url( hg_cta_url() ); ?>"><?php hg_e( 'hero_cta' ); ?> &rarr;</a>
				</div>
				<div class="guide__pass-stub mono" aria-hidden="true">
					<p class="guide__pass-route">MUC&rarr;DXB</p>
					<p><?php hg_e( 'pass_languages' ); ?>: EN / DE</p>
				</div>
			</aside>
		</div>
	</div>
</article>
	<?php
endwhile;

get_footer();
