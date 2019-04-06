<?php

/**
 * Champs personnalisés Formation
 */

add_action( 'add_meta_boxes', 'training_meta_box_add' );

function training_meta_box_add() {
    add_meta_box( 'acerolatraining', 'Modalités de la formation', 'training_meta_box_cb', 'post', 'normal', 'high' );
}

function training_meta_box_cb() {
    global $post;
    $values = get_post_custom( $post->ID );
    $duration = isset( $values['duree'] ) ? $values['duree'][0] : '';
    $price = isset( $values['prix'] ) ? $values['prix'][0] : '';
    $period = isset( $values['dates'] ) ? $values['dates'][0] : '';
    $place = isset( $values['lieu'] ) ? $values['lieu'][0] : '';
    $type = isset( $values['type'] ) ? esc_attr( $values['type'][0] ) : '';
    $reference = isset( $values['reference'] ) ? $values['reference'][0] : '';
    $instructor = isset( $values['instructor'] ) ? $values['instructor'][0] : '';
    $options = isset( $values['option'] ) ? $values['option'][0] : '';

    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>

    <div class="form-row form-row--one">
        <div class="form-group reference">
            <label for="reference">Référence</label>
            <input type="text" name="reference" id="reference" class="form-control" value="<?php echo $reference; ?>" />
        </div>

        <div class="form-group longueur">
            <label for="duree">Durée</label>
            <input type="text" name="duree" id="duree" class="form-control" value="<?php echo $duration; ?>" />
        </div>

        <div class="form-group tarif">
            <label for="prix">Tarif</label>
            <input type="text" name="prix" id="prix" class="form-control" value="<?php echo $price; ?>" />
        </div>
    </div>


    <div class="form-row form-row--two">
        <div class="form-group periodes">
            <label for="dates">Dates</label>
            <!-- <input type="text" name="dates" id="dates" class="form-control" value="<?php echo $period; ?>" /> -->
            <textarea name="dates" id="dates" class="form-control" rows="4"><?php echo $period; ?></textarea>
        </div>

        <div class="form-group ville">
            <label for="lieu">Lieu(x)</label>
            <!-- <input type="text" name="lieu" id="lieu" class="form-control" value="<?php echo $place; ?>" /> -->
            <textarea name="lieu" id="lieu" class="form-control" rows="4"><?php echo $place; ?></textarea>
        </div>
    </div>

    <div class="form-row form-row--three">
        <div class="form-group formateur">
            <label for="instructor">Formateur</label>
            <input type="text" name="instructor" id="instructor" class="form-control" value="<?php echo $instructor; ?>" />
        </div>

        <div class="form-group option">
            <label for="option">Option(s)</label>
            <input type="text" name="option" id="option" class="form-control" value="<?php echo $options; ?>" />
        </div>

        <div class="form-group type">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control">
                <option>choisir</option>
                <option value="intra ou inter entreprise" <?php selected( $type, 'intra ou inter-entreprise' ); ?>>intra ou inter entreprise</option>
                <option value="intra-entreprise" <?php selected( $type, 'intra-entreprise' ); ?>>intra-entreprise</option>
                <option value="inter-entreprise" <?php selected( $type, 'inter-entreprise' ); ?>>inter-entreprise</option>
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
    if( isset( $_POST['duree'] ) )
        update_post_meta( $post_id, 'duree', wp_kses( $_POST['duree'], $allowed ) );

    if( isset( $_POST['prix'] ) )
        update_post_meta( $post_id, 'prix', wp_kses( $_POST['prix'], $allowed ) );
         
    if( isset( $_POST['dates'] ) )
        update_post_meta( $post_id, 'dates', wp_kses( $_POST['dates'],$allowed ) );

    if( isset( $_POST['lieu'] ) )
        update_post_meta( $post_id, 'lieu', wp_kses( $_POST['lieu'],$allowed ) );

    if( isset( $_POST['type'] ) )
        update_post_meta( $post_id, 'type', wp_kses( $_POST['type'],$allowed ) );

    if( isset( $_POST['reference'] ) )
        update_post_meta( $post_id, 'reference', wp_kses( $_POST['reference'], $allowed ) );

    if( isset( $_POST['instructor'] ) )
        update_post_meta( $post_id, 'instructor', wp_kses( $_POST['instructor'], $allowed ) );

    if( isset( $_POST['option'] ) )
        update_post_meta( $post_id, 'option', esc_attr( $_POST['option'] ) );
}

?>