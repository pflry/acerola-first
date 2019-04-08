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

            <?php 
                global $TEL;
                global $OFFICE_PARIS;
                global $OFFICE_NEUILLY;
                global $OFFICE_MONTEVRAIN;
            ?>
            <div class="footer__infos">
                <div class="container">

                    <div class="footer__connect">
                        <div class="footer__connect-contact">
                            <div class="blog-name"><?php echo get_build_icon_path('logo-acerola-filet.svg') ?></div>
                            <div class="welcome">Prenez contact dès maintenant, nous vous réservons le meilleur accueil.</div>

                            <div class="contact">
                                <?php echo get_build_icon_path('phone.svg') ?> <?php echo $TEL ?><span class="bullet">•</span><?php echo get_build_icon_path('email.svg') ?> <a href="/contact/">Email</a>
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
                            <div class="office--name"><?php echo $OFFICE_PARIS['nom'] ?></div>
                            <div class="office--picto"><?php echo get_build_icon_path('business.svg') ?></div>
                            <div class="office--address">
                                <?php echo $OFFICE_PARIS['adresse'] ?><br><?php echo $OFFICE_PARIS['ville'] ?>
                            </div>
                        </div>
                        <div class="office">
                            <div class="office--name"><?php echo $OFFICE_NEUILLY['nom'] ?></div>
                            <div class="office--picto"><?php echo get_build_icon_path('business.svg') ?></div>
                            <div class="office--address">
                                <?php echo $OFFICE_NEUILLY['adresse'] ?><br><?php echo $OFFICE_NEUILLY['ville'] ?>
                            </div>
                        </div>
                        <div class="office">
                            <div class="office--name"><?php echo $OFFICE_MONTEVRAIN['nom'] ?></div>
                                <div class="office--picto"><?php echo get_build_icon_path('business.svg') ?></div>
                                <div class="office--address">
                                    <?php echo $OFFICE_MONTEVRAIN['adresse'] ?><br><?php echo $OFFICE_MONTEVRAIN['ville'] ?>
                            </div>
                        </div>
                    </div>
                    <?php $idMainSite = get_network()->site_id; ?>
                    <?php switch_to_blog( $idMainSite ); ?>
                    <nav id="footerMenu" class="footer-menu">
                        <h5 class="h5">Navigation</h5>
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'secondary',
                            'menu'           => 'Footer Menu') ); ?>
                    </nav>
                    <?php restore_current_blog(); ?>
                </div>
            </div>

            <div class="footer__legal">
                <div class="container">
                    <?php switch_to_blog( $idMainSite ); ?>
                    <nav id="legalMenu" class="legal-menu">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'tertiary',
                            'menu'           => 'Legal Menu') ); ?>
                    </nav>
                    <?php restore_current_blog(); ?>

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