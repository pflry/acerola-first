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

?><section class="entry-meta">
    Publié par <span class="author vcard"><?php the_author_meta('first_name'); ?>&nbsp;<?php the_author_meta('last_name'); ?>, <?php the_author_meta('description'); ?></span>, le <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
</section>