<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything
 * up until the #containerMain div.
 *
 * @package WordPress
 * @subpackage PFLRYGULP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="theme-color" content="#2980b9">
    <meta name="msapplication-square310x310logo" content="<?php echo get_build_img_path('icon_largetile.png') ?>">
    <meta name="google-site-verification" content="7S5lhodilTkoatr4lOKtbrI4quU9EbuLCgATqPkK9JA">

    <title>
        <?php bloginfo('name'); ?> // <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>

    <link rel="icon" sizes="192x192" href="<?php echo get_build_img_path('icon.png') ?>">
    <link rel="apple-touch-icon" href="<?php echo get_build_img_path('ios-icon.png') ?>">

    <?php get_template_part( 'header-styles' ); ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="containerWrapper" class="wrapper">
        
        <header id="header" class="blog-header">
            <section id="blogBanner" class="blog-header__banner">
                <div class="container">
                    <div id="siteTitle" class="site-title">
                        <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1 class="h1">'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
                    </div>
                    <nav id="menu" class="site-menu">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'primary',
						    'menu'           => 'Primary Menu') ); ?>
                    </nav>
                    <button id="openSlideMenu" class="menu-toggle"><span>Menu</span></button>
                </div>
            </section>
            <section class="page-header">
                <div class="container">
                    <div id="filAriane" class="page-header__breadcrumb">
                        <?php echo get_the_breadcrumb() ?>
                    </div>
                    <div id="search" class="page-header__search">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </section>
            <section class="mobile-menu">
                <div class="container">
                    <div id="search" class="mobile-menu__search">
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Recherche', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                            <button type="submit" class="search-submit btn"><?php echo get_build_icon_path('search-mm.svg') ?></button>
                        </form>
                    </div>
                    
                    <?php 
                    $mobilMenu = array(
                        'theme_location'  => 'tertiary',
                        'container'       => false, 
                        'echo'            => false,
                        'fallback_cb'     => false,
                        'items_wrap'      => '%3$s',
                        'depth'           => 0,
                        'link_before'     => '<span>',
                        'link_after'      => '</span>'
                    );
                    echo strip_tags(wp_nav_menu( $mobilMenu ), '<a><span>');
                    ?>
                </div>
            </section>
        </header>

        <div id="containerMain" class="container container-main">