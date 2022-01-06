<?php
    
    $db = mysqli_connect('localhost', 'root', '', 'cms');
    
    if (isset($_GET['Del'])) 
    {
        $reference_number=$_GET['Del'];

        $query = "DELETE FROM parcels WHERE reference_number='$reference_number'";
        $result = mysqli_query($db, $query);

        if($result){
            
            header('Location: package_list.php');
        }
        else{
           echo "NOT DELETED";
        }
    }
    else {
        header('Location: package_list.php');
    }
?>