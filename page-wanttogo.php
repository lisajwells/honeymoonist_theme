<?php
/*
Template Name: We Want To Go To
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-18 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
			<h2 class="page-title"><?php the_title(); ?></h2>
	<?php endwhile; // End the loop ?>
	
	<?php if( have_rows('links') ): ?>
 
		<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
	 
		<?php while( have_rows('links') ): the_row(); 
	 
			// vars
			$image = get_sub_field('link_image');
			$title = get_sub_field('link_title');
			$link = get_sub_field('page_link');
	 
			?>
	 
			<li class="we_want_to_go_link">
	 
				<?php if( $link ): ?>
					<a href="<?php echo $link; ?>">
				<?php endif; ?>
	 
					<img src="<?php echo $image['sizes']['destination']; ?>" alt="<?php echo $image['alt'] ?>" />
					
					<div class="destination_title">
						<p><?php echo $title; ?></p>
					</div>
				<?php if( $link ): ?>
					</a>
				<?php endif; ?>
	 
			</li>
	 
		<?php endwhile; ?>
	 
		</ul>
	 
	<?php endif; ?>

	</div>
		
<?php get_footer(); ?>
