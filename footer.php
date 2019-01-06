        </div> <!-- fin container -->

        <footer id="footer" role="contentinfo" class="footer">
            <div class="container">
                <div id="copyright" class="footer-copyright">
                    <?php echo sprintf( __( '%1$s%2$s', 'pflry' ), '&copy;', date( 'Y' ) );  ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="blog-name">acérola carrière</a>
                </div>
                <nav id="footerMenu" class="footer-menu">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'secondary',
                        'menu'           => 'Secondary Menu') ); ?>
                </nav>
            </div>
        </footer>
    </div> <!-- fin wrapper -->
     <button id="scrollTop" class="btn btn-scrolltop">
        <?php echo get_build_icon_path('arrow-up.svg'); ?>
    </button>
    <?php wp_footer(); ?>
</body>

</html>