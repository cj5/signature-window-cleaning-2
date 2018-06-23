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
		<img class="hero-img" src="/wp-content/uploads/2018/06/hero.jpg" alt="">
		<div id="hero-filter"></div>
		<div class="hero-content">
			<div class="container">
				<h1>A Premium Window Cleaning Service</h1>
				<a class="btn" href="/pricing">Get a Free Quote</a>
			</div>					
		</div>
	</section>

	<section id="home-content" class="section-pad">
		<div class="container">
		<h2>The Signature Difference!</h2>	
			<div class="img-wrapper">
				<div class="img-box">
					<img src="/wp-content/uploads/2018/06/clean-windows.jpg" alt="">
					<h3>Window Cleaning</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
				<div class="img-box">
					<img src="/wp-content/uploads/2018/06/pressure-washing.jpg" alt="">
					<h3>Pressure Washing</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
				<div class="img-box">
					<img src="/wp-content/uploads/2018/06/pressure-washing-2.jpg" alt="">
					<h3>Gutter Cleaning</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</div>			
		</div>		
	</section>

<?php
get_footer('custom');
