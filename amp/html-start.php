<?php
/**
 * HTML start template part.
 *
 * @package AMP
 */

/**
 * Context.
 *
 * @var AMP_Post_Template $this
 */
?>
<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); // WPCS: XSS ok. ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<?php do_action( 'amp_post_template_head', $this ); ?>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:900|Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<style amp-custom>
		<?php $this->load_parts( array( 'style' ) ); ?>
		<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
</head>

<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">

<amp-animation id="showAnim" layout="nodisplay">
    <script type="application/json">
        {
        "duration": "200ms",
            "fill": "both",
            "iterations": "1",
            "direction": "alternate",
            "animations": [
            {
                "selector": "#scrollToTopButton",
                "keyframes": [
                { "opacity": "1", "visibility": "visible" }
                ]
            }
            ]
        }
    </script>
</amp-animation>

<amp-animation id="hideAnim" layout="nodisplay">
    <script type="application/json">
        {
        "duration": "200ms",
            "fill": "both",
            "iterations": "1",
            "direction": "alternate",
            "animations": [
            {
                "selector": "#scrollToTopButton",
                "keyframes": [
                { "opacity": "0", "visibility": "hidden" }
                ]
            }
            ]
        }
    </script>
</amp-animation>

<div id="marker">
    <amp-position-observer
        on="enter:hideAnim.start; exit:showAnim.start"
        layout="nodisplay">
    </amp-position-observer>
</div>
