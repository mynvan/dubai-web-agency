<?php
$services = [
	'a' => [ 'svc_a_title', 'svc_a_text', 'websites' ],
	'b' => [ 'svc_b_title', 'svc_b_text', 'hosting' ],
	'c' => [ 'svc_c_title', 'svc_c_text', 'gdpr' ],
];
?>
<section id="services" class="section">
	<p class="eyebrow mono"><?php hg_e( 'services_eyebrow' ); ?></p>
	<h2 class="section__title"><?php hg_e( 'services_title' ); ?></h2>
	<div class="rows">
		<?php foreach ( $services as $letter => [ $title, $text, $slug ] ) : ?>
			<div class="row">
				<div class="row__inner">
					<span class="row__letter mono"><?php echo esc_html( strtoupper( $letter ) ); ?></span>
					<h3 class="row__title"><a class="row__link" href="<?php echo esc_url( hg_template_url( $slug ) ); ?>"><?php hg_e( $title ); ?></a></h3>
					<p class="row__text"><?php hg_e( $text ); ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
