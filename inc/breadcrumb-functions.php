<?php

/**
 * Breadcrumb functions
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 * @since 1.0
 */

/**
 * Breadcrumb
 */
function get_the_breadcrumb() { 
	
	$category = get_queried_object();
	$category_name = $category->name;

	$blog_page = get_page_by_title( 'Blog' );
	$blog_link = get_permalink($blog_page->ID);

	?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">

		<?php if (is_home()) { ?>
			<li class="breadcrumb-item"><a href="<?php echo get_option('home'); ?>">Accueil</a></li>
			<li class="breadcrumb-item"><?php echo get_build_icon_path('chevron-right.svg') ?></li>
			<li class="breadcrumb-item active">Blog</li>
		
		<?php } else if (!is_home()) { ?>
			<li class="breadcrumb-item"><a href="<?php echo get_option('home'); ?>">Accueil</a></li>

			<?php if (is_category()) { ?>
				<li class="breadcrumb-item"><?php echo get_build_icon_path('chevron-right.svg') ?></li>
				<li class="breadcrumb-item active"><?php echo $category_name; ?></li>
			
			<?php } else if (is_single()) { ?>
				<li class="breadcrumb-item"><?php echo get_build_icon_path('chevron-right.svg') ?></li>
				<li class="breadcrumb-item"><a href="<?php echo $blog_link; ?>">Blog</a></li>
				<li class="breadcrumb-item"><?php echo get_build_icon_path('chevron-right.svg') ?></li>
				<?php if (is_single()) { ?></li><li class="breadcrumb-item active"><?php echo the_title(); } ?></li>

			<?php } else if (is_page()) { ?>
				<li class="breadcrumb-item"><?php echo get_build_icon_path('chevron-right.svg') ?></li>
				<li class="breadcrumb-item active"><?php echo the_title(); ?></li>

			<?php } elseif (is_search()) { ?>
				<li class="breadcrumb-item"><?php echo get_build_icon_path('chevron-right.svg') ?></li>
				<li class="breadcrumb-item active">Résultats de recherche</li>
			<?php }
			
		} ?>

		</ol>
	</nav>

<?php }


?>