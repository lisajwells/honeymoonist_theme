<?php
/*
Template Name: We Want To Go To Individual Page
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-18 medium-13 medium-push-5 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
			<h2 class="page-title"><?php the_title(); ?></h2>
	<?php endwhile; // End the loop ?>

	<div class="sub-content">
		<?php the_content(); ?>
	</div>
	
	<?php if( have_rows('honeymoonist_picks') ): ?>

		<ul class="staggered-list">
	 
		<?php while( have_rows('honeymoonist_picks') ): the_row(); 
	 
			// vars
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$content = get_sub_field('content');
			
			?>
	 
			<li>
				<h3><?php echo $title; ?></h3>
				<div>
					<figure>
						<img src="<?php echo $image['sizes']['destination']; ?>" alt="<?php echo $image['alt'] ?>" />
						<span class="image-credit"><?php echo $image['caption'] ?></span>
					</figure>
					<div class="staggered-content">
						<?php echo $content; ?>
					</div>
				</div>
						 
			</li>
	 
		<?php endwhile; ?>
	 
		</ul>
	 
	<?php endif; ?>

	</div>
	
	<div class="small-18 medium-5 medium-pull-13 columns sub-sidebar">
		<div>
			<div class="sub-sidebar-header">
				<h6 class="sub-page"><span><i class="fa fa-lightbulb-o"></i></span>Advice From The Honeymoonist</h6>
			</div>
			<?php the_field('honeymoonist_knows'); ?>
		</div>
	</div>
		
<?php get_footer(); ?>
