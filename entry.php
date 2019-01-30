<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if ( is_singular() ) { ?>
        <header>
            <h3 class="entry-category"><?php the_category( ' ' ); ?></h3>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part( 'entry-meta' ); ?>
            <?php if( has_post_thumbnail() ) {
                the_post_thumbnail('full', ['class' => 'img-fluid']); 
            } ?>
        </header>
        <?php get_template_part( 'entry-content' ); ?>
        <?php edit_post_link(); ?>
        <?php get_template_part( 'entry-footer' ); ?>

    <?php } else { ?>
        
        <?php if ( has_post_format( 'link' )) {
            $content = get_the_content();
            $has_url = get_url_in_content( $content );  ?>
            
            <header class="post-header">
                <div class="post-header__thumbnail">
                    <?php echo get_build_icon_path('link.svg') ?>
                </div>
                <div class="post-header__entry">
                    <h3 class="entry-category">Lien</h3>
                    <h2 class="entry-title">
                        <a href="<?php echo $has_url; ?>" title="<?php the_title_attribute(); ?>" target="_blank" rel="noopener">
                        <?php  echo wp_trim_words( get_the_title(), $num_words = 30, $more = '&nbsp;&hellip;' ); ?></a>
                    </h2>
                </div>
            </header>

        <?php } elseif ( has_post_format( 'aside' )) { ?>
            <header class="post-header">
                <div class="post-header__thumbnail">
                    <?php echo get_build_icon_path('new-outlined.svg') ?>
                </div>
                <div class="post-header__entry">
                    <h3 class="entry-category"><?php the_category( ' ' ); ?></h3>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                        <?php  echo wp_trim_words( get_the_title(), $num_words = 30, $more = '&nbsp;&hellip;' ); ?></a>
                    </h2>
                </div>
            </header>
            
        <?php } else { ?>
            <header class="post-header">
                <?php if( has_post_thumbnail() ) { ?>
                    <div class="post-header__thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php } ?>
                
                <div class="post-header__entry">
                    <h3 class="entry-category"><?php the_category( ' ' ); ?></h3>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                        <?php  echo wp_trim_words( get_the_title(), $num_words = 30, $more = '&nbsp;&hellip;' ); ?></a>
                    </h2>
                    <?php get_template_part( 'entry-meta' ); ?>
                </div>
            </header>
        <?php } ?>

    <?php } ?>

</article>