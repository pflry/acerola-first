<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if ( is_singular() ) { ?>
        <header>
            <h3 class="entry-category"><?php the_category( ' ' ); ?></h3>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part( 'templates/entry-meta-jobs' ); ?>
            <?php if( has_post_thumbnail() ) {
                the_post_thumbnail('full', ['class' => 'img-fluid']); 
            } ?>
        </header>
        <?php get_template_part( 'templates/entry-content' ); ?>
        <?php edit_post_link(); ?>
        <?php get_template_part( 'templates/entry-footer' ); ?>
            
    <?php } else { ?>
        <header class="post-header">
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
            <p><?php echo wp_trim_words( get_the_content(), 28 ) ?></p>
            <?php get_template_part( 'templates/entry-meta-jobs' ); ?>
        </header>
    <?php }; ?>

</article>