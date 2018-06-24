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
Template Name: About
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
			<h3>What We Offer</h3>
			<p>We’re so glad you found us! We hope you’ll be joining our satisfied customers who call us back season after season for the kind of unique quality and value we offer. Brian and our team are the local window cleaning experts you can count on - take a look at our client testimonials. We’ve maintained a reputation as an industry leader with a truly warm and friendly sense of service delivery. By preserving one spectacular view after another and thousands of satisfied customers, we find our work to be extremely rewarding. We have one of the finest reputations in the area for highly professional services. Trust the appearance of your home, office or business to us at Signature Window Cleaning and you’ll see the difference is crystal clear! Allow us to help you simplify your life – seriously. We are more than happy to tackle those time consuming and often tedious projects; relax while we handle it for you!</p>
			<h3>Going Green</h3>
			<p>We value and preserve our environment and take care by using eco-friendly cleaning agents and supplies. We have worked hard to find the very best cleansers available which are safer, non-toxic, eco-friendly alternatives to conventional cleaners. We always use superior equipment to limit waste, we do not use paper products, limit wasteful water use, and do our best to ensure that our footprint left on mother earth is a tiny one.</p>
			</div>			
		</div>
	</section>	

<?php
get_footer('custom');
