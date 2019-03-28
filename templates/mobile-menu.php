<section id="mobalMenu" class="mobile-menu">
    <button class="menu-toggle active">
        <?php echo get_build_icon_path('close.svg') ?>
    </button>
    <div class="container">
        <div id="search" class="mobile-menu__search">
            <?php global $child;
            if ($child == 'emploi') :
                get_template_part( 'templates/searchform-menu-jobs' );
            elseif ($child == 'formation') : 
                get_template_part( 'templates/searchform-menu-jobs' );
            else :
                get_template_part( 'templates/searchform-menu' );
            endif; ?>
        </div>
        <nav id="menu" class="smart-menu">
            <?php wp_nav_menu( array(
                'walker' => new CSS_Menu_Maker_Walker(),
                'theme_location' => 'quaternary',
                'menu'           => 'Mobile Menu') ); ?>
        </nav>
        <div class="mobile-menu__newsletter">
            <?php global $newsletter_url; ?>
            <a href="<?php echo $newsletter_url ?>" class="btn btn-success" target="_blank">Abonnez-vous à notre newsletter</a>
        </div>
        <nav id="menu" class="smart-menu smart-menu--legal">
            <?php wp_nav_menu( array(
                'walker' => new CSS_Menu_Maker_Walker(),
                'theme_location' => 'quinary',
                'menu'           => 'Mobile Legal') ); ?>
        </nav>
    </div>
</section>