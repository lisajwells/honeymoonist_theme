<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-18 medium-13 medium-push-5 large-push-4 large-10 columns" id="content" role="main">
	<h5><?php
// Is it a Category Archive
if ( is_category() ) {
	echo single_cat_title();
}elseif ( is_tag() ){
	echo single_tag_title();
}
// End Category Archive Title
?></h5>
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
	
	<?php get_template_part( 'promo_sidebar' ); ?>
		
<?php get_footer(); ?>
