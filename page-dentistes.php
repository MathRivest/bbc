<?php
/**
 * Template Name: Dentistes
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

<div class="container">
    <div class="wrapper">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="entry-content">
                <h2><?php the_title(); ?></h2>
                <?php
                    $subtitle = get_post_meta($post->ID, 'subtitle', true);
                    if($subtitle){
                        echo "<h3>" . $subtitle . "</h3>";
                    }
                ?>
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>

        <?php
            if(get_locale() == "fr_FR"){
                Starkers_Utilities::get_template_parts( array( 'parts/content/fr-dentistes') );
            }else{
                Starkers_Utilities::get_template_parts( array( 'parts/content/en-dentistes') );
            }
        ?>

    </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>