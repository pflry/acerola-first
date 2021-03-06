<?php
/**
 * The template for displaying a list of posts.
 *
 * Displays a list of post.
 * Main template file.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php get_header(); ?>

<?php 
global $child;

if ($child == 'emploi') : ?>
    <section id="content" role="main" class="main job-list">
        <h1 class="h1">Offres d'emploi</h1>
        <?php get_template_part( 'templates/job-filter' ); ?>
        <div class="jscroll">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'entry-jobs' ); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'templates/pagination' ); ?>
        </div>
    </section>
    <?php get_sidebar(); ?>

<?php elseif ($child == 'formation') : ?>
    <section id="content" role="main" class="main training-list">
        <h1 class="h1">Formations</h1>
        <div class="jscroll">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'entry' ); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'templates/pagination' ); ?>
        </div>
    </section>
    <?php get_sidebar(); ?>

<?php else : ?>
    <section id="content" role="main" class="main blog-home">
        <h1 class="h1"><?php single_post_title(); ?></h1>
        <div class="jscroll">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
            <?php comments_template(); ?>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'templates/pagination' ); ?>
        </div>
    </section>
    <?php get_sidebar(); ?>
    
<?php endif; ?>

<?php get_footer(); ?>