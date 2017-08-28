<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Animate.CSS -->
		<link rel="stylesheet"
				href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

		<!-- Custom CSS -->
		<link type="text/css" href="css/style.css" rel="stylesheet" />


		<title>Alexander DuBois</title>
	</head>
	<body>
<!--		 This is the main section; it acts as a navigation hub for the other sections -->
		<section class="section-main">
			<div class="container">
				<div class="row justify-content-center">
					<a class="btn btn-default border fa fa-caret-up d-inline" href="#about-me"></a>
				</div>
				<div class="row justify-content-around">
					<a class="btn btn-default border fa fa-caret-left d-inline" href="#"></a>
					<p class="border">This is my webpage.  Click on the arrows to navigate.</p>
					<a class="btn btn-default border fa fa-caret-right d-inline" href="#"></a>
				</div>
				<div class="row justify-content-cneter">
					<a class="btn btn-default border fa fa-caret-down d-inline" href="#"></a>
				</div>
			</div>
		</section>



		<!-- This section is a short autobiographical blurb -->
		<section class="section-about-me hidden">
			<p>Test placeholder text.</p>

		</section>

		<!-- This section is a showcase of other projects I've worked on -->
		<section class="section-projects hidden">
			<div class="container">

			</div>
		</section>


		<!-- This section is for my resumé -->
		<section class="section-resume hidden">
			<div class="container">
				<div class="row resume-title">
					<div class="row">
						<p class="col-xs-12 mr-auto"><em>Alexander DuBois</em></p>
					</div>
					<div class="row">
						<p class="col-xs-12 mr-auto"><em>Albuquerque, New Mexico 87114</em> -- Willing to relocate</p>
					</div>
					<div class="row">
						<p class="col-xs-12 col-md-3"><em>(760) 793-3972</em></p>
						<p class="col-xs-12 col-md-3"><em>adubois@alumni.uci.edu</em></p>
					</div>
					<div class="row">
						<p class="col-xs-12 col-md-3">GitHub--<em>adubois85</em></p>
						<p class="col-xs-12 col-md-3">LinkedIn--<em>/in/dubious</em></p>
					</div>
				</div>
				<div class="resume-skills">
					<div class="row">
						<p class="col-xs-12 col-md-4"><em>Languages</em></p>
						<p class="col-xs-12 col-md-8">PHP, Javascript, MySQL, HTML5, CSS</p>
					</div>
					<div class="row">
						<p class="col-xs-12 col-md-4"><em>Tools</em></p>
						<p class="col-xs-12 col-md-8">GitHub, Bootstrap, AngularJS, PHPStorm, Atom</p>
					</div>
					<div class="row">
						<p class="col-xs-12 col-md-4"><em>Other Skills</em></p>
						<p class="col-xs-12 col-md-8">50+ WPM typing speed, 4,000 KPH 10-key, Attentive to details and will excel individually or with a team</p>
					</div>
				</div>

			</div>
		</section>

		<!-- This section is a secured form for contacting me -->
		<section class="section-contact-form hidden modal fade">
			<label for="contact-name">Your name</label>
			<div class="input-group input-group-lg">
				<span class="input-group-addon" id="contact-name"><i class="fa fa-user" aria-hidden="true"></i></span>
				<input type="text" class="form-control" placeholder="What should I call you?" aria-label="Your name" />
			</div>

			<label for="contact-email">Your email</label>
			<div class="input-group">
				<span class="input-group-addon" id="contact-email"><i class="fa fa-envelope" aria-hidden="true"></i></span>
				<input type="text" class="form-control" placeholder="Where can I reach you?" aria-label="Your email
				address" />
			</div>

			<label for="contact-subject">Email subject</label>
			<div class="input-group">
				<span class="input-group-addon" id="contact-subject"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</span>
				<input type="text" class="form-control" placeholder="Why are you contacting me today?" aria-label="Email
				subject line" />
			</div>

			<label for="contact-body">Email body</label>
			<div class="input-group">
				<textarea class="form-control"  id="contact-body" rows=6 placeholder="What's on your mind? (4000 characters max)"
						 aria-label="Email body"></textarea>
			</div>

			<button class="btn btn-primary" type="submit">Submit</button>
		</section>



		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<!-- My JavaScript file -->
		<script src="scripts/script.js"></script>
	</body>
</html>