<?php
/**
 * Template Name: Front Page Template
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

    <a href="#" class="m-cta l-soins">
        <span><strong>Soins</strong> &amp; <strong>Services</strong><i class="icon-caret-right"></i></span>
    </a>
    <a href="#" class="m-cta l-tech">
        <span><strong>Technologies</strong><i class="icon-caret-right"></i></span>
    </a>
    <a href="#" class="m-cta last l-equipe">
        <span><strong>L’équipe</strong><i class="icon-caret-right"></i></span>
    </a>

<?php /*
    <div class="wrapper">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>

        <?php endwhile; ?>
    </div>
*/ ?>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>