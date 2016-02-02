<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="UTF-8">
		<title>David Mancini</title>
		<!-- BOOTSTRAP TAGS -->
			<!-- Tells IE to use highest mode available, avoiding IE compatibility Mode bugs. -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />

			<!-- Sets viewport and zoom scale to 1:1.  This is required when creating a responsive site. -->
			<meta name="viewport" content="width=device-width, initial-scale=1" />

			<!-- Bootstrap Latest compiled and minified CSS -->
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />

			<!-- Optional theme -->
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />

			<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->

			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

			<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- END BOOTSTRAP TAGS-->

		<!--Font Awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!--Google Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Rock+Salt|Didact+Gothic|Raleway' rel='stylesheet' type='text/css'>

		<!--Font Awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!--Custom Stylesheet-->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="container-fluid"><!--Header container-->
			<div class="row headerRow row-eq-height"><!--Header-->
				<div class="col-md-4">
					<img src="images/logo.jpg" alt="Logo" class="img-responsive">
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

			<div class="row introRow row-eq-height"><!--Photo & Intro-->
				<div class="col-md-5">
					<img src="images/headshot.jpg" alt="David Mancini" class="img-responsive">
				</div>
				<div class="col-md-7">
					<h2>Hello,</h2>
					<p>I'm David Mancini, and I am a nerd.  I've always been into computers--I began making my own websites when I was 13 years old.  On my own, and through some intense coursework, I've gained the skills and experience to help you create a great-looking website or a powerful web app.</p>
					<p>Just so you think I'm not the bad kind of nerd, you should know that I gained a lot of non-tech experience throughout the years, too; I'm a Paramedic and a Registered Nurse.</p>
				</div>
			</div><!--Ends Photo & Intro-->


			<div class="row skillsRow row-eq-height text-center"><!--Skills Row-->
				<h2>Skills</h2>
				<img src="images/skills-logos.png" alt="System Logos" class="img-responsive center-image">
				<p>I create fully responsive, mobile-friendly websites using the latest and most up-to-date technology,<br> including HTML5, CSS3, AngularJS, Bootstrap, MySQL, PHP7, and Wordpress.</p>
				</div><!--Ends Skills Row-->

			<div class="row projectsRow row-eq-height text-center"><!--Projects Row-->
				<div class="col-md-12">
					<h2>Projects</h2>
					
				</div>
			</div><!--Ends Projects Row-->

			<div class="row pricingRow row-eq-height text-center"><!--Pricing Row-->
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
					</div>
				</div>
			</div><!--Ends Pricing Row-->
			<div class="row pricingRow row-eq-height"><!--Pricing Features Row-->
				<div class="col-md-12">

				</div>
			</div><!--Ends Pricing Features Row-->

			<div class="row quoteRow row-eq-height"><!--Quote Row-->
				<div class="col-md-12">
					<a name="quote"></a><h2 class="text-center"><span class="textBackgroundBlack">Get a Quote and Contact Me</span></h2>

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
			</div><!--Ends Quotes Row-->




		</div><!--Ends content container-->

		<footer>
			<div class="container-fluid"><!--Footer container-->
				<div class="row footerRow"><!--Footer row-->
					<div class="col-md-6">
						This site was created (by hand) by David Mancini<br>
						Copyright © 2016
					</div>
					<div class="col-md-6 text-right">
						<a href="https://twitter.com/vizavord" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="https://www.linkedin.com/in/david-mancini-b4854776"><i class="fa fa-linkedin fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="https://github.com/davidmancini"><i class="fa fa-github fa-lg"></i></a>
					</div>
				</div><!--Ends footer row-->
			</div><!--Ends footer container-->
		</footer>



	</body>
</html>