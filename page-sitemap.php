<?php
/**
 * Template Name: page sitemap
 *
 * The template for displaying the sitemap. 
 * 
 * Display specific template to display sitemap
 * 
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

get_header(); ?>
<section id="content" role="main" class="main page-sitemap">
    <h1 class="title"><?php the_title(); ?> <span class="brand"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span></h1>
        <div class="the-content">
            <?php the_content(); ?>
            
            <?php wp_link_pages(); ?>
        </div><!-- the-content -->

        <h2 class="h2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Accueil</a></h2>
    
        <?php $args = array(
            'hide_empty'=> 1,
            'orderby' => 'name',
            'order' => 'ASC'
        );

        $categories = get_categories( $args );
        
        foreach($categories as $category) {  

            $catnom = $category->name;
            $category_id = get_cat_ID( $catnom );
            $category_link = get_category_link( $category_id ); ?>
            
            <h2 class="h2"><a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $catnom; ?>">Catégorie <?php echo $catnom; ?></a></h2>
            
            <?php query_posts( array ( 'category_name' => $catnom, 'posts_per_page' => -1 ) ); ?>
            
            <ul class="sitemap-display">
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    <div class="post-meta">Publié le <?php the_time('j F Y'); ?></div>
                </li>
            <?php endwhile; ?>
            </ul>
        
            <?php // Reset Query
            wp_reset_query();
        };

        $page = get_page_by_title( 'Contact' ); ?>
        <h2 class="h2"><a href="<?php echo get_page_link($page->ID); ?>">Contact</a></h2>

        <?php wp_reset_postdata(); ?>
</section>
<aside id="sidebar" role="complementary" class="sidebar">
    <div class="side-summary" id="sideSummary" data-spy="affix">
        <div class="h3 widget-title">Sommaire</div>
        <?php 
            $sidecontent = get_post_meta($post->ID,'scrollspy-sidebar',true);
            echo $sidecontent;
        ?>    
    </div>    
</aside>
<?php get_footer(); ?>