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
<img src="/wp-content/uploads/2018/06/header_clean-windows.jpg" alt="">	
</div>				
<section id="about-content" class="subpage-content bg-white section-pad">
<div class="container">
	<div class="content-width">
		<p>We always deliver a product which is uniquely customized as you wish. Brian and our team will listen and work with you, making your budget a top priority. You may decide to have all of your windows and screens cleaned at once, or maybe you want to alternate between interior and exterior glass at different times of the year. We also offer discounts to our customers who participate in referring others to us. Whatever your window cleaning needs, we will always go above and beyond to ensure you are a satisfied customer.</p>
		<p>Please contact Brian by calling or texting <a href="tel:612-701-0095">612.701.0095</a>, by emailing <a href="mailto:signaturewindowcleaning@yahoo.net">signaturewindowcleaning@yahoo.com</a> or by messaging through Facebook. We’ll always respond promptly for a FREE, no obligation, estimate. Some estimates can be done over the phone with same day appointments!</p>
	</div>
</div>
</section>

<?php
get_footer('custom');
