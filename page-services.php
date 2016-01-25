<?php
/*
Template Name: Services
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
		
		<?php if( have_rows('services') ): ?>
 
			<ul class="staggered-list">
		 
			<?php while( have_rows('services') ): the_row(); 
		 
				// vars
				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$content = get_sub_field('content');
				$fee = get_sub_field('fee');
				
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
							<em><?php echo $fee; ?></em>
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
				<h6 class="sub-page"><span><i class="fa fa-ticket"></i></span>Industry Experience</h6>
			</div>
			<?php the_field('industry_experience'); ?>
		</div>
		<div>
			<div class="sub-sidebar-header">
				<h6 class="sub-page"><span><i class="fa fa-glass"></i></span>Discerning Clientele</h6>
			</div>
			<?php the_field('discerning_clientele'); ?>
		</div>
		<div>
			<div class="sub-sidebar-header">
				<h6 class="sub-page"><span><i class="fa fa-scissors"></i></span>Bespoke Itineraries</h6>
			</div>
			<?php the_field('bespoke_itineraries'); ?>
		</div>
	</div>
		
<?php get_footer(); ?>
