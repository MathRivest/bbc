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
                <ul class="bullet">
                    <li>Dentisterie esthétique</li>
                    <li>Restauration CEREC 3</li>
                    <li>Parodontie</li>
                    <li>Chirurgie et greffe</li>
                </ul>
                <div class="description">
                    <p>Approchez-vous que je vous confie un secret... Quand le Dr Yves Bouchard a commencé à pratiquer la médecine dentaire en 1981, certains membres de son équipe n’étaient même pas encore venus au monde! C’est donc dire que depuis le temps, il en a vu passer des sourires! Grand passionné à l’esprit entrepreneur, Yves fonde la clinique dentaire Yves Bouchard en 1983, puis s’associe avec la Dre Chantale Bélanger en 2000 pour donner son envol à la clinique dentaire Bouchard et Bélanger.</p>
                    <a href="#" class="m-button">Lire la suite<i class="icon-caret-down"></i></a>
                </div>
            </div>
            <div class="dentiste">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/dentiste-chantale-belanger.jpg">
                <h3>Dre. Chantale Bélanger</h3>
                <p class="sous-titre">Chirurgienne dentiste et associée</p>
                <ul class="bullet">
                    <li>CEREC 3</li>
                    <li>Orthodontie</li>
                    <li>Troubles articulaires</li>
                </ul>
                <div class="description">
                    <p>Dès son plus jeune âge, la Dre Chantale Bélanger rêvait de prendre soin de la santé des gens. Avec un sourire aussi radieux, il est normal qu’elle fût attirée par la profession d’hygiéniste dentaire. Voulant pousser plus loin ses capacités d’aider, elle poursuivit ses études et obtint son doctorat en médecine dentaire en 1994. Cette assoiffée de savoir ne s’arrêtera pas en si bon chemin. En effet, elle ira alors parfaire ses connaissances en orthodontie et en orthopédie myofonctionnelle pour traiter autant les adultes que les enfants.</p>
                    <a href="#" class="m-button">Lire la suite<i class="icon-caret-down"></i></a>
                </div>
            </div>
            <div class="dentiste">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/dentiste-marie-eve-cyr.jpg">
                <h3>Dre. Marie-Eve Cyr</h3>
                <p class="sous-titre">Chirurgienne dentiste et associée</p>
                <ul class="bullet">
                    <li>Implantologie</li>
                    <li>Analgésie relative</li>
                    <li>CEREC 3</li>
                    <li>Chirurgie (dents de sagesse)</li>
                </ul>
                <div class="description">
                    <p>Pour la Dre Marie-Eve Cyr, tout a toujours été très clair : elle serait chirurgienne dentiste. Très axée sur les relations humaines, Marie-Eve ne s’imagine tout simplement pas faire un autre métier. Originaire du Nouveau-Brunswick, elle complète son doctorat en médecine dentaire à l’Université de Montréal avant de faire une année de résidence multidisciplinaire à l’Université Laval, à Québec. C’est au cours de cette période que Marie-Eve s’est découvert un intérêt grandissant pour la chirurgie et elle poursuit actuellement une formation en implantologie.</p>
                    <a href="#" class="m-button">Lire la suite<i class="icon-caret-down"></i></a>
                </div>
            </div>
            <div class="dentiste last">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/dentiste-eliste-labrecque.jpg">
                <h3>Dre. Elise M. Labrecque</h3>
                <p class="sous-titre">Chirurgienne dentiste</p>
                <ul class="bullet">
                    <li>Dentisterie esthétique</li>
                    <li>Restauration CEREC 3</li>
                    <li>Parodontie</li>
                    <li>Chirurgie et greffe</li>

                </ul>
                <div class="description">
                    <p>Le vaste domaine de la santé, parce qu'il implique de prendre soin des autres, a toujours intéressé la docteure Elise M. Labrecque. Son choix s'est orienté vers la profession de chirurgiennne dentiste car elle lui permet en plus d'exploiter sa créativité et son souci constant du détail. Originaire de Québec, c'est à l'Université Laval qu'elle a complété son doctorat en médecine dentaire. Elle pousse ensuite plus loin sa formation en suivant le programme de résidence multidisciplinaire de l'Université de Montréal, lequel lui offre la chance de réaliser des traitements complexes et diversifiés.</p>
                    <a href="#" class="m-button">Lire la suite<i class="icon-caret-down"></i></a>
                </div>
            </div>
        </div>


    </div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>