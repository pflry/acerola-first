<?php 
$chevronLeft = get_build_icon_path('chevron-left.svg');
$chevronRight = get_build_icon_path('chevron-right.svg');
$format_next = '<span class="nav-direction">'.$chevronLeft.'article suivant</span>';
$format_previous = '<span class="nav-direction">article précédent'.$chevronRight.'</span>';
$excluded_terms = get_cat_ID( 'lien' );
?>

<nav id="nav-below" class="post-navigation" role="navigation">
    <div class="nav-next">
        <?php next_post_link( '%link', $format_next, false, $excluded_terms); ?>
    </div>
    <div class="nav-previous">
        <?php previous_post_link( '%link', $format_previous, false, $excluded_terms); ?>
    </div>
</nav>