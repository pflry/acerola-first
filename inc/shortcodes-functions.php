<?php

/**
 * Shortcodes functions
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 * @since 1.0
 */

/**
 * Shortcodes timeline (shortcode in shortcode)
 * 
 * [timeline][timeline-event position="direction-r (droite)" titre="titre événement" date="année en chiffre"]description événement[/timeline-event][timeline-event position="direction-l (gauche)" titre="titre événement" date="année en chiffre"]description événement[/timeline-event]...[/timeline]
 *
 */
function acerola_timeline_event($atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'position' => 'direction-r',
            'titre' => 'Ici le titre',
            'date' => '2099',
        ), $atts, 'timeline-event' );

    return '<li>
				<div class="'.$atts['position'].'">
					<div class="hexa"></div>
                    <div class="flag-wrapper">
                        <span class="flag">'.$atts['titre'].'</span>
                        <span class="time-wrapper"><span class="time">'.$atts['date'].'</span></span>
                    </div>
                    <div class="desc">'.$content.'</div>
                </div>
            </li>';
    }
add_shortcode( 'timeline-event', 'acerola_timeline_event' );

function acerola_timeline($atts, $content = null) {
    $content = do_shortcode($content);
    return '<ul class="timeline">'.$content.'</ul>';
    }
add_shortcode( 'timeline', 'acerola_timeline' );

/**
 * Shortcodes bloc collaborateur sur page présentation cabinet
 * 
 * [equipe nom="nom collaborateur" fonction="fonction collaborateur" image="image path"]présentation collaborateur[/equipe]
 */
function acerola_equipe($atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'image' => 'http://satyr.io/480x480?texture=cross',
            'nom' => 'Lorem ipsum',
            'fonction' => 'Consultant'
        ), $atts, 'equipe' );

    return '<figure class="team-member">
				<img src="'.$atts['image'].'" alt="'.$atts['nom'].' - Acérola Carrière" class="img-fluid">
				<figcaption>
					<h6 class="nom">'.$atts['nom'].'</h6>
					<div class="fonction">'.$atts['fonction'].'</div>
					<p class="experience">'.$content.'</p>
				</figcaption>
			</figure>';
        }
add_shortcode( 'equipe', 'acerola_equipe' );

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
			$icon = get_build_icon_path('info.svg');
			break;
		case 'success':
			$class = 'alert-success';
			$icon = get_build_icon_path('check-circle.svg');
			break;
		case 'warning':
			$class = 'alert-warning';
			$icon = get_build_icon_path('alert-circle.svg');
			break;
		case 'danger':
			$class = 'alert-danger';
			$icon = get_build_icon_path('alert-triangle.svg');
			break;
		default:
			$class = 'alert-info';
			$icon = get_build_icon_path('info.svg');
			break;
	}

	// title
	if ($a['title'] != '' ) {
		$title = '<span class="alert-icon">'. $icon .'</span><span class="alert-title">'. esc_attr($a['title']) .'</span>';
	} else {
		$title = '<span class="alert-icon">'. $icon .'</span>';
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

/**
 * Shortcode pour afficher le bloc download (plaquette)
 * 
 * [plaquette src="src document" titre="button title"]
 * if titre undefined then button take title of the page
 */
add_shortcode( 'plaquette', 'download_plaquette');

function download_plaquette( $atts ) {
	$a = shortcode_atts( array(
		'src' => '',
		'titre' => ''
	), $atts);

	if ($a['titre']) {
		$name = $a['titre'];
	} else {
		$name = esc_html( get_the_title() );
	}

	return '<section class="entry-download">
    			<div class="entry-download__header">
					<span class="title">
						'. get_build_icon_path('download.svg') .'
						Téléchargez notre plaquette
					</span>
    			</div>
				<div class="entry-download__body">
					<a href="'. esc_attr($a['src']) .'" class="btn btn-pdf">
						'. get_build_icon_path('file.svg') .'
						'. $name .'
					</a>
				</div>
			</section>';
	 
}

?>