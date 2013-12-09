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