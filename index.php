<?php get_header();
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
?>


	<div class="small-18 columns slider">
		<?php if( have_rows('home_slider', 'option') ): ?>
			<ul class="home-slider" data-orbit>
		 
			<?php while( have_rows('home_slider','option') ): the_row(); 
		 
				// vars
				$image = get_sub_field('slide_image','option');
				$title = get_sub_field('slide_title', 'option');
				$content = get_sub_field('slide_copy', 'option');
				$link = get_sub_field('slide_link', 'option');
		 
				?>
		 
				<li>
					<img src="<?php echo $image['sizes']['slider-med']; ?>" alt="<?php echo $image['alt'] ?>" />
					<div class="orbit-caption">
						<div>
							<h3><?php echo $title; ?></h3>
							<?php echo $content; ?>				
				    	<a href="<?php echo $link; ?>">Learn More</a>
				      <span class="image-credit"><?php echo $image['caption'] ?></span>
						</div>
					</div>
				</li>
		 
			<?php endwhile; ?>
		 
			</ul>
		<?php endif; ?>
	</div>

	<div class="small-18 medium-13 medium-push-5 large-push-4 large-10 columns" id="content" role="main">
	
	<h5>Honeymoonist News</h5>
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
	
	
	<?php get_template_part( 'sidebar_home' ); ?>
	<?php get_template_part( 'promo_sidebar' ); ?>
		
<?php get_footer(); ?>
