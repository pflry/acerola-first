<?php

/**
 * Enqueue styles and scripts functions
 *
 * @package WordPress
 * @subpackage PFLRYGULP
 * @since 1.0
 */

/**
 * Header scripts
 */
add_action( 'wp_enqueue_scripts', 'header_scripts' );

function header_scripts()  {
	wp_deregister_script('jquery'); // remove native jquery
	wp_dequeue_style( 'wp-block-library' ); // remove css gutenberg

	wp_register_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js');

	foreach (new DirectoryIterator(get_stylesheet_directory() . '/dist/css') as $fileInfo) {
		if($fileInfo->isDot()) continue;
		$fullName = $fileInfo->getFilename();
		wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/dist/css/' . $fullName);
	}
	if( is_page('Contact') ):
		wp_enqueue_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js');
	endif;
}

/**
 * Footer scripts
 */
add_action( 'wp_footer', 'footer_scripts' );

function footer_scripts()  { 
	
	// wp_deregister_style( 'kebo-code-themes');

	foreach (new DirectoryIterator(get_stylesheet_directory() . '/dist/js') as $fileInfo) {
		if($fileInfo->isDot()) continue;
		$fullName = $fileInfo->getFilename();
		$name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));
		wp_enqueue_script( $name, get_template_directory_uri() . '/dist/js/' . $fullName);
	}
}

/**
 * Load async stylesheet
 */
add_filter( 'style_loader_tag',  'pflrygulp_async_style', 10, 4 );

function pflrygulp_async_style( $tag ) {
    return str_replace(' href=', ' async href=', $tag);
}

/**
 * Defer js scripts
 */
add_filter( 'script_loader_tag', 'pflrygulp_defer_scripts', 10, 3 );

function pflrygulp_defer_scripts( $tag ) {
	if( is_admin() ) {
		return $tag;
	} else {
		return str_replace( ' src', ' defer src', $tag );
	}
}

/**
 * Add google analytics to footer
 */
add_action('wp_footer', 'add_google_analytics');

function add_google_analytics() { ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116695132-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag("js", new Date());
		gtag("config", "UA-116695132-1");
	</script>
<?php }


?>