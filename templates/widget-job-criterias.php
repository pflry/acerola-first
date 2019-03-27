<?php 
    $meta_ref = get_post_meta( get_the_ID(), 'reference', true );
    $meta_cp = get_post_meta( get_the_ID(), 'codePostal', true );
    $meta_ville = get_post_meta( get_the_ID(), 'ville', true );
    $meta_contrat = get_post_meta( get_the_ID(), 'contrat', true );
    $meta_exp = get_post_meta( get_the_ID(), 'practice', true );
    $meta_mode = get_post_meta( get_the_ID(), 'mode', true );
    $meta_nbpostes = get_post_meta( get_the_ID(), 'nbPostes', true );
    $meta_debut = get_post_meta( get_the_ID(), 'start', true );

    $date = get_the_date( 'j F Y' );
    $category = get_the_category($post->ID);
    $meta_cat = $category[0]->cat_name;
?>

<li class="widget widget__job-criterias">
    <h3 class="widget-title">Résumé de l'offre</h3>
    <div class="textwidget custom-html-widget">
        
    <?php if ($meta_ref !='') : ?>
        <div class="entry-meta entry-meta__ref">
            <div class="meta-picto">
                <?php echo get_build_icon_path('tag-line.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Référence</div>
                <span><?php echo $meta_ref ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($date !='') : ?>
        <div class="entry-meta entry-meta__date">
            <div class="meta-picto">
                <?php echo get_build_icon_path('clock.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Date publication</div>
                <span class="entry-date"><?php echo $date ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_cp !='' || $meta_ville !='') : ?>
        <div class="entry-meta entry-meta__place">
            <div class="meta-picto">
                <?php echo get_build_icon_path('map-pin2.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Lieu de poste</div>
                <span><?php echo $meta_cp ?>&nbsp;<?php echo $meta_ville ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_cat !='') : ?>
        <div class="entry-meta entry-meta__cat">
            <div class="meta-picto">
                <?php echo get_build_icon_path('pie-chart.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Secteur d'activité</div>
                <span><?php echo $meta_cat ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_contrat !='') : ?>
        <div class="entry-meta entry-meta__contract">
            <div class="meta-picto">
                <?php echo get_build_icon_path('file-text.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Type de contrat</div>
                <span><?php echo $meta_contrat ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_exp !='') : ?>
        <div class="entry-meta entry-meta__practice">
            <div class="meta-picto">
                <?php echo get_build_icon_path('briefcase.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Expérience</div>
                <span class="meta-practice"><?php echo $meta_exp ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_mode !='') : ?>
        <div class="entry-meta entry-meta__mode">
            <div class="meta-picto">
                <?php echo get_build_icon_path('watch.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Mode horaire</div>
                <span><?php echo $meta_mode ?></span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($meta_nbpostes !='') : ?>
        <div class="entry-meta entry-meta__nbjobs">
            <div class="meta-picto">
                <?php echo get_build_icon_path('user-line.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Poste(s) à pourvoir</div>
                <span>
                    <?php 
                    if ($meta_nbpostes < 2):
                        echo $meta_nbpostes."&nbsp;poste";
                    else:
                        echo $meta_nbpostes."&nbsp;postes";
                    endif;
                    ?>
                </span>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if ($meta_debut !='') : ?>
        <div class="entry-meta entry-meta__start">
            <div class="meta-picto">
                <?php echo get_build_icon_path('calendar-line.svg') ?>
            </div>
            <div class="meta-content">
                <div class="text-muted">Début du contrat</div>
                <span><?php echo $meta_debut ?></span>
            </div>
        </div>
        <?php endif; ?>
    </div>
</li>