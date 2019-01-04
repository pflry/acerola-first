<?php 
$chevronLeft = get_build_icon_path('chevron-left.svg');
$chevronRight = get_build_icon_path('chevron-right.svg');
?>

<nav id="nav-below" class="post-navigation" role="navigation">
    <div class="nav-previous"><?php previous_post_link( '%link', '<span class="nav-direction">'.$chevronLeft.'article précédent</span><span class="nav-title">%title</span>', TRUE ); ?></div>
    <div class="nav-next"><?php next_post_link( '%link', '<span class="nav-direction">article suivant'.$chevronRight.'</span><span class="nav-title">%title</span>', TRUE ); ?></div>
</nav>