<?php
/**
 * The template for displaying Category Archive pages
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

		<div class="posts-wrapper">
			<h2 class="listing-title"><?php echo single_cat_title( '', false ); ?></h2>
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

		<div class="sidebar-wrapper">
			<?php Starkers_Utilities::get_template_parts( array('parts/shared/html-sidebar') ); ?>
		</div>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>