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

		<div class="posts-wrapper">
			<?php Starkers_Utilities::get_template_parts( array('parts/shared/featured-post' ) ); ?>
			<?php query_posts(array("post__not_in" =>get_option("sticky_posts"), 'paged' => get_query_var('paged'))); ?>
			<?php if ( have_posts() ): ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?>>
					<?php if(has_post_thumbnail()){ ?>
						<div class="left">
							<?php echo get_the_post_thumbnail($post_id, array(140,140)); ?>
						</div>
					<?php } ?>
					<div class="right">
						<h2 class="h4"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<div class="meta">
							<span>Publié le <?php the_time('j F'); ?> par <span class="author"><?php the_author() ?></span></span>
						</div>
						<?php the_excerpt(); ?>
					</div>
				</article>
				<?php endwhile; ?>
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