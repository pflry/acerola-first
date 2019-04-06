<?php
/**
 * The template meta part of training post
 *
 * Displays the metas part of a training post.
 * This template is include in entry training template.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v19
 */

?><section class="entry-meta-jobs">
    <?php 
    $meta_duration = get_post_meta( get_the_ID(), 'duree', true );
    $meta_price = get_post_meta( get_the_ID(), 'prix', true );
    ?>

    <div class="entry-meta__duree">
        <?php echo get_build_icon_path('calendar.svg'); ?>
        <span><?php echo $meta_duration ?></span>
    </div>

    <div class="entry-meta__price">
        <?php echo get_build_icon_path('euro.svg') ?>
        <span><?php echo $meta_price ?></span>
    </div>

</section>