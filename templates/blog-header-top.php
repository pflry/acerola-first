<?php 
    global $TEL;
?>
<section id="blogHeaderTop" class="blog-header__top">
    <div class="container">
        
        <div class="top-contact">
            <span class="signature">acérola carrière</span>
            <span class="agence">
                Paris
                <span class="bullet">&bullet;</span>
                Neuilly-Plaisance
                <span class="bullet">&bullet;</span>
                Montévrain
            </span>
            <span class="contact-telephone">
                <?php echo get_build_icon_path('phone.svg') ?> <?php echo $TEL ?>
            </span>
            <span class="contact-email">
                <?php echo get_build_icon_path('email.svg') ?> <a href="https://www.acerolacarriere.fr/contact/">contact</a>
            </span>
        </div>

        <div class="top-social">
            <a href="https://www.facebook.com/acerolacarriere" class="facebook" target="_blank">
                <?php echo get_build_icon_path('facebook.svg') ?>
            </a>
            <a href="https://twitter.com/AcerolaCarriere" class="twitter" target="_blank">
                <?php echo get_build_icon_path('twitter.svg') ?>
            </a>
            <a href="https://www.linkedin.com/profile/view?id=222313042" class="linkedin" target="_blank">
                <?php echo get_build_icon_path('linkedin.svg') ?>
            </a>
            <a href="http://www.viadeo.com/profile/002l8hk33l3bnvr" class="viadeo" target="_blank">
                <?php echo get_build_icon_path('viadeo.svg') ?>
            </a>
        </div>
    </div>
</section>