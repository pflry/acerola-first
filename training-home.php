<?php
/**
 * Template Name: traininghome
 *
 * The template for displaying the trainings page. 
 * 
 * Display specific template to display list of trainings
 * 
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v19
 */

?><?php get_header(); ?>
<section id="content" role="main" class="main training-list page-full">
    <div class="jscroll">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'templates/pagination' ); ?>
    </div>
</section>
<?php get_footer(); ?>