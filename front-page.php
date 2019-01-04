<?php
/**
 * The template for displaying the homepage
 *
 * Displays the front page of the blog.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php get_header(); ?>
<section id="content" role="main" class="homepage arcade">
    <div class="arcade-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="frame">
            <?php get_template_part( 'entry' ); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
    <?php get_template_part( 'pagination' ); ?>
</section>
<?php get_footer(); ?>