<?php
/**
 * Template Name: Accueil
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="container page-content">
    <div class="wrapper">
        <?php
            if(get_locale() == "fr_FR"){
                Starkers_Utilities::get_template_parts( array( 'parts/content/fr-accueil') );
            }else{
                Starkers_Utilities::get_template_parts( array( 'parts/content/en-accueil') );
            }
        ?>
    </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>