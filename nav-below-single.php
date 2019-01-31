<?php 
$chevronLeft = get_build_icon_path('chevron-left.svg');
$chevronRight = get_build_icon_path('chevron-right.svg');

$excluded_terms = 'link';
?>

<nav id="nav-below" class="post-navigation" role="navigation">
    <div class="nav-next">
        <?php next_post_link( '%link', '<span class="nav-direction">'.$chevronLeft.'article suivant</span>', false, $excluded_terms); ?>
    </div>
    <div class="nav-previous">
        <?php previous_post_link( '%link', '<span class="nav-direction">article précédent'.$chevronRight.'</span>', false, $excluded_terms); ?>
    </div>
</nav>