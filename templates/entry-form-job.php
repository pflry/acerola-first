<?php $meta_ref = get_post_meta( get_the_ID(), 'reference', true ); ?>

<section id="jobForm" class="form-job">
    <h2 class="h2">Postuler à cette offre</h2>
    <p>Pour postuler à l'offre d'emploi référence <strong><?php echo $meta_ref ?> - <?php the_title(); ?></strong>, veuillez compléter le formulaire ci-dessous et joindre votre lettre de motivation et votre curriculum-vitae.</p>
    <?php echo do_shortcode( '[contact-form-7 id="82" title="Formulaire de candidature"]' ); ?>
</section>