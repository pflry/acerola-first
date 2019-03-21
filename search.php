<?php
if(isset($_GET['site_section'])) :
    $type = $_GET['site_section'];
    if($type == 'emploi') :
        get_template_part( 'templates/search-jobs' );
    else :
        get_template_part( 'templates/search-global' );
    endif;
else :
    get_template_part( 'templates/search-global' );
endif;
?>