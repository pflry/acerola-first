<footer class="entry-footer">
    <?php 
        $authorID = get_the_author_meta( 'ID' );
        $authorAvatar = get_avatar( $authorID, '40' );
    ?>
    <?php if ( is_singular() ) { ?>
         <div class="author-avatar"><?php echo $authorAvatar; ?></div>
         <div class="author-vcard"><span class="author-vcard--name"><?php the_author_meta('first_name'); ?>&nbsp;<?php the_author_meta('last_name'); ?></span><span class="break">,&nbsp;</span><span class="author-vcard--description"><?php the_author_meta('description'); ?></span></div>
    <?php } else { ?>
        <span class="entry-date">Publié le <?php the_time( get_option( 'date_format' ) ); ?></span>
        <span class="cat-links"><?php _e( 'Catégorie ', 'pflry' ); ?><?php the_category( ', ' ); ?></span>
    <?php } ?>
</footer>