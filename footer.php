        </div> <!-- fin container -->

        <?php get_template_part( 'templates/page-block-approval' ); ?>

        <footer id="footer" role="contentinfo" class="footer">

            <div class="footer-extra">
                <div class="container">
                    <div class="footer-extra__search site-search">
                        <?php global $child;
                        if ($child == 'emploi') :
                            get_template_part( 'searchform-jobs' );
                        elseif ($child == 'formation') : 
                            get_search_form();
                        else :
                           get_search_form();
                        endif; ?>
                    </div>
                    <div class="sep"></div>
                    <div class="footer-extra__newsletter">
                        <?php global $newsletter_url; ?>
                        <span class="d-none">Restez informé&nbsp;</span>
                        <a href="<?php echo $newsletter_url ?>" class="btn btn-success" target="_blank">Newsletter Acérola carrière</a>
                    </div>
                    
                </div>
            </div>

            <div class="footer__infos">
                <div class="container">

                    <div class="footer__connect">
                        <div class="footer__connect-contact">
                            <div class="blog-name"><?php echo get_build_icon_path('logo-acerola-filet.svg') ?></div>
                            <div class="welcome">Prenez contact dès maintenant, nous vous réservons le meilleur accueil.</div>

                            <div class="contact">
                                <?php echo get_build_icon_path('phone.svg') ?> 01 41 79 17 93<span class="bullet">•</span><?php echo get_build_icon_path('email.svg') ?> <a href="https://www.acerolacarriere.fr/contact/">Email</a>
                            </div>
                        </div>

                        <div class="footer__connect-socials">
                            <h5 class="h5">Suivez nous</h5>
                            <div>
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
                        </div>
                    </div>
 
                    <div class="footer-office">
                        <h5 class="h5">Nos bureaux</h5>
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
                        <?php echo sprintf( __( '%1$s%2$s', 'pflry' ), '&copy;', date( 'Y' ) );  ?><span class="blog-name">acérola carrière</span>
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