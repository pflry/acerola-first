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
<?php if ($blog_id == 1) { ?>
    <section id="content" role="main" class="main categorie">
    <h1 class="entry-title">Catégorie <?php single_cat_title(); ?></h1>
    <div class="jscroll">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'templates/pagination' ); ?>
    </div>
</section>

<?php } elseif  ($blog_id == 2) { ?>
     <section id="content" role="main" class="main job-list categorie">
        <h1 class="h1">Offres d'emploi <span><?php single_cat_title(); ?></span></h1>
        <?php get_template_part( 'templates/job-filter' ); ?>
        <div class="jscroll">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'entry-jobs' ); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'templates/pagination' ); ?>
        </div>
    </section>

<?php } else { ?>
    <section id="content" role="main" class="main training-list categorie">
        <h1 class="h1">Formation <span><?php single_cat_title(); ?></span></h1>
        <?php get_template_part( 'templates/job-filter' ); ?>
        <div class="jscroll">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'entry' ); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'templates/pagination' ); ?>
        </div>
    </section>

<?php } ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>