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
    <?php 
        $authorID = get_the_author_meta( 'ID' );
        $authorAvatar = get_avatar( $authorID, '35' );
    ?>
    <div class="entry-meta__author">
        <?php echo $authorAvatar; ?><span class="author vcard"><?php the_author_meta('first_name'); ?>&nbsp;<?php the_author_meta('last_name'); ?>, <?php the_author_meta('description'); ?></span>
    </div>
    <div class="content">
        <div class="entry-meta__date">
            <?php echo get_build_icon_path('calendar.svg') ?> Publié le <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
        </div>
        <div class="entry-meta__tag">
            <?php $etiquette = get_build_icon_path('tag.svg'); ?>
            <?php the_tags( $etiquette, $etiquette ); ?>
        </div>
    </div>
    
</section>