<?php get_header(); ?>

<?php 
global $child;

if ($child == 'emploi') : ?>
    <section id="content" role="main" class="main single-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry-jobs' ); ?>
        <?php endwhile; endif; ?>
    </section>
    <?php get_sidebar('jobs'); ?>

<?php elseif ($child == 'formation') : ?>
    <section id="content" role="main" class="main single-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry-trainings' ); ?>
        <?php endwhile; endif; ?>
    </section>
    <?php get_sidebar('trainings'); ?>

<?php else : ?>
    <section id="content" role="main" class="main single-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        <?php endwhile; endif; ?>
        <footer class="post-footer">
            <?php get_template_part( 'nav', 'below-single' ); ?>
        </footer>
    </section>
    <?php get_sidebar(); ?>

<?php endif; ?>

<?php get_footer(); ?>