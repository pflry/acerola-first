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

    <section id="homeCountersBody" class="home-counters-body">
        <div class="container">
            <div class="counter">
                <div class="counter-head">
                    <div id="counterCareerBody" class="counter--digit" data-number="291">0</div>
                    <div class="counter--title">carrières&nbsp;boostées</div>
                </div>
                <div class="counter-content">
                    <p>Un nouveau projet professionnel, la confiance retrouvée &hellip;</p>
                </div>
            </div>
            <div class="counter">
                <div class="counter-head">
                    <div id="counterCustomerBody" class="counter--digit" data-number="89">0</div>
                    <div class="counter--title">clients&nbsp;entreprise</div>
                </div>
                <div class="counter-content">
                    <p>Notre cocktail vitaminé : proximité, efficacité, optimisation du budget.</p>
                </div>
            </div>
            <div class="counter">
                <div class="counter-head">
                    <div id="counterContactBody" class="counter--digit" data-number="2388">0</div>
                    <div class="counter--title">contacts&nbsp;réseaux</div>
                </div>
                <div class="counter-content">
                    <p>&hellip; à partager avec vous !</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="homeCompany" class="home-company">
        <div class="container">
            <div class="home-bloc--content">
                <h2 class="h2">
                    Le cabinet Acérola&nbsp;Carrière
                </h2>
                <p>Acérola Carrière c'est un cabinet de conseil&nbsp;RH&nbsp;:</p>
                <ul class="checklist-home">
                    <li>dirigé par une psychologue du travail</li>
                    <li>spécialiste du développement RH des TPE-PME</li>
                    <li>expert en accompagnement individuel de salariés et demandeurs d'emploi</li>
                </ul>
                <p>Avec 100 bilans de compétences et 40 recrutements réalisés par an, le cabinet est un acteur majeur de la gestion des carrières  à Paris et dans l'Est parisien.</p>
                <a href="le-cabinet/" class="btn btn-primary">Découvrir Acérola Carrière</a>
            </div>
            <div class="home-bloc--picture">
                <picture>
                    <source media="(max-width: 510px)" srcset="<?php echo get_build_img_path('company-510w.jpg') ?>">
                    <source media="(max-width: 767px)" srcset="<?php echo get_build_img_path('company-708w.jpg') ?>">
                    <source media="(max-width: 991px)" srcset="<?php echo get_build_img_path('company-708w.jpg') ?>">
                    <source media="(max-width: 1199px)" srcset="<?php echo get_build_img_path('company-434w.jpg') ?>">
                    <img src="<?php echo get_build_img_path('company-555w.jpg') ?>" alt="Acérola Carrière" class="img-fluid">
                </picture>
            </div>
        </div>
    </section>

    <section id="homeExpertise" class="home-expertise">
        <div class="container container-intro">
            <h2 class="h2 center">Notre expertise</h2>
            <p>L'évaluation des compétences, l'ingénierie pédagogique, l'accompagnement des projets professionnels, c'est l'expertise que nous mettons à votre disposition, particuliers ou entreprises.</p>
        </div>
        <div class="container container-visuals">
            <figure class="expertise expertise-skills">
                <img src="<?php echo get_build_img_path('outplacement.jpg') ?>" alt="Formation" class="img-fluid">
                <figcaption><a href="bilan-de-competences/" class="btn btn-success">Bilan de compétences</a></figcaption>
            </figure>
            <figure class="expertise expertise-recruitment">
                <img src="<?php echo get_build_img_path('recrutement.jpg') ?>" alt="Formation" class="img-fluid">
                <figcaption><a href="conseil-en-recrutement/" class="btn btn-success">Recrutement</a></figcaption>
            </figure>
            <figure class="expertise expertise-outplacement">
                <img src="<?php echo get_build_img_path('competences.jpg') ?>" alt="Formation" class="img-fluid">
                <figcaption><a href="outplacement/" class="btn btn-success">Outplacement</a></figcaption>
            </figure>
            <figure class="expertise expertise-training">
                <img src="<?php echo get_build_img_path('formation3.jpg') ?>" alt="Formation" class="img-fluid">
                <figcaption><a href="#" class="btn btn-success">Formations</a></figcaption>
            </figure>
        </div>
        <div class="container container-outro">
            <p>Nous avons également à c&oelig;ur de vous faire profiter de notre connaissance d'un grand nombre de métiers et du marché de l'emploi pour accompagner votre évolution ou votre reconversion professionnelle ou vous permettre de recruter les profils adaptés aux enjeux de votre entreprise.<br>Nos clients apprécient particulièrement notre écoute de leurs besoins et les solutions que nous leur apportons.</p> 
        </div>
    </section>

    <section id="homeNews" class="home-news">
        <div class="container">
            
            <div class="home-news__body news-training">
                <div class="home-news__content">
                    <span class="rub">Formation</span>
                    <h3 class="h3">Vitaminez vos compétences !</h3>
                    <p><strong>Acérola Carrière</strong> propose des formations opérationnelles animées par des professionnels avec des contenus pragmatiques et actuels.</p>
                    <a href="https://www.acerolacarriere.fr/vitaminez-vos-competences/" target="_blank" class="btn btn-primary">Nos formations</a>
                </div>
            </div>

            <div class="home-news__body news-job">
                <div class="home-news__content">
                    <span class="rub">Emploi</span>
                    <h3 class="h3">La vitamine C de l'emploi</h3>
                    <p>Boostez votre recherche d'emploi avec <strong>Acérola Carrière</strong>. Découvrez nos offres d'emploi et postulez en ligne.</p>
                    <a href="https://www.acerolacarriere.fr/vitaminez-vos-competences/" target="_blank" class="btn btn-primary">Offres d'emploi</a>
                </div>
            </div>

        </div>
    </section>

    <section style="display: none">
        <?php
                $args = array( 'numberposts' => '1', 'tax_query' => array(
                        array(
                            'taxonomy' => 'post_format',
                            'field' => 'slug',
                            'terms' => 'post-format-aside',
                            'operator' => 'NOT IN'
                        ), 
                        array(
                            'taxonomy' => 'post_format',
                            'field' => 'slug',
                            'terms' => 'post-format-link',
                            'operator' => 'NOT IN'
                        )
                    ) );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ) {
                    $postTitle = $recent["post_title"];
                    $postPermalink = get_permalink($recent["ID"]);
                    $postThumbnail = get_the_post_thumbnail_url($recent["ID"]);
                    $postExcerpt = wp_trim_excerpt( $recent['post_content']);
                }
                wp_reset_query();
            ?>

            <div class="home-news__body news-blog" style="background-image: url(<?php echo $postThumbnail ?>);">
                <div class="home-news__content">
                    <?php
                        echo '<span class="rub">Blog</span>';
                        echo '<h3 class="h3">'.$postTitle.'</h3>';
                        echo '<p>'.wp_trim_words($postExcerpt, 24, '&nbsp;&hellip;').'</p>';
                        echo '<a href="'. $postPermalink.'" class="btn btn-primary">Lire l\'article</a>';
                    ?>
                </div>
            </div>
    </section>

</section>
<?php get_footer(); ?>