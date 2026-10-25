<?php
/**
 * Fallback template (no blog on this site yet).
 */
get_header();
?>
<section class="page-content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="prose"><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
<?php
get_footer();
