<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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
		<?php @include 'profile_header.php' ?>

		<main role="main">
	   <div class="container" style="padding: 70px;">
		    <h1 align= "center">Your Profile</h1>
				<form action="" method="post" id="" name="signup">
								<label>About Yourself:</label>
								<div class="row">
										<div class="col-sm-4"><input value="<?php echo $fname;?>" autocomplete="off" disabled></div>
										<div class="col-sm-4"><input value="<?php echo $lname;?>" autocomplete="off" disabled></div>
									  <div class="col-sm-4"><input placeholder="Stage Name (Optional)" name="stage_name" autocomplete="off"></div>
								</div><br>

								<label>Address:</label>
								<div class="row">
										<div class="col-sm-10"><input placeholder="Street" name="street" autocomplete="off" required></div>
										<div class="col-sm-2"><input placeholder="Apt/PO." name="apt" autocomplete="off"></div>
								</div><br>
								<div class="row">
										<div class="col-sm-4"><input name="city" placeholder="City" required></div>
									  <div class="col-lg-4"><select class="form-control" name="state">
											<option value="AL">Alabama</option>
											<option value="AK">Alaska</option>
											<option value="AZ">Arizona</option>
											<option value="AR">Arkansas</option>
											<option value="CA">California</option>
											<option value="CO">Colorado</option>
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="DC">District Of Columbia</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="HI">Hawaii</option>
											<option value="ID">Idaho</option>
											<option value="IL">Illinois</option>
											<option value="IN">Indiana</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NV">Nevada</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NM">New Mexico</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="ND">North Dakota</option>
											<option value="OH">Ohio</option>
											<option value="OK">Oklahoma</option>
											<option value="OR">Oregon</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="SD">South Dakota</option>
											<option value="TN">Tennessee</option>
											<option value="TX">Texas</option>
											<option value="UT">Utah</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WA">Washington</option>
											<option value="WV">West Virginia</option>
											<option value="WI">Wisconsin</option>
											<option value="WY">Wyoming</option>
											</select></div>
									  <div class="col-sm-4"><input placeholder="Zip Code" name="zip_code" autocomplete="off" required></div>
								</div><br>

								<label>Contact Info:</label>
								<div class="row">
										<div class="col-sm-3"><input name="home_phone" id="home_phone" placeholder="Home-Phone" maxlength="12" autocomplete="off"></div>
										<div class="col-sm-3"><input name="cell_phone" id="cell_phone" placeholder="Cell-Phone" maxlength="12" autocomplete="off" required></div>
										<div class="col-sm-6"><input value="<?php echo $email;?>" autocomplete="off" disabled></div>
								</div><br>

								<label>Links to Social Media: (This will help us to promote you!!!)</label>
								<div class="row">
											<div class="col-sm-12"><input name="website" placeholder="Website"></div><br><br><br>
										  <div class="col-sm-3"><input name="twitter" placeholder="Twitter"></div>
										  <div class="col-sm-3"><input name="instagram" placeholder="Instagram"></div>
										  <div class="col-sm-3"><input name="facebook" placeholder="Facebook"></div>
											<div class="col-sm-3"><input name="snapchat" placeholder="Snapchat"></div>
								</div><br>

								<label>How did you hear about us?</label>
								<div class="row">
										<div class="col-sm-3">
											<select class="form-control" name="ChooseReferral" required>
														<option value="Facebook">Facebook</option>
														<option value="Instagram">Instagram</option>
														<option value="Google">Google</option>
														<option value="Other">Other</option>
											</select>
										</div>
								</div>


								<div class="row">
									<div class="col-sm-3">
										<label>Other (please specify)</label>
										<textarea class="form-control" id="OtherAnswer" name="other" rows="1"></textarea>
									</div>
								</div><br>


								<br><input class="btn btn-outline-success btn-block my-sm-4" type="submit" name="add" value="Add Profile">

			</form>

	  </div><br><br><br>
		</main>


	</body>

<script>
//ADD DASHES FOR STUDENT ID
$(function () {
		$('#home_phone, #cell_phone').keydown(function (e) {
			 var key = e.charCode || e.keyCode || 0;
			 $text = $(this);
			 if (key !== 8 && key !== 9) {
					 if ($text.val().length === 3) {
							 $text.val($text.val() + '-');
					 }
					 if ($text.val().length === 7) {
							 $text.val($text.val() + '-');
					 }
			 }

			 return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
	 })
});
</script>


</html>



<?php

$stage_name 		= mysqli_real_escape_string($conn, $_POST('stage_name'));
$street 				= mysqli_real_escape_string($conn, $_POST('street'));
$apt 						= mysqli_real_escape_string($conn, $_POST('apt'));
$city 					= mysqli_real_escape_string($conn, $_POST('city'));
$state					= mysqli_real_escape_string($conn, $_POST('state'));
$zip_code				= mysqli_real_escape_string($conn, $_POST('zip_code'));
$home_phone 		= mysqli_real_escape_string($conn, $_POST('home_phone'));
$cell_phone 		= mysqli_real_escape_string($conn, $_POST('cell_phone'));
$website				= mysqli_real_escape_string($conn, $_POST('website'));
$twitter    		= mysqli_real_escape_string($conn, $_POST('twitter'));
$instagram  		= mysqli_real_escape_string($conn, $_POST('instagram'));
$facebook   		= mysqli_real_escape_string($conn, $_POST('facebook'));
$snapchat  		  = mysqli_real_escape_string($conn, $_POST('snapchat'));
$ChooseReferral = mysqli_real_escape_string($conn, $_POST('ChooseReferral'));
$other 					= mysqli_real_escape_string($conn, $_POST('other'));


if(isset($_SESSION['add'])){
			$sql = "SELECT id FROM artists WHERE id = '$id'";
			$result = mysqli_query($conn,$sql);

			if($result->num_rows >= 1) {
					#Exist and just going to update
					$query = "UPDATE artists
										SET
												stage_name 			= '$stage_name',
										    street 					= '$street',
										    apt 						= '$apt',
										    city 						= '$city',
										    state 					= '$state',
										    zip_code 				= '$zip_code',
										    home_phone 			= '$home_phone',
										    cell_phone 			= '$cell_phone',
										    website 				= '$website',
										    twitter 				= '$twitter',
										    instagram 			= '$instagram',
										    facebook 				= '$facebook',
										    snapchat 				= '$snapchat',
										    ChooseReferral 	= '$ChooseReferral',
										    other 					= '$other'
										WHERE
										    id = '$id'";

					$result = mysqli_query($conn,$query);

					$msg = '<div class="form-group"><div class="alert alert-success">Updated!</div></div>';
					echo $msg;

			}else {

					 $query  = "INSERT INTO artists (id, stage_name, street, apt, city, state, zip_code, home_phone, cell_phone, website, twitter, instagram, facebook, snapchat, ChooseReferral, other)
										 VALUES ('$id', '$stage_name', '$street', '$apt', '$city', '$state', '$zip_code', '$home_phone', '$cell_phone', '$website', '$twitter', '$instagram', '$facebook', '$snapchat', '$ChooseReferral', '$other')";

					 $result = mysqli_query($conn,$query);

					 $msg = '<div class="form-group"><div class="alert alert-success">Added!</div></div>';
 	 			 	 echo $msg;

			}
}

 ?>
