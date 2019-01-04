<?php
/**
 * Template for displaying search forms
 *
 *
 * @package WordPress
 * @subpackage PFLRYGULP
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Recherche', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit btn"><?php echo get_build_icon_path('search.svg') ?></button>
</form>
