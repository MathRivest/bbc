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
                            Nettoyage et examen dentaire
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Soins préventifs
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Traitement de blanchiment
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Dentisterie esthétique
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Facette, couronne et pont
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Parodontie
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Endodontie
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Restaurations
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Chirurgie et greffe
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Orthodontie
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Implantologie
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Prothèse partielle ou complète
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                    <li class="m-accordion-container">
                        <a href="#">
                            Troubles articulaires
                            <i class="icon-caret-right"></i>
                        </a>
                        <div class="m-accordion-content">
                            <p>À votre arrivée, nous compléterons votre dossier médical et votre historique de soins dentaires.  Le nettoyage et l'examen dentaire sera complété. L'examen comprend des radiographies numériques, l'examen des dents, des os, des gencives, du palais et de la langue, ainsi que le dépistage du cancer buccale. Selon vos besoins une caméra intraorale peut être utilisée pour vous permettre de visualiser sur écran ce que le dentiste vous explique et vous permettre de bien comprendre le diagnostic.</p>
                        </div>
                    </li>
                </ul>
            </div>



        </div>
        <aside class="col-secondary">
            <section class="m-widget l-tech">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/widget-tech.jpg">
                <div class="content">
                    <h3>Haute technologie</h3>
                    <p>De l’équipement à la fine pointe de la technologie. Pour nous, vous offrir les ressources technologiques les plus performantes est primordial. En effet, c’est avec ces ressources essentielles que notre équipe de professionnels établit les diagnostics et les traitements appropriés pour mieux vous servir.</p>
                    <a href="/bbc/technologies" class="m-button">En savoir plus<i class="icon-caret-right"></i></a>
                </div>
            </section>
        </aside>
    </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>