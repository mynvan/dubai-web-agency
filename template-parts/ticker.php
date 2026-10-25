<?php
$text = hg( 'ticker' );
?>
<section class="ticker mono" aria-hidden="true">
	<div class="ticker__track">
		<span><?php echo esc_html( str_repeat( $text . ' ', 6 ) ); ?></span>
		<span><?php echo esc_html( str_repeat( $text . ' ', 6 ) ); ?></span>
	</div>
</section>
