<?php
/**
 * Style template.
 *
 * @package AMP
 */

/**
 * Context.
 *
 * @var AMP_Post_Template $this
 */

$content_max_width 	= absint( $this->get( 'content_max_width' ) );
$black				= '#000';
$white				= '#fff';
$color_primary		= '#2980b9';
$color_secondary	= '#7f8c8d';
$color_info			= '#3498db';
$color_success		= '#badc58';
$color_warning		= '#f1c40f';
$color_danger		= '#e74c3c';
$color_dark			= '#34495e';
$color_light		= '#ecf0f1';
$color_border		= '#bdc3c7';
$color_code			= '#db0a5b';
$color_headings 	= '#2c3e50';
?>


/**
 * Generic WP styling - Utilities
 */

*,
*:before,
*:after {
    box-sizing: border-box;
    outline: none;
}

.alignright {
	float: right;
}

.alignleft {
	float: left;
}

.aligncenter {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.rounded {
	border-radius: 0.25rem;
}

.amp-wp-enforced-sizes {
	margin: 0 auto;
	max-width: 100%;
}

.amp-wp-unknown-size img {
	object-fit: contain;
}

.text-center {
	text-align: center;
}

/** 
 * Template Styles
 */

.amp-wp-content,
.amp-wp-title-bar div {
	<?php if ( $content_max_width > 0 ) : ?>
	margin: 0 auto;
	max-width: <?php echo sprintf( '%dpx', $content_max_width ); ?>;
	<?php endif; ?>
}

html {
	background: <?php echo sanitize_hex_color( $color_primary ); ?>;
}

body {
	background: <?php echo sanitize_hex_color( $white ); ?>;
	color: <?php echo sanitize_hex_color( $color_dark ); ?>;
	font-family: 'Roboto', sans-serif;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.45;
}

/* Elements */

p,
ol,
ul,
figure {
	margin: 0 0 1.375rem;
	padding: 0;
}

/* Liens */

a,
a:visited {
	color: <?php echo sanitize_hex_color( $color_primary ); ?>;
	text-decoration: none;
}

a:hover,
a:active,
a:focus {
	color: <?php echo sanitize_hex_color( $color_dark ); ?>;
}

/* Quotes */

blockquote {
	border-left: 5px solid <?php echo sanitize_hex_color( $color_border ); ?>;
	color: <?php echo sanitize_hex_color( $color_dark ); ?>;
	font-size: 1.125rem;
	margin: 2.5rem 0;
	padding-left: 2.5rem;
}

cite {
	color: <?php echo sanitize_hex_color( $color_secondary ); ?>;
    font-size: .875rem;
    font-style: italic;
}

blockquote p:last-of-type {
	margin: 0;
}

/* Headings */

h1, h2, h3, h4, h5, h6 {
	color: <?php echo sanitize_hex_color( $color_headings ); ?>;
	font-family: 'Roboto', sans-serif;
	font-weight: 700;
	line-height: 1.2;
	margin: 0 0 1rem;
}

h1 {
	font-size: 2.441rem;
}

h2 {
	font-size: 1.953rem;
}

h3 {
	font-size: 1.563rem;
}

h4 {
	font-size: 1.25rem;
}

/* Alerts */

.alert {
	background-position: 1rem 0.75rem;
	font-size: 0.875rem;
	position: relative;
    background-repeat: no-repeat;
    background-size: 20px 20px;
    border-radius: 0.25rem;
    margin: 0 0 1.375rem;
    padding: 0.8rem 1.25rem 0.75rem 3.125rem;
}

.alert-title {
	display: block;
	font-size: 1rem;
	font-weight: 700;
    margin: -0.125rem 0 0.25rem;
}

.alert-info {
    background-color: #e1f0fa;
	background-image: url(<?php echo esc_url( get_template_directory_uri().'/dist/icons/info-circle.svg')?>);
	color: #1a4c6e;
}

.alert-info .alert-title {
	color: #246a99;
}

.alert-success {
	background-color: #ecf6e2;
	background-image: url(<?php echo esc_url( get_template_directory_uri().'/dist/icons/check-circle.svg')?>);
	color: #4f6838;
}

.alert-success .alert-title {
	color: #678748;
}

.alert-warning {
	background-color: #fff3d0;
	background-image: url(<?php echo esc_url( get_template_directory_uri().'/dist/icons/exclamation-circle.svg')?>);
	color: #806209;
}

.alert-warning .alert-title {
	color: #99750b;
}

.alert-danger {
	background-color: #fcdedf;
	background-image: url(<?php echo esc_url( get_template_directory_uri().'/dist/icons/exclamation-triangle.svg')?>);
	color: #751014;
}

.alert-danger .alert-title {
	color: #a4161b;
}

/** 
 * Layout
 */

/* Header */
.amp-wp-header {
	background-color: <?php echo sanitize_hex_color( $color_primary ); ?>;
}

.amp-wp-header div {
	color: <?php echo sanitize_hex_color( $white); ?>;
	font-size: 2.5rem;
	font-weight: 900;
	margin: 0 auto;
	max-width: <?php echo sprintf( '%dpx', $content_max_width ); ?>;
	padding: 2rem 1rem;
	position: relative;
}

.amp-wp-header a {
	color: <?php echo sanitize_hex_color( $white ); ?>;
	font-family: 'Titillium Web', sans-serif;
	text-decoration: none;
}

/* Header breadcrumb */

.header-breadcrumb {
	background-color: <?php echo sanitize_hex_color( $color_light ); ?>;
}

.header-breadcrumb > div {
	margin: 0 auto;
	max-width: <?php echo sprintf( '%dpx', $content_max_width ); ?>;
	height: 50px;
	padding: 0 1rem;
	display: flex;
	align-items: center;
}

.breadcrumb {
    font-size: 0.875rem;
    margin: 0.65rem 0;
    padding: 0;
}

.breadcrumb-item {
    display: inline;
}

.breadcrumb-item a {
	color: <?php echo sanitize_hex_color( $color_dark ); ?>;
	text-decoration: none;
}

.breadcrumb-item a:hover {
	color: <?php echo sanitize_hex_color( $color_primary ); ?>;
}

.breadcrumb-item.active {
	color: rgba(0,0,0,0.6);
	display: none;
}

.breadcrumb-item:nth-last-child(2) {
	display: none;
}

.breadcrumb-item .icon {
	height: 1rem;
	stroke: <?php echo sanitize_hex_color( $color_primary ); ?>;
	transform: translateY(3px);
}


/* Site Icon */

.amp-wp-header .amp-wp-site-icon {
	display: none;
}

/* Article */

.amp-wp-article {
	margin: 1.5rem auto 2rem;
	max-width: <?php echo sprintf( '%dpx', $content_max_width ); ?>;
	overflow-wrap: break-word;
	word-wrap: break-word;
}

/* Article Header */

.amp-wp-article-header {
	align-items: center;
	align-content: stretch;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin: 1.5rem 1rem 0;
}

/* Article Meta */

.amp-wp-meta {
	color: <?php echo sanitize_hex_color( $color_secondary ); ?>;
	display: inline-block;
	flex: 2 1 50%;
	font-size: 0.875rem;
	line-height: 1.5em;
	margin: 0;
	padding: 0;
}

.amp-wp-article-header .amp-wp-meta:last-of-type {
	text-align: right;
}

.amp-wp-article-header .amp-wp-meta:first-of-type {
	text-align: left;
}

.amp-wp-byline amp-img,
.amp-wp-byline .amp-wp-author {
	display: inline-block;
	vertical-align: middle;
}

.amp-wp-byline amp-img {
	border: 1px solid <?php echo sanitize_hex_color( $white ); ?>;
	border-radius: 50%;
	position: relative;
	margin-right: 6px;
}

/* Featured image */

.amp-wp-article-featured-image {
	display: none;
	margin: 0 1em 1em;
}

.amp-wp-article-featured-image amp-img {
	margin: 0 auto;
	border-radius: 0.25rem;
}

.amp-wp-article-featured-image.wp-caption .wp-caption-text {
	border: none;
	margin: 0;
	padding: 0 0 0.5rem;
}

/* Article Content */

.amp-wp-article-content {
	margin: 0 1rem;
}

.amp-wp-article-content ul,
.amp-wp-article-content ol {
	list-style-type: circle;
	margin-left: 1rem;
}

.amp-wp-article-content ul li,
.amp-wp-article-content ol li {
	margin-bottom: 0.5rem;
}

.amp-wp-article-content amp-img {
	margin: 0 auto;
}

.amp-wp-article-content amp-img.alignright {
	margin: 0 0 1rem 1rem;
}

.amp-wp-article-content amp-img.alignleft {
	margin: 0 1rem 1rem 0;
}

.amp-wp-article-content .lead {
	font-size: 1.25em;
	font-weight: 500;
}

.amp-wp-article-content code {
	background-color: <?php echo sanitize_hex_color( $color_light ); ?>;
	font-size: 14px;
    border-radius: 0.25rem;
    color: <?php echo sanitize_hex_color( $color_code ); ?>;
    padding: 0.1rem 0.25rem;
    word-break: break-word;
}

.amp-wp-article-content pre {
	background: #1e1e1e;
	overflow-x: auto;
	overflow-y: hidden;
    border-radius: 0.25rem;
    margin-bottom: 1.3rem;
    padding: 1rem;
}

.amp-wp-article-content pre code {
	color: <?php echo sanitize_hex_color( $white ); ?>;
	font-size: 0.875rem;
    -moz-hyphens: none;
    -moz-tab-size: 4;
    -ms-hyphens: none;
    -o-tab-size: 4;
    -webkit-hyphens: none;
    background: none;
    hyphens: none;
    line-height: 1.5;
    tab-size: 4;
    text-align: left;
    text-shadow: 0 1px rgba(0, 0, 0, 0.3);
    white-space: pre;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
}

/* Captions */

.wp-caption {
	padding: 0;
}

.wp-caption.alignleft {
	margin-right: 16px;
}

.wp-caption.alignright {
	margin-left: 16px;
}

.wp-caption .wp-caption-text {
	border-bottom: 1px solid <?php echo sanitize_hex_color( $color_border ); ?>;
	color: <?php echo sanitize_hex_color( $color_secondary ); ?>;
	font-size: .875em;
	line-height: 1.5em;
	margin: 0;
	padding: .66em 10px .75em;
}

/* AMP Media */

amp-carousel {
	background: <?php echo sanitize_hex_color( $color_border ); ?>;
	margin: 0 -16px 1.5em;
}

amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
	background: <?php echo sanitize_hex_color( $color_border ); ?>;
	margin: 0 -16px 1.5em;
}

