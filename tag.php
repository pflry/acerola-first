<?php
/**
 * The template for displaying tag posts
 *
 * Displays all of the posts from the tag.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php get_header(); ?>
<section id="content" role="main" class="arcade">
    <header class="header">
        <h1 class="entry-title"><?php _e( 'Archives tag : ', 'pflry' ); ?><?php single_tag_title(); ?></h1>
    </header>
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