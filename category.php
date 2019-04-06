<?php
/**
 * The template for displaying category posts
 *
 * Displays all of the posts from the category.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php get_header(); ?>

<?php 
global $child;

if ($child == 'emploi') : ?>
     <section id="content" role="main" class="main job-list categorie">
        <h1 class="h1">Offres d'emploi <span>Secteur d'activité : <?php single_cat_title(); ?></span></h1>
        <?php get_template_part( 'templates/job-filter' ); ?>
        <div class="jscroll">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'entry-jobs' ); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'templates/pagination' ); ?>
        </div>
    </section>

<?php elseif ($child == 'formation') : ?>
    <section id="content" role="main" class="main training-list categorie">
        <h1 class="h1">Formations <span><?php single_cat_title(); ?></span></h1>
        <div class="jscroll">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'entry-trainings' ); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'templates/pagination' ); ?>
        </div>
    </section>

<?php else : ?>
    <section id="content" role="main" class="main categorie">
    <h1 class="entry-title">Catégorie <?php single_cat_title(); ?></h1>
    <div class="jscroll">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'templates/pagination' ); ?>
    </div>
</section>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>