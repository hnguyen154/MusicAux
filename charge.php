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


    	<main role="main">
    		<div class="container" style="padding-top: 50px;padding-bottom: 100px;">

<?php

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
require_once('stripe-php/init.php');
require_once('pdo_db.php');
require_once('db.php');
require_once('customers.php');
require_once('transactions.php');
require_once('config.php');

\Stripe\Stripe::setApiKey('sk_test_KzYoJZFZsjc8UXhfH7BQKgkE007OItlv4Y');

// Token is created using Stripe Checkout or Elements!
// Get the payment token ID submitted by the form:
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$password1 = $POST['password1'];
$password2 = $POST['password2'];
$token = $POST['stripeToken'];
$agreement = $POST['agreement'];


if($password1 == $password2 && isset($agreement))
{
  //Check if customer already signed up with the same email
  $query = mysqli_query($conn, "SELECT email FROM customers WHERE email='$email'");

  if(mysqli_num_rows($query) > 0){
    $msg = '<div class="form-group"><div class="alert alert-danger">There is already an account registered to this email address.</div></div>

            <br><br><br>

            <p><a href="register.php" class="btn btn-light mt-2">Go Back</a></p>

            ';
    echo $msg;

  } else{
        $hashed = password_hash($password1, PASSWORD_DEFAULT);
        $agreement = '1';

        //Create Customer
        $customer = \Stripe\Customer::create(array(
            "email"   => $email,
            "source"  => $token
        ));

        #Charge Customer
        $charge = \Stripe\Charge::create(array(
          "amount" => 5000,
          "currency" => "usd",
          "description" => "MusicAux One-Time Fee",
          "customer" => $customer -> id
        ));


        // Customer Data
        $customerData = [
          'id' => $charge->customer,
          'first_name' => $first_name,
          'last_name' => $last_name,
          'email' => $email,
          'password' => $hashed,
          'agreement' => $agreement
        ];

        // Instantiate Customer
        $customer = new Customer();

        // Add Customer To DB
        $customer->addCustomer($customerData);


        // Transaction Data
        $transactionData = [
          'id' => $charge->id,
          'customer_id' => $charge->customer,
          'product' => $charge->description,
          'amount' => $charge->amount,
          'currency' => $charge->currency,
          'status' => $charge->status,
        ];

        // Instantiate Transaction
        $transaction = new Transaction();

        // Add Transaction To DB
        $transaction->addTransaction($transactionData);


        // Redirect to success
        header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);


  }

}

else {
  $msg = '<div class="form-group"><div class="alert alert-danger">Password does not match. Please try again!</div></div>

          <br><br><br>

          <p><a href="register.php" class="btn btn-light mt-2">Go Back</a></p>

          ';
  echo $msg;

}



?>

        </div>
    </main>
</body>
</html>
