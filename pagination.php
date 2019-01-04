<?php
/**
 * The template for displaying the pagination
 *
 * Displays the pagination in posts list
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?><?php 
    $chevronleft = get_build_icon_path('chevron-left.svg');
    $chevronright = get_build_icon_path('chevron-right.svg');
    
    the_posts_pagination( array(
        'prev_text' => $chevronleft,
        'next_text' => $chevronright,
    ) );
?>