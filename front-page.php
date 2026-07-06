<?php
/**
 * Template for the TOP (front) page.
 * Used automatically when a static front page is set in
 * Settings > Reading. See index.php for the fallback used
 * when no static front page has been configured yet.
 */

get_header();
get_template_part( 'template-parts/content', 'top' );
get_footer();
