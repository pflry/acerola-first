        </div> <!-- fin container -->

        <footer id="footer" role="contentinfo" class="footer">
            
            <div class="footer__infos">
                <div class="container">
                    <div class="footer-contact">
                        <p>Prenez contact dès maintenant,<br>nous vous réservons le meilleur accueil.</p>
                        <div>
                        <span class="contact-telephone">
                            <?php echo get_build_icon_path('phone.svg') ?> 01 41 79 17 93
                        </span>
                        <span class="contact-email">
                            <?php echo get_build_icon_path('mail.svg') ?> <a href="https://www.acerolacarriere.fr/contact/">contact</a>
                        </span>
                    </div>  
                    </div>
                </div>

                <div class="container">
                    <div class="footer-adresse">
                        <div class="paris">
                           <h6 class="h6">Acérola Carrière Paris</h6>
                           <?php echo get_build_icon_path('map-pin.svg') ?>24 Rue Mogador<br>75009 Paris
                        </div>
                        <div class="neuilly">
                            <h6 class="h6">Acérola Carrière Neuilly-Plaisance</h6>
                            <?php echo get_build_icon_path('map-pin.svg') ?>3 quater avenue Victor Hugo<br>93360 Neuilly-Plaisance
                        </div>
                        <div class="montevrain">
                            <h6 class="h6">Acérola Carrière Montévrain</h6>
                            <?php echo get_build_icon_path('map-pin.svg') ?>14 avenue de l'Europe<br>77144 Montévrain
                        </div>
                    </div>   
                </div>
            </div>

            <div class="footer__menu">
                <div class="container">
                    <nav id="footerMenu" class="footer-menu">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'secondary',
                            'menu'           => 'Secondary Menu') ); ?>
                    </nav>
                </div>
            </div>
                    
            <div class="footer__copyright">
                <div class="container">
                    <div id="copyright" class="copy">
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