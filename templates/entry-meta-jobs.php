<?php
/**
 * The template meta part of job post
 *
 * Displays the metas part of a job post.
 * This template is include in entry job template.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v19
 */

?><section class="entry-meta-jobs">
    <?php 
    $meta_cp = get_post_meta( get_the_ID(), 'codePostal', true );
    $meta_ville = get_post_meta( get_the_ID(), 'ville', true );

    $category = get_the_category($post->ID);
    $meta_cat = $category[0]->cat_name;
    ?>

    <div class="entry-meta__date">
        <?php 
        $dateShort = get_the_date( 'j M. Y' );
        $dateLong = get_the_date( 'j F Y' );
        echo get_build_icon_path('clock.svg'); ?>
        <span class="entry-date entry-date--long"><?php echo $dateLong ?></span>
        <span class="entry-date entry-date--short"><?php echo $dateShort ?></span>
    </div>

    <div class="entry-meta__place">
        <?php echo get_build_icon_path('map-pin2.svg') ?>
        <span><?php echo $meta_cp ?>&nbsp<?php echo $meta_ville ?></span>
    </div>

    <div class="entry-meta__cat">
        <?php echo get_build_icon_path('pie-chart.svg') ?>
        <span><?php echo $meta_cat ?></span>
    </div>

</section>