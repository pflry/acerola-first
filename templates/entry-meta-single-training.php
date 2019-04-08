<?php
/**
 * The template meta part of single training post
 *
 * Displays the metas part of a single training post.
 * This template is include in entry single training template.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v19
 */

?>
<?php 
    $meta_ref = get_post_meta( get_the_ID(), 'reference', true );
    $meta_duration = get_post_meta( get_the_ID(), 'duree', true );
    $meta_period = get_post_meta( get_the_ID(), 'dates', true );
    $meta_price = get_post_meta( get_the_ID(), 'prix', true );
    $meta_place = get_post_meta( get_the_ID(), 'lieu', true );
    $meta_instructor = get_post_meta( get_the_ID(), 'instructor', true );
    $meta_opca = get_post_meta( get_the_ID(), 'subvention', true );
    $meta_cpf = get_post_meta( get_the_ID(), 'congesformation', true );
    $meta_type = get_post_meta( get_the_ID(), 'type', true );
    $meta_options = get_post_meta( get_the_ID(), 'option', true );
?>
<h2 class="h2 criterias-title">Modalités de la formation</h2>
<section>
    <?php if ($meta_ref !='') : ?>
    <div class="entry-meta entry-meta__ref">
        <div class="meta-picto">
            <?php echo get_build_icon_path('tag-line.svg') ?>
        </div>
        <div class="meta-content">
            <div class="text-muted">Référence</div>
            <span><?php echo $meta_ref ?></span>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($meta_duration !='') : ?>
        <div class="entry-meta entry-meta__duree">
            <div class="meta-picto">
                <?php echo get_build_icon_path('clock.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Durée</div>
                <span class="entry-duree"><?php echo $meta_duration ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_period !='') : ?>
        <div class="entry-meta entry-meta__period">
            <div class="meta-picto">
                <?php echo get_build_icon_path('calendar.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Dates</div>
                <span><?php echo nl2br($meta_period) ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_price !='') : ?>
        <div class="entry-meta entry-meta__price">
            <div class="meta-picto">
                <?php echo get_build_icon_path('euro.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Prix</div>
                <span><?php echo $meta_price ?></span>
                <?php if (isset($meta_opca) && $meta_opca == 'on') : ?>
                    <br><span>Prise en charge OPCA possible</span>
                <?php endif; ?>
                <?php if (isset($meta_cpf) && $meta_cpf == 'on') : ?>
                    <br><span>&Eacute;ligible CPF</span>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_place !='') : ?>
        <div class="entry-meta entry-meta__place">
            <div class="meta-picto">
                <?php echo get_build_icon_path('business.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Lieu(x)</div>
                <?php if (isset($meta_type) && $meta_type != 'choisir') : ?>
                    <span><?php echo $meta_type ?></span><br>
                <?php endif; ?>
                <span><?php echo nl2br($meta_place) ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_instructor !='') : ?>
        <div class="entry-meta entry-meta__instructor">
            <div class="meta-picto">
                <?php echo get_build_icon_path('user-line.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Formateur(rice)</div>
                <span><?php echo nl2br($meta_instructor) ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_options !='') : ?>
        <div class="entry-meta entry-meta__options">
            <div class="meta-picto">
                <?php echo get_build_icon_path('plus-circle.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">En option</div>
                <span><?php echo nl2br($meta_options) ?></span>
            </div>
        </div>
        <?php endif; ?>
</section>