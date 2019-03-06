<?php
/**
 * Template Name: page home
 *
 * The template for displaying the home page. 
 * 
 * Display specific template to display home page
 * 
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

get_header('home'); ?>
<section id="content" role="main" class="main page-home page-full">

    <?php get_template_part( 'templates/home-counters-body' ); ?>

    <?php get_template_part( 'templates/home-company' ); ?>

    <?php get_template_part( 'templates/home-expertise' ); ?>

    <section id="homeHighlight" class="home-highlight">
        <div class="container">
            
            <div class="home-highlight__body highlight-training">
                <div class="home-highlight__content">
                    <span class="rub">Formation</span>
                    <h3 class="h3">Vitaminez vos compétences !</h3>
                    <p><strong>Acérola Carrière</strong> propose des formations opérationnelles animées par des professionnels avec des contenus pragmatiques et actuels.</p>
                    <a href="https://www.acerolacarriere.fr/vitaminez-vos-competences/" target="_blank" class="btn btn-black">Nos formations</a>
                </div>
            </div>

            <div class="home-highlight__body highlight-job">
                <div class="home-highlight__content">
                    <span class="rub">Emploi</span>
                    <h3 class="h3">La vitamine C de l'emploi</h3>
                    <p>Boostez votre recherche d'emploi avec <strong>Acérola Carrière</strong>. Découvrez nos offres d'emploi et postulez en ligne.</p>
                    <a href="https://www.acerolacarriere.fr/vitaminez-vos-competences/" target="_blank" class="btn btn-black">Offres d'emploi</a>
                </div>
            </div>

        </div>
    </section>

    <?php get_template_part( 'templates/home-news' ); ?>

</section>
<?php get_footer(); ?>