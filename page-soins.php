<?php
/**
 * Template Name: Soins
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

        <div class="col-main">


            <div class="m-accordion">
                <ul>
                    <li class="m-accordion-container">
                        <a href="#">
                            Urgence
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>Nous offrons un service d’urgence rapide et efficace. Quel que soit la nature de votre problème ou votre inquiétude, douleur, fracture de dent, abcès, accident, orthodontie, couronne, pont ou facette décimentée, nous pourrons vous aider. En cas de difficultés, appelez-nous. Nous vous donnerons la marche à suivre ou nous vous fixerons un rendez-vous dans les plus brefs délais.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Examen dentaire
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous  compléterons votre dossier médical et votre historique de soins  dentaires. Nous procéderons à l'examen dentaire. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccal. Selon les besoins, une caméra intra-orale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic. Vous connaîtrez les solutions qui s'offrent à vous afin d'avoir une bonne santé buccale.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Soins préventifs
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>Recevoir des soins préventifs permet d'éviter certains problèmes avant qu'ils ne commencent. Parmi ces soins, un nettoyage régulier ainsi qu'un examen dentaire comprenant des radiographies sont une partie primordiale à la prévention. Pour les enfants et les adolescents, il peut être recommandé de poser des scellants dentaires. C'est une fine couche de résine, comme un vernis, que l'on applique sur les prémolaires et les molaires pour protéger de la carie.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Restaurations (obturations)
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>Les obturations dentaires permettent de réparer des lésions créées par la carie pour empêcher la  dent de se détériorer. Elles consistent à insérer un matériau dans la cavité dentaire endommagée. Plusieurs matériaux sont disponibles: l'amalgame, plombage gris (ce matériau n'est plus utilisé dans notre clinique dû à la toxicité du mercure) le composite ou la céramique CEREC. Lorsqu'il y a présence de carie, plusieurs choix s'imposent tant au type de matériau choisi qu'au choix de traitement nécessaire. Votre dentiste pourra vous guider pour prendre la décision qui vous conviendra le mieux.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Blanchiment
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>Le blanchiment dentaire en cabinet est un procédé sécuritaire qui éclaircit les colorations de l'émail et de la dentine. Au départ, des gouttières moulées spécialement pour vous seront faites. À l'aide de celles-ci, vos dents seront mises en contact avec une solution de peroxyde et ainsi redonner de l'éclat à votre sourire.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Facette, couronne et pont
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>Une facette est une mince coquille qui couvre le devant des dents. C'est un soin esthétique pour améliorer l'apparence de votre sourire. Elle peut être faite en composite ou en céramique.</p>

                            <p>Une couronne est utilisée pour restaurer la forme, l'apparence et la fonction d'une dent abîmée ou cariée. Faite de céramique, elle est fabriquée au cabinet avec la technologie CEREC ou en laboratoire. La céramique est le matériau le plus semblable à la dent au niveau de la solidité.</p>

                            <p>Le pont remplace une ou plusieurs dents manquantes. Dans le cas de la perte d'une dent, il est important de la remplacer le plus rapidement possible pour éviter que les autres dents ne se déplacent. Le pont est fabriqué de couronnes, soudées ensembles et fixées aux dents adjacentes.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Parodontie (traitement des gencives)
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>Le terme « maladie parodontale » englobe les maladies touchant les tissus de soutien des dents (parodonte). La gingivite se manifeste par des saignements lors du brossage, de l'enflure au niveau des gencives et parfois la mauvaise haleine. Il est important de la traiter rapidement pour éviter qu'elle évolue en parodontite, car les tissus de soutien des dents sont alors affectés. La parodontite est la principale cause de perte des dents chez l'adulte et peut entrainer d'autres problèmes de santé si elle n'est pas traitée (maladies cardiovasculaires, naissances prématurées). Le traitement parodontal vise à rétablir la santé des gencives.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Endodontie (traitement de canal)
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>Il est important de conserver les dents naturelles, tant que cela est possible. Le traitement de canal est un choix judicieux pour sauver une  dent vouée à l'extraction. Voici quelques exemples où le traitement de canal est indiqué : dans les cas de carie profonde qui atteint la pulpe  dentaire (portion vivante de la dent), d'une infection dentaire ou de douleur. Le traitement de canal consiste à enlever la pulpe inflammée ou infectée de la dent, de nettoyer et désinfecter le canal qui est la partie intérieure de la dent.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Chirurgie (dents de sagesse et greffes)
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>Les dents de sagesse peuvent devenir un problème à l'adolescence. Elles peuvent provoquer de la douleur, de l'infection ou pousser et déplacer les autres dents. Dans la plupart des cas, il est conseillé de les faire enlever.</p>

                            <p>Il y a deux types de greffe de gencives. La greffe autogène qui consiste à prélever un morceau de tissu dans votre propre bouche, au palais, et de le placer au site du besoin. La greffe allogène consiste à utiliser une membrane collagène comme  greffon pour le site choisi. Une greffe gingivale est généralement indiquée lors d'une récession, où la hauteur de la gencive diminue et que la racine de la dent devient exposée.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Orthodontie
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>Il n’est jamais trop tôt ou trop tard pour désirer un beau sourire et de belles dents droites. Un beau sourire, c’est possible pour tous, adulte ou enfant!</p>

                            <p>Un traitement orthodontique se fait pour différentes raisons: dents croches ou mal alignées, malocclusion ou pour améliorer l'apparence de votre sourire. Il y a le traitement conventionnel avec bagues de métal ou transparentes, ou la technologie innovatrice de Invisalign qui permet de redresser efficacement les dents sans bague, attache ou fil métallique. Invisalign utilise une technologie de visualisation tridimensionnelle par ordinateur afin de schématiser l’ensemble du traitement du début à la fin. À l’aide de ce plan, une série de gouttières personnalisées, transparentes et amovibles sont fabriquées. Chaque gouttière est portée environ 2 semaines puis remplacée par la gouttière suivante. Progressivement les dents se déplacent vers leur position définitive.</p>

                            <p>Discutez des possibilités avec votre dentiste, il saura vous conseiller!</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Implantologie
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>L'implant dentaire est le remplacement le plus naturel des dents manquantes et comporte plusieurs avantages. Selon les cas, la pose d'implants permet de combler l'espace, de ralentir la perte de masse osseuse, de se débarrasser des inconvénients reliés aux prothèses (adhésifs, inconfort, gêne, douleurs aux gencives, perte de goût des aliments, etc). Suite à la perte d'une dent, la base osseuse se rétrécie en hauteur et en largeur. Il se peut qu'une greffe soit nécessaire afin que l'implant soit mieux supporté.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Prothèse partielle ou complète
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>La prothèse partielle amovible (ou prothèse partielle) est retenue par des crochets qui s'agrippent aux dents saines voisines. Elle remplace une ou plusieurs dents et peut être enlevée pour la nuit et le nettoyage.</p>

                            <p>La prothèse complète (ou dentier) remplace toutes les dents naturelles manquantes.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Troubles articulaires (ATM)
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>L'articulation temporo-mandibulaire (ou ATM) correspond à l'articulation située entre la mâchoire inférieure et la cavité temporale (devant l'oreille). On peut éprouver des problèmes lorsque la mâchoire pivote lors de l'ouverture, de la fermeture ou d'un mouvement latéral, ce qui peut occasionner des douleurs, des craquements, de la difficulté à ouvrir et fermer la bouche, des maux d'oreilles, etc. Après évaluation en clinique, un traitement approprié améliorera et réduira l'inconfort qu'occasionnent les troubles articulaires.</p>
                        </div>
                    </li>
                </ul>
            </div>



        </div>
        <aside class="col-secondary">
            <section class="m-widget l-tech">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/widget-tech.jpg" width="306" height="204">
                <div class="content">
                    <h3>Hautes technologies</h3>
                    <p>Pour nous, vous offrir les ressources technologiques les plus performantes est primordial. En effet, c’est avec ces ressources essentielles que notre équipe de professionnels établit les diagnostics et les traitements appropriés pour mieux vous server</p>
                    <a href="/bbc/technologies" class="m-button">En savoir plus<i class="icon-caret-right"></i></a>
                </div>
            </section>
        </aside>
    </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>