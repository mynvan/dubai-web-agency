<?php
/**
 * Template Name: Contact
 */
get_header();
hg_set_page_meta( 'cp_meta' );

hg_page_hero( [
	'image'      => 'hero-contact.jpg',
	'alt'        => 'cp_hero_alt',
	'credit'     => 'cp_hero_credit',
	'eyebrow'    => 'cp_eyebrow',
	'title_html' => esc_html( hg( 'contact_title' ) ),
	'lead'       => 'cp_lead',
] );

$sent = isset( $_GET['hg_sent'] ) ? sanitize_key( wp_unslash( $_GET['hg_sent'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification
?>
<section id="form" class="contact-page">
	<?php if ( HG_EMAIL ) : ?>
	<form class="contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
		<p class="mono contact-form__eyebrow"><?php hg_e( 'cp_form_eyebrow' ); ?></p>
		<?php if ( '1' === $sent ) : ?>
			<p class="notice" role="status"><?php hg_e( 'cp_sent' ); ?></p>
		<?php elseif ( '0' === $sent ) : ?>
			<p class="notice notice--error" role="alert"><?php hg_e( 'cp_error' ); ?></p>
		<?php endif; ?>
		<input type="hidden" name="action" value="hg_contact">
		<input type="hidden" name="hg_back" value="<?php echo esc_url( get_permalink() ); ?>">
		<input type="hidden" name="hg_t" value="<?php echo (int) time(); ?>">
		<?php wp_nonce_field( 'hg_contact', 'hg_nonce' ); ?>
		<div class="contact-form__hp" aria-hidden="true"><label>Website<input type="text" name="hg_website" tabindex="-1" autocomplete="off"></label></div>
		<div class="field-row">
			<label class="field mono"><?php hg_e( 'cp_name' ); ?><input type="text" name="hg_name" required autocomplete="name"></label>
			<label class="field mono"><?php hg_e( 'cp_company' ); ?><input type="text" name="hg_company" autocomplete="organization"></label>
		</div>
		<label class="field mono"><?php hg_e( 'cp_email' ); ?><input type="email" name="hg_email" required autocomplete="email"></label>
		<label class="field mono"><?php hg_e( 'cp_language' ); ?>
			<select name="hg_lang"><option>English</option><option<?php echo 'de' === hg_lang() ? ' selected' : ''; ?>>Deutsch</option></select>
		</label>
		<label class="field mono"><?php hg_e( 'cp_message' ); ?><textarea name="hg_message" rows="5" required></textarea></label>
		<label class="consent"><input type="checkbox" name="hg_consent" value="1" required> <span><?php hg_e( 'cp_consent' ); ?><?php
			$privacy = get_privacy_policy_url();
			if ( $privacy ) :
				?> <a href="<?php echo esc_url( $privacy ); ?>"><?php hg_e( 'cp_privacy' ); ?></a><?php
			endif; ?></span></label>
		<button class="btn btn--dark mono" type="submit"><?php hg_e( 'cp_send' ); ?> &rarr;</button>
	</form>
	<?php endif; ?>

	<aside class="pass-stub<?php echo HG_EMAIL ? '' : ' pass-stub--solo'; ?>">
		<p class="pass__route" aria-hidden="true">MUC <span>&rarr;</span> DXB</p>
		<dl class="pass__facts mono">
			<div><dt><?php hg_e( 'pass_passenger' ); ?></dt><dd><?php hg_e( 'pass_you' ); ?></dd></div>
			<div><dt><?php hg_e( 'pass_languages' ); ?></dt><dd>EN / DE</dd></div>
			<div><dt><?php hg_e( 'pass_gate' ); ?></dt><dd><?php hg_e( 'pass_gate_value' ); ?></dd></div>
			<div><dt><?php hg_e( 'pass_seat' ); ?></dt><dd><?php hg_e( 'pass_seat_value' ); ?></dd></div>
		</dl>
		<div class="pass-stub__talk">
			<p class="pass-stub__q"><?php hg_e( 'cp_talk' ); ?></p>
			<a class="btn btn--dark" href="<?php echo esc_url( hg_cta_url() ); ?>"><?php hg_e( 'hero_cta' ); ?> &rarr;</a>
			<?php if ( HG_EMAIL ) : ?>
				<p class="mono"><a href="mailto:<?php echo esc_attr( antispambot( HG_EMAIL ) ); ?>"><?php echo esc_html( antispambot( HG_EMAIL ) ); ?></a></p>
			<?php endif; ?>
		</div>
	</aside>
</section>
<?php
get_footer();
