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
Template Name: Employment
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
			<h3 class="contact-heading">Contact us for job inquiry</h3>
			<ul class="contact">
				<li><a href="tel:612-701-0095"><svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg><span class="hide-mobile">612.701.0095</span></a></li>
				<li><a href="mailto:signaturewindowcleaning@yahoo.net"><svg class="icon icon-envelope-o"><use xlink:href="#icon-envelope-o"></use></svg><span class="hide-mobile">signaturewindowcleaning@yahoo.com</span></a></li>
				<li><a href="https://www.facebook.com/signaturewindowcleaning/" target="_blank"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg><span class="hide-mobile">facebook.com/signaturewindowcleaning</span></a></li>
			</ul>
			<p>We’re proud to offer exciting employment opportunities year round in the Twin Cities Metro Area and Western Wisconsin. We hand select, coach and only hire the ideal candidates. Those who share our passion for quality service delivery and hard work fit in best.</p>
			<p>We view window cleaning as a professional, skilled trade with a great deal of responsibility. All applicants must be dedicated to learning a trade which demands excellence, reliability, patience, attention to detail, some lifting, and physical endurance to name a few.</p>
			<p>If you believe you are the next great window cleaner and would like to join our team, we want to hear from you! Contact our HR Team today by calling <a href="tel:612-701-0095">612.701.0095</a>, by emailing <a href="mailto:signaturewindowcleaning@yahoo.net">signaturewindowcleaning@yahoo.com</a>, or by using the form below.</p>
		</div>
	</div>
</section>

<?php
get_footer('custom');
