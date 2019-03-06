<section id="homeNews" class="home-news">
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
            $postExcerpt = wp_trim_excerpt($recent['post_content']);
        }
        wp_reset_query();
    ?>
    <div class="container">
        <div class="home-news__picture" style="background-image:url('<?php echo $postThumbnail ?>');">
            <?php
                /*echo '<img src="'.$postThumbnail.'" alt="'.$postTitle.'" class="img-fluid">'*/
            ?>
        </div>
        <div class="home-news__content">
            <?php
                echo '<h2 class="h2">Actualités</h2>';
                echo '<h3 class="h3">'.$postTitle.'</h3>';
                echo '<p>'.wp_trim_words($postExcerpt, 40, '&nbsp;&hellip;').'</p>';
                echo '<a href="'. $postPermalink.'" class="btn btn-black">Lire l\'article</a>';
            ?>
        </div>
    </div>  
</section>