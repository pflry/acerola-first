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

    <?php get_template_part( 'templates/home-counters-body' ); ?>

    <?php get_template_part( 'templates/home-company' ); ?>

    <?php get_template_part( 'templates/home-expertise' ); ?>

    <?php get_template_part( 'templates/home-highlight' ); ?>

    <?php get_template_part( 'templates/home-news' ); ?>

</section>
<?php get_footer(); ?>