<?php
$steps = [ 1, 2, 3 ];
?>
<section id="process" class="band">
	<div class="section">
		<p class="eyebrow mono"><?php hg_e( 'process_eyebrow' ); ?></p>
		<h2 class="section__title"><?php hg_e( 'process_title' ); ?></h2>
		<div class="board mono" role="table">
			<div class="board__head" role="row">
				<span role="columnheader" class="c-step"><?php hg_e( 'col_step' ); ?></span>
				<span role="columnheader" class="c-stage"><?php hg_e( 'col_stage' ); ?></span>
				<span role="columnheader" class="c-what"><?php hg_e( 'col_what' ); ?></span>
				<span role="columnheader" class="c-status"><?php hg_e( 'col_status' ); ?></span>
			</div>
			<?php foreach ( $steps as $n ) : ?>
				<div class="board__row" role="row">
					<span role="cell" class="c-step board__num">0<?php echo (int) $n; ?></span>
					<span role="cell" class="c-stage board__stage"><?php hg_e( "step_{$n}_title" ); ?></span>
					<span role="cell" class="c-what board__what"><?php hg_e( "step_{$n}_text" ); ?></span>
					<span role="cell" class="c-status board__status board__status--<?php echo (int) $n; ?>">
						<?php if ( 1 === $n ) : ?><span class="dot dot--blink" aria-hidden="true"></span><?php elseif ( 2 === $n ) : ?>&#9679;&nbsp;<?php else : ?>&#9675;&nbsp;<?php endif; ?><?php hg_e( "step_{$n}_status" ); ?>
					</span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
