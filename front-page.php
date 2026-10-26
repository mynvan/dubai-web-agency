<?php
/**
 * Front page: hero, ticker, services, process, work, contact.
 */
get_header();

get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/ticker' );
get_template_part( 'template-parts/name' );
get_template_part( 'template-parts/services' );
get_template_part( 'template-parts/process' );
get_template_part( 'template-parts/work' );
get_template_part( 'template-parts/contact' );

get_footer();
