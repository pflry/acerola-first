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
<section id="content" role="main" class="main blog-home">
    <h1 class="entry-title"><?php single_post_title(); ?></h1>
    <div class="jscroll">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php comments_template(); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'pagination' ); ?>
    </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>