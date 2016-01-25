<div class="show-for-large-up large-4 columns">
	<div class="promo">
		<h6>About</h6>
		<div class="promo-content">
			<div id="about-susan">
				<img src="<?php bloginfo('template_directory'); ?>/img/susan.jpg" />
				<b><?php the_field('promo_sidebar_about_name', 'option'); ?></b>
				<span><?php the_field('promo_sidebar_about_title', 'option'); ?></span>
				<i><?php the_field('promo_sidebar_about_company', 'option'); ?></i>
			</div>
			<?php the_field('promo_sidebar_about', 'option'); ?>
			<a href="/about-us">Learn More...</a>
		</div>
	</div>
	<div class="promo">
		<h6>Services</h6>
		<div class="promo-content">
			<div id="feeling-lost">
				<b><?php the_field('promo_sidebar_services_headline', 'option'); ?></b>
			</div>
			<?php the_field('promo_sidebar_services', 'option'); ?>
			<a href="/services">Learn More...</a>
		</div>
	</div>
</div>
