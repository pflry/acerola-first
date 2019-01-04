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
<section id="content" role="main" class="categorie arcade">
    <header class="entry-header">
        <h1 class="entry-title"><?php _e( 'Catégorie ', 'pflry' ); ?><?php single_cat_title(); ?></h1>
        <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
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