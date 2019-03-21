<?php
/**
 * The template for displaying search results
 *
 * Displays the search results.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php get_header(); ?>
    <section id="content" role="main" class="search-results main">
        <?php if ( have_posts() ) : ?>
            <h1 class="h1">
                <?php printf('<span>Résultats de recherche pour</span> &laquo;&nbsp;%s&nbsp;&raquo;', get_search_query() ); ?>
            </h1>
            <div class="jscroll">
                <?php 
                    while ( have_posts() ) : the_post();
                        get_template_part( 'templates/content-search' );
                    endwhile;
                    get_template_part( 'templates/pagination' );
                ?>
            </div>
        <?php else : ?>
            <article id="post-0" class="post no-results not-found">
                <header class="header">
                    <h2 class="entry-title">Pas de résultats</h2>
                </header>
                <section class="entry-content">
                    <p>
                        <?php printf('Désolé, votre recherche pour <strong>&laquo;&nbsp;%s&nbsp;&raquo;</strong> n\'a donné aucun résultat.', get_search_query() ); ?>
                    </p>
                    <p>Si vous le souhaitez, vous pouvez effectuer une nouvelle recherche à partir d'ici.</p> 
                    <?php get_search_form(); ?>
                </section>
            </article>

            <section id="lastNews" class="last-news blog-home">
                 <h2 class="h2">Derniers articles</h2>
                <?php
                $recent_args = array(
                    "posts_per_page" => 4,
                    "orderby"        => "date",
                    "order"          => "DESC",
                    'tax_query' => array(
                    array(
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array('post-format-aside','post-format-link'),
                        'operator' => 'NOT IN'
                    ))
                );      
                $recent_posts = new WP_Query( $recent_args );
                if ( $recent_posts -> have_posts() ) : while ( $recent_posts -> have_posts() ) : $recent_posts -> the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="post-header">
                            <?php if( has_post_thumbnail() ) : ?>
                                <div class="post-header__thumbnail">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                                        <?php the_post_thumbnail('full'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="post-header__entry">
                                <h3 class="entry-category"><?php the_category( ' ' ); ?></h3>
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                                    <?php  echo wp_trim_words( get_the_title(), $num_words = 30, $more = '&nbsp;&hellip;' ); ?></a>
                                </h2>
                                <?php get_template_part( 'templates/entry-meta' ); ?>
                            </div>
                        </header>
                    </article>
                <?php endwhile; endif; ?>
                <div class="well-info">
                    <div>Retrouvez toute l'actualité du cabinet <strong>Acérola Carrière</strong> dans le Blog Acérola.</div>
                    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-black">Accéder au blog</a>
                </div>
            </section>

        <?php endif; ?>
    </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>