<?php
    
    $db = mysqli_connect('localhost', 'root', '', 'cms');
    
    if (isset($_GET['Del'])) 
    {
        $branch_code=$_GET['Del'];

        $query = "DELETE FROM branches WHERE branch_code='$branch_code'";
        $result = mysqli_query($db, $query);

        if($result){
            
            header('Location: branch_list.php');
        }
        else{
           echo "NOT DELETED";
        }
    }
    else {
        header('Location: branch_list.php');
    }
?>





