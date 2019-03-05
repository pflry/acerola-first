<section id="mobalMenu" class="mobile-menu">
    <button class="menu-toggle active">
        <?php echo get_build_icon_path('close.svg') ?>
    </button>
    <div class="container">
        <div id="search" class="mobile-menu__search">
            <?php get_template_part( 'templates/searchform-menu' ); ?>
        </div>
        <nav id="menu" class="smart-menu">
            <?php wp_nav_menu( array(
                'walker' => new CSS_Menu_Maker_Walker(),
                'theme_location' => 'quaternary',
                'menu'           => 'Mobile Menu') ); ?>
        </nav>
        <nav id="menu" class="smart-menu smart-menu--legal">
            <?php wp_nav_menu( array(
                'walker' => new CSS_Menu_Maker_Walker(),
                'theme_location' => 'quinary',
                'menu'           => 'Mobile Legal') ); ?>
        </nav>
    </div>
</section>