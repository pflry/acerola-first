<div class="social-bar-jobs">
    <div class="social-bar">
        <?php 
            $social_link = get_the_permalink();
            $social_title = get_the_title();
        ?>
        <div class="share"><?php echo get_build_icon_path('share.svg'); ?></div>
        <div class="facebook">
            <a target="_blank" title="Partager l'annonce sur Facebook" href="https://www.facebook.com/sharer.php?u='<?php echo $social_link; ?>'&t='<?php echo $social_title; ?>'" rel="nofollow">
                <?php echo get_build_icon_path('facebook.svg'); ?>
            </a>
        </div>
        <div class="twitter">
            <a target="_blank" title="Partager l'annonce sur Twitter" href="https://twitter.com/share?url='<?php echo $social_link; ?>'&text='<?php echo $social_title; ?>'&via=Acerola" rel="nofollow">
                <?php echo get_build_icon_path('twitter.svg'); ?>
            </a>
        </div>
        <div class="linkedin">
            <a target="_blank" title="Partager l'annonce sur LinkedIn" href="https://www.linkedin.com/shareArticle?mini=true&url='<?php echo $social_link; ?>'&title='<?php echo $social_title; ?>'" rel="nofollow">
                <?php echo get_build_icon_path('linkedin.svg'); ?>
            </a>
        </div>
        <div class="viadeo">
            <a target="_blank" title="Partager l'annonce sur Viadéo" href="http://www.viadeo.com/shareit/share/?url='<?php echo $social_link; ?>'" rel="nofollow">
                <?php echo get_build_icon_path('viadeo.svg'); ?>
            </a>
        </div>
        <div class="email">
            <a target="_blank" title="Partager l'annonce par E-mail" href="mailto:?subject='<?php echo $social_title; ?>'&body='<?php echo $social_link; ?>'" rel="nofollow">
                <?php echo get_build_icon_path('email.svg'); ?>
            </a>
        </div>
    </div>
    <div class="apply-job">
        <a href="" class="btn btn-black">Postuler</a>
    </div>
</div>
