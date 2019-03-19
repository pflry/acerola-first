<?php if ( is_singular() ) { ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('single-job'); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <section class="criterias">
            <?php get_template_part( 'templates/entry-meta-single-job' ); ?>
            
            <!-- <section class="actions">
                <a href="" class="btn btn-black">Postuler</a>
            </section> -->
        </section>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php the_category( ' ' ); ?>
        <?php get_template_part( 'templates/entry-footer' ); ?>
    </article>        
<?php } else { ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="post-header">
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
            <p><?php echo wp_trim_words( get_the_content(), 28 ) ?></p>
            <?php get_template_part( 'templates/entry-meta-jobs' ); ?>
        </header>
    </article>
<?php }; ?>

