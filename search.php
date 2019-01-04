<?php
/**
 * The template for displaying search results
 *
 * Displays the search results.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php get_header(); ?>
    <section id="content" role="main" class="search-results arcade">
        <?php if ( have_posts() ) : ?>
            <header class="entry-header">
                <h1 class="h1 entry-title"><?php printf('Résultats de recherche pour : %s', get_search_query() ); ?></h1>
            </header>
            <div class="arcade-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="frame">
                        <?php get_template_part( 'entry' ); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php get_template_part( 'pagination' ); ?>
        <?php else : ?>
            <article id="post-0" class="post no-results not-found">
                <header class="header">
                    <h2 class="entry-title"><?php _e( 'Pas de résultats', 'pflry' ); ?></h2>
                </header>
                <section class="entry-content">
                    <p><?php _e( 'Désolé, votre recherche n\'a donné aucun résultat.', 'pflry' ); ?></p>
                </section>
            </article>
        <?php endif; ?>
    </section>
<?php get_footer(); ?>