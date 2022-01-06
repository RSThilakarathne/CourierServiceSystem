<?php
error_reporting(0);
$db = mysqli_connect('localhost', 'root', '', 'cms');


if (isset($_POST['submit'])) {

  
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $name1 = mysqli_real_escape_string($db, $_POST['name1']);
  $address1 = mysqli_real_escape_string($db, $_POST['address1']);
  $phone1 = mysqli_real_escape_string($db, $_POST['phone1']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $payment_type = mysqli_real_escape_string($db, $_POST['payment_type']);
  $weight = mysqli_real_escape_string($db, $_POST['weight']);
  $delivery_type = mysqli_real_escape_string($db, $_POST['delivery_type']);
 
  $user_check_query = "SELECT * FROM orders";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  if (count($errors) == 0) {
   
    $query = "INSERT INTO orders(name, address, phone, email, name1, address1, phone1, date, payment_type, weight, delivery_type) VALUES('$name', '$address', '$phone', '$email', '$name1', '$address1', '$phone1', '$date', '$payment_type', '$weight', '$delivery_type')";
    if(mysqli_query($db, $query)){
    echo "Submitted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
    
  }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Place the Order</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
        <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>


</head>

<body>

<?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Place <small>the Order</small></h1><br>

        
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <h5>Sender Details</h5><br>
 <form name="order" method="post">
<div class="row">
<div class="col-lg-6 mb-4">
<div class="font-italic">Name</div>
<div><input type="text" name="name" class="form-control" required></div>
</div>
<div class="col-lg-6 mb-4">
<div class="font-italic">Address</div>
<div><input type="text" name="address" class="form-control" required></div>
</div>

</div>

<div class="row">
    <div class="col-lg-6 mb-4">
<div class="font-italic">Phone No</div>
<div><input type="text" name="phone" class="form-control" required></div>
</div>
    <div class="col-lg-6 mb-4">
<div class="font-italic">Email Address</div>
<div><input type="email" name="emailid" class="form-control" required></div>
</div>


</div>


</form>   
<hr>

<h5>Receiver Details</h5><br>
 <form name="order" method="post">
<div class="row">
<div class="col-lg-6 mb-4">
<div class="font-italic">Name</div>
<div><input type="text" name="name1" class="form-control" required></div>
</div>
<div class="col-lg-6 mb-4">
<div class="font-italic">Address</div>
<div><input type="text" name="address1" class="form-control" required></div>
</div>

</div>

<div class="row">
    <div class="col-lg-6 mb-4">
<div class="font-italic">Phone No</div>
<div><input type="text" name="phone1" class="form-control" required></div>
</div>

</div>


</form>   
       
<hr>

<h5>Package Details</h5><br>
 <form name="order" method="post">
<div class="row">
<div class="col-lg-6 mb-4">
<div class="font-italic">Pickup Date</div>
<div><input type="date" name="date" class="form-control" required></div>
</div>
<div class="col-lg-6 mb-4">
<div class="font-italic">Payment Type</div>
<select name="payment_type" id="payment_type" style="width: 100%;height: 40px;border-color: rgb(216, 215, 215);border-radius: 4px;">
                
        <option value="Cash" class="font-italic">Cash</option>
        <option value="Online" class="font-italic">Online</option>
                
</select>
</div>

</div>

<div class="row">
    <div class="col-lg-6 mb-4">
<div class="font-italic">Package Weight</div>
<div><input type="text" name="weight" class="form-control" required></div>
</div>
 <div class="col-lg-6 mb-4">
<div class="font-italic">Delivery Type</div>
<select name="delivery_type" id="delivery_type" style="width: 100%;height: 40px;border-color: rgb(216, 215, 215);border-radius: 4px;">
                
        <option value="Normal" class="font-italic">Normal</option>
        <option value="Express" class="font-italic">Express</option>
                
</select>
</div>


</div>


<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>



</div>


</form>   


</div>

<?php include('includes/footer.php') ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
