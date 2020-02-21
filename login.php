<html>
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
    <?php @include 'login_header.php' ?>

     <main role="main">

   			<div class="container" style="padding-top: 100px;padding-bottom: 100px;">
             <div class="row">
                 <div style="margin: auto; width: 50%;">
                   <h3>Login</h3>
                   <form name="signin-form" id="signin-form" method="POST">

                     <div class="form-group">
                       <label for="email">Email:</label>
                       <input type="email" name="email" class="form-control" id="email" required autocomplete="off"/>
                     </div>

                     <div class="form-group">
                       <label for="password">Password:</label>
                       <input type="password" name="password" class="form-control" id="password" required autocomplete="off"/>
                     </div>

                     <button name="login" type="submit" class="btn btn-success btn-block mt-4">Log In</button>

                   </form>

                 </div>
             </div>
        </div>
      </main>

   </body>

</html>


<?php
   include("config.php");
   session_start();

   if (isset($_POST["login"])){
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      $email_query  = "SELECT * FROM customers WHERE email = '$email'";
      $result = mysqli_query($conn,$email_query);

      if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password']))
        {
          $_SESSION['email'] = $email;
          header("Location: Dashboard.php");
        }
        else
        {
          $msg = '<div class="form-group"><div class="alert alert-danger">Password is invalid.</div></div>';
          echo $msg;
        }


      }else {
         $msg = '<div class="form-group"><div class="alert alert-danger">Your Login Name or Password is invalid.</div></div>';
         echo $msg;
      }
   }
?>
