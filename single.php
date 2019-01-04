<?php get_header(); ?>

<section id="content" role="main" class="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
    <?php endwhile; endif; ?>
    <footer class="post-footer">
        <?php get_template_part( 'nav', 'below-single' ); ?>
    </footer>
</section>

<?php if ( in_category( 'Portfolio' )) {
    get_sidebar(); 
} else { ?>
    <aside id="sidebar" role="complementary" class="sidebar">
        <div class="side-summary" id="sideSummary" data-spy="affix">
            <div class="h3 widget-title">Sommaire</div>
            <?php 
                $sidecontent = get_post_meta($post->ID,'scrollspy-sidebar',true);
                echo $sidecontent;
            ?>    
        </div>    
    </aside>
<?php } ?>

<?php get_footer(); ?>