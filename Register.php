<?php include('config.php') ?>


<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="MusicAux is independent digital distribution service. We help putting your music into streaming services">
		<meta name="author" content="Hao Nguyen, Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v3.8.5">
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
		<title> :: MusicAux :: </title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./Main Page_files/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="./Main Page_files/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


  	<style>
		  .btn-space{
			margin-right: 5px
			color: White
		  }

		  .bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		  }

		  @media (min-width: 768px) {
			.bd-placeholder-img-lg {
			  font-size: 3.5rem;
			}
		  }
		</style>
		<!-- Custom styles for this template -->
		<link href="./Main Page_files/carousel.css" rel="stylesheet">
		<link href="./Main Page_files/registrationForm.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">MusicAux</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
  				<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse" id="navbarCollapse">
  				<ul class="navbar-nav mr-auto">
  					<li class="nav-item">
  						<a class="nav-link" href="index.html">Home</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="About.html">About</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="Services.html">Services</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="Distribution.html">Distribution</a>
  					</li>
  				</ul>

          <div class="btn-group">
            <a href="Login.php" class="btn btn-space btn-outline-success my-2 my-sm-0">Login </a>
          </div>
        </div>
      </nav>
    </header>

	<main role="main">
		<div class="container" style="padding-top: 50px;padding-bottom: 100px;">
				<div class="form-row">

						<div style="margin: auto; width: 60%;">
							<h3 style="text-align: center;">REGISTRATION</h3>
							<form action="charge.php" method="post" id="payment-form">

								<!-- TABLE USER -->
								<div class="form-group">
									<label for="fname">First Name:</label>
									<input type="lname" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" id="fname" required autocomplete="off"/>
								</div>

								<div class="form-group">
									<label for="lname">Last Name:</label>
									<input type="lname" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" id="lname" required autocomplete="off"/>
								</div>

								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" id="email" required autocomplete="off"/>
								</div>

								<div class="form-group">
									<label for="password1">Password:</label>
									<input type="password" name="password1" class="form-control mb-3 StripeElement StripeElement--empty" id="password1" required autocomplete="off"/>
								</div>

								<div class="form-group">
									<label for="password2">Re-type Password:</label>
									<input type="password" name="password2" class="form-control mb-3 StripeElement StripeElement--empty" id="password2" required autocomplete="off"/>
								</div>

								<div class="form-group">
									<label for="payment">One-Time Fee for Unlimited Upload:</label>
			            <div id="card-element" class="form-control">
			              <!-- A Stripe Element will be inserted here. -->
			            </div>

			            <!-- Used to display Element errors. -->
			            <div id="card-errors" role="alert"></div>

								</div>


								<div class="form-check">
											<input class="form-check-input StripeElement StripeElement--empty" type="checkbox" value="0" id="defaultCheck1" name="agreement" required>
												I have read and agree to the
										 <a type="button" class="btn btn-md btn-link" data-toggle="modal" data-target="#ModalCenter">
												 Terms and Conditions
										 </a>
								</div>

								<!-- Modal -->
								<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="ModalLongTitle">Terms and Conditions</h5>
												<a type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</a>
											</div>
											<div class="modal-body">
												<b>Agreement Not to Disclose Confidential Information</b><br>

												The Disclosee, acknowledges that the Company intends to disclose confidential information and intellectual
												property owned by Company, so that the ARTIST(S) may review said materials to ascertain the nature of the
												business opportunity. ARTIST(S) agrees that the confidential information includes Company’s trade secrets, sales
												and profit figures, possibly a buyer and client list, the relationships with contractors, or suppliers, and
												opportunities for new or developing business; in addition to the concept itself, and the licensing agreements
												currently in place. The confidential information may be contained in written materials such as computer hardware
												and software, disks, documents, files, drawings and organizational specifications. ARTIST(S) will not use or disclose
												to any other person or entity any confidential information or materials (either written or unwritten) for any reason
												unless contracted to do so by Company.
												Information in the public domain, information generally known in the trade and information that the ARTIST(S)
												could potentially acquire completely independently of his/her services for Company is not considered to be
												confidential.

												<br><br><b>Reasonableness</b><br>
												The ARTIST(S) acknowledges that the restrictions in this agreement are reasonable and necessary to protect
												Company and its confidential information.

												<br><br><b>Governing Law</b><br>
												This agreement will be governed by and construed in accordance with the laws of the state of Georgia. The
												ARTIST(S) understands that any violation of the aforementioned clauses of this agreement shall deem the
												Company to pursue legal recourse due to the ARTIST(S)’s breach of contract. In the event of a breach of this
												agreement, the aggrieved party is entitled to an injunction forthwith. Damages according to the laws of the state
												of Georgia, and legal fees, will be added to any recovery and/or relief granted by the court.

												<br><br><b>Entire Agreement</b><br>

												This agreement, constitutes the entire agreement and understanding of the parties with respect to the subjects
												matter hereof and is intended as the parties’ final expression and complete and exclusive statement of the terms
												thereof, superseding all prior or contemporaneous agreements.
											</div>
											<div class="modal-footer">
												<a type="button" class="btn btn-link" data-dismiss="modal">Close</a>
											</div>
										</div>
									</div>
								</div>


								<button>Register</button>

							</form>
						</div>
				</div>
			</div>


	</main>

	<script src="https://js.stripe.com/v3/"></script>
	<script src="charge.js"></script>

</body>

</html>
