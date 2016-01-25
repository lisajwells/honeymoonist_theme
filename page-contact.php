<?php
/*
Template Name: Contact
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
		<div class="destinations-contact">
			<h3>For destination wedding queries, please email us at <a href="mailto:susan@thehoneymoonist.com">susan@thehoneymoonist.com</a></h3>
		</div>
		<div><?php echo do_shortcode('[gravityform id="1" name="Services Contact Form" title="false" ajax="true"]'); ?></div>
	</div>
	
	<div class="small-18 medium-5 medium-pull-13 columns sub-sidebar">
		<div>
			<div class="sub-sidebar-header">
				<h6 class="sub-page"><span><i class="fa fa-bullhorn"></i></span>Contact Info</h6>
			</div>
			<ul id="address">
				<li>
					<span>Home Base</span>
					<i>Winter Park, FLA</i>
				</li>
				<li>
					<span>Phone</span>
					<i>407-575-8988</i>
				</li>
				<li>
				<span>Email</span>
					<a href="mailto:info@thehoneymoonist.com"><i>info@thehoneymoonist.com</i></a>
				</li>
				
			</ul>
		</div>
	</div>
		
<?php get_footer(); ?>
