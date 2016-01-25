<?php $CatArgs = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 0,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '1',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => __( '' ),
	'show_option_none'   => __( 'No categories' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
); ?>



<aside class="small-18 medium-5 medium-pull-13 large-pull-10 large-4 columns">
	<article class="widget">
		<h4>Categories</h4>
		<?php wp_list_categories($CatArgs); ?>
	</article>
	<article class="widget">
		<h4>Ideas</h4>
		<?php wp_tag_cloud('format=list&&smallest=12&&largest=12'); ?>
	</article>

</aside>
