<?php
/**
 * Header breadcrumb template part.
 *
 * @package AMP
 */

?>
<section class="header-breadcrumb">
	<div>
		<?php /* $this->load_parts( apply_filters( 'amp_post_article_header_meta', array( 'meta-category' ) ) ) */ ?>
		<?php echo get_the_breadcrumb() ?>
	</div>
</section>
