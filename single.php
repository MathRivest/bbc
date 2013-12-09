<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<div class="container">
	<div class="wrapper">

		<div class="post-wrapper">
			<article class="post-detail">
				<h2><?php the_title(); ?></h2>
				<div class="meta">
					<span>Publié le <?php the_time('j F'); ?> par <span class="author"><?php the_author() ?></span></span>
				</div>
				<?php the_content(); ?>
			</article>

			<div class="m-paging">
				<?php previous_post_link('%link', '<i class="icon-caret-left left"></i> Article précédent'); ?>
				<?php next_post_link('%link', 'Article suivant <i class="icon-caret-right"></i>'); ?>
			</div>
		</div>

		<div class="sidebar-wrapper">
			<?php Starkers_Utilities::get_template_parts( array('parts/shared/html-sidebar') ); ?>
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>