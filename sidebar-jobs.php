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

            <li class="widget widget__contact">
                <h3 class="widget-title">Contactez nous</h3>
                <div class="textwidget custom-html-widget">
                    <div class="contact">
                        <div>
                            <?php echo get_build_icon_path('phone.svg') ?> 01 41 79 17 93
                        </div>
                        <span>&bullet;</span>
                        <div>
                            <?php echo get_build_icon_path('email.svg') ?> <a href="/contact/">Email</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="widget widget__office">
                <h3 class="widget-title">Nos bureaux</h3>
                <div class="textwidget custom-html-widget">
                    <div class="office">
                        <div class="office--name">Acérola Carrière Paris</div>
                        <div class="office--picto"><?php echo get_build_icon_path('business.svg') ?></div>
                        <div class="office--address">
                            24 Rue Mogador<br>75009 Paris
                        </div>
                    </div>
                    <div class="office">
                        <div class="office--name">Acérola Carrière Neuilly Plaisance</div>
                        <div class="office--picto"><?php echo get_build_icon_path('business.svg') ?></div>
                        <div class="office--address">
                            3 quater avenue Victor Hugo<br>93360 Neuilly-Plaisance
                        </div>
                    </div>
                    <div class="office">
                        <div class="office--name">Acérola Carrière Montévrain</div>
                        <div class="office--picto"><?php echo get_build_icon_path('business.svg') ?></div>
                        <div class="office--address">
                            14 avenue de l'Europe<br>77144 Montévrain
                        </div>
                    </div>
                </div>
            </li>

            <li class="widget widget__newsletter">
                <h3 class="widget-title">Restez informé</h3>
                <div class="register">
                    <a href="http://eepurl.com/dnrOCP" class="btn btn-success" target="_blank">Abonnez-vous à notre newsletter</a>
                </div>
            </li>

            <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
                <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            <?php endif; ?>
        </ul>
    </div>
</aside>