<!DOCTYPE html>
<!-- Hello, fellow nerd.  If you're here, I assume you wanted to
		make sure I actually coded this by hand.  I assure you I did.
		Once you're done taking a look, let me know what you think.
		I'm interested in your opinions.

		Also, if you want to hire me...that would be great, too.
		I'm looking for freelance work and I am also interested in
		working for a web development company.

		Contact me: hello@davidmancini.xyz  Thanks!-->

<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="UTF-8">
		<title>David Mancini</title>
		<?php require_once ("include-headtags.php"); ?>
	</head>

	<body>

		<div class="container-fluid"><!--Header container-->

			<div class="row headerRow row-eq-height"><!--Header-->
				<div class="col-md-4">
					<img src="images/dm-logo.png" alt="David Mancini's Logo" class="img-responsive">
				</div>
				<div class="col-md-4">
					<p class="text-center headerTitle">David Mancini</p>
				</div>
				<div class="col-md-4">
					<a class="btn pull-right btn-primary" href="#quote" role="button">Get a Quote</a>
					<a class="btn pull-right btn-primary" href="#pricing" role="button">Pricing</a>
				</div>
			</div><!--Ends Header-->
		</div><!--Ends header container-->

		<div class="container contentContainer"><!--Content container-->

			<div class="row introRow"><!--Photo & Intro-->
				<div class="col-md-5">
					<img src="images/headshot.jpg" alt="David Mancini" class="img-responsive headshot">
				</div>
				<div class="col-md-7">
					<h2>Hello,</h2>
					<p>I'm David Mancini, and I am a nerd.  I've always been into computers--I began making my own websites when I was 13 years old.  On my own, and through some intense coursework, I've gained the skills and experience necessary to help you create a great-looking website or a powerful web app.</p>
					<p>Just so you think I'm not the <em>bad</em> kind of nerd, you should know that I gained a lot of non-tech experience throughout the years, too; I'm a Paramedic and a Registered Nurse.</p>
					<p>I live and work in San Antonio, TX, but I work with anyone worldwide.</p>
				</div>
			</div><!--Ends Photo & Intro-->


			<div class="row skillsRow text-center"><!--Skills Row-->
				<h2>Skills</h2>
				<img src="images/skills-logos.png" alt="System Logos" class="img-responsive center-image">
				<p>I create fully responsive, mobile-friendly websites using the latest and most up-to-date technology,<br> including HTML5, CSS3, AngularJS, Bootstrap, MySQL, PHP7, and Wordpress.</p>
				</div><!--Ends Skills Row-->

			<div class="row projectsRow text-center"><!--Projects Row-->
				<h2>Project Portfolio</h2><br><p>More projects available upon request.</p>
				<div class="col-md-4">
					<div class="project">
						<a href="//satraining.net" target="_blank"><img src="images/project-stayin-alive.png" alt="Stayin' Alive Training Services Website" class="img-responsive img-rounded"></a><br>
						<h3>Stayin' Alive Training Services</h3>
						<p>Stayin' Alive's website utilizes a custom Wordpress theme.  It showcases their available courses and allows visitors to schedule and pay for classes online.  It also displays a blog and manages every aspect of daily business.
						<br><a href="//satraining.net" target="_blank">satraining.net</a></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project">
						<a href="//ecocleantexas.com" target="_blank"><img src="images/project-ecoclean.png" alt="EcoClean Carpet Care Website" class="img-responsive img-rounded"></a><br>
						<h3>EcoClean Carpet Care</h3>
						<p>For this project, I travelled with a service tech to take photos for the website.  I met with the owner to build a website that he uses to attract new clients and to manage their appointments.  This website uses a non-premium theme that can be upgraded should the owner choose to do so.
						<br><a href="//ecocleantexas.com" target="_blank">ecocleantexas.com</a></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project">
						<a href="//barbiesinboerne.com" target="_blank"><img src="images/project-barbie.png" alt="Barbie's Website" class="img-responsive img-rounded"></a><br>
						<h3>Barbie's Salon & Spa</h3>
						<p>This client requested a clean and crisp website to attract clients and manage their appointments.  After the website went live, she told me that she now couldn't imagine managing her salon without it.
							<br><a href="//barbiesinboerne.com" target="_blank">barbiesinboerne.com</a></p>
					</div>
				</div>
			</div><!--Ends Projects Row-->

			<div class="row pricingRow text-center"><!--Pricing Row-->
				<div class="col-md-12">
					<a name="pricing"></a><h2>Website Pricing</h2>
					Custom pricing is available for custom web apps.  <a href="#quote">Get a quote below.</a>
				</div>
				<div class="col-md-4">
					<div class="priceBoxHeading priceBoxBasic" id="priceBoxBasic">
						<span class="priceHeading">Basic<br>$1221</span>
					</div>
					<div class="priceBoxContent">
						<table class="table table-striped">
							<tr><td><i class="fa fa-check"></i> Responsive Design</td></tr>
							<tr><td><i class="fa fa-check"></i> Mobile Friendly</td></tr>
							<tr><td><i class="fa fa-check"></i> Custom Domain Name</td></tr>
							<tr><td><i class="fa fa-check"></i> 1 Year Free Hosting</td></tr>
							<tr><td><i class="fa fa-check"></i> 2 Domain Email Addresses</td></tr>
							<tr><td><i class="fa fa-check"></i> Up to 5 Pages</td></tr>
							<tr><td><i class="fa fa-times"></i> Premium Wordpress Theme</td></tr>
							<tr><td><i class="fa fa-times"></i> Search Engine Optimization Marketing</td></tr>
						</table>
						<div class="text-center"><a class="btn btn-primary" id="priceBoxButtonBasic" href="#" role="button">Get Started!</a></div><br>
					</div>
				</div>
				<div class="col-md-4">
					<div class="priceBoxHeading" id="priceBoxPopular">
						<span class="priceHeading">Popular<br>$1551</span>
					</div>
					<div class="priceBoxContent">
						<table class="table table-striped">
							<tr><td><i class="fa fa-check"></i> Responsive Design</td></tr>
							<tr><td><i class="fa fa-check"></i> Mobile Friendly</td></tr>
							<tr><td><i class="fa fa-check"></i> Custom Domain Name</td></tr>
							<tr><td><i class="fa fa-check"></i> 1 Year Free Hosting</td></tr>
							<tr><td><i class="fa fa-check"></i> 5 Domain Email Addresses</td></tr>
							<tr><td><i class="fa fa-check"></i> Up to 10 Pages</td></tr>
							<tr><td><i class="fa fa-check"></i> Premium Wordpress Theme</td></tr>
							<tr><td><i class="fa fa-times"></i> Search Engine Optimization Marketing</td></tr>
						</table>
						<div class="text-center"><a class="btn btn-primary" id="priceBoxButtonPopular" href="#" role="button">Get Started!</a></div><br>
					</div>
				</div>
				<div class="col-md-4">
					<div class="priceBoxHeading" id="priceBoxPremium">
						<span class="priceHeading">Premium<br>$1881</span>
					</div>
					<div class="priceBoxContent">
						<table class="table table-striped">
							<tr><td><i class="fa fa-check"></i> Responsive Design</td></tr>
							<tr><td><i class="fa fa-check"></i> Mobile Friendly</td></tr>
							<tr><td><i class="fa fa-check"></i> Custom Domain Name</td></tr>
							<tr><td><i class="fa fa-check"></i> 1 Year Free Hosting</td></tr>
							<tr><td><i class="fa fa-check"></i> Unlimited Domain Email Addresses</td></tr>
							<tr><td><i class="fa fa-check"></i> Up to 20 Pages</td></tr>
							<tr><td><i class="fa fa-check"></i> Premium Wordpress Theme</td></tr>
							<tr><td><i class="fa fa-check"></i> Search Engine Optimization Marketing</td></tr>
						</table>
						<div class="text-center"><a class="btn btn-primary text-center" id="priceBoxButtonPremium" href="#" role="button">Get Started!</a></div><br>
					</div>
				</div>
			</div><!--Ends Pricing Row-->

			<div class="row pricingFeaturesRow row-eq-height"><!--Pricing Features Row-->
				<h3 class="text-center">Sample Add-On Features</h3>
				<div class="col-md-6 text-right">
					<i class="fa fa-plus"></i> Logo Design<br>
					<i class="fa fa-plus"></i> Photo Slideshow<br>
					<i class="fa fa-plus"></i> Social Media Feeds<br>
					<i class="fa fa-plus"></i> Google Maps Integration<br>
					<i class="fa fa-plus"></i> Blog System<br>
					<i class="fa fa-plus"></i> Shopping Cart<br>
				</div>
				<div class="col-md-6">
					<i class="fa fa-plus"></i> Accept Credit Cards<br>
					<i class="fa fa-plus"></i> Event Registration<br>
					<i class="fa fa-plus"></i> Customer Surveys<br>
					<i class="fa fa-plus"></i> Audio/Video Integration<br>
					<i class="fa fa-plus"></i> Custom Database Functions<br>
					<i class="fa fa-plus"></i> ...Many Others Available<br>
				</div>
			</div><!--Ends Pricing Features Row-->

			<div class="row quoteRow row-eq-height"><!--Quote Row-->
				<div class="col-md-8">
					<a name="quote"></a><h2 class="text-center"><span class="textBackgroundBlack">Get a Custom Quote</span></h2>
					<form>
						<div class="form-group">
							<label for="name" class="textBackgroundBlack">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="textBackgroundBlack">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="phone" class="textBackgroundBlack">Phone</label>
							<input type="tel" class="form-control" id="phone" placeholder="Phone">
						</div>
						<div class="form-group">
							<label for="website" class="textBackgroundBlack">Current Website</label>
							<input type="text" class="form-control" id="website" placeholder="Current Website">
						</div>
						<div class="form-group">
							<label for="text" class="textBackgroundBlack">How Can I Help You?</label>
							<textarea class="form-control" id="text" placeholder="I need a website and a web app built." rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Send</button><br><br>
					</form>
				</div>
				<div class="col-md-4" id="twitter">
					<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Vizavord" data-widget-id="695297296930512896">Tweets by @Vizavord</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div><!--Ends Quotes Row-->

		</div><!--Ends content container-->

		<?php require_once("include-footer.php")?>


	</body>
</html>