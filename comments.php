<?php
/**
 * The template for displaying comments
 *
 * Displays the comments at the end of single post.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<section id="comments" class="comments">
    <?php 
    if ( have_comments() ) : 
        global $comments_by_type;
        $comments_by_type = &separate_comments( $comments );
    if ( ! empty( $comments_by_type['comment'] ) ) : 
    ?>
    <section id="comments-list" class="comments-">
        <h3 class="comments-title"><?php comments_number(); ?></h3>
        <?php if ( get_comment_pages_count() > 1 ) : ?>
        <nav id="comments-nav-above" class="comments-navigation" role="navigation">
            <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
        </nav>
        <?php endif; ?>
        <ul>
            <?php wp_list_comments( array( 'avatar_size' => 40 ) ); ?>
            <?php /*wp_list_comments( 'type=comment' );*/ ?>
        </ul>
        <?php if ( get_comment_pages_count() > 1 ) : ?>
        <nav id="comments-nav-below" class="comments-navigation" role="navigation">
            <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
        </nav>
        <?php endif; ?>
    </section>
    <?php 
    endif; 
    if ( ! empty( $comments_by_type['pings'] ) ) : 
    $ping_count = count( $comments_by_type['pings'] ); 
    ?>
    <section id="trackbacks-list" class="comments-track">
        <h3 class="comments-title"><?php echo '<span class="ping-count">' . $ping_count . '</span> ' . ( $ping_count > 1 ? __( 'Trackbacks', 'pflry' ) : __( 'Trackback', 'pflry' ) ); ?></h3>
        <ul>
            <?php wp_list_comments( 'type=pings&callback=pflry_custom_pings' ); ?>
        </ul>
    </section>
    <?php 
    endif; 
    endif;
    $fields =  array(
        'author' =>
            '<div class="form-group"><label for="author">' . __( 'Nom', 'domainreference' ) .
            ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" class="form-control"' . $aria_req . ' /></div>',

        'email' =>
            '<div class="form-group"><label for="email">' . __( 'Email', 'domainreference' ) .
            ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
            '<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" class="form-control"' . $aria_req . ' /></div>',

        'url' => '',
    );
    $comments_args = array(
        'class_submit' => 'btn btn-primary',
        'comment_field' => '<div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br><textarea id="comment" name="comment" aria-required="true" rows="6" class="form-control"></textarea></div>',
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    );
    if ( comments_open() ) comment_form($comments_args);
    ?>
</section>