<?php

/**
 * Champs personnalisés
 */

add_action( 'add_meta_boxes', 'cd_meta_box_add' );

function cd_meta_box_add() {
    add_meta_box( 'acerolajob', 'Critères', 'cd_meta_box_cb', 'post', 'normal', 'high' );
}

function cd_meta_box_cb() {
    global $post;
    $values = get_post_custom( $post->ID );
    $zipcode = isset( $values['codePostal'] ) ? $values['codePostal'][0] : '';
    $place = isset( $values['ville'] ) ? $values['ville'][0] : '';
    $contract = isset( $values['contrat'] ) ? esc_attr( $values['contrat'][0] ) : '';
    $practice = isset( $values['practice'] ) ? esc_attr( $values['practice'][0] ) : '';
    $mode = isset( $values['mode'] ) ? esc_attr( $values['mode'][0] ) : '';
    $reference = isset( $values['reference'] ) ? $values['reference'][0] : '';

    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>

    <div class="form-row form-row--one">
        <div class="form-group zip">
            <label for="codePostal">Code postal</label>
            <input type="text" required pattern="[0-9]{5}" name="codePostal" id="codePostal" class="form-control" value="<?php echo $zipcode; ?>" />
        </div>

        <div class="form-group town">
            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" class="form-control" value="<?php echo $place; ?>" />
        </div>
    </div>

    <div class="form-row form-row--two">
        <div class="form-group reference">
            <label for="reference">Référence</label>
            <input type="text" name="reference" id="reference" class="form-control" value="<?php echo $reference; ?>" />
        </div>

        <div class="form-group paper">
            <label for="contrat">Type de contrat</label>
            <select name="contrat" id="contrat" class="form-control">
                <option>choisir</option>
                <option value="CDD" <?php selected( $contract, 'CDD' ); ?>>CDD</option>
                <option value="CDI" <?php selected( $contract, 'CDI' ); ?>>CDI</option>
                <option value="interim" <?php selected( $contract, 'interim' ); ?>>interim</option>
            </select>
        </div>
    </div>

    <div class="form-row form-row--three">
        <div class="form-group practice">
            <label for="practice">Expérience</label>
            <select name="practice" id="practice" class="form-control">
                <option>choisir</option>
                <option value="Débutant" <?php selected( $practice, 'Débutant' ); ?>>Débutant</option>
                <option value="Junior" <?php selected( $practice, 'Junior' ); ?>>Junior</option>
                <option value="Confirmé" <?php selected( $practice, 'Confirmé' ); ?>>Confirmé</option>
                <option value="Senior" <?php selected( $practice, 'Senior' ); ?>>Senior</option>
            </select>
        </div>

        <div class="form-group mode">
            <label for="mode">Mode de travail</label>
            <select name="mode" id="mode" class="form-control">
                <option>choisir</option>
                <option value="Temps partiel" <?php selected( $mode, 'Temps partiel' ); ?>>Temps partiel</option>
                <option value="Temps plein" <?php selected( $mode, 'Temps plein' ); ?>>Temps plein</option>
            </select>
        </div>
    </div>
    
    <?php
}

add_action( 'save_post', 'cd_meta_box_save' );

function cd_meta_box_save( $post_id ) {
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post', $post_id ) ) return;
     
    // now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
     
    // Make sure your data is set before trying to save it
    if( isset( $_POST['codePostal'] ) )
        update_post_meta( $post_id, 'codePostal', wp_kses( $_POST['codePostal'], $allowed ) );

    if( isset( $_POST['ville'] ) )
        update_post_meta( $post_id, 'ville', wp_kses( $_POST['ville'], $allowed ) );
         
    if( isset( $_POST['contrat'] ) )
        update_post_meta( $post_id, 'contrat', esc_attr( $_POST['contrat'] ) );

    if( isset( $_POST['practice'] ) )
        update_post_meta( $post_id, 'practice', esc_attr( $_POST['practice'] ) );

    if( isset( $_POST['mode'] ) )
        update_post_meta( $post_id, 'mode', esc_attr( $_POST['mode'] ) );

    if( isset( $_POST['reference'] ) )
        update_post_meta( $post_id, 'reference', wp_kses( $_POST['reference'], $allowed ) );
}

?>