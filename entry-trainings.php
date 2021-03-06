<?php if ( is_singular() ) { ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('single-child'); ?>><?php edit_post_link(); ?>
        <h4 class="entry-remind">Formation</h4>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part( 'templates/entry-social-trainings' ); ?>
        <section class="criterias" id="metaSingle">
            <?php get_template_part( 'templates/entry-meta-single-training' ); ?>
        </section>
        <?php the_content(); ?>
    </article>
    <?php get_template_part( 'templates/entry-form-training' ); ?>
           
<?php } else { ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="post-header">
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
            <?php the_excerpt();?>
            <?php get_template_part( 'templates/entry-meta-trainings' ); ?>
        </header>
    </article>
<?php }; ?>

