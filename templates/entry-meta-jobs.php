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

?><section class="entry-meta">
    <?php 
    $meta_ref = get_post_meta( get_the_ID(), 'reference', true );
    $meta_cp = get_post_meta( get_the_ID(), 'codePostal', true );
    $meta_ville = get_post_meta( get_the_ID(), 'ville', true );
    $meta_contrat = get_post_meta( get_the_ID(), 'contrat', true );
    $meta_exp = get_post_meta( get_the_ID(), 'practice', true );
    $meta_mode = get_post_meta( get_the_ID(), 'mode', true );
    ?>

    <div class="entry-meta__date">
        <?php 
        $dateShort = get_the_date( 'j M. Y' );
        $dateLong = get_the_date( 'j F Y' );

        echo get_build_icon_path('clock.svg');
        echo '&nbsp;<span class="entry-date entry-date--long">'.$dateLong.'</span>';
        echo '<span class="entry-date entry-date--short">'.$dateShort.'</span>';
        ?>
    </div>

    <div class="entry-meta__place">
        <?php 
        echo get_build_icon_path('map-pin2.svg');
        echo '&nbsp;<span>'.$meta_cp.'&nbsp;'.$meta_ville.'</span>';
        ?>
    </div>

    <div class="entry-meta__contract">
        <?php 
        echo get_build_icon_path('file-text.svg');
        echo '&nbsp;<span>'.$meta_contrat.'</span>';
        ?>
    </div>

</section>