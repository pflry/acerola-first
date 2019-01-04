<?php
/**
 * Footer template part.
 *
 * @package AMP
 */

/**
 * Context.
 *
 * @var AMP_Post_Template $this
 */
?>
<footer class="amp-wp-footer">
	<div>
        <div class="footer-copyright">
            <?php echo sprintf( __( '%1$s%2$s', 'pflry' ), '&copy;', date( 'Y' ) );  ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="blog-name">pflry.eu</a>
        </div>
        <button id="scrollToTopButton" on="tap:top.scrollTo(duration=800)" class="back-to-top">
            <?php echo get_build_icon_path('arrow-up.svg') ?>
        </button>
	</div>
</footer>
