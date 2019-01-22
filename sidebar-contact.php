<?php
/**
 * The template for displaying the contact widgets
 *
 * Displays the contacts static widget in sidebar.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?>

<li class="widget widget__contact">
    <h3 class="widget-title">Contactez nous</h3>
    <div class="textwidget custom-html-widget">
        <div class="contact">
            <div>
                <?php echo get_build_icon_path('phone.svg') ?> 01 41 79 17 93
            </div>
            <div>
                <?php echo get_build_icon_path('mail.svg') ?> <a href="https://www.acerolacarriere.fr/contact/">Par E-mail</a>
            </div>
        </div>
    </div>
</li>

<li class="widget widget__office">
    <h3 class="widget-title">Nos bureaux</h3>
    <div class="textwidget custom-html-widget">
        <div class="office">
            <div class="office--name">Acérola Carrière Paris</div>
            <?php echo get_build_icon_path('map-pin.svg') ?>24 Rue Mogador<br>75009 Paris
        </div>
        <div class="office">
            <div class="office--name">Acérola Carrière Neuilly Plaisance</div>
            <?php echo get_build_icon_path('map-pin.svg') ?>3 quater avenue Victor Hugo<br>93360 Neuilly-Plaisance
        </div>
        <div class="office">
            <div class="office--name">Acérola Carrière Montévrain</div>
            <?php echo get_build_icon_path('map-pin.svg') ?>14 avenue de l'Europe<br>77144 Montévrain
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

<li class="widget widget__newsletter">
    <h3 class="widget-title">Restez informé</h3>
    <div class="register">
        <a href="http://eepurl.com/dnrOCP" class="btn btn-success" target="_blank">Abonnez-vous à notre newsletter</a>
    </div>
</li>