
<!DOCTYPE HTML>
<html>
<head>
  <title>Sign In</title>
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
              <p><span>Sign In</span> </p>
            </div>
            <div class="signin">
              
              <form action="" method="post">
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="text" class="user" name="email" placeholder="Enter your email" required=""/>
                  </div>

                  <div class="clearfix"> </div>
                </div>
                <div class="log-input">
                  <div class="log-input-left">
                    <input type="password" class="lock" name="password" placeholder="Enter your password" required=""/>
                  </div>

                  <div class="clearfix"> </div>
                </div>
          
                <div class="log-input">
                 <div class="log-input-left">
                  <select class="form-control" name="type" required="">
                  <option value="admin">Admin</option>
                    <option value="user">User</option>
                    <option value="delivery">Delivery Person</option>
                  </select>
                  </div>

                  </div>
                  <div class="clearfix"> </div>
                
                <input type="submit" value="Login" name="submit">
                              <div class="signin-rit">

                <p><a href="change password.php">Forgot Password?</a> </p>
                <div class="clearfix"> </div>
              </div>
              </form>	
              <!--  -->
            </div>
            <div class="new_people">

              <a href="register.php">Register Now!</a>
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


$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cms');


if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $type = mysqli_real_escape_string($db, $_POST['type']);

  if($type==='admin')
     {
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE email='$email' And password='$password'");
      

    }

    if($type==='user')
    {
       $res=mysqli_query($db,"SELECT * FROM `user` WHERE email='$email' And password='$password'");

    }
       if($type==='delivery')
    {
       $res=mysqli_query($db,"SELECT * FROM `delivery` WHERE email='$email' And password='$password'");

    }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password' AND type='$type'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: Dashboard/index.php');
    }else {
      array_push($errors, "Wrong email/password combination");
    }
  }
}

?>

