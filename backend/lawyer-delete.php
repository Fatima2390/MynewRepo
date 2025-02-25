<?php
$s_id = $_GET['id'];


        
        
        
    $conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
    $check = "Delete from lawyer where LawyerID = '{$s_id}' ";
    

    $result1 = mysqli_query($conn , $check) or die("Querry Failed");
    
    if($result1)
    {
        echo "<script>alert('Deleted....!!')</script>";
        
    }
    else {
       
        echo "<script>alert('Delete Failed')</script>";
    }

    
    header ("location: http://localhost/project/lawyer-view.php");


?>