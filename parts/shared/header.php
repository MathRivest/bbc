
    <?php

    if(is_page( 'soins-services' ) || is_page( 'care-services' )):
        $heroClass = "l-soins";
    elseif(is_page( 'technologies' ) || is_page( 'advanced-technologies' )):
        $heroClass = "l-tech";
    elseif(is_page( 'dentistes' ) || is_page( 'our-team' )):
        $heroClass = "l-equipe";
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
        <?php if(!is_page( 'dentistes' )):?>
        <h1 class="bbc-logo">
            <a href="/bbc"><?php bloginfo( 'name' ); ?></a>
        </h1>
        <?php endif;?>

        <?php if(is_front_page()):?>
        <div class="home-slider">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-marie-eve-cyr.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-yve-bouchar.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-chantale-belanger.jpg">
        </div>
        <h2>Services professionnels <br/>de dentisterie</h2>
        <p>La clinique dentaire Bouchard-Bélanger-Cyr vous offre des services professionnels de dentisterie générale, d'urgence et spécialisée dans un environnement combinant confort et haute technologie.</p>

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
        <h2>Services professionnels <br/>de dentisterie</h2>

        <?php endif?>
    </div>
    <p class="mobile-visible">La clinique dentaire Bouchard-Bélanger-Cyr vous offre des services professionnels de dentisterie générale, d'urgence et spécialisée dans un environnement combinant confort et haute technologie.</p>

</header>