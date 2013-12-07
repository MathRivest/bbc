
<?php
	$args = array(
		'posts_per_page' => 1,
		'post__in'  => get_option( 'sticky_posts' ),
		'ignore_sticky_posts' => 1
	);
	query_posts( $args );
?>

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
			<?php
				if(has_post_thumbnail()){
					echo get_the_post_thumbnail($post_id, 'full');
				}else{
					echo '<img src="http://placehold.it/642x400">';
				}
			?>
			<div class="sticky-content">
				<h2 class="h4"><?php the_title(); ?></h2>
				<div class="meta">
					<span>Publié le <?php the_date('j F'); ?> par <span class="author"><?php the_author() ?></span></span>
				</div>
			</div>
		</a>
	</article>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>