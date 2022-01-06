

  <?php 

    $db = mysqli_connect('localhost', 'root', '', 'cms');

    if(isset($_POST['update']))
    {
        $branch_code = $_GET['ID'];
        $no = $_POST['no'];
        $street = $_POST['street'];
        $city = $_POST['city'];
		$contact = $_POST['contact'];

        $query = " UPDATE branches SET no = '".$no."', street='".$street."',city='".$city."', contact='".$contact."' where branch_code='".$branch_code."'";
        $result = mysqli_query($db,$query);

        if($result)
        {
            header("location:branch_list.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:branch_list.php");
    }


?>




