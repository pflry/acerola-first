<?php 
    $meta_ref = get_post_meta( get_the_ID(), 'reference', true );
    $meta_title = get_post_meta( get_the_title(), 'title', true );
?>

<section id="trainingForm" class="form-child">
    <h2 class="h2 form-child__title">Formation
        <span class="job-title"><?php the_title(); ?></span>
        <?php if($meta_ref != '') : ?>
            <span class="job-ref"><span>référence&nbsp;<?php echo $meta_ref ?></span>
        <?php endif; ?>
    </h2>
    <p class="text-info">Pour obtenir des renseignements concernant cette formation, vous pouvez utiiliser ce formulaire.</p>
    <?php echo do_shortcode( '[contact-form-7 id="100" title="Formulaire formation"]' ); ?>
</section>