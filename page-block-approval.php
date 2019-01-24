<?php
/**
 * The template for displaying the approval block in page
 *
 * Displays the approval block in page.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?>

<section class="entry-approval">
    <div class="container">
        <div class="entry-approval__content">
            <div class="approval-title">
                <h4 class="title">Nos agréments</h4>
            </div>
            <div class="carousel">
                <a href="https://www.fongecif-idf.fr/" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_build_img_path('logo-fongecif.png') ?>" alt="Fongecif">
                </a>
                <a href="https://www.afdas.com/" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_build_img_path('logo-afdas.png') ?>" alt="Afdas">
                </a>
                <a href="https://www.data-dock.fr/" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_build_img_path('logo-datadock.png') ?>" alt="Datadock">
                </a>
                <a href="http://www.agefos-pme.com/" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_build_img_path('logo-agefos.jpg') ?>" alt="Agefos PME">
                </a>
                <a href="http://www.opcalia.com/" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_build_img_path('logo-opcalia.png') ?>" alt="Opcalia">
                </a>
            </div>
        </div> 
    </div>
</section>