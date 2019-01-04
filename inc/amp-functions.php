<?php

/**
 * AMP theming functions
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 * @since 1.0
 */

/**
 * Disabling the AMP Customizer Settings
 */
add_filter( 'amp_customizer_is_enabled', '__return_false' );

/**
 * Do not load default fonts on AMP pages
 */
add_action( 'amp_post_template_head', 'pflrygulp_remove_amp_merriweather', 2 );

function pflrygulp_remove_amp_merriweather() {
    remove_action( 'amp_post_template_head', 'amp_post_template_add_fonts' );
}

/**
 * Content max width
 */
add_filter( 'amp_content_max_width', 'pflrygulp_amp_change_content_width' );

function pflrygulp_amp_change_content_width( $content_max_width ) {
	return 650;
}

/**
 * Set Site icon
 */
add_filter( 'amp_post_template_data', 'pflrygulp_amp_set_site_icon_url' );

function pflrygulp_amp_set_site_icon_url( $data ) {
	$data['site_icon_url'] = get_stylesheet_directory_uri() . '/dist/images/icon.png';
	
	return $data;
}

/**
 * Modify Schema.org metadata
 */
add_filter( 'amp_post_template_metadata', 'pflrygulp_amp_modify_json_metadata', 10, 2 );

function pflrygulp_amp_modify_json_metadata( $metadata, $post ) {

	$metadata['dateModified'] = get_the_modified_date(c);

	$metadata['publisher']['logo'] = array(
		'@type' => 'ImageObject',
		'url' => get_template_directory_uri() . '/dist/images/pflry_logo.png',
		'width' => 60,
		'height' => 60,
	);

	$metadata['image'] = array(
		'@type' => 'ImageObject',
		'url' => get_template_directory_uri() . '/dist/images/pflry_default.jpg',
		'height' => 412,
      	'width' => 707
	);

	return $metadata;
}

/**
 * Enqueue AMP scripts
 * 
 * scrolltop
 */
add_action('amp_post_template_data', 'pflrygulp_amp_component_scripts');

function pflrygulp_amp_component_scripts( $data ) {
	$data['amp_component_scripts']['amp-position-observer'] = 'https://cdn.ampproject.org/v0/amp-position-observer-0.1.js';
	$data['amp_component_scripts']['amp-animation'] = 'https://cdn.ampproject.org/v0/amp-animation-0.1.js';
	
	return $data;
}

/**
 * Render amp page with subdomain
 */
// add_action("wp", "render_amp");

// function render_amp() {
// 	$url = preg_replace("/http(s?):\/\//", "amp.", get_site_url());
// 	if ($_SERVER["HTTP_HOST"] == $url) {
// 		if (is_single()) {
// 			amp_prepare_render();
// 		} else {
// 			Header( "HTTP/1.1 301 Moved Permanently" );
// 			Header( "Location: ".get_site_url().$_SERVER["REQUEST_URI"] );
// 		}
// 	}
// }

/**
 * Change amphtml link tag
 */
// add_filter('amp_pre_get_permalink', function($bol, $id) {
// 	return preg_replace(array("/http:\/\//", "/https:\/\//"), array("http://amp.", "https://amp."), get_permalink($id)) ;
// }, 10, 2);

?>