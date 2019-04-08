<?php
/**
 * The template for displaying the common sidebar
 *
 * Displays the common sidebar with widgets.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?>

<aside id="sidebar" role="complementary" class="sidebar side-standard">
    <div id="primary" class="widget-area">
        <ul class="ul-wrapper">

            <?php get_template_part( 'templates/widget-contact' ); ?>

            <li class="widget widget__search">
                <div class="site-search">
                    <?php get_search_form(); ?>
                </div>
            </li>

            <li class="widget widget__approval">
                <h3 class="widget-title">Nos agréments</h3>
                <div class="approval-body">
                        <div class="carousel">
                        <a href="https://www.fongecif-idf.fr/" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_build_img_path('logo-fongecif.png') ?>" alt="Fongecif">
                        </a>
                        <a href="https://www.afdas.com/" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_build_img_path('logo-afdas.png') ?>" alt="Afdas">
                        </a>
                        <a href="https://www.data-dock.fr/" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_build_img_path('logo-datadock.png') ?>" alt="Datadock">
                        </a>
                        <a href="http://www.agefos-pme.com/" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_build_img_path('logo-agefos.jpg') ?>" alt="Agefos PME">
                        </a>
                        <a href="http://www.opcalia.com/" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_build_img_path('logo-opcalia.png') ?>" alt="Opcalia">
                        </a>
                    </div>
                </div>
            </li>

            <li class="widget widget__follow">
                <h3 class="widget-title">Suivez nous</h3>
                <div class="socials">
                    <a href="https://www.facebook.com/acerolacarriere" target="_blank" class="facebook">
                        <?php echo get_build_icon_path('facebook.svg') ?>
                    </a>
                    <a href="https://twitter.com/AcerolaCarriere" target="_blank" class="twitter">
                        <?php echo get_build_icon_path('twitter.svg') ?>
                    </a>
                    <a href="https://www.linkedin.com/profile/view?id=222313042" target="_blank" class="linkedin">
                        <?php echo get_build_icon_path('linkedin.svg') ?>
                    </a>
                    <a href="http://www.viadeo.com/profile/002l8hk33l3bnvr" target="_blank" class="viadeo">
                        <?php echo get_build_icon_path('viadeo.svg') ?>
                    </a>
                </div>
            </li>

            <?php get_template_part( 'templates/widget-newsletter' ); ?>

            <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            <?php endif; ?>
        </ul>
    </div>
</aside>