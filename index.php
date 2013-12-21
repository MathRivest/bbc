<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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

		<?php Starkers_Utilities::get_template_parts( array('parts/shared/html-sidebar_top') ); ?>
		<div class="posts-wrapper">
			<?php Starkers_Utilities::get_template_parts( array('parts/shared/featured-post' ) ); ?>
			<?php query_posts(array("post__not_in" =>get_option("sticky_posts"), 'paged' => get_query_var('paged'))); ?>
			<?php if ( have_posts() ): ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php Starkers_Utilities::get_template_parts( array('parts/shared/post' ) ); ?>
				<?php endwhile; ?>
				<div class="m-paging">
					<?php posts_nav_link('&nbsp;','<i class="icon-caret-left left"></i>Articles précédents','Voir plus d&#8217articles<i class="icon-caret-right"></i>'); ?>
				</div>
			<?php else: ?>
				<h2>No posts to display</h2>
			<?php endif; ?>
		</div>
		<?php Starkers_Utilities::get_template_parts( array('parts/shared/html-sidebar_bot') ); ?>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>