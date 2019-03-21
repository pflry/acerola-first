<?php get_header(); ?>

<?php if ($blog_id == 1) { ?>
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

<?php } elseif ($blog_id == 2) { ?>
    <section id="content" role="main" class="main single-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry-jobs' ); ?>
        <?php endwhile; endif; ?>
        <footer class="post-footer">
            <?php /* get_template_part( 'nav', 'below-single' ); */ ?>
        </footer>
    </section>
    <?php get_sidebar('jobs'); ?>

<?php } else { ?>
    <section id="content" role="main" class="main single-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <footer class="post-footer">
            <?php /* get_template_part( 'nav', 'below-single' ); */ ?>
        </footer>
    </section>
    <?php get_sidebar(); ?>

<?php } ?>

<?php get_footer(); ?>