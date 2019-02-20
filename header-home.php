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
            <section id="headerHiglight" class="blog-header__highlight">
                <picture>
                    <source media="(max-width: 500px)" srcset="<?php echo get_build_img_path('poster-500w.jpg') ?>">
                    <source media="(max-width: 768px)" srcset="<?php echo get_build_img_path('poster-768w.jpg') ?>">
                    <source media="(max-width: 992px)" srcset="<?php echo get_build_img_path('poster-992w.jpg') ?>">
                    <source media="(max-width: 1280px)" srcset="<?php echo get_build_img_path('poster-1280w.jpg') ?>">
                    <img src="<?php echo get_build_img_path('poster-1280w.jpg') ?>" alt="Acérola Carrière" class="img-fluid">
                </picture>

                <div class="container">
                    <div class="headline">vitaminer les carrières</div>
                </div>
            </section>
        </header>

        <div id="containerMain">