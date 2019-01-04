<?php
/**
 * The template meta part of post
 *
 * Displays the metas part of a post.
 * This template is include in entry template.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><section class="entry-meta d-none">
    <span class="author vcard"><?php the_author_posts_link(); ?></span>
    <span class="meta-sep"> | </span>
    <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
</section>