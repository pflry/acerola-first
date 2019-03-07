<?php
/**
 * The template for displaying page error 404
 *
 * Displays page error 404.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php get_header(); ?>
<section id="content" role="main" class="main page-error">
    <article id="post-0" class="post not-found">
        <header class="header">
         <h1 class="entry-title">Désolé, la page que vous demandez est introuvable.</h1>
        </header>
        <section class="entry-content">
            <p class="align-center"><img src="<?php echo get_build_img_path('404.jpg') ?>" alt="404" class="img-fluid"></p>
            <p>La page que vous avez demandée n'a pas été trouvée. Il se peut que le lien que vous avez utilisé soit rompu ou que l'adresse de la page soit incorrecte.</p>
            <p>Vous avez maintenant la possibilité de consulter le <a href="<?php echo esc_url( home_url('/sitemap/') ); ?>"><strong>plan du site</strong></a>,  de revenir à la <a href="<?php echo esc_url( home_url() ); ?>"><strong>page d'accueil</strong></a> ou <strong>d'effectuer une recherche</strong> à partir d'ici.</p> 
            <?php get_search_form(); ?>
            <div class="alert alert-info"><span class="alert-icon"><?php echo get_build_icon_path('info.svg') ?></span>Si vous souhaitez nous informer du problème que vous rencontrez, utilisez le <a href="<?php echo esc_url( home_url('/contact/') ); ?>"><strong>formulaire de contact</strong></a>.</div>
        </section>
    </article>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>