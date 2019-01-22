<?php

/**
 * PFLRYGULP functions and definitions
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 * @since 1.0
 */

if ( ! function_exists( 'pflrygulp_setup' ) ) :

function pflrygulp_setup() {

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
	add_filter( 'script_loader_src', 'pflrygulp_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', 'pflrygulp_remove_script_version', 15, 1 );

	function pflrygulp_remove_script_version( $src ){
		$parts = explode( '?ver', $src );
		return $parts[0];
	}

	/**
	 * Stop loading css Contact Form plugin
	 */
	add_filter( 'wpcf7_load_css', '__return_false' );

	/**
	 * Enable support
	 */
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Images size
	 */
	update_option( 'large_size', 707 );

	/**
	 * Register main menu
	 */
	register_nav_menus( 
		array(
			'primary'	=>	__( 'Header Menu', 'pflrygulp' ),
			'secondary'	=>	__( 'Footer Menu', 'pflrygulp' ),
			'tertiary'	=>	__( 'Legal Menu', 'pflrygulp' ),
			'quaternary'	=>	__( 'Mobile Menu', 'pflrygulp' ),
			'quinary'	=>	__( 'Mobile Legal', 'pflrygulp' )
		)
	);

	/**
	 * Activate sidebar
	 */
	add_action( 'widgets_init', 'pflrygulp_register_sidebar' );

	function pflrygulp_register_sidebar() {
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
	 * Limit excerpt to a number of characters
	 */ 
	add_filter('the_excerpt', 'pflrygulp_short_excerpt');

	function pflrygulp_short_excerpt($excerpt){
		$limit = 80;

		if (strlen($excerpt) > $limit) {
			return substr($excerpt, 0, strpos($excerpt, ' ', $limit));
		}
		return $excerpt;
	}

	/**
	 * Exclude pages from WordPress search results
	 */
	if (!is_admin()) {
		add_filter('pre_get_posts', 'pflrygulp_search_filter');

		function pflrygulp_search_filter($query) {
			if ($query->is_search) {
				$query->set('post_type', 'post');
			}
			return $query;
		}
	}

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
endif; // pflrygulp_setup

add_action( 'after_setup_theme', 'pflrygulp_setup' );