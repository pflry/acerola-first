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
         <h1 class="entry-title"><?php _e( 'On est perdu bonhomme ?', 'pflry' ); ?></h1>
        </header>
        <section class="entry-content">
            <p class="align-center"><img src="<?php echo get_build_img_path('pflry_no_posts.jpg') ?>" alt="404" class="img-fluid"></p>
            <strong>Erreur 404</strong> : La page demandée est introuvable. Il n'y a rien ici.
        </section>
    </article>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>