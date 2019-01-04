<?php

/**
 * Comments functions
 *
 * @package WordPress
 * @subpackage PFLRYGULP
 * @since 1.0
 */

/**
 * Get comments number
 */
add_filter( 'get_comments_number', 'pflrygulp_comments_number' );

function pflrygulp_comments_number( $count ) {
    if ( !is_admin() ) {
        global $id;
        $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
        return count( $comments_by_type['comment'] );
    } else {
        return $count;
    }
}

/** 
 * Enqueue comment-reply.js
 */
add_action( 'comment_form_before', 'pflrygulp_enqueue_comment_reply_script' );

function pflrygulp_enqueue_comment_reply_script() {
    if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}


function pflrygulp_custom_pings( $comment ) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php 
}

/**
 * No HTML tags in comments
 */ 
add_filter('comment_text', 'wp_filter_nohtml_kses');
add_filter('comment_text_rss', 'wp_filter_nohtml_kses');
add_filter('comment_excerpt', 'wp_filter_nohtml_kses');

?>