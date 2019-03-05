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
        <?php 
            $dateShort = get_the_date( 'j M. Y' );
            $dateLong = get_the_date( 'j F Y' );
        ?>
        <span class="entry-date entry-date--long">Publié le <?php echo $dateLong ?></span>
        <span class="entry-date entry-date--short">Publié le <?php echo $dateShort ?></span>
    </div>

</section>