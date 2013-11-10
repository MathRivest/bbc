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


        <div class="m-equipe">
            <div class="dentiste">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/dentiste-yve-bouchar.jpg">
                <h3>Dr. Yves Bouchard</h3>
                <p class="sous-titre">Chirurgien dentiste et associé</p>
                <!-- <ul class="bullet">
                    <li>Dentisterie esthétique</li>
                    <li>Restauration CEREC 3</li>
                    <li>Parodontie</li>
                    <li>Chirurgie et greffe</li>
                </ul> -->
                <div class="description">
                    <p>Yves Bouchard obtient son doctorat en médecine dentaire en1981 et depuis poursuit de nombreuses formations dont le programme complet au LD Pankey Institute orienté vers une approche globale de l’appareil masticatoire. Il a intégré l’approche CEREC pour ensuite devenir spécialiste-formateur. Grand passionné et à l'esprit entrepreneur, Yves fonde la clinique dentaire Yves Bouchard en 1983, puis l'équipe s'agrandit pour devenir la clinique dentaire Bouchard-Bélanger-Cyr. Au fil de ces quelques 30 années, passion, connaissances, professionnalisme et engagement sont au rendez-vous pour permettre à ses patients de recevoir toute l'information requise afin de prendre une décision éclairée et appropriée non seulement pour leur santé dentaire, mais également pour orner leur bouche d'un sourire dont ils peuvent être fiers!</p>
                    <!-- <a href="#" class="m-button">Lire la suite<i class="icon-caret-down"></i></a> -->
                </div>
            </div>
            <div class="dentiste">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/dentiste-chantale-belanger.jpg">
                <h3>Dre. Chantale Bélanger</h3>
                <p class="sous-titre">Chirurgienne dentiste et associée</p>
                <!-- <ul class="bullet">
                    <li>CEREC 3</li>
                    <li>Orthodontie</li>
                    <li>Troubles articulaires</li>
                </ul> -->
                <div class="description">
                    <p>Devenue hygiéniste dentaire en 1983, elle pousse sa passion et obtient son doctorat en médecine dentaire en1994. Elle s'intéresse rapidement à l'orthodontie. Pendant 4 ans, elle complétera un cours en orthodontie et orthopédie myofonctionnelle et depuis 2007, elle a aussi intégré la méthode Invisalign. Puis elle poursuit une formation en dentisterie neuro-musculaire au célèbre Las Vegas Institute. Elle se distingue par une approche humaine et attentionnée. Face à l'avancement de la technologie et l'évolution constante de la dentisterie, elle se doit d'être au même diapason. Toujours en quête de bien servir ses patients et de leur prodiguer des soins diversifiés pour optimiser leur santé dentaire. Elle s'est entourée d'une équipe qualifiée qu'elle vous invite à rencontrer.</p>
                    <!-- <a href="#" class="m-button">Lire la suite<i class="icon-caret-down"></i></a> -->
                </div>
            </div>
            <div class="dentiste last">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/dentiste-marie-eve-cyr.jpg">
                <h3>Dre. Marie-Eve Cyr</h3>
                <p class="sous-titre">Chirurgienne dentiste et associée</p>
                <!-- <ul class="bullet">
                    <li>Implantologie</li>
                    <li>Analgésie relative</li>
                    <li>CEREC 3</li>
                    <li>Chirurgie (dents de sagesse)</li>
                </ul> -->
                <div class="description">
                    <p>Depuis qu'elle a fait son choix de carrière, Dre Marie-Eve Cyr est toujours aussi passionnée d'exercer sa profession. Ses connaissances se perfectionnent constamment avec de nombreuses formations continues, afin d'offrir des services à la fine pointe et de demeurer au fait des nouveautés. C'est en poursuivant cet objectif qu’elle complète une résidence multidisciplinaire à la suite de l’obtention de son doctorat en médecine dentaire en 2002, puis gradue de l’Institut Canadien d’Implantologie quelques années plus tard.  L'équipe attentionnée de Marie-Eve Cyr saura créer un climat de confiance en prenant soin d'expliquer les traitements, d'écouter vos commentaires et répondre à vos questions, et ce dans le but de rendre votre séjour le plus agréable possible.</p>
                    <!-- <a href="#" class="m-button">Lire la suite<i class="icon-caret-down"></i></a> -->
                </div>
            </div>
            <div class="dentiste full">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/dentiste-eliste-labrecque.jpg">
                <h3>Dre. Elise M. Labrecque</h3>
                <p class="sous-titre">Chirurgienne dentiste</p>
                <!-- <ul class="bullet">
                    <li>Dentisterie esthétique</li>
                    <li>Restauration CEREC 3</li>
                    <li>Parodontie</li>
                    <li>Chirurgie et greffe</li>
                </ul> -->
                <div class="description">
                    <p>C'est à l'Université Laval que Dre Élise M. Labrecque a complété son doctorat en médecine dentaire en 2010. Elle poursuit ensuite sa formation en obtenant un certificat de résidence multidisciplinaire de l'Université de Montréal, ce qui lui donne l'occasion de réaliser des traitements complexes et diversifiés. Elle place réellement le bien-être du patient au centre de sa pratique et accorde une grande importance à la communication avec ce dernier. Elle s'assure invariablement que le patient ait bien compris toutes les implications et alternatives aux différents traitements. Depuis l'automne 2011, elle occupe également un poste de chargée de clinique au département de chirurgie de l'Université de Montréal.</p>
                    <!-- <a href="#" class="m-button">Lire la suite<i class="icon-caret-down"></i></a> -->
                </div>
            </div>
        </div>


    </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>