<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article class="excerpt" id="post-<?php the_ID(); ?>">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-content">
		<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a><?php the_post_thumbnail_caption(); ?></figure> 
		<div class="entry-meta">
		<?php reverie_entry_meta(); ?>
		</div>
		<?php the_excerpt(); ?>
	</div>
</article>
