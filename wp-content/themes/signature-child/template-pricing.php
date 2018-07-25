<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Signature
*/

/*
Template Name: Pricing
*/

get_header('custom');
?>

<div id="header-img-fill">
<div id="page-heading">
<div class="container">
	<h2><?php echo the_title() ?></h2>
</div>
</div>
</div>
<div id="header-img-filter"></div>
<div id="header-img">
<img src="/wp-content/uploads/2018/07/header-hero.jpg" alt="">	
</div>				
<section id="about-content" class="subpage-content bg-white section-pad">
<div class="container">
	<div class="content-width">
		<h3 class="contact-heading">Contact us for your free quote</h3>
		<ul class="contact">
			<li><a href="tel:612-701-0095"><svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg><span class="hide-mobile">612.701.0095</span></a></li>
			<li><a href="mailto:signaturewindowcleaning@yahoo.net"><svg class="icon icon-envelope-o"><use xlink:href="#icon-envelope-o"></use></svg><span class="hide-mobile">signaturewindowcleaning@yahoo.com</span></a></li>
			<li><a href="https://www.facebook.com/signaturewindowcleaning/" target="_blank"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg><span class="hide-mobile">facebook.com/signaturewindowcleaning</span></a></li>
		</ul>
		<p>We always deliver a product which is uniquely customized as you wish. Brian and our team will listen and work with you, making your budget a top priority. You may decide to have all of your windows and screens cleaned at once, or maybe you want to alternate between interior and exterior glass at different times of the year. We also offer discounts to our customers who participate in referring others to us. Whatever your window cleaning needs, we will always go above and beyond to ensure you are a satisfied customer.</p>
		<p>Please contact Brian by calling or texting <a href="tel:612-701-0095">612.701.0095</a>, by emailing <a href="mailto:signaturewindowcleaning@yahoo.net">signaturewindowcleaning@yahoo.com</a> by messaging through <a href="https://www.facebook.com/signaturewindowcleaning/">Facebook</a>, or by using the form below. We’ll always respond promptly for a FREE, no obligation, estimate. Some estimates can be done over the phone with same day appointments!</p>
	</div>
</div>
</section>

<?php
get_footer('custom');
