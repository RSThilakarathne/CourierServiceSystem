

  <?php 

    $db = mysqli_connect('localhost', 'root', '', 'cms');

    if(isset($_POST['update']))
    {
        $reference_number = $_GET['ID'];
        $sender_name = $_POST['sender_name'];
        $recipient_name = $_POST['recipient_name'];
        $status = $_POST['status'];

        $query = " UPDATE parcels SET sender_name = '".$sender_name."', recipient_name='".$recipient_name."',status='".$status."' where reference_number='".$reference_number."'";
        $result = mysqli_query($db,$query);

        if($result)
        {
            header("location:package_list.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:package_list.php");
    }


?>