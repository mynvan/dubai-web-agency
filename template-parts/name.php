<?php
/**
 * Where the name comes from: the Isar (Munich) and Dubai Creek.
 */
$photo = get_template_directory_uri() . '/assets/img/creek-dubai.jpg';
?>
<section id="name" class="section name">
	<p class="eyebrow mono"><?php hg_e( 'name_eyebrow' ); ?></p>
	<h2 class="section__title name__title"><?php hg_e( 'name_title' ); ?></h2>
	<div class="name__grid">
		<p class="name__text"><?php hg_e( 'name_text' ); ?></p>
		<figure class="name__fig">
			<img class="name__img" src="<?php echo esc_url( $photo ); ?>" width="1800" height="1350" alt="<?php echo esc_attr( hg( 'name_alt' ) ); ?>" loading="lazy" decoding="async">
			<figcaption class="name__credit mono"><?php hg_e( 'name_credit' ); ?></figcaption>
		</figure>
	</div>
</section>
