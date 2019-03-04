<?php

/**
 * acerola functions and definitions
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 * @since 1.0
 */

if ( ! function_exists( 'acerola_setup' ) ) :

function acerola_setup() {

	/**
	 * Remove unnecessary code from wp_head
	 */
	remove_action('template_redirect', 'rest_output_link_header', 11, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_head', 'rest_output_link_wp_head', 10);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
	remove_action('wp_print_styles', 'print_emoji_styles');

	/**
	 * Remove query strings from static resources 
	 */ 
	add_filter( 'script_loader_src', 'acerola_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', 'acerola_remove_script_version', 15, 1 );

	function acerola_remove_script_version( $src ){
		$parts = explode( '?ver', $src );
		return $parts[0];
	}

	/**
	 * Enable support
	 */
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'aside', 'link' ) );

	/**
	 * Register main menu
	 */
	register_nav_menus( 
		array(
			'primary'	=>	__( 'Header Menu', 'acerola' ),
			'secondary'	=>	__( 'Footer Menu', 'acerola' ),
			'tertiary'	=>	__( 'Legal Menu', 'acerola' ),
			'quaternary'	=>	__( 'Mobile Menu', 'acerola' ),
			'quinary'	=>	__( 'Mobile Legal', 'acerola' )
		)
	);

	/**
	 * Activate sidebar
	 */
	add_action( 'widgets_init', 'acerola_register_sidebar' );

	function acerola_register_sidebar() {
		register_sidebar( array (
			'name' => 'Sidebar Widget Area',
			'id' => 'primary-widget-area',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget' => "</li>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}

	/**
	 * Limit excerpt to a number of characters
	 */ 
	// add_filter('the_excerpt', 'acerola_short_excerpt');

	// function acerola_short_excerpt($excerpt){
	// 	$limit = 80;

	// 	if (strlen($excerpt) > $limit) {
	// 		return substr($excerpt, 0, strpos($excerpt, ' ', $limit));
	// 	}
	// 	return $excerpt;
	// }

	// add_filter( 'excerpt_length', function( $length ) { return 20; } );

	/**
	 * Exclude pages from WordPress search results
	 */
	if (!is_admin()) {
		add_filter('pre_get_posts', 'acerola_search_filter');

		function acerola_search_filter($query) {
			if ($query->is_search) {
				$query->set('post_type', 'post');
			}
			return $query;
		}
	}

	/**
	 * Enqueue Styles and Scripts
	 * CSS, javascript, Google analytics
	 */
	require get_parent_theme_file_path( '/inc/enqueue-functions.php' );

	/**
	 * Breadcrumb function
	 */ 
	require get_parent_theme_file_path( '/inc/breadcrumb-functions.php' );

	/**
	 * Comments functions
	 */
	require get_parent_theme_file_path( '/inc/comments-functions.php' );

	/**
	 * Medias functions
	 */
	require get_parent_theme_file_path( '/inc/medias-functions.php' );

	/**
	 * Implement shortcodes
	 */
	require get_parent_theme_file_path( '/inc/shortcodes-functions.php' );

	/**
	 * AMP theming
	 */
	// require get_parent_theme_file_path( '/inc/amp-functions.php' );

	/**
	 * Walker menu
	 */
	require get_parent_theme_file_path( '/inc/walker-functions.php' );
	
}
endif; // acerola_setup

add_action( 'after_setup_theme', 'acerola_setup' );