.amp-wp-article-content amp-carousel amp-img {
	border: none;
}

amp-carousel > amp-img > img {
	object-fit: contain;
}

.amp-wp-iframe-placeholder {
	background: <?php echo sanitize_hex_color( $color_border ); ?> url( <?php echo esc_url( $this->get( 'placeholder_image_url' ) ); ?> ) no-repeat center 40%;
	background-size: 48px 48px;
	min-height: 48px;
}

/* Article Footer Meta */

.amp-wp-article-footer {
	margin: 0 1rem;
}

.amp-wp-article-footer .amp-wp-meta {
	display: block;
}

.footer-meta-tax {
	background-color: <?php echo sanitize_hex_color( $color_light ); ?>;
	border-radius: 0.25rem;
	border: solid 1px <?php echo sanitize_hex_color( $color_light ); ?>;
	display: flex;
	padding: 0.75rem;
    align-items: center;
    justify-content: space-between;
}

.amp-wp-tax-category,
.amp-wp-tax-tag {
	color: <?php echo sanitize_hex_color( $color_secondary ); ?>;
	line-height: 1.5em;
	margin: 0;
}

.amp-wp-tax-tag {
	margin-bottom: 1.375rem;
}

.amp-wp-tax-tag a {
	background-color: <?php echo sanitize_hex_color( $color_primary ); ?>;
	margin: 0.125rem 0.25rem 0.125rem 0;
	text-decoration: none;
    border-radius: 5rem;
    color: rgba(255,255,255,0.9);
    display: inline-block;
    padding: 0.1rem 0.45rem;
    word-break: break-word;
}

