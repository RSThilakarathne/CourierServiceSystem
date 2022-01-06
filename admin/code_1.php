<?php
    
    $db = mysqli_connect('localhost', 'root', '', 'cms');
    
    if (isset($_GET['Del'])) 
    {
        $id=$_GET['Del'];

        $query = "DELETE FROM delivery WHERE id='$id'";
        $result = mysqli_query($db, $query);

        if($result){
            
            header('Location: staff_list.php');
        }
        else{
           echo "NOT DELETED";
        }
    }
    else {
        header('Location: staff_list.php');
    }
?>




