<?php
/**
 * The template for displaying the contact widgets
 *
 * Displays the contacts static widget in sidebar.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE EMPLOI v19
 */

?>

<li class="widget widget__category">
    <h3 class="widget-title">Domaine d'activité</h3>
    <div class="textwidget custom-html-widget">
        <div class="category">
            <?php
            
            $categories = get_categories( array(
                'orderby' => 'name',
                'parent'  => 0
            ) );
            
            foreach ( $categories as $category ) {
                printf( '<a href="%1$s">%2$s</a><br />',
                    esc_url( get_category_link( $category->term_id ) ),
                    esc_html( $category->name )
                );
            }

            ?>
        </div>
    </div>
</li>

<li class="widget widget__contact">
    <h3 class="widget-title">Contactez nous</h3>
    <div class="textwidget custom-html-widget">
        <div class="contact">
            <div>
                <?php echo get_build_icon_path('phone.svg') ?> 01 41 79 17 93
            </div>
            <span>&bullet;</span>
            <div>
                <?php echo get_build_icon_path('email.svg') ?> <a href="https://www.acerolacarriere.fr/contact/">Email</a>
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

<li class="widget widget__newsletter">
    <h3 class="widget-title">Restez informé</h3>
    <div class="register">
        <a href="http://eepurl.com/dnrOCP" class="btn btn-success" target="_blank">Abonnez-vous à notre newsletter</a>
    </div>
</li>