.amp-wp-comments-link {
	color: <?php echo sanitize_hex_color( $color_secondary ); ?>;
	line-height: 1.5;
	margin: 2.25rem 0;
}

.amp-wp-comments-link a {
	background-color: <?php echo sanitize_hex_color( $color_primary ); ?>;
	border-color: <?php echo sanitize_hex_color( $color_primary ); ?>;
	border-radius: 0.25rem;
	border-style: solid;
	border-width: 1px;
	color: <?php echo sanitize_hex_color( $white ); ?>;
	cursor: pointer;
	display: inline-block;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.5;
	margin: 0 auto;
	padding: 0.375rem 0.75rem;
	text-decoration: none;
	-webkit-transition: background-color 0.2s ease;
			transition: background-color 0.2s ease;
}

/* AMP Footer */

.amp-wp-footer {
	background-color: <?php echo sanitize_hex_color( $color_light ); ?>;
	font-size: 0.875rem;
}

.amp-wp-footer a {
	text-decoration: none;
}

.amp-wp-footer > div {
	align-items: center;
	display: flex;
	height: 80px;
	margin: 0 auto;
	max-width: <?php echo sprintf( '%dpx', $content_max_width ); ?>;
	padding: 0 1rem;
	position: relative;
    justify-content: space-between;
}

