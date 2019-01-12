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
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
        <div id="primary" class="widget-area">
            <ul class="ul-wrapper">

                <li class="widget widget__contact">
                    <h3 class="widget-title">Nos coordonnées</h3>
                    <div class="textwidget custom-html-widget">
                        <div class="office">
                           <div class="office--name">Acérola Carrière Paris</div>
                           <?php echo get_build_icon_path('map-pin.svg') ?>24 Rue Mogador<br>75009 Paris
                        </div>
                        <div class="office">
                            <div class="office--name">Acérola Carrière Neuilly-Plaisance</div>
                            <?php echo get_build_icon_path('map-pin.svg') ?>3 quater avenue Victor Hugo<br>93360 Neuilly-Plaisance
                        </div>
                        <div class="office">
                            <div class="office--name">Acérola Carrière Montévrain</div>
                            <?php echo get_build_icon_path('map-pin.svg') ?>14 avenue de l'Europe<br>77144 Montévrain
                        </div>
                        <div class="office office--contact">
                            <?php echo get_build_icon_path('phone.svg') ?> 01 41 79 17 93
                        </div>
                        <div class="office office--contact">
                            <?php echo get_build_icon_path('mail.svg') ?> <a href="https://www.acerolacarriere.fr/contact/">Contactez nous par e-mail</a>
                        </div>
                    </div>
                </li>

                <li class="widget widget__follow">
                    <h3 class="widget-title">Suivez nous</h3>
                    <div class="footer__connect-socials">
                        <a href="https://www.facebook.com/acerolacarriere" target="_blank">
                            <?php echo get_build_icon_path('facebook.svg') ?>
                        </a>
                        <a href="https://twitter.com/AcerolaCarriere" target="_blank">
                            <?php echo get_build_icon_path('twitter.svg') ?>
                        </a>
                        <a href="https://www.linkedin.com/profile/view?id=222313042" target="_blank">
                            <?php echo get_build_icon_path('linkedin.svg') ?>
                        </a>
                        <a href="http://www.viadeo.com/profile/002l8hk33l3bnvr" target="_blank">
                            <?php echo get_build_icon_path('viadeo.svg') ?>
                        </a>
                    </div>
                </li>

                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>