<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h3 class="entry-category"><?php the_category( ' ' ); ?></h3>
        <?php if ( is_singular() ) { ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php } else { ?>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                <?php  echo wp_trim_words( get_the_title(), $num_words = 10, $more = '&hellip;' ); ?></a>
            </h2>
        <?php } ?>
        <?php get_template_part( 'entry-meta' ); ?>

        <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
         
    </header>
     <?php if ( is_singular() ) { get_template_part( 'entry-content' ); } ?>
    <?php edit_post_link(); ?>
    <?php get_template_part( 'entry-footer' ); ?>
</article>