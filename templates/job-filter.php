<div class="filters">
    <button id="accordion" class="btn">Filtrer par secteur d'activité</button>
    <div id="jobCategories" class="content" style="display:none;">
        
        <?php   
        $categories = get_categories( array(
            'orderby' => 'name',
            'parent'  => 0
        ) );
        
        foreach ( $categories as $category ) {
            printf( '<a href="%1$s" class="btn btn-info" id="%2$s">%3$s</a>',
                esc_url( get_category_link( $category->term_id ) ),
                esc_html( $category->slug ),
                esc_html( $category->name )
            );
        }
        ?>
        <a href="/acerola/emploi/" class="btn btn-info" id="allCategories">Toutes catégories</a>
    </div>
</div>