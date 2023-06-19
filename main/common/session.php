<?php
   include('config.php');
   session_start();
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select Employee_ID from employee where Employee_ID = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Employee_ID'];
   
   
?>
