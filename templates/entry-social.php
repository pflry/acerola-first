<div class="social-bar">
    <?php 
        $social_link = get_the_permalink();
        $social_title = get_the_title();
    ?>
    <div class="acerola">
        <a href="https://www.acerolacarriere.fr/contact/" title="Contacter Acérola Carrière">
            <?php echo get_build_icon_path('logo-acerola-filet.svg') ?>
        </a>
    </div>
    <div class="facebook">
        <a target="_blank" title="Partager sur Facebook" href="https://www.facebook.com/sharer.php?u='<?php echo $social_link; ?>'&t='<?php echo $social_title; ?>'" rel="nofollow">
            <?php echo get_build_icon_path('facebook.svg'); ?>
            <span class="title">Facebook</span>
        </a>
    </div>
    <div class="twitter">
        <a target="_blank" title="Partager sur Twitter" href="https://twitter.com/share?url='<?php echo $social_link; ?>'&text='<?php echo $social_title; ?>'&via=Acerola" rel="nofollow">
            <?php echo get_build_icon_path('twitter.svg'); ?>
            <span class="title">Twitter</span>
        </a>
    </div>
    <div class="linkedin">
        <a target="_blank" title="Partager sur LinkedIn" href="https://www.linkedin.com/shareArticle?mini=true&url='<?php echo $social_link; ?>'&title='<?php echo $social_title; ?>'" rel="nofollow">
            <?php echo get_build_icon_path('linkedin.svg'); ?>
            <span class="title">Linkedin</span>
        </a>
    </div>
    <div class="viadeo">
        <a target="_blank" title="Partager sur Viadéo" href="http://www.viadeo.com/shareit/share/?url='<?php echo $social_link; ?>'" rel="nofollow">
            <?php echo get_build_icon_path('viadeo.svg'); ?>
            <span class="title">Viadeo</span>
        </a>
    </div>
    <div class="email">
        <a target="_blank" title="Partager par E-mail" href="mailto:?subject='<?php echo $social_title; ?>'&body='<?php echo $social_link; ?>'" rel="nofollow">
            <?php echo get_build_icon_path('email.svg'); ?>
            <span class="title">Email</span>
        </a>
    </div>
</div>