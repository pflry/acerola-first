<?php
/**
 * The template for displaying the download plaquette widgets
 *
 * Displays the download plaquette widget in sidebar.
 *
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

?>

<?php $plaquettePath = get_post_custom_values('plaquette');
    if($plaquettePath[0]) { ?>
    <li class="widget widget__download">
        <div class="">
            <?php echo get_build_icon_path('file.svg'); ?>
            <a href="<?php echo $plaquettePath[0] ?>">Téléchargez notre plaquette<br>&laquo;&nbsp;<?php echo esc_html( get_the_title() ) ?>&nbsp;&raquo;</a>
        </div>
    </li>
<?php } ?>