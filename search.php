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

            <section id="lastNews" class="last-news">
                <?php
                $args = array( 'numberposts' => '5', 'tax_query' => array(
                    array(
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array('post-format-aside','post-format-link'),
                        'operator' => 'NOT IN'
                    )
                ) );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ){
                    echo '<article id="post-'.$recent["ID"].'" class="post type-post">';
                    echo '<header class="post-header">';
                    echo '<div class="post-header__thumbnail">';
                    echo '<a href="'.get_permalink($recent["ID"]).'" alt="'.$recent["post_title"].'" rel="bookmark"><img src="'.get_the_post_thumbnail_url($recent["ID"]).'" class="img-fluid"></a></div>';
                    echo '</article>';
                }
                
                /*

                //         echo '<div class="post-header__entry">';
            //         echo '<h3 class="entry-category"><?php the_category( ' ' ); ?></h3>';
            //         <h2 class="entry-title">
            //             <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
            //             <?php  echo wp_trim_words( get_the_title(), $num_words = 30, $more = '&nbsp;&hellip;' ); ?></a>
            //         </h2>
            //         <?php get_template_part( 'templates/entry-meta' ); ?>
            //     </div>
            // </header>
                    

                    $args = array( 'numberposts' => '5' );
                    $recent_posts = wp_get_recent_posts( $args );
                    
                    foreach( $recent_posts as $recent ) {
                        // $postTitle = $recent["post_title"];
                        // $postPermalink = get_permalink($recent["ID"]);
                        // $postThumbnail = get_the_post_thumbnail_url($recent["ID"]);
                        // $postExcerpt = wp_trim_excerpt($recent['post_content']); ?>
                        <article id="<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="post__content">
                        <div class="thumbnail">
                            <?php
                                echo '<img src="'.$postThumbnail.'" alt="'.$postTitle.'" class="img-fluid">'
                            ?>
                        </div>
                        <div class="content">
                            <header class="entry-header">
                                <?php
                                echo '<h2 class="h2 entry-title"><a href="'. $postPermalink.'" rel="bookmark">'.$postTitle.'</a></h2>';
                                ?>
                            </header>
                            <footer class="entry-footer">
                                <?php get_template_part( 'templates/entry-meta' ); ?>
                            </footer>
                        </div>
                    </div>
                </article>
                   <?php }
                    wp_reset_query();
                */ ?>
            </section>
        <?php endif; ?>
    </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>