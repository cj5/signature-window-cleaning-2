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

	<section class="hero">
		<img class="hero-img" src="/wp-content/uploads/2018/06/hero.jpg" alt="">
		<div id="hero-filter"></div>
		<div class="hero-content">
			<div class="container">
				<h1>A Premium Window Cleaning Service</h1>
				<a class="btn" href="">Get a Free Quote</a>
			</div>					
		</div>
	</section>

<?php
get_footer('custom');
