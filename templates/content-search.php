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
		<?php if( has_post_thumbnail() ) : ?>
			<div class="thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<?php the_post_thumbnail('thumbnail', ['class'=> 'img-fluid']); ?></a>
			</div>
		<?php endif ?>
		<div class="content">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="h2 entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header>
			<p><?php echo wp_trim_words( get_the_content(), 28 ) ?></p>
			<footer class="entry-footer">
				<?php get_template_part( 'templates/entry-meta' ); ?>
			</footer>
		</div>
	</div>
</article>

