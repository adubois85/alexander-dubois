<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- My JavaScript file -->
		<script src="scripts/script.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="scripts/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Custom CSS -->
		<link type="text/css" href="css/style.css" rel="stylesheet" />

		<title>Alexander DuBois</title>
	</head>
	<body>
<!--		 This is the main section; it acts as a navigation hub for the other sections -->
		<section class="section-main">
			<div class="container text-center">
				<div class="row">
					<i class="fa fa-caret-up border" data-toggle="modal" data-target="#modal-about-me" id="modal-up-toggle"></i>
				</div>
				<div class="row border" id="middle-navigation">
					<i class="fa fa-caret-left border col-xs-4" data-toggle="modal" data-target="#modal-resume" id="modal-left-toggle"></i>
					<p class="border col-xs-4">Thank you for visiting my webpage.  Click on the arrows to navigate.</p>
					<i class="fa fa-caret-right border col-xs-4" data-toggle="modal" data-target="#modal-projects" id="modal-right-toggle"></i>
				</div>
				<div class="row">
					<i class="fa fa-caret-down border" data-toggle="modal" data-target="#modal-contact" id="modal-down-toggle"></i>
				</div>
			</div>
		</section>

		<!-- This section is a short autobiographical blurb -->
		<section class="section-about-me">
			<div class="modal fade" id="modal-about-me" tabindex="-1" role="dialog" aria-labelledby="About Me">
				<div class="modal-dialog" role="document">
					<div class="modal-content container-fluid">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center">About Me</h4>
						</div>
						<p>
							Greetings, my name is Alexander DuBois.  I am a web developer first and foremost, but I am in the constant process of learning new languages, frameworks, and technologies.  My work consists primaraly of PHP, with a smattering of mySQL, javasrcipt, HTML, and CSS.
						</p>
						<p>
							So why change careers now?  Well, after so many years of working odd-jobs, I knew I needed a fresh start.  I knew I needed something that would actually challenge my capabilities.  And so I went back to school to learn how to code.  The only thing I know now is that I don't really know much of anything at all.
						</p>
						<p>Within the realm of programming, I am interested in GIS software and using programming to transform and analyze large datasets.  I am also interested in creating video games and the many disciplines that are necessary to succeed in that field.</p>
						<p>
							Outside of programming, my interests include video games of all kinds, photography, and green chile.  Below you will find links to my GitHub profile, as well as my social media presence.
						</p>
						<div class="container-fluid col-xs-offset-1">
							<div class="col-xs-4">
								<a href="https://twitter.com/amdubious" target="_blank"><i class="fa fa-twitter-square"></i></a>
							</div>
							<div class="col-xs-4">
								<a href="https://github.com/adubois85/" target="_blank"><i class="fa fa-github-square"></i></a>
							</div>
							<div class="col-xs-4">
								<a href="https://www.linkedin.com/in/dubious/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<!-- This section is a showcase of other projects I've worked on -->
		<section class="section-projects">
			<div class="modal fade" id="modal-projects" tabindex="-1" role="dialog" aria-labelledby="Other Projects">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content container-fluid">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center">Other Projects</h4>
						</div>
						<div class="row project1">
							<a href="https://github.com/adubois85/foodquisition" target="_blank"><img src="../public_html/images/foodquisition.jpeg" alt="foodquisition" class="img-responsive img-rounded col-md-3" /></a>
							<h5>Foodquisition</h5>
							<p>
								Have you ever wondered how well the restaurant you're eating at scored on its health inspection?
								Well, wonder no more.  A group project built primarily in MySQL, PHP, Angular, and Javascript with
								3 other students
							</p>
						</div>
						<div class="row project2">
							<a href="https://github.com/adubois85/math-2/" target="_blank"><img src="../public_html/images/math2.jpeg" alt="math 2" class="img-responsive img-rounded col-md-3"/></a>
							<h5 class="float-right">Math 2</h5>
							<p>
								What would happen if all of our programming language's math functions broke except the basic add, subtract, multiply, and divide.  With this project, I attempt to rebuild a number of the more complex math functions using only those basic math operators and a few other tricks provided by the core language.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- This section is for my resumé -->
		<section class="section-resume">
			<div class="modal fade" id="modal-resume" tabindex="-1" role="dialog" aria-labelledby="Resumé">
				<div class="modal-dialog" role="document">
					<div class="modal-content container-fluid">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center">My Resumé</h4>
						</div>

						<div class="resume-title">
							<div class="row">
								<p class="col-xs-12 text-center"><em>Alexander DuBois</em></p>
							</div>
							<div class="row">
								<p class="col-xs-12 text-center"><em>Albuquerque, New Mexico 87114</em> -- Willing to
									relocate</p>
							</div>
							<div class="row col-sm-offset-2">
								<p class="col-sm-4 text-right"><em>(760) 793-3972</em></p>
								<p class="col-sm-4 text-left"><em>adubois@alumni.uci.edu</em></p>
							</div>
							<div class="row col-sm-offset-2">
								<p class="col-sm-4 text-right">GitHub--<em>adubois85</em></p>
								<p class="col-sm-4 text-left">LinkedIn--<em>/in/dubious</em></p>
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

						<div class="resume-experience">
							<h6>Recent Experience</h6>
							<div class="row">
								<p class="col-xs-6"><em>Data Specialist</em> -- SL Start</p>
								<p class="col-xs-6 text-right"><em>August, 2015 to April, 2016</em></p>
							</div>
							<ul>
								<li>Screened, counseled and advised clients on necessary documentation and eligibility requirements for SNAP (food stamps)</li>
								<li>
									Conducted outreach to community based organizations, emergency food programs and other
									partners, providing information on SNAP rules and regulations
								</li>
								<li>Provided facilitated enrollment services to clients to apply and re-certify for SNAP</li>
								<li>Responsible for ensuring that all applications are complete with proper supporting documentation</li>
								<li>Knowledgeable of benefits screening, especially for SNAP</li>
							</ul>
						</div>
						<div class="temp-jobs">
							<h6>Temp Jobs</h6>
							<div class="row">
								<p class="col-xs-6"><em>Various</em></p>
								<p class="col-xs-6 text-right"><em>2011 - 2014</em></p>
							</div>
							<ul>
								<li>Restaurants, Direct Care Staff Employee, Division of Vocational Rehabilitation</li>
							</ul>
						</div>
						<div class="education">
							<h6>Education</h6>
							<div class="row">
								<p class="col-xs-6"><em>B.A.</em>Psychology and Social Behavior</p>
								<p class="col-xs-6 text-right"><em>September 2007</em></p>
							</div>
							<div class="row">
								<p class="col-xs-6"><em>B.A.</em>Studio Art</p>
							</div>
							<div class="row">
								<p class="col-xs-6">University of California, Irvine</p>
							</div>
						</div>
						<div class="references">
							<h6>References</h6>
							<p>Available upon request</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- This section is a secured form for contacting me -->
		<section class="section-contact-form">
			<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="Contact Form">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content container-fluid">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title text-center">Contact Me</h4>
						</div>
						<form id="contact-form" action="php/mailer.php" method="post">

							<div class="form-group">
								<label for="contact-name">Your name</label>
								<div class="input-group input-group-lg">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="name" name="name" placeholder="What should I call you?" aria-label="Your name" />
								</div>
							</div>

							<div class="form-group">
								<label for="contact-email">Your email</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									<input type="email" class="form-control" id="email" name="email" placeholder="Where can I reach you?" aria-label="Your email address" />
								</div>
							</div>

							<div class="form-group">
								<label for="contact-subject">Email subject</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Why are you contacting me today?" aria-label="Email subject line" />
								</div>
							</div>

							<label for="contact-body">Email body</label>
							<textarea class="form-control"  id="body" name="body" rows="6" placeholder="What's on your mind? (4000 characters max)" aria-label="Email body"></textarea>

							<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="6Lep6C4UAAAAAO4cEqugy2QagJndAaB6NBFccbNK"></div>

							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</form>

						<!--empty area for form error/success output-->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
	</body>
</html>