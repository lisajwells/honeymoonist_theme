		</div>
	</div><!-- Row/Container End -->
	
	<footer class="small-18 columns">
	<div class="row">
		<div class="small-18 medium-7 columns">
			<img src="<?php bloginfo ('template_url'); ?>/img/logo.png" />
			<q><?php the_field('footer-tagline', 'option'); ?></q>
		</div>
		
		<div class="small-18 medium-4 columns">
			<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false )); ?>
		</div>
		
		<div class="small-18 medium-7 columns">
			<ul>
				<li><a href="tel:4075758988"><i class="fa fa-phone"></i>407-575-8988</a></li>
				<li><a href="mailto:info@thehoneymoonist.com"><i class="fa fa-envelope"></i>info@thehoneymoonist.com</a></li>
				<li>
					<ul class="inline-list">
		<li><a href="<?php the_field('facebook', 'option') ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="" /></a></li>
			<li><a href="<?php the_field('twitter', 'option') ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="" /></a></li>
			<li><a href="<?php the_field('instagram', 'option') ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/instagram.png" alt="" /></a></li>
	</ul>
				</li>
			</ul>
		</div>
	</div> 
	</footer>
	
</div><!--Wrapper End -->



<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mobile-search.js"></script>
<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>

<script>
	(function($) {
		$(document).foundation({
			orbit: {
				slide_number: false,
				pause_on_hover: false,
				timer_speed: 7000,
				animation: 'fade',
				animation_speed: 800
			}
		});	
	})(jQuery);
</script>

	
</body>
</html>
