<?php
/**
 * Template for displaying search forms
 *
 * Display search form in mobile menu
 * 
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Recherche', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit btn"><?php echo get_build_icon_path('search.svg') ?></button>
</form>
