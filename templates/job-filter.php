<div class="filters">
    <button id="accordion" class="btn">Filtrer par catégorie</button>
    <div id="jobCategories" class="content" style="display:none;">
        
        <?php   
        $categories = get_categories( array(
            'orderby' => 'name',
            'parent'  => 0
        ) );
        
        foreach ( $categories as $category ) {
            printf( '<a href="%1$s" class="btn btn-info">%2$s</a>',
                esc_url( get_category_link( $category->term_id ) ),
                esc_html( $category->name )
            );
        }
        ?>
        <a href="/acerola/emploi/" class="btn btn-info">Toutes catégories</a>
    </div>
</div>