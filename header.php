<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything
 * up until the #containerMain div.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="theme-color" content="#f1c40f">
    <meta name="msapplication-square310x310logo" content="<?php echo get_build_img_path('icon_largetile.png') ?>">
    <meta name="google-site-verification" content="">

    <title>
        <?php bloginfo('name'); ?> // <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>

    <link rel="icon" sizes="192x192" href="<?php echo get_build_img_path('icon.png') ?>">
    <link rel="apple-touch-icon" href="<?php echo get_build_img_path('ios-icon.png') ?>">
    
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i|Montserrat:600|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <?php get_template_part( 'header-styles' ); ?>

    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    <section id="mobalMenu" class="mobile-menu">
        <button class="menu-toggle active">
            <?php echo get_build_icon_path('x.svg') ?>
        </button>
        <div class="container">
            <div id="search" class="mobile-menu__search">
                <?php get_template_part( 'searchform-menu' ); ?>
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

    <div id="containerWrapper" class="wrapper">

        <section id="blogHeaderTop" class="blog-header__top">
            <div class="container">
                
                <div class="top-contact">
                    <span class="signature">acérola <span>carrière</span></span>
                    <span class="agence">
                        Paris
                        <span class="bullet">•</span>
                        Neuilly-Plaisance
                        <span class="bullet">•</span>
                        Montévrain
                    </span>
                    <span class="contact-telephone">
                        <?php echo get_build_icon_path('phone.svg') ?> 01 41 79 17 93
                    </span>
                    <span class="contact-email">
                        <?php echo get_build_icon_path('mail.svg') ?> <a href="https://www.acerolacarriere.fr/contact/">contact</a>
                    </span>
                </div>

                <div class="top-social">
                    <a href="https://www.facebook.com/acerolacarriere" class="" target="_blank">
                        <?php echo get_build_icon_path('facebook.svg') ?>
                    </a>
                    <a href="https://twitter.com/AcerolaCarriere" class="" target="_blank">
                        <?php echo get_build_icon_path('twitter.svg') ?>
                    </a>
                    <a href="https://www.linkedin.com/profile/view?id=222313042" class="picto-social picto-social--sm" target="_blank">
                        <?php echo get_build_icon_path('linkedin.svg') ?>
                    </a>
                    <a href="http://www.viadeo.com/profile/002l8hk33l3bnvr" class="" target="_blank">
                        <?php echo get_build_icon_path('viadeo.svg') ?>
                    </a>
                </div>
            </div>
        </section>
        
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
            <section id="filAriane" class="blog-header__breadcrumb">
                <div class="container">
                    <?php echo get_the_breadcrumb() ?>
                </div>
            </section>
        </header>

        <div id="containerMain" class="container container-main">