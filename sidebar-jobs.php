<?php
/**
 * The template for displaying the job widgets in sidebar
 *
 * Displays the job widgets in sidebar.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE EMPLOI v19
 */

?>
<aside id="sidebar" role="complementary" class="sidebar side-standard side-jobs">
    <div id="primary" class="widget-area">
        <ul class="ul-wrapper">
            
            <?php if (is_singular()) : ?>
                <?php get_template_part( 'templates/widget-job-criterias' ); ?>
            <?php endif; ?>

            <?php get_template_part( 'templates/widget-contact' ); ?>

            <?php get_template_part( 'templates/widget-newsletter' ); ?>

            <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            <?php endif; ?>
        </ul>
    </div>
</aside>