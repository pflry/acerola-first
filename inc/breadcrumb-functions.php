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
	
	if($category) {
		$category_name = $category->name;
	}

	$home_link = get_option( 'home' );
	$blog_link = get_permalink( get_option( 'page_for_posts' ));

	$chevron_right = get_build_icon_path('chevron-right.svg');

	?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">

		<?php if (is_home()) { ?>
			<li class="breadcrumb-item"><a href="<?php echo $home_link ?>">Accueil</a></li>
			<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
			<li class="breadcrumb-item active">Blog</li>
		
		<?php } else if (!is_home()) { ?>
			<li class="breadcrumb-item"><a href="<?php echo $home_link ?>">Accueil</a></li>

			<?php if (is_category()) { ?>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<li class="breadcrumb-item active"><?php echo $category_name; ?></li>
			
			<?php } else if (is_single()) { ?>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<li class="breadcrumb-item"><a href="<?php echo $blog_link; ?>">Blog</a></li>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<?php if (is_single()) { ?></li><li class="breadcrumb-item active"><?php echo the_title(); } ?></li>

			<?php } else if (is_page()) { ?>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<li class="breadcrumb-item active"><?php echo the_title(); ?></li>

			<?php } elseif (is_search()) { ?>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<li class="breadcrumb-item active">Résultats de recherche</li>
			<?php }
			
		} ?>

		</ol>
	</nav>

<?php }

/**
 * Breadcrumb Job
 */
function get_the_breadcrumb_job() { 
	
	$category = get_queried_object();
	
	if($category) {
		$category_name = $category->name;
	}

	$home_link = get_option( 'home' );
	$blog_link = get_permalink( get_option( 'page_for_posts' ));

	$chevron_right = get_build_icon_path('chevron-right.svg');

	?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">

		<?php if (is_home()) { ?>
			<li class="breadcrumb-item"><a href="/">Accueil</a></li>
			<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
			<li class="breadcrumb-item active">Offres d'emploi</li>
		
		<?php } else if (!is_home()) { ?>
			<li class="breadcrumb-item"><a href="/">Accueil</a></li>

			<?php if (is_category()) { ?>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<li class="breadcrumb-item"><a href="<?php echo $home_link; ?>">Offres d'emploi</a></li>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<li class="breadcrumb-item active">Catégorie <?php echo $category_name; ?></li>
			
			<?php } else if (is_single()) { ?>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<li class="breadcrumb-item"><a href="<?php echo $home_link; ?>">Offres d'emploi</a></li>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<?php if (is_single()) { ?></li><li class="breadcrumb-item active"><?php echo the_title(); } ?></li>

			<?php } else if (is_page()) { ?>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<li class="breadcrumb-item active"><?php echo the_title(); ?></li>

			<?php } elseif (is_search()) { ?>
				<li class="breadcrumb-item"><?php echo $chevron_right ?></li>
				<li class="breadcrumb-item active">Résultats de recherche</li>
			<?php }
			
		} ?>

		</ol>
	</nav>

<?php }


?>