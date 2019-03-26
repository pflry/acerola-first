<?php if ( is_singular() ) { ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('single-job'); ?>><?php edit_post_link(); ?>
        <h4 class="entry-remind">Offre d'emploi</h4>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part( 'templates/entry-social-jobs' ); ?>
        <section class="criterias" id="metaSingle">
            <?php get_template_part( 'templates/entry-meta-single-job' ); ?>
        </section>
        <?php the_content(); ?>
    </article> 
    <?php get_template_part( 'templates/entry-form-job' ); ?>
           
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

