<?php
/**
 * Template Name: traininghome
 *
 * The template for displaying the trainings page. 
 * 
 * Display specific template to display list of trainings
 * 
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v19
 */

?><?php get_header(); ?>
<section id="content" role="main" class="main training-list page-main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="header">
            <h1 class="entry-title"><?php the_title(); ?></h1> <?php/* edit_post_link(); */?>
        </header>
        <section class="entry-content">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
            <h2 class="h2">Les domaines de formation</h2>
            <div class="all-categories">
                <?php
                    $nonClasseId = get_cat_ID('Non classé');
                    $categories = get_categories( array(
                        'orderby' => 'count',
                        'order' => 'DESC',
                        'parent'  => 0,
                        'hide_empty' => 0,
                        'exclude' => $nonClasseId
                    ) );
                    
                    foreach ( $categories as $category ) {
                        $iconName = esc_html( $category->slug );
                        if ($iconName == '') {$iconName = "management";} 
                            
                        $catIcon = get_build_icon_path($iconName.".svg");
                        printf( '<a href="%1$s" class="category-entry">
                        <span class="visuel">'.$catIcon.'</span><span class="title">Formations %2$s</span></a>',
                            esc_url( get_category_link( $category->term_id ) ),
                            esc_html( $category->name )
                        );
                    }
                ?>
            </div>

            <div class="entry-links"><?php wp_link_pages(); ?></div>
        </section>

        <?php get_template_part( 'templates/page-block-contact' ); ?>

    </article>
    <?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>