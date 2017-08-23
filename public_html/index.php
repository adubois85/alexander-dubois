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

		<!-- Custom CSS -->
		<link type="text/css" href="css/style.css" rel="stylesheet" />


		<title>Alexander DuBois</title>
	</head>
	<body>
		<!-- This is the main section; it acts as a navigation hub for the other sections -->
<!--		<section class="section-main">-->
<!--			<div class="container d-flex">-->
<!--				<div class="row justify-content-center">-->
<!--					<i class="fa fa-caret-up" aria-hidden="true"></i>-->
<!--				</div>-->
<!--				<div class="row justify-content-around">-->
<!--					<i class="fa fa-caret-left" aria-hidden="true"></i>-->
<!--					<p>This is my webpage.  Click on the arrows to navigate.</p>-->
<!--					<i class="fa fa-caret-right" aria-hidden="true"></i>-->
<!--				</div>-->
<!--				<div class="row justify-content-cneter">-->
<!--					<i class="fa fa-caret-down" aria-hidden="true"></i>-->
<!--				</div>-->
<!--			</div>-->
<!--		</section>-->

		<script>
//			function toggleTop() {
//				document.getElementsByClassName("section-main");
//			}


			function toggleTop() {
				alert("hello");
			}
			function a(){
				this.classList.toggle('hidden');}
				document.querySelector('#container').addEventListener('mouseclick', a );
			}
		</script>


				<section class="section-main">
					<div class="container">
						<div class="row justify-content-center p-0">
							<button type="button" class="btn btn-link" id="up-button">
								<i class="fa fa-caret-up align-self-start border pt-0" onclick="toggleTop()"
									aria-hidden="true"></i>
							</button>
							<a class="btn btn-default border fa fa-caret-up d-inline" href="#"></a>
						</div>
					</div>
					<div class="container">
						<div class="row justify-content-center">
							<i class="fa fa-caret-left col-xs-4 col-md-1 border p-0" aria-hidden="true"></i>
							<p class="col-xs-4 col-md-2 align-self-center border" >This is my webpage.  Click on the arrows to
								navigate.</p>
							<i class="fa fa-caret-right col-xs-4 col-md-2 border" aria-hidden="true"></i>
						</div>
						<div class="row justify-content-center">
							<i class="fa fa-caret-down border" aria-hidden="true"></i>
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

		</section>

		<!-- This section is a secured form for contacting me -->
		<section class="section-contact-form hidden">
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

		<!-- Optional JavaScript -->
		<script src="scripts/script.js"></script>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>