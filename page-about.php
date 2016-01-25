<?php
/*
Template Name: About
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-18 medium-13 medium-push-5 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<h2 class="page-title"><?php the_title(); ?></h2>
	<?php endwhile; // End the loop ?>
		
		<div class="sub-content">
			<h3>Who We Are</h3>
			<?php the_field('who_we_are'); ?>
			
			<h3>What We Believe</h3>
			<?php the_field('what_we_believe'); ?>
			
			<h3 id="before">How We Work</h3>
			<?php the_field('how_we_work'); ?>
			
			<h3>About Our Founder</h3>
			<?php the_field('about_our_founder'); ?>
		</div>
	</div>
	
	<div class="small-18 medium-5 medium-pull-13 columns sub-sidebar">
		
		<img src="<?php the_field('headshot'); ?>" />

		<div class="sub-sidebar-header">
			<h6 class="sub-page"><span><i class="fa fa-heart"></i></span>Susan's Favorites</h6>
		</div>
		
		<?php if( have_rows('favorites') ): ?>
 
			<ul>
		 
			<?php while( have_rows('favorites') ): the_row(); 
		 
				// vars
				$title = get_sub_field('favorite_title');
				$content = get_sub_field('favorite_content');
		 
				?>
		 
				<li>
				
					<span><?php echo $title; ?></span>
					<i><?php echo $content; ?></i>					
							 
				</li>
		 
			<?php endwhile; ?>
		 
			</ul>
		 
		<?php endif; ?>

	</div>
		
<?php get_footer(); ?>
