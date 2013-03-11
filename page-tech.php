<?php
/**
 * Template Name: Technologies
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
            <h2><?php the_title(); ?></h2>
            <?php
                $subtitle = get_post_meta($post->ID, 'subtitle', true);
                if($subtitle){
                    echo "<h3>" . $subtitle . "</h3>";
                }
            ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>


        <section class="col-main">
            <h4>Haute technologie</h4>
            <p>Pour nous, vous offrir les ressources technologiques les plus performantes est primordial. En effet, c’est avec ces ressources essentielles que notre équipe de professionnels établit les diagnostics et les traitements appropriés pour mieux vous servir.</p>
            <ul class="bullet tech-list">
                <li>Le <strong>CEREC 3</strong> est un système de restauration informatisée permettant la confection de couronnes, de facettes et d'incrustations de céramique. Ce matériau est biocompatible, durable et offre une apparence des plus naturelle. En outre, il n'y a pas d'attente auprès du laboratoire, puisque tout se fait en une seule visite.</li>
                <li>La <strong>radiographie numérique</strong> offre les mêmes avantages que la radiographie traditionnelle, en n'utilisant que le tiers des radiations. Donc, si l'exposition aux radiations vous préoccupe, ce type de radiographie est tout indiqué! De plus, elle permet d'obtenir, en quelques secondes, une image précise que nous conservons au dossier.</li>
                <li>Le <strong>laser Periowave</strong> est un laser spécialisé pour les traitements de parodontie (gencives).</li>
                <li>L'<strong>abrasion à l’air</strong> (air abrasion) est un technique permettant de faire de petites obturations sans anesthésie.</li>
                <li>Le « <strong>TENSE</strong> » est un appareil servant à diminuer les tensions dans les muscles de la mâchoire.</li>
            </ul>
        </section>
        <aside class="col-secondary">
            <section class="m-widget l-soins">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/widget-soin.jpg">
                <div class="content">
                    <h3>Soins offerts selon vos besoins</h3>
                    <p>De l’équipement à la fine pointe de la technologie. Pour nous, vous offrir les ressources technologiques les plus performantes est primordial. En effet, c’est avec ces ressources essentielles que notre équipe de professionnels établit les diagnostics et les traitements appropriés pour mieux vous servir.</p>
                    <a href="#" class="m-button">En savoir plus<i class="icon-caret-right"></i></a>
                </div>
            </section>
        </aside>
        <section>
            <h4>Centre de stérilisation</h4>
            <div class="col-left">
                <p>Tout comme vous, le personnel de la Clinique dentaire Bouchard et Bélanger accorde une importance absolue au respect des plus hauts standards d’hygiène et de stérilisation.</p>
                <p><img src="<?php echo get_bloginfo('template_url') ?>/img/content-sterilisation.jpg"></p>
            </div>
            <div class="col-right">
                <p>Tous les instruments et toutes les pièces à main utilisés sont déposés dans un contenant destiné à la décontamination. Ce contenant est d’abord placé dans un appareil qui exécute une première stérilisation à 93 °C pendant une heure. À leur sortie, les instruments sont ensuite emballés, placés dans un autre appareil pendant une heure supplémentaire à 132 °C, puis ils sont placés dans un séchoir avant de pouvoir être réutilisés.</p>
                <p>Tout ce qui est non stérilisable ou non jetable est désinfecté et recouvert d’une pellicule de plastique, qui est changée après chaque visite. Les fauteuils et les comptoirs sont également nettoyés et désinfectés entre chaque patient. Par ailleurs, les conduites d’eau qui approvisionnent les appareils dentaires sont traitées périodiquement à l’aide d’un nettoyant antibactérien.</p>
                <p>Ces normes d’hygiène sont vérifiées et mises à jour régulièrement pour votre sécurité et votre plus grand confort.</p>
            </div>
        </section>

    </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>