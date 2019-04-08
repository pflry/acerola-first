<?php 
    global $TEL;
    global $OFFICE_PARIS;
    global $OFFICE_NEUILLY;
    global $OFFICE_MONTEVRAIN;
?>

<li class="widget widget__contact">
    <h3 class="widget-title">Contactez nous</h3>
    <div class="textwidget custom-html-widget">
        <div class="contact">
            <div>
                <?php echo get_build_icon_path('phone.svg') ?> <?php echo $TEL ?>
            </div>
            <span>&bullet;</span>
            <div>
                <?php echo get_build_icon_path('email.svg') ?> <a href="/contact/">Email</a>
            </div>
        </div>
    </div>
</li>

<li class="widget widget__office">
    <h3 class="widget-title">Nos bureaux</h3>
    <div class="textwidget custom-html-widget">
        <div class="office">
            <div class="office--name"><?php echo $OFFICE_PARIS['nom'] ?></div>
            <div class="office--picto"><?php echo get_build_icon_path('business.svg') ?></div>
            <div class="office--address">
                <?php echo $OFFICE_PARIS['adresse'] ?><br><?php echo $OFFICE_PARIS['ville'] ?>
            </div>
        </div>
        <div class="office">
            <div class="office--name"><?php echo $OFFICE_NEUILLY['nom'] ?></div>
            <div class="office--picto"><?php echo get_build_icon_path('business.svg') ?></div>
            <div class="office--address">
                <?php echo $OFFICE_NEUILLY['adresse'] ?><br><?php echo $OFFICE_NEUILLY['ville'] ?>
            </div>
        </div>
        <div class="office">
            <div class="office--name"><?php echo $OFFICE_MONTEVRAIN['nom'] ?></div>
            <div class="office--picto"><?php echo get_build_icon_path('business.svg') ?></div>
            <div class="office--address">
                <?php echo $OFFICE_MONTEVRAIN['adresse'] ?><br><?php echo $OFFICE_MONTEVRAIN['ville'] ?>
        </div>
    </div>
</li>