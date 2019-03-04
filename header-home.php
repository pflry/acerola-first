<?php
/**
 * The template for displaying the header in the homepage
 *
 * Displays all of the head element and everything
 * up until the #containerMain div.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part( 'header-head' ); ?>

<body <?php body_class(); ?>>
    <?php get_template_part( 'mobile-menu' ); ?>

    <div id="containerWrapper" class="wrapper">

        <?php get_template_part( 'blog-header-top' ); ?>

        <header id="header" class="blog-header">
            <section id="blogBanner" class="blog-header__banner">
                <div class="container">
                    <div id="siteTitle" class="site-title">
                        <span class="site-title--invisible">
                            <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1 class="h1">'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">Acérola Carrière</a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
                        </span>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo get_build_icon_path('logo-acerola.svg') ?></a>
                    </div>

                    <nav id="menu" class="site-menu">
                        <?php wp_nav_menu( array(
                            'walker' => new CSS_Menu_Maker_Walker(),
                            'theme_location' => 'primary',
                            'menu'           => 'Header Menu') ); ?>
                    </nav>
                    
                    <button id="openSlideMenu" class="menu-toggle">
                        <?php echo get_build_icon_path('menu.svg') ?>
                    </button>
                </div>
            </section>

            <section class="home-headline">
                <div class="container">
                    <div class="headline"><span>vitaminer </span>les carrières</div>
                </div>
            </section>
        
        </header>

        <section class="home-counters">
            <div class="container">
                <div class="counter">
                    <div class="counter-head">
                        <div id="counterCareer" class="counter--digit" data-number="291"></div>
                        <div class="counter--title">carrières&nbsp;boostées</div>
                    </div>
                    <div class="counter-content">
                        <p>Un nouveau projet professionnel, la confiance retrouvée &hellip;</p>
                    </div>
                </div>
                <div class="counter">
                    <div class="counter-head">
                        <div id="counterCustomer" class="counter--digit" data-number="89"></div>
                        <div class="counter--title">clients&nbsp;entreprise</div>
                    </div>
                    <div class="counter-content">
                        <p>Notre cocktail vitaminé : proximité, efficacité, optimisation du budget.</p>
                    </div>
                </div>
                <div class="counter">
                    <div class="counter-head">
                        <div id="counterContact" class="counter--digit" data-number="2388"></div>
                        <div class="counter--title">contacts&nbsp;réseaux</div>
                    </div>
                    <div class="counter-content">
                        <p>&hellip; à partager avec vous !</p>
                    </div>
                </div>
            </div>
        </section>

        <div id="containerMain">