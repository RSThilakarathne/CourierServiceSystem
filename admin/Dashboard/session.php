<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['submit'];
   
   $ses_sql = mysqli_query($db,"select id from branches where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
   
   if(!isset($_SESSION['submit'])){
      header("location:branch_list.php");
      die();
   }
?>
