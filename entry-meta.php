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

    <div class="entry-meta__author">
        Par<?php echo get_build_icon_path('user.svg') ?>
         <span class="author vcard">
           <?php the_author_meta('first_name'); ?>&nbsp;<?php the_author_meta('last_name'); ?>
        </span>
        <span class="bullet">&bullet;</span>
    </div>
    
    <div class="entry-meta__date">
        <span class="last-update">Mis à jour le <?php the_modified_date(); ?></span>
        <span class="bullet">&bullet;</span>
        <span class="entry-date">Publié le <?php the_time( get_option( 'date_format' ) ); ?></span>
    </div>

</section>

<!--<div class="entry-meta__tag">
            <?php $etiquette = get_build_icon_path('tag.svg'); ?>
            <?php the_tags( $etiquette, $etiquette ); ?>
        </div>-->

        <!--<br><?php the_author_meta('description'); ?>-->
