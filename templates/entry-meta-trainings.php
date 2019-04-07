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
    
    $opcaval = get_post_meta( get_the_ID(), 'subvention', true );
    $meta_opca = isset($opcaval) && $opcaval == 'on' ? 'Prise en charge OPCA possible' : '';

    $cpfval = get_post_meta( get_the_ID(), 'congesformation', true );
    $meta_cpf = isset($cpfval) && $cpfval == 'on' ? '&Eacute;ligible CPF' : '';
    ?>

    <div class="entry-meta__duree">
        <?php echo get_build_icon_path('clock.svg'); ?>
        <span><?php echo $meta_duration ?></span>
    </div>
    
    <?php if ($opcaval == 'on') : ?>
    <div class="entry-meta__opca">
        <?php echo get_build_icon_path('euro.svg'); ?>
        <span><?php echo $meta_opca ?></span>
    </div>
    <?php endif; ?>

    <?php if ($cpfval == 'on') : ?>
    <div class="entry-meta__cpf">
        <?php echo get_build_icon_path('euro.svg'); ?>
        <span><?php echo $meta_cpf ?></span>
    </div>
    <?php endif; ?>
</section>