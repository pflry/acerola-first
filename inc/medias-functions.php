<?php

/**
 * Medias functions
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 * @since 1.0
 */

/**
 * Display svg icons
 */
function get_build_icon_path($var) { 
	$path = get_template_directory_uri().'/dist/icons/'.$var; 
	return file_get_contents($path);
}

/**
 * Display images from build
 */
function get_build_img_path($var) { 
	$path = get_template_directory_uri().'/dist/images/'.$var; 
	return $path;
}

/**
 * Redirection self hosted CDN
 */ 
$siteurl = get_site_url();

if ($siteurl === 'https://pflry.eu') {
    add_filter( 'pre_option_upload_url_path', function( $upload_url_path ) {
		return 'https://cdn.pflry.eu';
	});
}