<?php
/**
 * The template meta part of single job post
 *
 * Displays the metas part of a single job post.
 * This template is include in entry single job template.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v19
 */

?>
<?php 
    $meta_ref = get_post_meta( get_the_ID(), 'reference', true );
    $meta_cp = get_post_meta( get_the_ID(), 'codePostal', true );
    $meta_ville = get_post_meta( get_the_ID(), 'ville', true );
    $meta_contrat = get_post_meta( get_the_ID(), 'contrat', true );
    $meta_exp = get_post_meta( get_the_ID(), 'practice', true );
    $meta_mode = get_post_meta( get_the_ID(), 'mode', true );

    $category = get_the_category($post->ID);
    $meta_cat = $category[0]->cat_name;
?>

<section class="entry-meta">
    <div class="entry-meta__date">
        <?php  
            $dateShort = get_the_date( 'j M. Y' );
            $dateLong = get_the_date( 'j F Y' );
        ?>
        <div class="text-muted">Date publication</div>
        <span class="entry-date entry-date--long"><?php echo $dateLong ?></span>
        <span class="entry-date entry-date--short"><?php echo $dateShort ?></span>
    </div>

    <div class="entry-meta__place">
        <div class="text-muted">Lieu de poste</div>
        <span><?php echo $meta_cp ?>&nbsp;<?php echo $meta_ville ?></span>
    </div>

    <div class="entry-meta__contract">
        <div class="text-muted">Type de contrat</div>
        <span><?php echo $meta_contrat ?></span>
    </div>
</section>
    
<section class="entry-meta">
    <div class="entry-meta__cat">
        <div class="text-muted">Secteur d'activité</div>
        <span><?php echo $meta_cat ?></span>
    </div>

    <div class="entry-meta__practice">
        <div class="text-muted">Expérience</div>
        <span class="meta-practice"><?php echo $meta_exp ?></span>
    </div>
    
    <div class="entry-meta__mode">
        <div class="text-muted">Mode horaire</div>
        <span><?php echo $meta_mode ?></span>
    </div>
</section>

<section class="entry-meta">
    <div class="entry-meta__ref">
        <div class="text-muted">Référence de l'offre</div>
        <span><?php echo $meta_ref ?></span>
    </div>
</section>
