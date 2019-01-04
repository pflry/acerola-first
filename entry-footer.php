<span class="tag-links"><?php the_tags( 'Tags : ', '&nbsp;' ); ?></span>
<footer class="entry-footer">
    <?php if ( is_singular() ) { ?>
        <span class="last-update">Dernière mise à jour le <span><?php the_modified_date(); ?></span></span>
        <span class="entry-date">Publié le <span><?php the_time( get_option( 'date_format' ) ); ?></span></span>
    <?php } else { ?>
        <span class="entry-date">Publié le <?php the_time( get_option( 'date_format' ) ); ?></span>
        <span class="cat-links"><?php _e( 'Catégorie ', 'pflry' ); ?><?php the_category( ', ' ); ?></span>
    <?php } ?>
</footer>