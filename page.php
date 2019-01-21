<?php
/**
 * The template for displaying single page
 *
 * Displays standard single page.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php get_header(); ?>
<section id="content" role="main" class="main page-main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="header">
            <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
        </header>
        <section class="entry-content">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
            <div class="entry-links"><?php wp_link_pages(); ?></div>
        </section>
        <section class="entry-contact">
            <div class="entry-contact__header">
                <div class="logo">
                    <?php echo get_build_icon_path('logo-acerola-filet.svg') ?>
                </div>
                <div class="title">
                    <h5 class="h5">Prenez contact</h5>
                </div>
            </div>
            <div class="entry-contact__body">
                Utilisez notre <a href="http://www.acerolacarriere.fr/contact/">formulaire de contact</a><br>
                Appelez nous au 01 41 79 17 93
                <span class="horaires">du lundi au vendredi de 8h à 20h et le samedi de 8h à 13h</span>
            </div>
        </section>
    </article>
    <?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>