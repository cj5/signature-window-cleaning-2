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
Template Name: Home
*/

get_header('custom');
?>

	<section id="hero">
		<div id="hero-fill">
			<div class="hero-content">
				<div class="container">
					<h1>A Premium Window Cleaning Service</h1>
					<a class="btn" href="/pricing">Get a Free Quote</a>
				</div>					
			</div>
		</div>
		<img class="hero-img" src="/wp-content/uploads/2018/07/signature-hero.jpg" alt="">
		<div id="hero-filter"></div>		
	</section>

	<section id="home-content" class="section-pad">
		<div class="container">
			<h2>The Signature Difference!</h2>
			<img src="/wp-content/uploads/2018/06/logo-star.png" alt="" class="star-logo">		
			<div class="img-wrapper">
				<div class="img-box">
				<div class="img-box-overlay"></div>
					<img src="/wp-content/uploads/2018/07/clean-windows.jpg" alt="">
					<div class="wrapper">
						<h3>Window Cleaning</h3>
						<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
					</div>					
				</div>
				<div class="img-box">
					<div class="img-box-overlay"></div>
					<img src="/wp-content/uploads/2018/07/pressure-washing.jpg" alt="">
					<div class="wrapper">
						<h3>Pressure Washing</h3>
						<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
					</div>						
				</div>
				<div class="img-box">
				<div class="img-box-overlay"></div>
					<img src="/wp-content/uploads/2018/07/gutters.jpg" alt="">
					<div class="wrapper">
						<h3>Gutter Cleaning</h3>
						<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
					</div>					
				</div>
			</div>
		</div> <!-- end container -->
		<div class="home-about center">
			<div class="container">
				<h3>Who We Are</h3>
				<p><strong><i>Signature Window Cleaning</i></strong> is made up of reliable and professional cleaners who provide top notch service all over the Saint Croix Falls area. Signature Windows not only offers window cleaning but pressure washing and gutter cleaning services. Contact us today to set up your <a href="/pricing">free quote!</a></p>
			</div>	
		</div>		
	</section>

<?php
get_footer('custom');
