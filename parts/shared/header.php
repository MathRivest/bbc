
    <?php

    if(is_page( 'soins-services' ) || is_page( 'care-services' )):
        $heroClass = "l-soins";
    elseif(is_page( 'technologies' ) || is_page( 'advanced-technologies' )):
        $heroClass = "l-tech";
    elseif(is_page( 'dentistes' ) || is_page( 'our-team' )):
        $heroClass = "l-equipe";
    elseif(is_page( 'urgence' ) || is_page( 'emergency' )):
        $heroClass = "l-urgence";
    elseif(is_page( 'contact' )):
        $heroClass = "l-contact";
    elseif(is_front_page()):
        $heroClass = "";
    else:
        $heroClass = "l-blog";
    endif;
    ?>

<header class="main-header desktop-visible">
    <div class="top">
        <div class="wrapper">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' , 'container' => 'nav', 'container_id' => 'main-nav') ); ?>
            <p class="m-phone"><i class="icon-phone"></i>514 374-5950</p>
        </div>
    </div>
    <div class="m-hero <?php echo $heroClass;?>">
        <h1 class="bbc-logo">
            <a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
        </h1>

        <?php if(is_front_page()):?>
        <div class="home-slider">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-marie-eve-cyr.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-yve-bouchar.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-chantale-belanger.jpg">
        </div>
        <?php if(get_locale() == "fr_FR"){ ?>
            <h2>Services professionnels <br/>de dentisterie</h2>
            <p>La clinique dentaire Bouchard-Bélanger-Cyr vous offre des services professionnels de dentisterie générale, d'urgence et spécialisée dans un environnement combinant confort et haute technologie.</p>
        <?php }else{ ?>
            <h2>Professional <br/>Dental Services</h2>
            <p>The Bouchard-Bélanger-Cyr Dental Clinic is a full-service clinic offering general, emergency, as well as specialized dental services. We offer blends comfort and care with the very latest technologies.</p>
        <?php } ?>

        <?php endif?>
    </div>

</header>

<header class="mobile main-header mobile-visible">
    <div class="top">
        <div class="wrapper">
            <h1 class="bbc-logo">
                <a href="/bbc"><?php bloginfo( 'name' ); ?></a>
            </h1>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' , 'container' => 'nav', 'container_id' => 'main-nav') ); ?>
            <p class="m-phone"><i class="icon-phone"></i>514 374-5950</p>
        </div>
    </div>
    <div class="m-hero <?php echo $heroClass;?>">
        <?php if(is_front_page()):?>
        <div class="home-slider">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-marie-eve-cyr.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-yve-bouchar.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-chantale-belanger.jpg">
        </div>
         <?php if(get_locale() == "fr_FR"){ ?>
            <h2>Services professionnels <br/>de dentisterie</h2>
        <?php }else{ ?>
            <h2>Professional <br/>Dental Services</h2>
        <?php } ?>

        <?php endif?>
    </div>
    <?php if(is_front_page()):?>
         <?php if(get_locale() == "fr_FR"){ ?>
            <p class="mobile-visible">La clinique dentaire Bouchard-Bélanger-Cyr vous offre des services professionnels de dentisterie générale, d'urgence et spécialisée dans un environnement combinant confort et haute technologie.</p>
        <?php }else{ ?>
            <p class="mobile-visible">The Bouchard-Bélanger-Cyr Dental Clinic is a full-service clinic offering general, emergency, as well as specialized dental services. We offer blends comfort and care with the very latest technologies.</p>
        <?php } ?>
    <?php endif?>
</header>