<?php
$refs = new WP_Query( [
	'post_type'      => 'reference',
	'posts_per_page' => 4,
	'orderby'        => 'menu_order date',
	'order'          => 'ASC',
	'no_found_rows'  => true,
] );
?>
<section id="work" class="section">
	<p class="eyebrow mono"><?php hg_e( 'work_eyebrow' ); ?></p>
	<h2 class="section__title"><?php hg_e( 'work_title' ); ?></h2>

	<?php if ( $refs->have_posts() ) : ?>
		<div class="tiles">
			<?php
			$i = 0;
			while ( $refs->have_posts() ) :
				$refs->the_post();
				$url = (string) get_post_meta( get_the_ID(), '_hg_reference_url', true );
				$cls = 'tile tile--' . ( $i % 2 ? 'dark' : 'accent' );
				?>
				<?php if ( $url ) : ?><a class="<?php echo esc_attr( $cls ); ?>" href="<?php echo esc_url( $url ); ?>" rel="noopener"><?php else : ?><div class="<?php echo esc_attr( $cls ); ?>"><?php endif; ?>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large', [ 'class' => 'tile__img', 'loading' => 'lazy' ] ); ?>
					<?php endif; ?>
					<span class="tile__label mono"><?php the_title(); ?></span>
				<?php if ( $url ) : ?></a><?php else : ?></div><?php endif; ?>
				<?php
				++$i;
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	<?php else : ?>
		<a class="tile tile--accent tile--wide" href="<?php echo esc_url( HG_REFERENCES_URL ); ?>" rel="noopener">
			<span class="tile__label tile__label--big"><?php hg_e( 'work_empty' ); ?></span>
		</a>
	<?php endif; ?>

	<p class="more"><a href="<?php echo esc_url( HG_REFERENCES_URL ); ?>" rel="noopener"><?php hg_e( 'work_more' ); ?> &rarr;</a></p>
</section>
