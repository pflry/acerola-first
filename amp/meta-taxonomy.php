<?php $tags = get_the_tag_list( '', ' ', '', $this->ID); ?>
    <?php if ( $tags && ! is_wp_error( $tags ) ) : ?>
        <div class="amp-wp-meta amp-wp-tax-tag">
            <?php printf( esc_html__( 'Tags:  %s', 'amp' ), $tags ); ?>
        </div>
    <?php endif; ?>
    
<div class="footer-meta-tax">
    <?php $this->load_parts( array( 'meta-time' ) ); ?>
</div>