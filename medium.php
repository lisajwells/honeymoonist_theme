<?php
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
?>

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
			<img src="<?php echo $image['sizes']['slider-lrg']; ?>" alt="<?php echo $image['alt'] ?>" />
			<div class="orbit-caption">
				<div>
					<h3><?php echo $title; ?></h3>
					<p><?php echo $content; ?></p>				
			    	<a href="<?php echo $link; ?>">Learn More</a>
				</div>
			</div>
		</li>
 
	<?php endwhile; ?>
 
	</ul>
<?php endif; ?>
