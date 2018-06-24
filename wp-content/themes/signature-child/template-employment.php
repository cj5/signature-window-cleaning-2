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
	<img src="/wp-content/uploads/2018/06/header_clean-windows.jpg" alt="">	
</div>				
<section id="about-content" class="subpage-content bg-white section-pad">
	<div class="container">
		<div class="content-width">
			<p>We’re proud to offer exciting employment opportunities year round in the Twin Cities Metro Area and Western Wisconsin. We hand select, coach and only hire the ideal candidates. Those who share our passion for quality service delivery and hard work fit in best. We view window cleaning as a professional, skilled trade with a great deal of responsibility. All applicants must be dedicated to learning a trade which demands excellence, reliability, patience, attention to detail, some lifting, and physical endurance to name a few. If you believe you are the next great window cleaner and would like to join our team, we want to hear from you! Contact our HR Team today by calling <a href="tel:612-701-0095">612.701.0095</a> or by emailing <a href="mailto:signaturewindowcleaning@yahoo.net">signaturewindowcleaning@yahoo.com</a>.</p>
		</div>
	</div>
</section>

<?php
get_footer('custom');
