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
    <div class="content">
        <div class="entry-meta__date">
            <?php echo get_build_icon_path('calendar.svg') ?> Publié le <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
        </div>
        <div class="entry-meta__tag">
            <?php $etiquette = get_build_icon_path('tag.svg'); ?>
            <?php the_tags( $etiquette, $etiquette ); ?>
        </div>
    </div>
    <div class="entry-meta__author">
        <?php echo get_build_icon_path('user.svg') ?>Par&nbsp;<span class="author vcard"><?php the_author_meta('first_name'); ?>&nbsp;<?php the_author_meta('last_name'); ?></span><span class="bullet">&bullet;</span><?php the_author_meta('description'); ?>
    </div>
</section>