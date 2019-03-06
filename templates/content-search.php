<?php
/**
 * The template part for displaying results content in search pages
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post__content">
		<div class="thumbnail">
			<?php if( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<?php the_post_thumbnail('thumbnail', ['class'=> 'img-fluid']); ?></a>
			<?php endif ?>
		</div>
		<div class="content">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="h2 entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header>
			<?php the_excerpt(); ?>
			<footer class="entry-footer">
				<?php get_template_part( 'templates/entry-meta' ); ?>
			</footer>
		</div>
	</div>
</article>

