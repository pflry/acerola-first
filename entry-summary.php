<section class="entry-summary">
    <?php echo wp_trim_words( get_the_content(), 28 ) ?>
    <?php if( is_search() ) { ?><div class="entry-links"><?php wp_link_pages(); ?></div><?php } ?>
</section>