.amp-wp-footer .blog-name {
	color: <?php echo sanitize_hex_color( $color_primary ); ?>;
	font-family: 'Titillium Web', sans-serif;
	font-size: 1rem;
	font-weight: 900;
	padding-left: 0.375rem;
	text-transform: uppercase;
}

.back-to-top {
	align-items: center;
	background-color: <?php echo sanitize_hex_color( $color_primary ); ?>;
	border-color: <?php echo sanitize_hex_color( $color_primary ); ?>;
	border-radius: 50%;
	border-style: solid;
	border-width: 1px;
	display: inline-flex;
	height: 40px;
	justify-content: center;
	width: 40px;
	z-index: 9999;
    bottom: 60px;
    opacity: 0;
    position: fixed;
    right: 0.25rem;
    visibility: hidden;
}

@media screen and (min-width: 768px) {
	.back-to-top {
		right: 2rem;
	}
}

.back-to-top .icon {
	color: <?php echo sanitize_hex_color( $white ); ?>;
}

#marker {
	position: absolute;
	top: 100px;
	width: 0;
	height: 0;
}

/* higlighter.js */
.hljs {
  background: #1e1e1e;
  color: #dcdcdc;
  display: block;
  padding: 0.5em;
}

.hljs-function,
.hljs-keyword,
.hljs-literal,
.hljs-symbol,
.hljs-name {
  color: #569CD6;
}
.hljs-link {
  color: #569CD6;
  text-decoration: underline;
}

.hljs-type {
  color: gold;
}

.hljs-number,
.hljs-class {
  color: #B8D7A3;
}

.hljs-string,
.hljs-meta-string {
  color: #D69D85;
}

.hljs-regexp,
.hljs-template-tag {
  color: #9A5334;
}

.hljs-subst,
.hljs-params,
.hljs-formula {
  color: #DCDCDC;
}

.hljs-comment,
.hljs-quote {
  color: #57A64A;
}

.hljs-doctag {
  color: #608B4E;
}

.hljs-meta,
.hljs-meta-keyword,
.hljs-tag {
  color: #9B9B9B;
}

.hljs-variable,
.hljs-template-variable {
  color: #BD63C5;
}

.hljs-attr,
.hljs-attribute,
.hljs-builtin-name {
  color: #9CDCFE;
}

.hljs-section {
  color: gold;
}

.hljs-emphasis {
  font-style: italic;
}

.hljs-strong {
  font-weight: bold;
}

.hljs-title,
.hljs-bullet,
.hljs-selector-tag,
.hljs-selector-id,
.hljs-selector-class,
.hljs-selector-attr,
.hljs-selector-pseudo {
  color: #D7BA7D;
}

.hljs-addition {
  background-color: #144212;
  display: inline-block;
  width: 100%;
}

.hljs-deletion {
  background-color: #600;
  display: inline-block;
  width: 100%;
}

.hljs-built_in {
  color: #DCDCAA;
}