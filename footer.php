        </div> <!-- fin container -->

        <footer id="footer" role="contentinfo" class="footer">

            <div class="footer__approval">
                <div class="container">                    
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
            
            <div class="footer__infos">
                <div class="container">

                    <div class="footer__connect">
                        <div class="footer__connect-contact">
                            <div class="blog-name">acérola <span>carrière</span></div>
                            <div class="welcome">Prenez contact dès maintenant, nous vous réservons le meilleur accueil.</div>

                            <div class="contact">
                                <?php echo get_build_icon_path('phone.svg') ?> 01 41 79 17 93<span class="bullet">•</span><?php echo get_build_icon_path('mail.svg') ?> <a href="https://www.acerolacarriere.fr/contact/">contact</a>
                            </div>
                        </div>

                        <div class="footer__connect-socials">
                            <h5 class="h5">Suivez nous</h5>
                            <div>
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
                        </div>
                    </div>
 
                    <div class="footer-office">
                        <h5 class="h5">Nos bureaux</h5>
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
                    </div> 
                    
                    <nav id="footerMenu" class="footer-menu">
                        <h5 class="h5">Navigation</h5>
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'secondary',
                            'menu'           => 'Footer Menu') ); ?>
                    </nav>
                </div>
            </div>

            <div class="footer__legal">
                <div class="container">
                    <nav id="legalMenu" class="legal-menu">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'tertiary',
                            'menu'           => 'Legal Menu') ); ?>
                    </nav>

                    <div id="copyRight" class="copyright">
                        <?php echo sprintf( __( '%1$s%2$s', 'pflry' ), '&copy;', date( 'Y' ) );  ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="blog-name">acérola <span>carrière</span></a>
                    </div>
                </div>
            </div>
            
        </footer>
    </div> <!-- fin wrapper -->
     <button id="scrollTop" class="btn btn-scrolltop">
        <?php echo get_build_icon_path('arrow-up.svg'); ?>
    </button>
    <?php wp_footer(); ?>
</body>

</html>