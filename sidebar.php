<?php
/**
 * The template for displaying the common sidebar
 *
 * Displays the common sidebar with widgets.
 *
 * @package WordPress
 * @subpackage PFLRYGULP
 */

?><aside id="sidebar" role="complementary" class="sidebar side-standard">
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
        <div id="primary" class="widget-area">
        <ul class="ul-wrapper">
            <?php dynamic_sidebar( 'primary-widget-area' ); ?>
        </ul>
        </div>
    <?php endif; ?>
</aside>