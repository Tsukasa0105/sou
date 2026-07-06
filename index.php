<?php
/**
 * Fallback template (required by WordPress).
 * This site has no blog; on a fresh install (before a static front
 * page has been chosen in Settings > Reading) this shows the TOP page
 * so the site is never blank.
 */

get_header();
get_template_part( 'template-parts/content', 'top' );
get_footer();
