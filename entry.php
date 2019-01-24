<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php if ( is_singular() ) { ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php } else { ?>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                <?php  echo wp_trim_words( get_the_title(), $num_words = 10, $more = '&hellip;' ); ?></a>
            </h2>
        <?php } ?>
        
        <?php the_post_thumbnail('full', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
        <?php edit_post_link(); ?>
        
    </header>
     <?php if ( is_singular() ) { get_template_part( 'entry-content' ); } ?>
    <?php /*get_template_part( 'entry', ( is_home() || is_archive() || is_search() ? 'summary' : 'content' ) );*/ ?>
    <?php get_template_part( 'entry-footer' ); ?>
</article>