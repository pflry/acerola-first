<?php
/**
 * The template for displaying the common sidebar
 *
 * Displays the common sidebar with widgets.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><aside id="sidebar" role="complementary" class="sidebar side-standard">
    <div id="primary" class="widget-area">
        <ul class="ul-wrapper">
            <?php $blog_id = get_current_blog_id(); ?>
            
            <?php if ($blog_id == 1) : ?>
            <?php get_template_part( 'templates/sidebar-static' ); ?>

            <?php elseif ($blog_id == 2) : ?>
            <?php get_template_part( 'templates/sidebar-static-jobs' ); ?>

            <?php else : ?>
            <?php get_template_part( 'templates/sidebar-static-jobs' ); ?>

            <?php endif; ?>

            <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            <?php endif; ?>
        </ul>
    </div>
</aside>