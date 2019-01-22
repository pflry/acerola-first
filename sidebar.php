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
                <?php get_template_part( 'sidebar-contact' ); ?>

                <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'primary-widget-area' ); ?>
                <?php endif; ?>
            </ul>
        </div>
</aside>