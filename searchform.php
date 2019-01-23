<?php
/**
 * Template for displaying search forms
 *
 * 
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="search-field form-control" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit btn btn-success">Rechercher</button>
</form>
