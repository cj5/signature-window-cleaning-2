<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Signature
 */

?>

	<footer>
		<div class="upper">
			<div class="container">
				<div class="center">
					<img src="/wp-content/uploads/2018/06/logo-star.png" alt="">
					<h4>Contact us today to set up your free quote!</h4>
				</div>				
				<div class="contact-wrapper">
					<div class="left">
						<?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]') ?>
					</div>					
				</div>					
			</div>
		</div>
		<div class="lower">
			<div class="container">				
				<div class="right">
					<div class="icons-wrapper">
						<p><a href="tel:612-701-0095"><svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg> 612.701.0095</a></p>
						<div class="icons">
							<a href="mailto:signaturewindowcleaning@yahoo.net"><svg class="icon icon-envelope-o"><use xlink:href="#icon-envelope-o"></use></svg></a>
							<a href="https://www.facebook.com/signaturewindowcleaning/" target="_blank"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a>
						</div>
					</div>												
				</div>
				<p id="copy">&copy; 2018 Signature Window Cleaning</p>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
