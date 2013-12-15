<?php
/**
 * Template Name: Urgences
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



        <section class="col-main">
            <h4>Urgences</h4>
            <!-- <p>Pour nous, vous offrir les ressources technologiques les plus performantes est primordial. En effet, c’est avec ces ressources essentielles que notre équipe de professionnels établit les diagnostics et les traitements appropriés pour mieux vous servir.</p> -->
            
        </section>
        <aside class="col-secondary">
            <section class="m-widget l-soins">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/widget-soin.jpg">
                <div class="content">
                    <h3>Soins offerts selon vos besoins</h3>
                    <p>Nous vous offrons une gamme complète de soins, disponibles sur place, dans un environnement combinant confort et haute technologie.</p>
                    <a href="/bbc/soins-services" class="m-button">En savoir plus<i class="icon-caret-right"></i></a>
                </div>
            </section>
        </aside>


    </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>