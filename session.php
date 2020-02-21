<?php
   include('config.php');
   session_start();

   $email = $_SESSION['email'];

   $ses_sql = mysqli_query($conn,"SELECT * FROM customers where email = '$email' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $id = $row['id'];
   $fname = $row['first_name'];
   $lname = $row['last_name'];

   if(!isset($_SESSION['email'])){
      header("location:login.php");
      die();
   }
?>
