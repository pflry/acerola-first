<?php
/**
 * Template Name: emploihome
 *
 * The template for displaying the jobs page. 
 * 
 * Display specific template to display list of jobs
 * 
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v19
 */

?><?php get_header(); ?>
<section id="content" role="main" class="main job-list">
    <h1 class="h1">Offres d'emploi</h1>
    <?php get_template_part( 'templates/job-filter' ); ?>
    <div class="jscroll">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'templates/pagination' ); ?>
    </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>