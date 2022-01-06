
<!DOCTYPE HTML>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <!-- Graph CSS -->
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <!-- jQuery -->
  <!-- lined-icons -->
  <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <!-- //lined-icons -->
  <!-- chart -->
  <script src="js/Chart.js"></script>
  <!-- //chart -->
  <!--animate-->
  <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--//end-animate-->
    <!----webfonts--->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!---//webfonts---> 
    <!-- Meters graphs -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!-- Placed js at the end of the document so the pages load faster -->

  </head> 

  <body class="sign-in-up">
    <section>
      <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
          <div class="sign-in-form">
            <div class="sign-in-form-top">
              <p><span>Change Password</span> </p>
            </div>
            <div class="signin">
              
              <form action="" method="post">

                <div class="log-input">
                  <div class="log-input-left">
                    <input type="text" name="email" placeholder="Enter your email address" required=""/>
                  </div>

                </div>
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="password" name="password" placeholder="Enter your password" required=""/>
                  </div>

                </div>

                <div class="log-input">
                  <div class="log-input-left">
                    <input type="password" name="password1" placeholder="Confirm your password" required=""/>
                  </div>

                </div>
                
                <input type="submit" value="Change" name="submit">
     
              </form>	
              <!--  -->
            </div>

          </div>
        </div>
      </div>

    </section>

    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>


<?php
session_start();

// initializing variables

$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'cms');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
 
  $user_check_query = "SELECT * FROM admin WHERE email='$email'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
  if (count($errors) == 0) {
    $password = md5($password);

    $query = "INSERT INTO admin (email, password) 
          VALUES('$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}
?>