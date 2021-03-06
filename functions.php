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
	 * Contact Form 7 plugin
	 */

	// Stop loading css Contact Form plugin
	add_filter( 'wpcf7_load_css', '__return_false' );

	// No spans around input
	add_filter('wpcf7_form_elements', function($content) {
		$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

		return $content;
	});

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
	 * Limit excerpt length
	 */
	add_filter( 'excerpt_length', 'acerola_excerpt_length', 999 );
	
	function acerola_excerpt_length( $length ) {
		return 28;
	}

	/**
	 * Exclude post formats from WordPress search results
	 */
	add_filter('pre_get_posts', 'acerola_search_filter');

	function acerola_search_filter($query) {
		if( $query->is_main_query() && $query->is_search() ) {
			$tax_query = array( 
				array(
					'taxonomy' => 'post_format',
					'field' => 'slug',
					'terms' => array('post-format-aside', 'post-format-link'),
					'operator' => 'NOT IN'
				));
			$query->set( 'tax_query', $tax_query );
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
	 * Medias functions
	 */
	require get_parent_theme_file_path( '/inc/medias-functions.php' );

	/**
	 * Implement shortcodes
	 */
	require get_parent_theme_file_path( '/inc/shortcodes-functions.php' );

	/**
	 * Walker menu
	 */
	require get_parent_theme_file_path( '/inc/walker-functions.php' );

	/**
	 * Global VARS
	 */
	add_action('init', 'globVars');

	function globVars() {
		global $NL_URL;
		global $TEL;
		global $OFFICE_PARIS;
		global $OFFICE_NEUILLY;
		global $OFFICE_MONTEVRAIN;

		// general globals var
		$NL_URL = "http://eepurl.com/dnrOCP";
		
		$TEL = "01 41 79 17 93";

		$OFFICE_PARIS = array(
			"nom"=>"Acérola Carrière Paris",
			"adresse"=>"24 rue Mogador",
			"ville"=>"75009 Paris");

		$OFFICE_NEUILLY = array(
			"nom"=>"Acérola Carrière Neuilly Plaisance",
			"adresse"=>"3 quater avenue Victor Hugo",
			"ville"=>"93360 Neuilly-Plaisance");

		$OFFICE_MONTEVRAIN = array(
			"nom"=>"Acérola Carrière Montévrain",
			"adresse"=>"14 avenue de l'Europe",
			"ville"=>"77144 Montévrain");
	}

	/**
	 * MULTISITES
	 */ 
	function sitemulti() {
		$current_site = get_blog_details()->blogname;
		global $child;
		global $major_class;
		global $home_url;

		if (strpos($current_site, 'emploi') == true) : 
			require get_theme_file_path( '/inc/meta-job-functions.php' );
			$child = 'emploi';
			$major_class = 'site-job';
			$home_url = '/';

		elseif (strpos($current_site, 'formations') == true) :
			require get_theme_file_path( '/inc/meta-training-functions.php' );
			$child = 'formation';
			$home_url = '/';
			$major_class = 'site-training';

		else :
			$child = 'parent';
			$home_url = esc_url( home_url( '/' ) );
			$major_class = '';
			
		endif;
	}
	add_action( 'init', 'sitemulti');
	
}
endif; // acerola_setup

add_action( 'after_setup_theme', 'acerola_setup' );