<div class="filters">

    <div class="filtres">
        <button id="accordion" class="btn btn-light">
            Filtrer par secteur d'activité
            <?php echo get_build_icon_path('chevron-down.svg') ?>
        </button>
    </div>

    <div class="tri d-none">
        <button id="trier" class="btn btn-light">
            Trier <?php echo get_build_icon_path('chevron-down.svg') ?>
        </button>
    </div>
</div>

<div id="jobCategories" class="filters-content" style="display:none;">
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
    <a href="/acerola/emploi/" class="btn btn-info" id="allCategories">Tous</a>
</div>

<div id="sortTypes" class="sort-content" style="display:none;">
    <a href="" class="btn btn-info" id="allCategories">Dates croissantes</a>
    <a href="" class="btn btn-info" id="allCategories">Dates décroissantes</a>
</div>

