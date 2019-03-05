<?php
/**
 * Template Name: page home
 *
 * The template for displaying the home page. 
 * 
 * Display specific template to display home page
 * 
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

get_header('home'); ?>
<section id="content" role="main" class="main page-home page-full">

    <?php get_template_part( 'templates/home-counters-body' ); ?>

    <?php get_template_part( 'templates/home-company' ); ?>

    <?php get_template_part( 'templates/home-expertise' ); ?>

    <section id="homeNews" class="home-news">
        <div class="container">
            
            <div class="home-news__body news-training">
                <div class="home-news__content">
                    <span class="rub">Formation</span>
                    <h3 class="h3">Vitaminez vos compétences !</h3>
                    <p><strong>Acérola Carrière</strong> propose des formations opérationnelles animées par des professionnels avec des contenus pragmatiques et actuels.</p>
                    <a href="https://www.acerolacarriere.fr/vitaminez-vos-competences/" target="_blank" class="btn btn-black">Nos formations</a>
                </div>
            </div>

            <div class="home-news__body news-job">
                <div class="home-news__content">
                    <span class="rub">Emploi</span>
                    <h3 class="h3">La vitamine C de l'emploi</h3>
                    <p>Boostez votre recherche d'emploi avec <strong>Acérola Carrière</strong>. Découvrez nos offres d'emploi et postulez en ligne.</p>
                    <a href="https://www.acerolacarriere.fr/vitaminez-vos-competences/" target="_blank" class="btn btn-black">Offres d'emploi</a>
                </div>
            </div>

        </div>
    </section>

    <section style="display: none">
        <?php
                $args = array( 'numberposts' => '1', 'tax_query' => array(
                        array(
                            'taxonomy' => 'post_format',
                            'field' => 'slug',
                            'terms' => 'post-format-aside',
                            'operator' => 'NOT IN'
                        ), 
                        array(
                            'taxonomy' => 'post_format',
                            'field' => 'slug',
                            'terms' => 'post-format-link',
                            'operator' => 'NOT IN'
                        )
                    ) );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ) {
                    $postTitle = $recent["post_title"];
                    $postPermalink = get_permalink($recent["ID"]);
                    $postThumbnail = get_the_post_thumbnail_url($recent["ID"]);
                    $postExcerpt = wp_trim_excerpt( $recent['post_content']);
                }
                wp_reset_query();
            ?>

            <div class="home-news__body news-blog" style="background-image: url(<?php echo $postThumbnail ?>);">
                <div class="home-news__content">
                    <?php
                        echo '<span class="rub">Blog</span>';
                        echo '<h3 class="h3">'.$postTitle.'</h3>';
                        echo '<p>'.wp_trim_words($postExcerpt, 24, '&nbsp;&hellip;').'</p>';
                        echo '<a href="'. $postPermalink.'" class="btn btn-black">Lire l\'article</a>';
                    ?>
                </div>
            </div>
    </section>

</section>
<?php get_footer(); ?>