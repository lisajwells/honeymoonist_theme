<?php get_header(); ?>

<!-- Row for main content area -->
		<div class="small-18 medium-13 medium-push-5 large-push-4 large-10 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry-content">
				<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a><?php the_post_thumbnail_caption(); ?></figure> 
				<div class="entry-meta">
				<?php reverie_entry_meta(); ?>
				</div>
				<?php the_content(); ?>
			</div>

			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p class="entry-tags"><?php the_tags(); ?></p>
				<?php edit_post_link('Edit this Post'); ?>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_template_part( 'sidebar_home' ); ?>
	
	<?php get_template_part( 'promo_sidebar' ); ?>
		
<?php get_footer(); ?>
