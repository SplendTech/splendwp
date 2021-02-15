<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Splend
 */

?>
	<a class="top-link hide" href="" id="js-top">
	  <?xml version="1.0" ?><svg id="Layer_1" style="enable-background:new 0 0 50 50;" version="1.1" viewBox="0 0 50 50" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1_1_"><polygon points="25,15.268 47.293,37.56 48.707,36.147 25,12.44 1.293,36.147 2.707,37.56  "/></g></svg>
	  <span class="screen-reader-text">Back to top</span>
	</a>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer_menu_top">
				<div class="container">
					<?php
						wp_nav_menu( array(
							'menu' => 'Footer1'
						) );
					?>
				</div>
			</div>
			<div class="footer_menu_middle">
				<div class="container">
					<?php
						wp_nav_menu( array(
							'menu' => 'Footer2'
						) );
					?>
				</div>
			</div>
			<div class="footer_blocks sides">
				<div class="container">
					<div class="quarter">
						<a href="mailto:<?php the_field( "email_address", "option" ); ?>"><strong><?php the_field( "email_label", "option" ); ?></strong></a>
					</div>
					<div class="quarter">
						<a href="tel:<?php the_field( "phone_number", "option" ); ?>"><strong><?php the_field( "phone_label", "option" ); ?></strong> <?php the_field( "phone_number", "option" ); ?></a>
					</div>
					<div class="quarter">
						Copyright 	&copy; <?php echo date("Y"); ?> Splend
					</div>
					<div class="quarter">
						<div class="social_links">
							<a href="<?php the_field( "facebook", "option" ); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="<?php the_field( "instagram", "option" ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="<?php the_field( "linkedin", "option" ); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
	$ = jQuery;
	$(document).ready(function(){
		$('.plans_boxes a[href*="#"]').click(function(event) {
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
	      &&
	      location.hostname == this.hostname
	    ) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      if (target.length) {
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	  });
	});
</script>
<script>
const scrollToTopButton = document.getElementById('js-top');
const scrollFunc = () => {
	let y = window.scrollY;
	if (y > 0) {
		scrollToTopButton.className = "top-link show";
	} else {
		scrollToTopButton.className = "top-link hide";
	}
};
window.addEventListener("scroll", scrollFunc);
const scrollToTop = () => {
	const c = document.documentElement.scrollTop || document.body.scrollTop;
	if (c > 0) {
		window.requestAnimationFrame(scrollToTop);
		window.scrollTo(0, c - c / 10);
	}
};
scrollToTopButton.onclick = function(e) {
	e.preventDefault();
	scrollToTop();
}
</script>
</body>
</html>
