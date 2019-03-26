<?php $meta_ref = get_post_meta( get_the_ID(), 'reference', true ); ?>

<section id="jobForm" class="form-job">
    <h2 class="h2 form-job__title">
        Postuler à l'offre
        <span class="job-title"><?php the_title(); ?></span>
        <span class="job-ref"><span>référence&nbsp;<?php echo $meta_ref ?></span>
    </h2>
    <p class="text-info">Pour postuler, veuillez compléter le formulaire ci-dessous et joindre votre lettre de motivation et votre curriculum-vitae. Tous les champs sont obligatoires.</p>
    <?php echo do_shortcode( '[contact-form-7 id="82" title="Formulaire de candidature"]' ); ?>
</section>