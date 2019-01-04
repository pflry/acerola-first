<?php

/**
 * Shortcodes functions
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 * @since 1.0
 */

/**
 * Shortcode pour afficher les messages d'alerte
 * 
 * [alert class="class-name" title="titre-content"]content[/alert]
 * 
 */
add_shortcode( 'alert', 'alert_func' );

function alert_func( $atts, $content = null ) {
    $a = shortcode_atts( array(
		'class' => 'info',
		'title' => ''
	), $atts );

	// content
	switch($a['class']) {
		case 'info':
			$class = 'alert-info';
			break;
		case 'success':
			$class = 'alert-success';
			break;
		case 'warning':
			$class = 'alert-warning';
			break;
		case 'danger':
			$class = 'alert-danger';
			break;
		default:
			$class = 'alert-info';
			break;
	}

	// title
	if ($a['title'] != '' ) {
		$title = '<span class="alert-title">'. esc_attr($a['title']) .'</span>';
	} else {
		$title = '';
	}
	
	return '<div class="alert '. esc_attr($class) .'">'. $title .''. do_shortcode($content) .'</div>';
}

/**
 * Shortcode pour afficher image centrée par défaut ou non
 * 
 * [img src="url-image" alt="alt-image" align="center"]
 * 
 */
add_shortcode( 'img', 'img_func');

function img_func( $atts) {
	$a = shortcode_atts( array(
		'src' => '',
		'alt' => '',
		'align' => 'center'
	), $atts );

	if ($a['align'] != 'center') {
		return '<img src="'. esc_attr($a['src']) .'" alt="'. $a['alt'] .'" class="img-fluid">';
	} else {
		return '<p class="text-center"><img src="'. esc_attr($a['src']) .'" alt="'. $a['alt'] .'" class="img-fluid"></p>';
	}
}

?>