<?php 

    $db = mysqli_connect('localhost', 'root', '', 'cms');

    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $branch = $_POST['branch'];
        $email = $_POST['email'];
		$contact = $_POST['contact'];

        $query = " UPDATE delivery SET name = '".$name."', address='".$address."',branch='".$branch."',email='".$email."', contact='".$contact."' where id='".$id."'";
        $result = mysqli_query($db,$query);

        if($result)
        {
            header("location:staff_list.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:staff_list.php");
    }


?>
