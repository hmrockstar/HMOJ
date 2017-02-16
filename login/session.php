<?php
   include('dbconnect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($mysqli,"select handle from users where handle = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['handle'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
