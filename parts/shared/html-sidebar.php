<div class="m-widget l-categories">

	<?php $args = array(
		'show_option_all'    => '',
		'orderby'            => 'name',
		'order'              => 'ASC',
		'style'              => 'list',
		'show_count'         => 1,
		'hide_empty'         => 1,
		'use_desc_for_title' => 0,
		'child_of'           => 0,
		'feed'               => '',
		'feed_type'          => '',
		'feed_image'         => '',
		'exclude'            => '',
		'exclude_tree'       => '',
		'include'            => '',
		'hierarchical'       => 1,
		'title_li'           => '',
		'show_option_none'   => __('No categories'),
		'number'             => null,
		'echo'               => 1,
		'depth'              => 0,
		'current_category'   => 0,
		'pad_counts'         => 0,
		'taxonomy'           => 'category',
		'walker'             => null
	); ?>
	<div class="content">
	<?php if(get_locale() == "fr_FR"){ ?>
		<h3>Catégories</h3>
	<?php }else{ ?>
		<h3>Categories</h3>
	<?php } ?>
		<ul>
			<?php wp_list_categories($args); ?>
		</ul>
	</div>
</div>

<div class="m-widget l-fbox">
	<div class="content">
	<?php if(get_locale() == "fr_FR"){

	}else{

	} ?>
		<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fclinique.dentaire.bouchard.belanger&amp;width=240&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:258px; width:240px" allowTransparency="true"></iframe>
	</div>
</div>