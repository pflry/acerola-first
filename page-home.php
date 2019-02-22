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
    
    <section id="homeCounters" class="home-counters">
        <div class="container">
            <div class="counter">
                <div class="counter-head">
                    <div id="counterCareer" class="counter--digit" data-number="291"></div>
                    <div class="counter--title">carrières<br>boostées</div>
                </div>
                <div class="counter-content">
                    <p>Un nouveau projet professionnel, la confiance retrouvée &hellip;</p>
                </div>
            </div>
            <div class="counter">
                <div class="counter-head">
                    <div id="counterCustomer" class="counter--digit" data-number="89"></div>
                    <div class="counter--title">clients<br>entreprise</div>
                </div>
                <div class="counter-content">
                    <p>Notre cocktail vitaminé : proximité, efficacité, optimisation du budget.</p>
                </div>
            </div>
            <div class="counter">
                <div class="counter-head">
                    <div id="counterContact" class="counter--digit" data-number="2388"></div>
                    <div class="counter--title">contacts<br>réseaux</div>
                </div>
                <div class="counter-content">
                    <p>&hellip; à partager avec vous !</p>
                </div>
            </div>
        </div>
    </section>

    <section id="homeCompany" class="home-company">
        <div class="container">
            <div class="home-bloc--picture">
                <picture>
                    <source media="(max-width: 510px)" srcset="<?php echo get_build_img_path('company-575w.jpg') ?>">
                    <source media="(max-width: 767px)" srcset="<?php echo get_build_img_path('company-768w.jpg') ?>">
                    <source media="(max-width: 991px)" srcset="<?php echo get_build_img_path('company-992w.jpg') ?>">
                    <source media="(max-width: 1280px)" srcset="<?php echo get_build_img_path('company-1280w.jpg') ?>">
                    <img src="<?php echo get_build_img_path('company-1280w.jpg') ?>" alt="Acérola Carrière" class="img-fluid">
                </picture>
            </div>
            <div class="home-bloc--content">
                <h2 class="h2">
                    Le cabinet Acérola&nbsp;Carrière
                </h2>
                <div class="company--complement">
                    Acérola Carrière c’est un cabinet de conseil&nbsp;RH&nbsp;:
                    <ul>
                        <li>dirigé par une psychologue du travail</li>
                        <li>spécialiste du développement RH des TPE-PME</li>
                        <li>expert en accompagnement individuel de salariés et demandeurs d’emploi</li>
                    </ul>
                </div>
                <p>Avec 100 bilans de compétences et 40 recrutements réalisés par an, le cabinet est un acteur majeur de la gestion des carrières  à Paris et dans l’Est parisien.</p>
                <a href="le-cabinet/" class="btn btn-primary">Découvrir Acérola Carrière</a>
            </div>
        </div>
    </section>



</section>
<?php get_footer(); ?>